@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="breadcrumb-header">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mb-2">Add Delivery Challan</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mg-b-0">
                        <li class="breadcrumb-item"> <a href="dashboard.php">Dashboard</a> </li>
                        <li class="breadcrumb-item"> <a href="beware-delivery-challan.php">Delivery Challan</a> </li>
                        <li class="breadcrumb-item active">Add Delivery Challan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-xl-12">
            <form action="">
                <div class="card">
                    <div class="card-header">
                        <div class="row justify-content-end">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 text-right btn-set">
                                <a href="javascript:history.back()" class="btn btn-light"><i class="ti ti-arrow-left mr-1"></i> Go Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Request Type<span class="text-danger">*</span></label>
                                <select name="request_type" class="form-control" required>
                                    <option value="">Request Type</option>
                                    <option value="Business Purpose">Business Purpose(Promotion)</option>
                                    <option value="Demo Purpose">Demo Purpose</option>
                                    <option value="Office Purpose">Office Purpose</option>
                                    <option value="Service">Service</option>
                                    <option value="Returnable Material">Returnable Material</option>
                                </select>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Date<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Created By</label>
                                <input type="text" class="form-control" readonly value="Rahul Rathore">
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Email ID</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="bx bx-envelope"></i></div>
                                    </div>
                                    <input value="rahul.rathore@13sqft.com" type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Mobile No.<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="bx bx-mobile-alt"></i></div>
                                    </div>
                                    <input class="form-control" type="text" placeholder="(0000) 000-000" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Employee Code<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Issue Date<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Handover Date<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Company Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Company Email ID<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="bx bx-envelope"></i></div>
                                    </div>
                                    <input placeholder="company@domain.com" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Company GST No.<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>POC Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>POC Email ID<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="bx bx-envelope"></i></div>
                                    </div>
                                    <input placeholder="john.smith@example.com" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>POC Mobile No.<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="bx bx-mobile-alt"></i></div>
                                    </div>
                                    <input class="form-control" type="text" placeholder="(0000) 000-000" required>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Purpose/Reason<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label>Address<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="bx bx-home"></i></div>
                                    </div>
                                    <input required class="form-control" id="phoneMask" type="text">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-4">
                                <div class="checkbox">
                                    <div class="custom-checkbox custom-control d-flex align-items-center">
                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                        <label for="checkbox-2" class="custom-control-label text-danger">Notification(Reminder) E-Mail Share With Company</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>PO Attachment<span class="text-danger">*</span></label>
                                <div class="input-group file-browser">
                                    <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" required>
                                    <label class="input-group-btn m-0">
                                        <span class="btn btn-default"> Browse <input type="file" style="display: none;" multiple=""></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                                <label>Invoice Attachment<span class="text-danger">*</span></label>
                                <div class="input-group file-browser">
                                    <input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly="" required>
                                    <label class="input-group-btn m-0">
                                        <span class="btn btn-default"> Browse <input type="file" style="display: none;" multiple=""></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped mg-b-0 text-md-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="45"> S.No. </th>
                                                <th class="text-center">Item Code</th>
                                                <th class="text-center">Item Name</th>
                                                <th>Description</th>
                                                <th class="text-center">Model No.</th>
                                                <th class="text-center">Qty.</th>
                                                <th class="text-center">Req. Qty.</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">GST</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">GST Amount</th>
                                                <th class="text-center" width="90"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbl-body">
                                            <tr>
                                                <td align="center" scope="row">1.</td>
                                                <td align="center">
                                                    <select class="form-control select2">
                                                        <option>BEW-0006228</option>
                                                        <option>BEW-0006082</option>
                                                        <option>BEW-0006081</option>
                                                        <option>BEW-0006034</option>
                                                    </select>
                                                </td>
                                                <td align="center">
                                                    <select class="form-control select2">
                                                        <option>Lithium Battery 10000mah</option>
                                                        <option>32 Ch NVR 4 sata PCB</option>
                                                        <option>32 Ch NVR 4 sata PCB</option>
                                                        <option>2MP IP EAGLE EYE COLOUR CAMERA POE & AUDIO</option>
                                                    </select>
                                                </td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center"><input type="text" class="form-control" required></td>
                                                <td align="center">
                                                    <div class="d-flex">
                                                        <span class="mx-2 c-pointer" onclick="insertRow(this)"><i class="bx bx-plus-circle tx-22 btn-success-gradient p-1 badge-pill"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <th colspan="9" class="text-right">Sub Total</th>
                                                <td colspan="3"><input type="text" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th colspan="9" class="text-right">Total GST Amount</th>
                                                <td colspan="3"><input type="text" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th colspan="9" class="text-right">Freight Amount</th>
                                                <td colspan="3"><input type="text" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th colspan="9" class="text-right">Freight GST Amount</th>
                                                <td colspan="3"><input type="text" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th colspan="9" class="text-right">Total</th>
                                                <td colspan="3"><input type="text" class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <h4>Declaration</h4>
                                <div class="w-100 mt-3">
                                    <div id="quillEditor">
                                        <h3><strong>Declaration</strong></h3><br>
                                        <ul>
                                            <li>This Material Is Being Sent To Our Supplier For The Purpose Of
                                                Service/Replacement</li>
                                            <li>We Certify That The Quantity, Rate Packing, Specifications, And All Other
                                                Details Are True And Correct</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5 text-center">
                                <button type="submit" id="swal-success" class="btn btn-danger-gradient"><i class="bx bx-save mr-1"></i> Save Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="../assets/plugins/quill/quill.min.js"></script>
<script src="../assets/js/form-editor.js"></script>
<script>
    function insertRow(e){
    var row =' <tr>' +
             '       <td align="center" scope="row"></td>' +
             '       <td align="center">' +
             '           <select class="form-control select2">' +
             '               <option>BEW-0006228</option>' +
             '               <option>BEW-0006082</option>' +
             '               <option>BEW-0006081</option>' +
             '               <option>BEW-0006034</option>' +
             '           </select>' +
             '       </td>' +
             '       <td align="center">' +
             '           <select class="form-control select2">' +
             '               <option>Lithium Battery 10000mah</option>' +
             '               <option>32 Ch NVR 4 sata PCB</option>' +
             '               <option>32 Ch NVR 4 sata PCB</option>' +
             '               <option>2MP IP EAGLE EYE COLOUR CAMERA POE & AUDIO</option>' +
             '           </select>' +
             '       </td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center"><input type="text" class="form-control"></td>' +
             '       <td align="center">' +
             '           <div class="d-flex">' +
             '               <span class="mx-2 c-pointer" onclick="deleteRow(this)"><i class="bx bx-minus tx-22 btn-danger-gradient p-1 badge-pill"></i></span>' +
             '           </div>' +
             '       </td>' +
             '   </tr>';
        $('#tbl-body').prepend(row);
        $('#tbl-body tr').each(function(){
            var sNum = $(this).index();
            console.log(sNum);
            $(this).find('td:first-child').html( (sNum + 1) + '.')
        });
    }

    function deleteRow(f){
        $(f).parents('tr').remove();
        $('#tbl-body tr').each(function(){
            var sNum = $(this).index();
            console.log(sNum);
            $(this).find('td:first-child').html( (sNum + 1) + '.')
        });
    }
</script>
