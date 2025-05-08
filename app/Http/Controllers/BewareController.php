<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BewareController extends Controller
{
    public function index()
    {
        // ----- Sale Calculations -----
        $sale_invoice_value = DB::table('bewarepodatafile')
            ->where('sale_type', 'Sale')
            ->where('account_approval_status', 1)
            ->where('payment_type', 'Invoice Value')
            ->sum('account_approval_invoice_total');

        $sale_debit_note = DB::table('bewarepodatafile')
            ->where('sale_type', 'Sale')
            ->where('account_approval_status', 1)
            ->where('payment_type', 'Debit Note')
            ->sum('account_approval_invoice_total');

        $sale_credit_note = DB::table('bewarepodatafile')
            ->where('sale_type', 'Sale')
            ->where('account_approval_status', 1)
            ->where('payment_type', 'Credit Note')
            ->sum('account_approval_invoice_total');

        $final_invoice_value_sale = round(($sale_invoice_value + $sale_debit_note) - $sale_credit_note, 2);

        $total_sale_amt_received = DB::table('bewarepodatapayment')
            ->where('sale_type', 'Sale')
            ->sum('adv_payment');
        $total_sale_amt_received = round($total_sale_amt_received, 2);

        $remaining_amount_sale = $final_invoice_value_sale - $total_sale_amt_received;

        // ----- Purchase Calculations -----
        $purchase_invoice_value = DB::table('bewarepodatafile')
            ->where('sale_type', 'Purchase')
            ->where('account_approval_status', 1)
            ->where('payment_type', 'Invoice Value')
            ->sum('account_approval_invoice_total');

        $purchase_debit_note = DB::table('bewarepodatafile')
            ->where('sale_type', 'Purchase')
            ->where('account_approval_status', 1)
            ->where('payment_type', 'Debit Note')
            ->sum('account_approval_invoice_total');

        $purchase_credit_note = DB::table('bewarepodatafile')
            ->where('sale_type', 'Purchase')
            ->where('account_approval_status', 1)
            ->where('payment_type', 'Credit Note')
            ->sum('account_approval_invoice_total');

        $final_invoice_value_purchase = round(($purchase_invoice_value + $purchase_credit_note) - $purchase_debit_note, 2);

        $purchase_amount_paid = DB::table('bewarepodatapayment')
            ->where('sale_type', 'Purchase')
            ->sum('adv_payment');
        $purchase_amount_paid = round($purchase_amount_paid, 2);
        $total_expenses = DB::table('bewareexpenses')
            ->where('approval_status', 1)
            ->sum('total');
        $total_expenses = round($total_expenses, 2);
        $total_qty1 = 0;

        // Get all procurement items
        $items = DB::table('procurementitemmasterdata')
            ->where('project_type', 'BEW')
            ->orderBy('procurementitemmasterdata_id', 'DESC')
            ->get();

        foreach ($items as $item) {
            $procurementitemmasterdata_id = $item->procurementitemmasterdata_id;

            // Count PO created
            $num_rows_po = DB::table('bewareitemmasterdata_serial_no_data')
                ->where('procurementitemmasterdata_id', $procurementitemmasterdata_id)
                ->where('po_no_created_status', 1)
                ->count();

            // Count BP created
            $num_rows_bp = DB::table('bewareitemmasterdata_serial_no_data')
                ->where('procurementitemmasterdata_id', $procurementitemmasterdata_id)
                ->where('bp_no_created_status', 1)
                ->count();

            // Count DP created
            $num_rows_dp = DB::table('bewareitemmasterdata_serial_no_data')
                ->where('procurementitemmasterdata_id', $procurementitemmasterdata_id)
                ->where('dp_no_created_status', 1)
                ->count();

            // Count OP created
            $num_rows_op = DB::table('bewareitemmasterdata_serial_no_data')
                ->where('procurementitemmasterdata_id', $procurementitemmasterdata_id)
                ->where('op_no_created_status', 1)
                ->count();

            // Pending quantity
            $pending_qty = $item->qty - $num_rows_po - $num_rows_bp - $num_rows_dp - $num_rows_op;

            // Cost unit price (cost price per item)
            $cost_unit_price = $item->cost_unit_price ?? 0;

            // Total cost for this item
            $total = $pending_qty * $cost_unit_price;

            // Add to total stock value
            $total_qty1 += $total;
        }

        // Final stock value
        $final_stock = round($total_qty1, 2);

        $total_distributors = DB::table('client_related_details')->count();

        $poData = DB::table('bewarepodata')
        ->where('sale_type', '!=', 'Purchase')
        ->count();

        $PurchaseData = DB::table('bewarepodata')
        ->where('sale_type', '=', 'Purchase')
        ->count();



        // ----- Fetch Data for Table -----
        $data = DB::table('bewarepodatafile')
            ->join('bewarepodata', 'bewarepodatafile.bewarepodata_id', '=', 'bewarepodata.bewarepodata_id')
            ->where('bewarepodatafile.sale_type', 'Sale')
            ->orderBy('bewarepodatafile.account_approval_invoice_date', 'ASC')
            ->select('bewarepodatafile.*', 'bewarepodata.*')
            ->get();

        // ----- Send all data to Blade -----
        return view('beware-dashboard', compact(
            'final_invoice_value_sale',
            'total_sale_amt_received',
            'remaining_amount_sale',
            'final_invoice_value_purchase',
            'purchase_amount_paid',
            'total_expenses',
            'final_stock',
            'total_distributors',
            'poData',
            'PurchaseData'
        ));
    }
}
