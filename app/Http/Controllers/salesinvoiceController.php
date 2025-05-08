<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class SalesInvoiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = DB::table('bewarepodatafile')
                    ->join('bewarepodata', 'bewarepodatafile.bewarepodata_id', '=', 'bewarepodata.bewarepodata_id')
                    ->where('bewarepodatafile.sale_type', 'Sale')
                    ->select(
                        'bewarepodatafile.id',
                        'bewarepodatafile.po_no',
                        'bewarepodatafile.company_name',
                        'bewarepodatafile.sale_team_name',
                        'bewarepodatafile.voucher_no',
                        'bewarepodatafile.account_approval_invoice_no',
                        'bewarepodatafile.account_approval_invoice_date',
                        'bewarepodatafile.account_approval_invoice_basic_amount',
                        'bewarepodatafile.account_approval_invoice_gst',
                        'bewarepodatafile.account_approval_invoice_total'
                    );

                return DataTables::of($data)
                    ->filter(function ($query) use ($request) {
                        if ($request->has('search') && $request->get('search')['value']) {
                            $search = $request->get('search')['value'];
                            $query->where(function ($q) use ($search) {
                                $q->where('bewarepodatafile.po_no', 'like', "%{$search}%")
                                  ->orWhere('bewarepodatafile.company_name', 'like', "%{$search}%")
                                  ->orWhere('bewarepodatafile.sale_team_name', 'like', "%{$search}%")
                                  ->orWhere('bewarepodatafile.voucher_no', 'like', "%{$search}%");
                            });
                        }
                    })
                    ->addColumn('invoice_no', fn($row) => $row->account_approval_invoice_no)
                    ->addColumn('invoice_date', fn($row) => $row->account_approval_invoice_date)
                    ->addColumn('basic_amount', fn($row) => $row->account_approval_invoice_basic_amount)
                    ->addColumn('gst', fn($row) => $row->account_approval_invoice_gst)
                    ->addColumn('total', fn($row) => $row->account_approval_invoice_total)
                    ->rawColumns(['invoice_no', 'invoice_date', 'basic_amount', 'gst', 'total'])
                    ->make(true);
            } catch (\Exception $e) {
                Log::error('Error fetching sales invoice data: ' . $e->getMessage());
                return response()->json(['error' => 'Failed to fetch data. Please check the logs.'], 500);
            }
        }

        return view('beware-sales-invoice-data-dashboard-d');
    }

    public function export()
    {
        try {
            $data = DB::table('bewarepodatafile')
                ->join('bewarepodata', 'bewarepodatafile.bewarepodata_id', '=', 'bewarepodata.bewarepodata_id')
                ->where('bewarepodatafile.sale_type', 'Sale')
                ->select(
                    'bewarepodatafile.po_no',
                    'bewarepodatafile.company_name',
                    'bewarepodatafile.sale_team_name',
                    'bewarepodatafile.voucher_no',
                    'bewarepodatafile.account_approval_invoice_no',
                    'bewarepodatafile.account_approval_invoice_date',
                    'bewarepodatafile.account_approval_invoice_basic_amount',
                    'bewarepodatafile.account_approval_invoice_gst',
                    'bewarepodatafile.account_approval_invoice_total'
                )
                ->get();

            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="sales_invoice_data.csv"',
            ];

            $callback = function () use ($data) {
                $file = fopen('php://output', 'w');
                fputcsv($file, [
                    'PO No', 'Company Name', 'Sale Team Name', 'Voucher No',
                    'Invoice No', 'Invoice Date', 'Basic Amount', 'GST', 'Total'
                ]);

                foreach ($data as $row) {
                    fputcsv($file, [
                        $row->po_no,
                        $row->company_name,
                        $row->sale_team_name,
                        $row->voucher_no,
                        $row->account_approval_invoice_no,
                        $row->account_approval_invoice_date,
                        $row->account_approval_invoice_basic_amount,
                        $row->account_approval_invoice_gst,
                        $row->account_approval_invoice_total
                    ]);
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);
        } catch (\Exception $e) {
            Log::error('CSV export error: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to export CSV.'], 500);
        }
    }
}
