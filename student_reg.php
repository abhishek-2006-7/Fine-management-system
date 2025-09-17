<?php
include_once("header1.php");
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
                                <h4 class="card-title">Student Registration Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="student_action.php" method="post">
				   <div class="form-row">
				   
				   
                                            <div class="form-group col-md-4">
                                                <label>ROLL NO</label>
                                                <input type="number" class="form-control" placeholder="Roll No Of Student"name="txtroll">
                                            </div>
                                             </div>
                                            
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>NAME OF STUDENT</label>
                                                <input type="text" class="form-control" placeholder="Name Of Student"name="txtname">
                                            </div>
                                             </div>
                                            
                                        <div class="form-row">
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
                                            <label>SEMESTER </label>
                                            <select class="form-control" id="sel1"name="txtsem">
                                            	  
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                                <option>S4</option>
                                                <option>S5</option>
                                                <option>S6</option>
                                            </select>
                                        </div>
                                         </div>
                                         <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>BATCH</label>
                                               <select class="form-control" id="sel1" name="txtbatch">
                                            	  
 					                                      	  
                                        <option>2010-2013</option>
                                        <option>2011-2014</option>
                                        <option>2012-2015</option>
                                        <option>2013-2016</option>
                                        <option>2014-2017</option>
                                        <option>2015-2018</option>
                                        <option>2016-2019</option>
                                        <option>2017-2020</option>
                                        <option>2018-2021</option>
                                        <option>2019-2022</option>
                                        <option>2020-2023</option>
                                        <option>2021-2024</option>
                                        <option>2022-2025</option>
                                        <option>2023-2026</option>
                                        <option>2024-2027</option>
                                        <option>2025-2028</option>
                                                                         
                                            </select>
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
