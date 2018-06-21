<html lang="en">
<?php
  include_once "head.php";
  ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <!-- sidebar left -->
                <?php
        include_once "sidebar.php";
        ?>
                    <!-- sidebar left end -->

                    <!-- top navigation -->
                    <?php
          include_once "nav.php";
          ?>
                        <!-- /top navigation -->

                        <!-- page content -->
                        <div class="right_col settings" role="main" style="min-height: 444px;">
                            <div class="">
                                <!-- <div class="page-title">
              <div class="title_left">
                <br>
                <p>Home / Settings</p>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input class="form-control" placeholder="Search for..." type="text">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

                               

                                 

                                <!--=============================== Tab  Time entry 1 =================================-->

                                <div class="row">

                                    <div class="col-md-8 col-sm-6 col-xs-12 timeline-view" >
                                        <div class="datetime">
                                            <h1> Enter New Expense Item:

                                    <strong>Today is Friday, March 16, 2018
                                       It is 3:07 p.m.
                                    </strong> 
                                    </h1>
                                        </div>
                                    </div>
                                        <div class="col-md-4 col-xs-12 form-group" >

                                        <div class="row paddL">
                                            <div class="col-sm-6 col-xs-5 text-right " style="padding-top:10px;">
                                                <label for="" style="font-size:12px;">Expense Entry for:</label>
                                            </div>

                                            <div class="col-sm-6 col-xs-7" >
                                               
                                                    <select class="form-control" name="">
                                                        <option value="48226">Bell, Terry</option>
                                                        <option value="50385">Burgraff, Kimberly</option>
                                                        <option value="48227">Clarambeau, Adlore</option>
                                                        <option value="50138">Diaz, Denise</option>
                                                        <option value="49076">Dracup, Alex</option>
                                                        <option value="49807">Dracup, Brittany</option>
                                                        <option value="48087" selected="">Dracup, Jeffrey</option>
                                                        <option value="50128">Jenkins, Michelle</option>
                                                        <option value="50126">Kiamilev, Chandra</option>
                                                        <option value="50155">Larmore, Thomas</option>
                                                        <option value="50125">Payne, Richard</option>
                                                        <option value="48865">Thomas, Cynthia</option>
                                                        <option value="48209">Wheeler, Kristie</option>
                                                    </select>
                                               
                                            </div>
                                        </div>
                                    </div>
                               
                                  
                                    </div>


                                </div>
                                <div class="x_panel">

                                    <div class="timesheet-view">
                                        <h3>Enter Expenses</h3>
                                        
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="x_content " style="padding-top: 0;">

                                        <div class="row">
                                            <form class="form-horizontal control-label expenses-form">
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="form-group1">
                                                        <label>Search for Client > Matter for this expense:</label>
                                                        <div class="form-inline">
                                                            <input type="text" placeholder="Search for Client > Matter to which this expense applies:" class="form-control">
                                                        </div>

                                                        <div class="checkbox checkbox-success ">

                                                            <input type="checkbox">
                                                            <label>
                                                                Also Search Inactive Client > Projects
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-inline">
                                                        <label>Date Expense Incurred:</label>
                                                        <input id="datetimepicker6" type="text" class="form-control" placeholder="03/06/2018" style="width: 82px;">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            
                                                            <div class="col-md-9 col-sm-9 col-xs-12 ">
                                                               <input type="" class="form-control" placeholder="Search Expense Type" name="">

                                                            </div>
                                                            <div class="col-xs-12 form-group" style="padding-top: 5px;">
                                                                <a href="#" title="">Add New Expense Type</a>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                               
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <input type="" class="form-control" placeholder="Search Expense Group" name="">

                                                                </div>
                                                                <div class="col-xs-12">
                                                                    <a href="#" title="">Add New Expense Group</a>
                                                                </div>
                                                                <div class="col-xs-12">
                                                                    <p> (So you can optionally group expenses by trip, etc.) </p>
                                                                </div>
                                                                <div class="form-group form-inline col-sm-12 ">
                                                                    <label>USD $</label>
                                                                    <select class="form-control">
                                                                        <option>0 $</option>
                                                                    </select>
                                                                    <label class="control-label">Amount:</label>
                                                                    <input class="form-control" placeholder="0.00" type="text" style="width: 89px; text-align: right;">
                                                            </div>
                                                                <div class="form-group">
                                                                    
                                                                    <div class="col-lg-12 col-sm-12 col-xs-12 form-group form-inline">
                                                                      <label class="control-label "> Attach Expense Receipt:&nbsp; </label> 
                                                                        <label class=" btn-primary " style="padding:2px; margin-top: 5px;">
                                                                            Choose File&hellip; 
                                                                            <input type="file" style="display: none;">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-12">
                                                                        <p>(You can also attach a picture of an expense receipt (up to 15mb) from your cell phone using our iOS and Android mobile apps)</p>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <label >Upload Multiple Expense Entries:</label>
                                                                    
                                   <div class="form-horizontal">
                                    <button class="btn btn-primary btns"  data-toggle="collapse" data-target="#logs">Upload Expense Entries</button> 
                                    <br>
                               <button class="btn btn-primary btns" style="margin-top: 10px;"><i class="fa fa-dropbox "> DropBox</i></button><br>
                               <button class="btn btn-danger btns" style="margin-top: 10px;"> <i class="fa fa-google"> Google Drive</i> </button>
                                                                    </div>
                                                                <div class="form-group form-inline form-documents1 collapse outside" id="logs" aria-expanded="true">
                                                                      
                                                                        <label><a href=""><i class="fa fa-print"> Print</i> </a></label>

                                                                        <label><a href=""><i class="fa fa-file-pdf-o"> PDF</i></a></label>

                                                                        <label><a href=""><i class="fa fa-file-word-o"> MS Word</i> </a></label>

                                                                        <label><a href=""><i class="fa fa-file-excel-o">  MS Excel</i></a></label>

                                                                        <label><a href=""><i class="fa fa-file"> CSV</i> </a></label>

                                                                        <label><a href=""><i class="fa fa-file-text-o">  TEXT</i></a></label>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Description to appear on invoice:</label>
                                                                <textarea name="" class="form-control">

                                                                </textarea>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xs-12 text-center">
                                                    
                                                        <div class="col-sm-6  form-group">
                                                        <button type="button" class="pull-right btn btn-primary">Save and Done</button>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12  form-group">
                                                        <button type="button" class="pull-left btn btn-primary">Save and Enter Another Expense</button>
                                                    </div>
                                       
                                                </div>

                                          </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /page content -->

                        <!-- footer content -->
                        <?php
        include_once "footer.php";
        ?>

                            <!-- /footer content -->
            </div>
        </div>

        <!-- Custom Theme Scripts -->
        <?php
    include_once "script.php";
    ?>

            <?php
    include_once "modal.php";
    ?>

    </body>

</html>