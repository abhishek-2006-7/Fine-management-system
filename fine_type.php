<?php
include_once("header.php");
?>
 <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Fine Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="fine_action.php" method="post">
				
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>FINE TYPE</label>
                                                <input type="text" class="form-control" placeholder="Fine type" name="txttype">
                                            </div>
                                            </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>AMOUNT</label>
                                                <input type="number" class="form-control" placeholder="Amount" name="txtamount">
                                            </div>
                                            
                                        </div>
                                       
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
<?php
include_once("footer.php");
?>
