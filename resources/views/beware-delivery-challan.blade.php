@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="breadcrumb-header">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mb-2">Delivery Challan</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mg-b-0">
                        <li class="breadcrumb-item"> <a href="beware-dashboard.php">Dashboard</a> </li>
                        <li class="breadcrumb-item active">Delivery Challan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row justify-content-between">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <h4 class="card-title">List Of Items</h4>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                            <a href="beware-delivery-challan-add" class="btn btn-danger-gradient"><i class="bx bx-plus-circle mr-1"></i> Add Delivery Challan</a>
                        </div>
                    </div>
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
                                        <option> Delivery Challan No. </option>
                                        <option> business Purpose </option>
                                        <option> Date </option>
                                        <option> Created Person </option>
                                        <option> Company Name </option>
                                        <option> POC Name </option>
                                        <option> Issue Date </option>
                                        <option> Handover Date </option>
                                        <option> Total Amount </option>
                                        <option> Status </option>
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
                                    <th class="text-center">Delivery Challan No.</th>
                                    <th class="text-center">business Purpose</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Created Person</th>
                                    <th class="text-center">Company Name</th>
                                    <th class="text-center">POC Name</th>
                                    <th class="text-center">Issue Date</th>
                                    <th class="text-center">Handover Date</th>
                                    <th class="text-center">Total Amount</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center" scope="row">1.</td>
                                    <td align="center">BEW-TID-00466</td>
                                    <td align="center">Business Purpose</td>
                                    <td align="center">31-Dec-2024</td>
                                    <td align="center">Annu</td>
                                    <td align="center">NA</td>
                                    <td align="center">Ashok Kumar</td>
                                    <td align="center">31-Dec-2024</td>
                                    <td align="center">31-Jan-2025</td>
                                    <td align="center"><i class="mdi mdi-currency-inr"></i>1,888.00</td>
                                    <td align="center">
                                        <span class="badge bg-danger-transparent text-danger">Waiting for Approval</span>
                                    </td>
                                    <td align="center">
                                        <div class="dropcenter">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0" data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                <i class="bx bx-dots-vertical bx-xs"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="beware-delivery-challan-images.php">Add Images</a>
                                                <a class="dropdown-item" href="beware-delivery-challan-serial-no-add.php">Add Serial No.</a>
                                                <a class="dropdown-item" href="javascript:void0" data-toggle="modal" data-target="#dispatch-details" data-effect="effect-rotate-left">Add Dispatch</a>
                                                <a class="dropdown-item" href="beware-po-sale-payment-data.php" data-toggle="modal" data-target="#delivery-details" data-effect="effect-rotate-left">Add Delivery</a>
                                                <a class="dropdown-item" href="beware-delivery-challan-pdf">View Challan</a>
                                                <a class="dropdown-item" href="javascript:void0">Edit Challan</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" scope="row">2.</td>
                                    <td align="center">BEW-TID-00466</td>
                                    <td align="center">Business Purpose</td>
                                    <td align="center">31-Dec-2024</td>
                                    <td align="center">Annu</td>
                                    <td align="center">NA</td>
                                    <td align="center">Ashok Kumar</td>
                                    <td align="center">31-Dec-2024</td>
                                    <td align="center">31-Jan-2025</td>
                                    <td align="center"><i class="mdi mdi-currency-inr"></i>1,888.00</td>
                                    <td align="center">
                                        <a class="d-flex align-items-center justify-content-center" href="javascript:void0" data-toggle="modal" data-target="#approval-request" data-effect="effect-rotate-left">
                                            <span class="badge bg-primary-transparent text-primary">Request for Approval</span>
                                            <span class="d-flex align-items-center text-primary ml-1"><i class="bx bx-link-external"></i></span>
                                        </a>
                                    </td>
                                    <td align="center">
                                        <div class="dropcenter">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm py-0" data-toggle="dropdown" id="dropdownMenuButon" type="button">
                                                <i class="bx bx-dots-vertical bx-xs"></i>
                                            </button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="beware-delivery-challan-images.php">Add Images</a>
                                                <a class="dropdown-item" href="beware-delivery-challan-serial-no-add.php">Add Serial No.</a>
                                                <a class="dropdown-item" href="javascript:void0" data-toggle="modal" data-target="#dispatch-details" data-effect="effect-rotate-left">Add Dispatch</a>
                                                <a class="dropdown-item" href="beware-po-sale-payment-data.php" data-toggle="modal" data-target="#delivery-details" data-effect="effect-rotate-left">Add Delivery</a>
                                                <a class="dropdown-item" href="beware-delivery-challan-pdf.php">View Challan</a>
                                                <a class="dropdown-item" href="javascript:void0">Edit Challan</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info my-3" id="example_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                <ul class="pagination justify-content-end">
                                    <li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" class="page-link">4</a></li>
                                    <li class="paginate_button page-item next" id="example_next"><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============APPROVAL REQUEST POPUP========== -->
<div class="modal" id="approval-request" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <form>
                <div class="modal-header">
                    <h6 class="modal-title">Send Approval Request - <span class="text-danger">BEW-TID-00464</span></h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body bg-gray-100">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Delivery Challan No.</label>
                            <input type="text" class="form-control" value="BEW-TID-00464" readonly>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Request Type</label>
                            <input type="text" class="form-control" value="Business Purpose" readonly>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Total Qty.</label>
                            <input type="text" class="form-control" value="0" readonly>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Remaining Payment</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Total Amount</label>
                            <input type="text" class="form-control" value="25051.4" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn ripple btn-danger-gradient" type="button">Send Request</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ============DISPATCH DETAILS POPUP========== -->
<div class="modal" id="dispatch-details" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <form action="">
                <div class="modal-header">
                    <h6 class="modal-title">Add Dispatch Details - <span class="text-danger">BEW-TID-00466</span></h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body bg-gray-100">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Dispatch Reference No.<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Dispatch Courier Company Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Dispatch Date<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Dispatch Document<span class="text-danger">*</span></label>
                            <div class="input-group file-browser">
                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" required>
                                <label class="input-group-btn m-0">
                                    <span class="btn btn-default"> Browse <input type="file" style="display: none;" multiple=""></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                            <label>Remark (optional)</label>
                            <textarea rows="3" class="form-control resize-none"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn ripple btn-danger-gradient" type="submit">Add Dispatch</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ============DELIVERY DETAILS POPUP========== -->
<div class="modal" id="delivery-details" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <form action="">
                <div class="modal-header">
                    <h6 class="modal-title">Add Delivery Details - <span class="text-danger">BEW-TID-00466</span></h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body bg-gray-100">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Delivery Date<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
                            <label>Delivery Document<span class="text-danger">*</span></label>
                            <div class="input-group file-browser">
                                <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" required>
                                <label class="input-group-btn">
                                    <span class="btn btn-default"> Browse <input type="file" style="display: none;" multiple=""></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                            <label>Remark (optional)</label>
                            <textarea rows="3" class="form-control resize-none"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn ripple btn-danger-gradient" type="submit">Add Delivery</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection