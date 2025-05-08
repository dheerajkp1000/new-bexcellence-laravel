@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, Welcome to BEWARE!</h2>
                <p class="mg-b-0">Sales monitoring dashboard template.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-primary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                                
                            </span>
                        </div>
                        <a href="beware-sales-invoice-data-dashboard-d" class="text-white text-decoration-none">
    <div class="float-left">
        <p class="card-text mb-2 text-white">Total Sales Generated</p>
    <h5>{{ number_format($final_invoice_value_sale, 2) }}</h5>
        
    </div>
</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-danger-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Received Sales Amount</p>
                            <h5>{{ number_format($total_sale_amt_received,2) }}</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-success-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span>
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Remaining Sales Amount</p>
                            <h5>{{ $remaining_amount = $final_invoice_value_sale - $total_sale_amt_received }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-warning-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-layers tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Purchase Generated</p>
                            <h5>{{ number_format($final_invoice_value_purchase, 2) }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-secondary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Paid Purchase Amount</p>
                            <h5>{{ number_format($purchase_amount_paid, 2) }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-info-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-file-text tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Remaining Purchase</p>
                            <h5>{{ $purchase_remaining_amount = $final_invoice_value_purchase - $purchase_amount_paid }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-primary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fas fa-rupee-sign tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Expenses</p>
                            <h5>{{ number_format($total_expenses, 2) }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-danger-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-user tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Stock Value</p>
                            <h5>{{ number_format($final_stock, 2) }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-success-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-box tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Items</p>
                            <h5 class="text-white">175</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-warning-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-users tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Distributors</p>
                            <h5>{{ ($total_distributors) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-secondary-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-users tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Sale offer</p>
                          <h5>  {{ $poData }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card bg-info-gradient">
                <div class="card-body list-icons">
                    <div class="clearfix">
                        <div class="float-right mt-2">
                            <span class="text-white">
                                <i class="fe fe-user-check tx-30"></i>
                            </span> 
                        </div>
                        <div class="float-left">
                            <p class="card-text mb-2 text-white">Total Purchase Orders</p>
                            <h5>  {{ $PurchaseData }}</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm mt-4">
        <div class="col-xl-12">
            <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Sales Analytics</h2>
            <hr>
        </div>
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="card card-img-holder active" onclick="showActive(this)">
                <a href="javascript:void0" class="card-body list-icons option-item">
                    <div class="text-dark">
                        <small class="mb-2 d-block tx-12">Sales Data for the Financial Year</small>
                        <h5 class="m-0">2022 - 2023</h5>
                    </div>
                    <span> 
                        <i class="bx bx-line-chart bx-sm"></i> 
                    </span> 
                </a>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="card card-img-holder" onclick="showActive(this)">
                <a href="javascript:void0" class="card-body list-icons option-item">
                    <div class="text-dark">
                        <small class="mb-2 d-block tx-12">Sales Data for the Financial Year</small>
                        <h5 class="m-0">2023 - 2024</h5>
                    </div>
                    <span> 
                        <i class="bx bx-line-chart bx-sm"></i> 
                    </span> 
                </a>
            </div>
        </div>
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="card card-img-holder" onclick="showActive(this)">
                <a href="javascript:void0" class="card-body list-icons option-item">
                    <div class="text-dark">
                        <small class="mb-2 d-block tx-12">Sales Data for the Financial Year</small>
                        <h5 class="m-0">2024 - 2025</h5>
                    </div>
                    <span> 
                        <i class="bx bx-line-chart bx-sm"></i> 
                    </span> 
                </a>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row justify-content-between mt-4">
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-4 col-12">
                            <div class="d-flex align-items-center">
                                <span>Show</span>
                                <select class="form-control mx-2 wd-100">
                                    <option value="10"> 10 </option>
                                    <option value="20"> 20 </option>
                                    <option value="50"> 50 </option>
                                    <option value="100"> 100 </option>
                                    <option value="All"> All </option>
                                </select>
                                <span>Entries</span>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6 col-sm-8 col-12">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <select multiple="multiple" class="testselect2 SumoUnder" placeholder="Hide Columns">
                                        <option> S.No. </option>
                                        <option> Months </option>
                                        <option> Sale Amount Without GST </option>
                                        <option> Sale Amount With GST </option>
                                        <option> Credit Note </option>
                                        <option> Sale Amount Received </option>
                                        <option> Sale Amount Remaining </option>
                                        <option> Purchase Amount </option>
                                        <option> Debit Note </option>
                                        <option> Purchase Amount Paid </option>
                                        <option> Purchase Amount Remaining </option>
                                        <option> Total Expenses </option>
                                        <option> Total Stock Value </option>
                                    </select>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <input type="search" class="form-control" placeholder="Search here">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th width="45"> S.No. </th>
                                    <th class="text-center">Months</th>
                                    <th class="text-center">Sale Amount Without GST</th>
                                    <th class="text-center">Sale Amount With GST</th>
                                    <th class="text-center">Credit Note</th>
                                    <th class="text-center">Sale Amount Received</th>
                                    <th class="text-center">Sale Amount Remaining</th>
                                    <th class="text-center">Purchase Amount</th>
                                    <th class="text-center">Debit Note</th>
                                    <th class="text-center">Purchase Amount Paid</th>
                                    <th class="text-center">Purchase Amount Remaining</th>
                                    <th class="text-center">Total Expenses</th>
                                    <th class="text-center">Total Stock Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1.</td>
                                    <td align="center">April - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">2.</td>
                                    <td align="center">May - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">3.</td>
                                    <td align="center">June - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">4.</td>
                                    <td align="center">July - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">5.</td>
                                    <td align="center">August - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">6.</td>
                                    <td align="center">September - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">7.</td>
                                    <td align="center">October - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">8.</td>
                                    <td align="center">November - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">9.</td>
                                    <td align="center">December - 2022</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">0</td>
                                </tr>
                                <tr>
                                    <td align="center">10.</td>
                                    <td align="center">January - 2023</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">38090</td>
                                </tr>
                                <tr>
                                    <td align="center">11.</td>
                                    <td align="center">February - 2023</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">150000</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">-150000</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">408255</td>
                                </tr>
                                <tr>
                                    <td align="center">12.</td>
                                    <td align="center">March - 2023</td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-wog.php">182250</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new.php">215055</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-data-dashboard-month-wise-new-credit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-received-data-dashboard-filter-month-wise-new.php">66493</a></td>
                                    <td align="center"><a class="text-primary" href="beware-sales-invoice-remaining-data-dashboard-filter-month-wise-new.php">148562</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new.php">176440</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-data-dashboard-filter-month-wise-new-debit-note.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-paid-data-dashboard-filter-month-wise-new.php">176440</a></td>
                                    <td align="center"><a class="text-primary" href="beware-purchase-invoice-remaining-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center"><a class="text-primary" href="beware-expenses-data-dashboard-filter-month-wise-new.php">0</a></td>
                                    <td align="center">62950</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" class="text-center">Total</th>
                                    <th class="text-center">182250</th>
                                    <th class="text-center">215055</th>
                                    <th class="text-center">0</th>
                                    <th class="text-center">216493</th>
                                    <th class="text-center">-1438</th>
                                    <th class="text-center">176440</th>
                                    <th class="text-center">0</th>
                                    <th class="text-center">176440</th>
                                    <th class="text-center">0</th>
                                    <th class="text-center">0</th>
                                    <th class="text-center">509295</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info my-3" id="example_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function showActive(e){
        $('.card-img-holder').removeClass('active');
        $(e).addClass('active');
    }
</script>