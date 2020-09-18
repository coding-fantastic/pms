<?php
include "init/config/config.php";


include "init/includes/header.php";
?>



    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">List</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat m-b-30">
                        <a href="valuations" ><div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cube-outline float-right mb-0"></i>
                            </div>
                            <h6 class="text-uppercase mb-0">Valuation</h6>
                        </div></a>
                        
                        <div class="card-body">
                            <div class="border-bottom pb-4">
                                <span class="ml-2 text-muted">Total valuation</span>
                                <span class="badge badge-success"> <?php echo $valuationCount;?> </span>
                            </div>
                            <!--<div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 1325</p>
                            </div>
                            <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat m-b-30">
                        <a  href="assessmentlist"><div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-account-network float-right mb-0"></i>
                            </div>
                            <h6 class="text-uppercase mb-0">Assessement</h6>
                        </div> </a>
                        <div class="card-body">
                            <div class="border-bottom pb-4">
                                <span class="ml-2 text-muted">Total assessement</span>
                                <span class="badge badge-success"> <?php echo $assessmentCount; ?> </span>
                            </div>
                            <!--<div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 3426</p>
                            </div>
                            <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat m-b-30">
                        <a href="reassessmentlist"><div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                            </div>
                            <h6 class="text-uppercase mb-0">Re-assessment</h6>
                        </div></a>
                        <div class="card-body">
                            <div class="border-bottom pb-4">
                                <span class="ml-2 text-muted">Total reassessment</span>
                                <span class="badge badge-success"> <?php echo $reassessmentCount;?> </span>
                            </div>
                            <!--<div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 15.8</p>
                            </div>
                            <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>

                        </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card mini-stat m-b-30">
                        <a href="accounts"><div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-cart-outline float-right mb-0"></i>
                            </div>
                            <h6 class="text-uppercase mb-0">Accounts</h6>
                        </div></a>
                        <div class="card-body">
                            <div class="border-bottom pb-4">
                                <span class="ml-2 text-muted">Total accounts</span>
                                <span class="badge badge-success"> <?php echo $accountCount; ?> </span>
                            </div>
                            <!--<div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 14256</p>
                            </div>
                            <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!--<style>
                            .wrap-text {
                                word-wrap: break-word
                            }

                        </style>-->


                            <!--<table id="datatable-buttons" class="table table-striped dt-responsive nowrap table-sm  table-hover table-condensed">-->
                            <table id="datatable" class="table table-striped dt-responsive nowrap table-sm  table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Accounts</th>
                                        <th>Valuation</th>
                                        <th>Assessments</th>
                                        <th>Re-assessments</th>
                                        <th>Invoices</th>
                                    </tr>
                                </thead>


                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td><?php echo $accountCount; ?></td>
                                        <td><?php echo $valuationCount;?></td>
                                        <td><?php echo $assessmentCount;?></td>
                                        <td><?php echo $reassessmentCount; ?></td>
                                        <td><?php echo $invoiceCount;?></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div>
    </div>

    <?php
include "init/includes/footer.php";
?>
