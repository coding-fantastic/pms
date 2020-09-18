<?php
 $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
 include "init/config/config.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Maka Automotive Works And Assessors Loss Assessors And Valuers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugins -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/fuzone.css" rel="stylesheet" type="text/css" />


    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.css" rel="stylesheet">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />



</head>

<style>
    body {
        background: white !important;
        color: black;
        font-size: 15px
    }

    .box {
        /*max-width: 800px;*/
        margin: auto;
    }

    .area-padding {
        padding: 10px
    }


    h1,
    h2,
    h3,
    h4,
    h5 {
        color: #000;
    }

    .content {
        border-bottom: solid 1px black;
        border-bottom-style: dotted;
    }

    hr.bold {
        border: 3px solid black;
        margin: -13px 0 -13px 0
    }

    p {
        color: black;
    }

    .center {
        margin: auto;
        padding: 10px;
    }

    .logo {
        width: 100px;
    }

    .heading {
        font-weight: 900;
        margin-bottom: 10px;
        padding-bottom: 0px;
        color: #000;
        font-size: 37px;
        margin-left: -70px;
    }

    .box-height {
        height: 120px;
    }

    strong {
        font-size: 16px;
    }

    .text-big {
        font-size: 20px;
    }

    .img {
        max-height: 800px;
        padding: 10px;
    }

    @media print {
        .newPage {
            page-break-after: always;
        }

        .box {
            max-width: 100%;
            margin: auto;
        }

        .img {
            max-height: 800px;
        }
    }

    .table {
        color: #000 !important;
    }

    .table-bordered td,
    .table-bordered th,
    .table-bordered thead th {
        border: 1px solid #000 !important;
    }

</style>

<body>

    <div class="container">

        <div class="box area-padding">


            <?php
        
        $_rows = details::getDetails();
        
        if($_rows){

            $_row = $_rows[0];

            $cd_name = $_row['cd_name'];
            $cd_address1 = $_row['cd_address1'];
            $cd_address2 = $_row['cd_address2'];
            $cd_address3 = $_row['cd_address3'];
            
            echo ' 
            
            <div class="row mb-2">
            <div class="col col-sm-2">
                <img src="assets/images/maka-logo.png" alt="" class="logo">
            </div>

            <div class="col col-sm-10">
                <h1 class="text-center center heading">'.$cd_name.'</h1>
            </div>

        </div>
            
            <div class="row mb-2">
            <div class="col">
                <p>'.$cd_address1.'</p>
            </div>
            <div class="col">
                <p>'.$cd_address2.'</p>
            </div>
            <div class="col">
                <p>'.$cd_address3.'</p>
            </div>
        </div>';
            
        }
        
        ?>




            <hr class="bold">
            <hr>

            <h4 class="text-right">Date: <u>24/4/2020</u> </h4>

            <div class="row">
                <div class="col-sm-4">
                    <h5>HEAD OF CLAIMS AND LEGAL<br>APA INSURANCE CO.LTD<br>P.O. BOX 30065-001000<br>NAIROBI</h5>
                </div>
            </div>


            <h5 class="text-left mb-t">Dear Sir/Madam</h5>


            <h5 class="text-left mb-t"><u>RE: ACCIDENT ASSESSMENT FOR YOUR INSURED VEHICLE KCB 039P ASHOK LEYLAND</u></h5>

            <div class="row">
                <div class="col-sm-10">
                    <p>Following instructions from Ephraim Rakula Nairobi Branch, we have seen and assessed the above vehicle and we report as follows:-
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="col-2"></div>
                    <div class="col-10">
                        <div class="col"></div>
                    </div>

                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <h5>
                            <div class="row">

                                <div class="col">INSURED </div>
                                <div class="col">: ROYAL GROUP INDUSTRIES LTD</div>
                            </div>
                        </h5>
                        <h5>
                            <div class="row">
                                <div class="col"> REG NO. </div>
                                <div class="col">: KCB 039P</div>
                            </div>
                        </h5>
                        <h5>
                            <div class="row">
                                <div class="col">MAKE </div>
                                <div class="col">: ASHOK LEYLAND</div>
                            </div>
                        </h5>
                        <h5>
                            <div class="row">
                                <div class="col">INSURED </div>
                                <div class="col">: ROYAL GROUP INDUSTRIES LTD</div>
                            </div>
                        </h5>
                        <h5>
                            <div class="row">
                                <div class="col">CLAIMS NO</div>
                                <div class="col">: C/20/800/002840</div>
                            </div>
                        </h5>
                        <h5>
                            <div class="row">
                                <div class="col">LOCATION </div>
                                <div class="col">: INSURED YARD - NAKURU</div>
                            </div>
                        </h5>
                        <h5>
                            <div class="row">
                                <div class="col">SUM INSURED </div>
                                <div class="col">: KSH. 1,100,000/=</div>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <p>It was observed that the vehicle had a frontal collission damaging the listed part
                    </p>

                    <p>Estimated repair cost to restore the vehicle to its pre-accident condition is Ksh. 212,546/+ VAT Inclusive
                    </p>
                    <u>Remarks</u>
                    <p>Labour to include:-
                        <br>
                        -Removal and fitting the listed parts.<br>
                        -Resplay the and replaced parts.
                        The vehicle was driven to the garage.
                    </p>


                    <p>
                        Thank you.
                    </p>


                    <h5><u>G.MATHU</u></h5>
                    <h5>PRINCIPAL OFFICER</h5>


                </div>
            </div>

        </div>
        <div class="newPage"></div>

        <div class="box area-padding">

            <?php
        
        $_rows = details::getDetails();
        
        if($_rows){

            $_row = $_rows[0];

            $cd_name = $_row['cd_name'];
            $cd_address1 = $_row['cd_address1'];
            $cd_address2 = $_row['cd_address2'];
            $cd_address3 = $_row['cd_address3'];
            
            echo ' 
            
            <div class="row mb-2">
            <div class="col col-sm-2">
                <img src="assets/images/maka-logo.png" alt="" class="logo">
            </div>

            <div class="col col-sm-10">
                <h1 class="text-center center heading">'.$cd_name.'</h1>
            </div>

        </div>
            
            <div class="row mb-2">
            <div class="col">
                <p>'.$cd_address1.'</p>
            </div>
            <div class="col">
                <p>'.$cd_address2.'</p>
            </div>
            <div class="col">
                <p>'.$cd_address3.'</p>
            </div>
        </div>';
            
        }
        
        ?>
            <hr class="bold">
            <hr>

            <h4 class="text-center mb-3"><u>ASSESMENT/VALUATION REPORT</u></h4>


            <div class="row mb-3">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>Our Ref:</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 0000000000 </span>
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>Your Ref:</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 00000000000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>Instructed By:</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 0000000000 </span>
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>Date:</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 00000000000</span>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <!--<thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>-->
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Insurers</strong>
                                        </div>
                                        <div class="col-sm-9 text-left">
                                            <span> 0000000000 </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Insured</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <strong>Location</strong>
                                        </div>
                                        <div class="col-sm-11  text-left">
                                            <span> 0000000000 </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Policy No.</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 0000000000 </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <strong>Date</strong>
                                        </div>
                                        <div class="col-sm-10  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Reg. No.</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 0000000000 </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Make</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Colour</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Model</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 0000000000 </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Type</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Year</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <strong>Millage</strong>
                                        </div>
                                        <div class="col-sm-9  text-left">
                                            <span> 0000000000 </span>
                                        </div>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Engine No.</strong>
                                        </div>
                                        <div class="col-sm-8  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <strong>Chassis No.</strong>
                                        </div>
                                        <div class="col-sm-8  text-left">
                                            <span> 00000000000</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h5>PRE-ACCIDENT CONDITION</h5>
            <table class="table table-bordered">
                <tbody>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Body Work</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Upholstery</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Brakes</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Steering</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>


                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Suspension</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>
                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Engine</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Gearbox</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Transmission</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>


                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Electrical Systems</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Tyres</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>


                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Extra</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>

                    <tr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <strong>Remarks</strong>
                                    </div>
                                    <div class="col-sm-10  text-left">
                                        <span> 0000000000 </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </tr>
                </tbody>

            </table>



            <div class="row mb-3">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>PRE-ACCIDENT VALUE</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 0000000000 </span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>SALVAGE VALUE</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 0000000000 </span>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mb-3">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>NATURE OF ACCIDENT</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 0000000000 </span>
                        </div>
                    </div>

                </div>

            </div>


            <div class="row mb-3">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-3">
                            <strong>DAMAGES</strong>
                        </div>
                        <div class="col-sm-9 content text-center">
                            <span> 0000000000 </span>
                        </div>
                    </div>

                </div>

            </div>


        </div>

        <div class="newPage"></div>


        <div class="box area-padding">
            <h5> <u>DAMAGES</u></h5>

            <div>
                <ul>
                    <li>RHS headlight(bezel) Smashed</li>
                </ul>
            </div>

        </div>

        <div class="newPage"></div>

        <div class="box area-padding">
            <h5> <u>List Of Part Changed</u></h5>

            <table class="table">
                <thead>
                    <th>DESCRIPTION</th>
                    <th>QTY</th>
                    <th>COST KSH</th>
                    <th>CT</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Bonnet</td>
                        <td>1</td>
                        <td>21551</td>
                        <td>72</td>
                    </tr>



                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td>21551</td>
                        <td>72</td>
                    </tr>
                </tfoot>
            </table>


        </div>

        <div class="newPage"></div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Repair Summary(Details attched)</th>
                    <th>Shs.</th>
                    <th>Cts</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Spares</td>
                    <td>127,444</td>
                    <td>04</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td>212,546</td>
                    <td>00</td>
                </tr>
            </tfoot>
        </table>
        
        <div class="clear-fix"></div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-2">
                    <h4>NOTE:</h4>
                </div>
                <div class="col-10">
                    <ol>
                        <li>The reapirs are strictly authorised to be repaired as per abaove and not to realease the vehicle without insurer's instructions.</li>
                        <li>All replaced parts must be preserved to re-inspection.</li>
                        <li>For any further damages detected the assessors should be informed immediately.</li>
                    </ol>
                </div>
            </div>
            <div class="col">
                We M/s {_____________} agree to abide with the above estimates without further changes unless agreed upon in writing.
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6"><h5>AUTHORISED/ NOT AUTHORISED<br>ASSESSOR'S SIGNATURE</h5></div>
                <div class="col-sm-6"><h5>REPAIRS'S OR AUTHORISED AGENT'S SIGNATURE WITH RUBBER STAMP</h5></div>
            </div>
        </div>
        
        

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 content"></div>
                <div class="col-sm-6 content"></div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 content">Date</div>
                <div class="col-sm-6 content content">Date</div>
            </div>
        </div>


        <div class="newPage"></div>




    </div>






</body>

</html>
