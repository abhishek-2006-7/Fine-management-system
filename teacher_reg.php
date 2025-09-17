<?php
include_once("header.php");
?>
<body>
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
                                <h4 class="card-title">Teacher Registration Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="teacher_action.php" method="post">

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>NAME OF TEACHER</label>
                                                <input type="text" class="form-control" placeholder="Name Of Teacher"name="txtname">
                                            </div>
                                            
                                            <div class="form-group col-md-2">
                                            
                                            <label>DEPARTMENT</label>
                                            <select class="form-control" id="sel1" name="txtdept">
                                           
                                                <option>CT</option>
                                                <option>ME</option>
                                                <option>IF</option>
                                            </select>
                                            </div>
                                            </div>
                                            <div class="form-row">
                                           <div class="form-group col-md-2">
                                            <label>DESIGNATION</label>
                                            <select class="form-control" id="sel1"name="txtdesi">
                                            	  
                                                <option>HOD</option>
                                                <option>TUTOR</option>
                                                <option>TEACHER</option>
                                            </select>
                                        </div>
                                         </div>
                                         <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>DATE OF JOIN</label>
                                                <input type="date" class="form-control"name="txtdate">
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Username</label>
                                                <input type="txt" class="form-control"placeholder="Enter Username"name="txtuser">
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Password</label>
                                                <input type="password" class="form-control"placeholder="Enter Password"name="txtpass">
                                            </div>
                                            
                                       
                                        </div>
                                       
                                        </div>
                                        <button type="submit" class="btn btn-primary">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </body>
<?php
include_once("footer.php");
?>
