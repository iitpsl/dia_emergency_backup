<?php
require('util/Connection.php');
require('util/SessionCheck.php');
require('Header.php');
?>

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Add Journal</li>
                </ul>
                <!-- END BREADCRUMB -->


				<!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form action="api/AddJournals.php" method="POST" class="form-horizontal" enctype = "multipart/form-data">
                            <div class="panel panel-default">
                               <div class="panel-body">
                                    <p>Fill this form to add new journal.</p>
                                </div>

                             <div class="panel-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Journal Name*</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                                        <input type="text" class="form-control" id="name" name="name" required />
                                                    </div>
                                                    <span class="help-block">Name of Journal</span>
                                                </div>
                                            </div>

											 <div class="form-group">
                                                <label class="col-md-3 control-label">Publish Date*</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" id="date" name="date" required autocomplete="off"/>
                                                    </div>
                                                    <span class="help-block">Publish Date</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">

											 <div class="form-group">
                                                <label class="col-md-3 control-label">Journal Website*</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-book"></span></span>
                                                        <input type="text" class="form-control" id="website" name="website" required />
                                                    </div>
                                                    <span class="help-block">Journal Website</span>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="col-md-3 control-label">Journal Link*</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-book"></span></span>
                                                        <input type="text" class="form-control" id="link" name="link" required />
                                                    </div>
                                                    <span class="help-block">Journal Link</span>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                            </div>
                            <!-- END SIMPLE DATATABLE -->

                        </div>
                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->



    <!-- START SCRIPTS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>  
		<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        		
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->   
		
        <script type="text/javascript" src="js/jquery.table2excel.min.js"></script>
		

        <!-- END TEMPLATE -->
		
		<!-- START TEMPLATE -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>    
        <!-- END TEMPLATE -->

    </body>
</html>
