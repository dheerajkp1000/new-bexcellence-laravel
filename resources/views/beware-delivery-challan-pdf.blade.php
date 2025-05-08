@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="breadcrumb-header">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mb-2">Delivery Challan Details</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mg-b-0">
                        <li class="breadcrumb-item"> <a href="dashboard.php">Dashboard</a> </li>
                        <li class="breadcrumb-item active"><a href="beware-delivery-challan.php">Delivery Challan</a></li>
                        <li class="breadcrumb-item active">Delivery Challan Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12">
            <div class="main-content-body-invoice">
                <div class="card card-invoice">
                    <div class="card-header">
                        <div class="text-right">
                            <button type="button" onclick="javascript:printDiv('po-invoice')" class="btn btn-danger-gradient"> <i class="mdi mdi-download mr-1"></i>Download PO</button>
                            <a href="javascript:history.back()" class="btn btn-light"><i class="ti ti-arrow-left mr-1"></i> Go Back</a>
                        </div>
                    </div>
                    <div class="card-body" id="po-invoice">
                        <table width="100%" border="1" align="center" style="border-collapse:collapse;margin-bottom:20px">
                            <tr>
                                <td width="50%" style="vertical-align:top;padding:10px;border:1px solid #dde2ef">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td>
                                                <img src="../assets/img/brand/beware-logo-invoice.png" align="left">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style="width:100%;display:block;margin-top:30px">
                                                    <strong>Bill To </strong>
                                                    <h6 style="margin:0;font-weight:600;margin-top:20px"> BLUEBETELS PRIVATE LIMITED</h6>
                                                    <p style="margin:0;">C-8/111, SHOP NO.1, KESHAV PURAM, NORTH DELHI, DELHI- 110035, INDIA</p>
                                                    <p style="margin:0;"><strong>GSTIN</strong> : 07AAHCB3333M1Z</p>
                                                </div>
                                                <table border="0" cellspacing="0" cellpadding="0" style="margin-top:20px">
                                                    <tr>
                                                        <th width="200" style="padding:0">Name</th>
                                                        <td style="padding:0 10px">:</td>
                                                        <td style="padding:0 10px">Annu</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="200" style="padding:0">Email ID</th>
                                                        <td style="padding:0 10px">:</td>
                                                        <td style="padding:0 10px">annu@beware-essentials.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="200" style="padding:0">Mobile</th>
                                                        <td style="padding:0 10px">:</td>
                                                        <td style="padding:0 10px">8287958163</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="200" style="padding:0">Emp. Code</th>
                                                        <td style="padding:0 10px">:</td>
                                                        <td style="padding:0 10px">BEW-107</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="50%" style="padding:10px 20px;border:1px solid #dde2ef">
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td style="padding:0" colspan="3">
                                                <h3>DELIVERY CHALLAN</h3>
                                                <strong>#BEW-TID-00464</strong><br>
                                                <strong>30-Dec-2024</strong><br><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Company Name</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">Ankita Industries</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">GST No.</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">07ABOPN4519R1ZQ</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Name</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">Aarif Tasleem</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Email ID</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">NA</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Mobile</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">9060863786</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Address</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px"> Rajendra market pachpakri Road, Dhaka, Motihari- 845418</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Reason</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">For distributor</td>
                                        </tr>
                                        <tr>
                                            <th width="200" style="padding:0">Issue Date</th>
                                            <td style="padding:0 10px">:</td>
                                            <td style="padding:0 10px">30-Dec-2024</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table width="100%" border="1" style="font-size:12px;border-color:#d0d7e8;border-collapse:collapse;">
                            <thead style="background:#ecf0fa">
                                <tr>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="65">S. No.</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="200">Item Code</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="200">Item Name</th>
                                    <th style="border:1px solid #dde2ef;padding:10px;text-align:left">Description</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="150">Model No.</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="150">Serial No.</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="120">Qty.</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="120">Price</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="120">GST (%)</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="120">Total</th>
                                    <th style="border:1px solid #dde2ef;padding:10px" width="120">GST Amount</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <tr>
                                    <td style="border:1px solid #dde2ef;padding:10px;">1.</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BEW-0005388</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">CCTV CABLE - SUPREME</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;text-align:left">3+1 CCTV CABLE - SUPREME</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-3SPC2</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-SR123SPC2</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">30</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 220</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">18%</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 2200 </td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 396 </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dde2ef;padding:10px;">2.</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BEW-0005355</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">POWER SUPPLY</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;text-align:left">8 CH SMPS (POWER SUPPLY) ECO</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-8CH-PS-ECO</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-SR12387GH</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">30</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 263</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">18%</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 2630 </td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 473.4 </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dde2ef;padding:10px;">3.</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BEW-0005711</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">DOME CAMERA</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;text-align:left">4G DOME CAMERA - 3 MP Plastic</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-I30-F4GDP</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-SR876HJGD</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">5</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 1250</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">18%</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 5000 </td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 900 </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #dde2ef;padding:10px;">4</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BEW-0005712</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">Bullet Camera</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;text-align:left">4 MP Color Bullet Camera 4G Plastic</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-I40-F4GB4P</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">BW-SR233SKJ9</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">15</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 1350</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;">18%</td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 5400 </td>
                                    <td style="border:1px solid #dde2ef;padding:10px;"><i style="font-family:'DeJaVu Sans">&#8377</i> 972 </td>
                                </tr>
                                <tr>
                                    <td style="padding:10px" colspan="9" align="right"><strong>Sub Total</strong></td>
                                    <td style="padding:10px"><i style="font-family:'DeJaVu Sans">&#8377</i> 51,705.40</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px" colspan="9" align="right"><strong>Freight Amount</strong></td>
                                    <td style="padding:10px"><i style="font-family:'DeJaVu Sans">&#8377</i> 1,500.00</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px" colspan="9" align="right"><strong>Total GST Amount</strong></td>
                                    <td style="padding:10px"><i style="font-family:'DeJaVu Sans">&#8377</i> 9,576.97</td>
                                </tr>
                                <tr>
                                    <td style="padding:10px" colspan="9" align="right"><strong>Total</strong>&nbsp;&nbsp;</td>
                                    <td style="padding:10px"><h6 style="color:#ed1c24;margin:0"><i style="font-family:'DeJaVu Sans">&#8377</i> 62,782.37</h6></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="position:relative;width:100%;display:block;box-sizing:border-box;margin-top:30px">
                            <h5>Declaration</h5>
                            <br>
                            <ul>
                                <li>This Material Is Being Sent To Our Supplier For The Purpose Of Service/Replacement.</li>
                                <li>We Certify That The Quantity, Rate Packing, Specifications, And All Other Details Are True And Correct.</li>
                            </ul>
                        </div>
                        <div style="margin-top:100px;display:flex;align-items:start;justify-content:space-between">
                            <p>Receiver Signature<br><br><br><br><br> ..................................................................</p>
                            <p style="text-align:right">Authorized Signature<br><br><br><br><br> ..................................................................</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
</div>
@endsection
<script>
    function printDiv(divID)  
    { 
        var divElements = document.getElementById(divID).innerHTML; 
        var oldPage = document.body.innerHTML; 
        document.body.innerHTML =  "<html><head><title></title></head><body>" +  
        divElements + "</body>"; 
        window.print(); 
        document.body.innerHTML = oldPage; 
    } 
</script>