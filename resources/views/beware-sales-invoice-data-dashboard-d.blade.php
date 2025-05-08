@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="breadcrumb-header">
            <div class="left-content">
                <div>
                    <h2 class="main-content-title tx-24 mb-2">Sales Invoice Data Month Wise</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mg-b-0">
                            <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sales Invoice Data Month Wise</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <div></div>
                            <div class="btn-set">
                                <a href="javascript:void(0)" class="btn btn-success-gradient" id="export-to-excel">
                                    <i class="far fa-file-excel me-1"></i> Export to Excel
                                </a>
                                <a href="javascript:history.back()" class="btn btn-light">
                                    <i class="ti ti-arrow-left me-1"></i> Go Back
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped data-table" id="sales-invoice-table">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>PO No</th>
                                        <th>Company Name</th>
                                        <th>Sale Team Name</th>
                                        <th>Payment Type</th>
                                        <th>Voucher No</th>
                                        <th>Invoice No</th>
                                        <th>Invoice Date</th>
                                        <th>Basic Amount</th>
                                        <th>GST</th>
                                        <th>Total Amount</th>
                                        <th>Document 1</th>
                                        <th>Document 2</th>
                                        <th>Document 3</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var table = $('#sales-invoice-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('salesinvoice.index') }}", // Corrected route name
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'po_no', name: 'po_no' },
                    { data: 'company_name', name: 'company_name' },
                    { data: 'sale_team_name', name: 'sale_team_name' },
                    { data: 'payment_type', name: 'payment_type' },
                    { data: 'account_approval_invoice_no', name: 'account_approval_invoice_no' },
                    { data: 'invoice_no', name: 'invoice_no' },
                    { data: 'invoice_date', name: 'invoice_date' },
                    { data: 'basic_amount', name: 'basic_amount' },
                    { data: 'gst', name: 'gst' },
                    { data: 'total', name: 'total' },
                    { data: 'document1', name: 'document1' },
                    { data: 'document2', name: 'document2' },
                    { data: 'document3', name: 'document3' }
                ]
            });

        });
    </script>
@endpush
