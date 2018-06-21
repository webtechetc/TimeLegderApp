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
            
            
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <div class="row tab-bar">
               <div class="col-md-8 ">
                <div class="row">
                  <ul id="myTab" class="nav nav-tabs bar_tabs pull-left" role="tablist" >
                      <li role="presentation" class="active">
                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Administrative Reports</a>
                      </li>
                      <li role="presentation" >
                        <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">  Your Reports </a>
                      </li>
                  </ul>
                </div>
                </div>
                <div class="col-md-4 pull-right" >
                  <div class="row paddL">
                    <div class="col-sm-4 text-right "  style="padding-top:10px;">
                        <label for="">Timesheet for:</label>
                    </div>

                    <div class="col-sm-8" style="margin-bottom0px;">
                      <div class="row">
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
                <div class="col-xs-12" style="margin-bottom: 30px;"></div>
                  
                <div id="myTabContent" class="tab-content">
                    <!--=============================== Tab  Time entry 1 =================================-->
                    <div role="tabpanel" class="tab-pane fade in active" id="tab_content1" >
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                           
                        </div>
                      </div>
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Administrative Reports</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                                <div class="row">
                                  <!-- <div class="col-md-4 col-sm-6 col-xs-12 paddR" style="padding-right:30px;">
                                <div class="row">
                                 <div class="x_panel ">
                                    <div class="x_title">
                                      
                                      <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                      </ul>
                                      <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content " >
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                          <span class="bill-able-span">Billable <span ></span></span>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                          <span class="nonbill-able-span">Non-Billable  <span ></span></span>
                                        </div>
                                        <canvas id="mybarChart"  ></canvas>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <div class="col-sm-4"></div>
                              <div class="col-md-4 col-sm-6 col-xs-12 settings-text">
                              <h1>Billable/Non-Billable Hours Summary</h1>
                              <form class="form-inline">
                                <div class="form-group">
                                  <label>For:<small>(For all Users you have permission to view)</small></label>
                                  
                                  <select id="heard" class="form-control" required="">
                                    <option value="0" selected="">Current Timesheet</option>
                                    <option value="1">Last Timesheet</option>
                                    <option value="2">This Work Week</option>
                                    <option value="3">Last Full Work Week</option>
                                    <option value="4">Current Month</option>
                                    <option value="5">Last Full Calendar Month</option>
                                    <option value="6">Last Full 12 Calendar Months</option>
                                    <option value="7">Last 8 Full Quarters</option>
                                    <option value="8">All Years Since Using TimeLedger</option>
                                  </select>

                                </div>
                              </form>
                          </div>
                          <div class="col-sm-4"></div>
                                 <!-- <div class="col-md-4 col-sm-6 col-xs-12 paddL" style="padding-left:30px;">
                                  <div class="row">
                                    <div class="x_panel">
                                      <div class="x_title ">
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content ">
                                       
                                        <div class="col-xs-6 text-center">
                                          <span class="nonbill-able-span circle">Non-Billable  <span ></span></span>
                                        </div>
                                         <div class="col-xs-6 text-center">
                                          <span class="bill-able-span circle">Billable <span ></span></span>
                                        </div>
                                        <canvas id="canvasDoughnut"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div> -->
                            </div>
                          </div>
                      </div>
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Clients/Matters/Users/Activities /Time Entries, Expenses</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content ">
                            
                          <div class="row list-style">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <legend>Clients</legend>
                                  <ul class="">
                                    <li><a href="invoices.php">Invoices</a></li>
                                    <li><a href="client-budgets.php">Client Budgets</a><sup>new!</sup></li>
                                    <li><a href="custom-reports.php">Custom Reports</a></li>
                                  </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <legend>Matters</legend>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                  <li><a href="matter-custom-reports.php" title="">Custom Reports</a></li>
                                  <li><a href="matter-budgets.php" title="">Matter Budgets</a></li>
                                  <li><a href="matter-billing-rates.php" title="">Matter Billing Rates</a></li>
                                  <li><a href="matter-billing-options.php" title="">Matter Billing Options</a></li>
                                  <li><a href="matter-labor-and-expense.php" title="">Labor and Expense Charges by Client, then Matter</a></li>
                              </ul>
                            </div>
                             <div class="col-md-6">
                              <ul>
                                  <li><a href="matters-profitability-report.php" title="">Matters Profitability Report</a></li>
                                  <li><a href="matter-hourly-usage.php" title="">Hourly Usage by Matter</a></li>
                                    <li><a href="matter-with-no-time.php"> Hourly Usage by Matter (Matters with no time included)</a></li>
                                  <li><a href="matter-hourly-usage-code.php" title="">Hourly Usage by Code for exporting Matter</a></li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <legend>Users</legend>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li><a href="user-group-perfomance.php" title="">Group and User Productivity</a></li>
                                <li><a href="user-daily-matter-hours.php" title="">Daily Matter Hours by User</a></li>
                                <li><a href="user-daily-hours.php" title="">Daily Hours by User</a></li>
                                <li><a href="user-daily-hours-summary.php" title="">Daily Activity Hours Summary - by User</a></li>
                                <li><a href="user-bill-nonbill.php" title="">Billable/Non-Billable Hours</a></li>
                                <li><a href="user-report-utilization.php" title="">Administrator Utilization Report</a></li>
                                <li><a href="user-active-tm.php" title="">Your Active TimeLedger Users</a></li>
                                <li><a href="user-billing-rate.php" title="">User Billing Rates</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li><a href="user-overtime-report.php" title="">Overtime Report</a></li>
                                <li><a href="user-who-working-for.php" title="">Who's Working on What</a></li>
                                <li><a href="user-work-hours.php" title="">Work Hours by User</a></li>
                                <li><a href="user-matter-work-hours.php" title="">Work Hours by Matter and User</a></li>
                                <li><a href="user-compensation.php" title="">Compensation Amounts by User</a></li>
                                <li><a href="user-compensation-amount.php" title="">Compensation Amounts</a></li>
                                <li><a href="user-chart-group.php" title="">Organizational Chart by Group</a></li>
                                <li><a href="user-chart-management.php" title="">Organizational Chart by Management Level</a></li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <legend>Activities</legend>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                        <!-- href="activ-custom-reports.php" -->
                                <li><a href="activ-custom-reports.php" title="">Custom Reports</a></li>

                                            <!-- activ-billing-rate.php -->
                                <li><a href="activ-billing-rate.php" title="">Activity Billing Rates</a></li>

                                                <!-- user-daily-hours.php -->
                                 <li><a href="user-daily-hours.php" title="">Daily Hours by User</a></li>

                                                <!-- user-daily-hours-summary.php -->
                                <li><a href="user-daily-hours-summary.php" title="">Daily Activity Hours Summary - by User</a></li>

                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                        <!-- activity-report.php -->
                                <li><a href="" title="">Activities Report</a></li>

                                        <!-- activity-summary-billable.php -->
                             <li><a href="" title="">Summary of Billable Hours by Activity and User</a></li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <legend>Time  Entries, Expenses</legend>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                   <!--  custom-reports.php -->
                                <li><a href="" title="">Custom Reports</a></li>

                                     <!--  time-approval-history.php -->
                                <li><a href="" title="">Timesheet Approval History</a></li>

                                            <!-- time-view-timesheet.php -->
                                <li><a href="" title="">View Timesheets</a></li>

                                        <!-- time-timesheet-approvel.php -->
                                <li><a href="" title="">Timesheet Approvals</a></li>

                                                <!-- time-entry-print.php -->
                                <li><a href="" title="">Print Timesheets</a></li>

                                                <!-- time-entry-client-expenses.php -->
                                <li><a href="" title="">Client Expenses by Matter</a></li>

                                              <!-- time-entry-period.php -->
                              <li><a href="" title="">Time Entries for Period</a></li>

                                        <!-- time-entry-expenses.php -->
                                <li><a href="" title="">Expenses by Type</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>

                                        <!-- time-entry-expense-detail.php -->
                                <li><a href="" title="">Expense Entry Detail</a></li>

                                            <!-- time-entry-detail.php -->
                                <li><a href="" title="">Time Entry Detail</a></li>

                                        <!--  time-entry-weekly-hours.php -->
                                <li><a href="" title="">Weekly Hours</a></li>

                                               <!--  time-entry-weekly-time.php -->
                                <li><a href="" title="">Weekly Time</a></li>

                                <li><a href="#" title="">SnapShot Graphs</a></li>

                                         <!--  time-expenses-user.php -->
                                <li><a href="" title="">Expenses by User</a></li>

                                        <!-- time-expense-maintenance.php -->
                                <li><a href="" title="">Expense Types Maintenance</a></li>

                                          <!-- time-work-description.php -->
                                <li><a href="" title="">Work Descriptions</a></li>
                              </ul>
                            </div>
                          </div>
                          <legend></legend>
                            <div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="row">
                             
                              <div class=" col-sm-6 col-xs-12 paddR " style="padding-right:30px;">
                                
                                <div class="row">
                                 <div class="x_panel graph">
                                    
                                    
                                    <div class="x_content grap"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                       <legend><h4 style="margin: 0;">Hours Last 7 Days</h4></legend>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                          <span class="bill-able-span">Billable Hours <span></span></span>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                          <span class="nonbill-able-span">Non-Billable Hours <span></span></span>
                                        </div>
                                        <div class="degro">
                                          Hours
                                        </div>
                                        <canvas id="mybarChart" style="width: 468px; height: 234px;" width="468" height="234"></canvas>
                                      
                                    </div>
                                  </div>
                                </div>
                                </div>
                                
                                <div class=" col-sm-6 col-xs-12 paddL pull-right" style="padding-left:30px;">
                                  <div class="row">
                                    <div class="x_panel graph">
                                      
                                      <div class="x_content grap"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                       <legend><h4 style="margin:0;">7-Day Totals</h4></legend>
                                        
                                         <div class="col-xs-6 text-center">
                                          <span class="bill-able-span circle">Billable-Hours <span></span></span>
                                        </div>
                                        <div class="col-xs-6 text-center">
                                          <span class="nonbill-able-span circle">Non-Billable-Hours  <span></span></span>
                                        </div>
                                        <canvas id="canvasDoughnut" style="height: 234px; width: 468px;" width="468" height="234"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>


                              
                        </div>
                      </div>
                    </div>
                    <!-- =================== Tab  Time entry End 1 ================================================-->
                    <!--=============================== Tab  Time entry 2 =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Personal Reports</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                 
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <legend>Matters</legend>
                            </div>
                            <div class="col-sm-12 list-style">
                              <div class="row">
                            <div class="col-md-6">
                              <ul>

                                      <!-- matter-compensation-amount.php -->
                                <li><a href="" title="">My Compensation Amounts</a></li>

                                          <!-- personal-custom-reports.php -->
                                <li><a href="" title="">Personal Custom Report</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>

                                        <!-- time-utilization-report.php -->
                                <li><a href="" title="">Time Utilization Report</a></li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <legend>Time Entries, Expenses</legend>
                            </div>
                            <div class="col-md-6">
                              <ul>

                                          <!-- time-entry-detail-report.php -->
                                <li><a href="" title="">Time Entry Detail Report</a></li>

                                          <!-- expenses-report.php -->
                                <li><a href="" title="">Expenses Report</a></li>

                                           <!--  my-timesheet.php -->
                                <li><a href="" title="">My Timesheets</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>

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
