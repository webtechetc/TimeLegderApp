<!DOCTYPE html>
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
        <div class="right_col settings" role="main">
          <div class="">
            
            
            
               
                

                    <div class="col-sm-5 col-xs-12 form-inline text-font desktop-table-week pull-right"  style="margin-top: 10px;">
                                <div class=" pull-right">
                                <label class=" " style="padding-top: 5px;">Timesheet for:</label>
                                <input class="form-control" type="search" id="tag" aria-controls="datatable" class="form-control  ui-autocomplete-input" placeholder="Search...." autocomplete="off" name="">
                          
                             </div>
                           </div>
                             

                              <div class=" col-xs-12 form-inline  mobile-table-week"  style="margin-top: 10px;">
                                <div class="row">
                               <div class=" col-xs-4 text-font">
                                <div class="row">
                                <label class=" ">Timesheet for:</label>
                              </div>
                              </div>
                              <div class=" col-xs-7 ">
                                <div class="row">
                                 <input class="form-control" type="search" id="tag" aria-controls="datatable" class="form-control  ui-autocomplete-input" placeholder="Search...." autocomplete="off" name="">
                              </div>
                            </div>
                             </div>
                           </div>
                </div>
                <div class="col-xs-12" style="margin-bottom: 30px;"></div>
                  
                <div id="myTabContent" class="tab-content">
                    
                    <!--=============================== Tab  Time entry 2 =================================-->
                       <div class="x_panel">
                            <div class="timesheet-view">
                              <h3>Personal Reports</h>
                              
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <label><h3>Matters</h3></label>
                            </div>
                            <div class="col-sm-12 list-style">
                              <div class="row">
                            <div class="col-md-6">
                              <ul>

                                      <!-- matter-compensation-amount.php -->
                                <li><a href="" title="">My Compensation Amounts</a></li>

                                          <!-- personal-custom-reports.php -->
                                <li><a href="" title="">Personal Custom Report</a></li>
                                <!-- time-utilization-report.php -->
                                <li><a href="" title="">Time Utilization Report</a></li>
                              </ul>
                            </div>
                          
                            <div class="clearfix"></div>
                            <legend></legend>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <label><h3>Time Entries, Expenses</h3></label>
                            </div>
                            <div class="col-md-6">
                              <ul>

                                          <!-- time-entry-detail-report.php -->
                                <li><a href="" title="">Time Entry Detail Report</a></li>

                                          <!-- expenses-report.php -->
                                <li><a href="" title="">Expenses Report</a></li>

                                           <!--  my-timesheet.php -->
                                <li><a href="" title="">My Timesheets</a></li>
                                 <!-- signature-form.php -->
                                <li><a href="" title="">Signature Form</a></li>
                              </ul>
                            </div>
                            
                              </div>
                            </div>
                          </div>
                          </div>
                    </div>
                    <!-- =================== Tab  Time entry End 2 ================================================-->
                   
                   
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
