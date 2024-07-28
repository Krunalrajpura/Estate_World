<?php include '../../globalvar/globalvariable.php'; ?>
<?php include  $connToPan . 'config.php'; ?>
<?php include  $mphpToInc . 'header.php'; ?>
<?php include  $mphpToInc . 'sidebar.php'; ?>
<?php include  $funToPan . 'function.php'; ?>
<?php include  $mphpToInc . 'navbar.php'; ?>

<div class="container">
    <div class="page-inner">
        <!-- Card -->
        <h3 class="fw-bold mb-3">Request for the List Property</h3>
        <div class="row">
            <div class="col-sm-6 col-md-2">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="numbers d-flex justify-content-center">
                                <h4 class="card-title">Sr. No.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-5">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <h4 class="card-title">Name</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <h4 class="card-title">Requested_At</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-1">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <p title="Accept" class="card-title"><i class="fa-regular fa-circle-check text-success"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-1">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <p title="Reject" class="card-title"><i class="fa-regular fa-circle-xmark text-danger"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-2">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="numbers d-flex justify-content-center">
                                <h4 class="card-title">1.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-5">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <a href="#" title="View Details" class="card-title">Krunal Rajpura</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-stats">
                                <div class="numbers">
                                    <h4 class="card-title">12-12-2024</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-1">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <button title="Accept" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#acceptModalNo1"><i class="fa-regular fa-circle-check fs-5 mt-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-1">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <button title="Reject" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#rejectModalNo1"><i class="fa-regular fa-circle-xmark fs-5 mt-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="acceptModalNo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="../assets/img/check.jpg" alt="CHECK" class="h-25 w-25">
                    <h4 class="mt-3">Do You Really Want to Accept the Request !!!</h4>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <a href="#" title="View Details" type="button" class="btn btn-info">View Details</a>
                <div>
                    <button title="Accept Request" type="button" class="btn btn-success">Accept</button>
                    <button title="Reject Request" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="rejectModalNo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="../assets/img/reject.jpg" alt="CHECK" class="h-25 w-25">
                        <h4 class="mt-3">Do You Really Want to Reject the Request !!!</h4>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <a href="#" title="View Details" type="button" class="btn btn-info">View Details</a>
                <div>
                    <button type="button" class="btn btn-danger">Reject</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include  $mphpToInc . 'footer.php'; ?>
<?php include  $mphpToInc . 'endlinks.php'; ?>