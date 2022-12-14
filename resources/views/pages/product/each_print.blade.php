<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>PDF INOVASI</title>
    </head>
    <body>
        <style>
            body{margin-top:20px;
            background:#eee;
            }

            /*Invoice*/
            .invoice .top-left {
                font-size:65px;
                color:#3ba0ff;
            }

            .invoice .top-right {
                text-align:right;
                padding-right:20px;
            }

            .invoice .table-row {
                margin-left:-15px;
                margin-right:-15px;
                margin-top:25px;
            }

            .invoice .payment-info {
                font-weight:500;
            }

            .invoice .table-row .table>thead {
                border-top:1px solid #ddd;
            }

            .invoice .table-row .table>thead>tr>th {
                border-bottom:none;
            }

            .invoice .table>tbody>tr>td {
                padding:8px 20px;
            }

            .invoice .invoice-total {
                margin-right:-10px;
                font-size:16px;
            }

            .invoice .last-row {
                border-bottom:1px solid #ddd;
            }

            .invoice-ribbon {
                width:85px;
                height:88px;
                overflow:hidden;
                position:absolute;
                top:-1px;
                right:14px;
            }

            .ribbon-inner {
                text-align:center;
                -webkit-transform:rotate(45deg);
                -moz-transform:rotate(45deg);
                -ms-transform:rotate(45deg);
                -o-transform:rotate(45deg);
                position:relative;
                padding:7px 0;
                left:-5px;
                top:11px;
                width:120px;
                background-color:#66c591;
                font-size:15px;
                color:#fff;
            }

            .ribbon-inner:before,.ribbon-inner:after {
                content:"";
                position:absolute;
            }

            .ribbon-inner:before {
                left:0;
            }

            .ribbon-inner:after {
                right:0;
            }

            @media(max-width:575px) {
                .invoice .top-left,.invoice .top-right,.invoice .payment-details {
                    text-align:center;
                }

                .invoice .from,.invoice .to,.invoice .payment-details {
                    float:none;
                    width:100%;
                    text-align:center;
                    margin-bottom:25px;
                }

                .invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
                    font-size:22px;
                }

                .invoice .btn {
                    margin-top:10px;
                }
            }

            @media print {
                .invoice {
                    width:900px;
                    height:800px;
                }
            }
        </style>

        {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    <div class="container bootstrap snippets bootdeys">
    <div class="row">
    <div class="col-sm-12">
            <div class="panel panel-default invoice" id="invoice">
            <div class="panel-body">
                {{-- <div class="invoice-ribbon"><div class="ribbon-inner">PAID</div></div> --}}
                <div class="row">

                    <div class="col-sm-6 top-left">
                        <img src="images/logo-website.png" style="width: 100%" alt="">
                    </div>

                    <div class="col-sm-6">
                            <h3 class="">Si Indah Balitbangda</h3>
                            {{-- <span class="marginright">14 April 2014</span> --}}
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-4 from">
                        <p class="lead marginbottom">Name : {{ $product->name }}</p>
                    </div>

                    <div class="col-xs-4 to">
                        <p class="lead marginbottom">Vendor Image : {{ $product->vendor_image }}</p>
                    </div>

                    <div class="col-xs-4 text-right payment-details">
                        <p class="lead marginbottom payment-info"></p>
                        <p>User Image : {{ $product->user_image }} </p>
                    </div>

                </div>

                {{-- <div class="row table-row">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th class="text-center" style="width:5%">#</th>
                        <th style="width:50%">Item</th>
                        <th class="text-right" style="width:15%">Quantity</th>
                        <th class="text-right" style="width:15%">Unit Price</th>
                        <th class="text-right" style="width:15%">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center">1</td>
                        <td>Flatter Theme</td>
                        <td class="text-right">10</td>
                        <td class="text-right">$18</td>
                        <td class="text-right">$180</td>
                        </tr>
                        <tr>
                        <td class="text-center">2</td>
                        <td>Flat Icons</td>
                        <td class="text-right">6</td>
                        <td class="text-right">$59</td>
                        <td class="text-right">$254</td>
                        </tr>
                        <tr>
                        <td class="text-center">3</td>
                        <td>Wordpress version</td>
                        <td class="text-right">4</td>
                        <td class="text-right">$95</td>
                        <td class="text-right">$285</td>
                        </tr>
                        <tr class="last-row">
                        <td class="text-center">4</td>
                        <td>Server Deployment</td>
                        <td class="text-right">1</td>
                        <td class="text-right">$300</td>
                        <td class="text-right">$300</td>
                        </tr>
                    </tbody>
                    </table>

                </div> --}}

                <div class="row">
                <div class="col-xs-6 margintop">
                    <p class="lead marginbottom">THANK YOU!</p>

                    {{-- <button class="btn btn-success" id="invoice-print"><i class="fa fa-print"></i> Print Invoice</button>
                    <button class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</button> --}}
                </div>
                {{-- <div class="col-xs-6 text-right pull-right invoice-total">
                        <p>Subtotal : $1019</p>
                        <p>Discount (10%) : $101 </p>
                        <p>VAT (8%) : $73 </p>
                        <p>Total : $991 </p>
                </div> --}}
                </div>

            </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>