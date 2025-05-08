<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BewareSalesInvoiceController extends Controller
{
    public function getBewareSalesInvoiceData(Request $request)
    {
        // Set pagination parameters
        $perPage = $request->perPage ?? 10;
        $page = $request->page ?? 1;

        // Fetch data from 'bewarepodatafile' and 'bewarepodata' tables with the 'Sale' type
        $data = DB::table('bewarepodatafile')
            ->join('bewarepodata', 'bewarepodatafile.bewarepodata_id', '=', 'bewarepodata.bewarepodata_id')
            ->where('bewarepodatafile.sale_type', 'Sale')
            ->orderBy('bewarepodatafile.account_approval_invoice_date', 'ASC')
            ->select('bewarepodatafile.*', 'bewarepodata.*')
            ->paginate($perPage);

        // Calculate pagination links
        $pagination = view('partials.pagination', ['data' => $data])->render();

        // Return the data and pagination as JSON for AJAX
        return response()->json([
            'data' => view('partials.beware_sales_invoice_data', ['data' => $data])->render(),
            'pagination' => $pagination,
        ]);
    }
}
