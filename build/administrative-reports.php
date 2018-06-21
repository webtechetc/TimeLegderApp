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
          
                <div class="col-xs-12" style="margin-bottom: 17px;"></div>
                  
                    <!--=============================== Tab  Time entry 1 =================================-->
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                           
                        </div>
                      </div>
                       <div class="x_panel">
                            <div class="timesheet-view"  style="padding: 10px;">
                              <legend><h3><strong>Administrative Reports</strong></h3></legend>
                              
                            </div>

                            <div class="x_content ">
                                <div class="row">
                                 
                              <div class="col-sm-4"></div>
                              <div class="col-md-4 col-sm-6 col-xs-12 settings-text" >
                              <h1 style="margin-top: 0;">Billable / Non-Billable Hours Summary</h1>
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
                        </div>
                          <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="row form-group">
                               
                                <div class="  col-sm-6 col-xs-12 ">
                                  <div class="x_content">
                                     <div class=" form-inline">
                                       <label class="col-xs-3 label-control" style="padding-top: 5px;"><strong class="pull-right">Hours</strong> </label>
                                       <legend>
                                       
                                        <select class="form-control" style="width: 150px;"> 
                                          <option>Last 7 days</option>
                                          <option>Last 14 days</option>
                                          <option>Most recent pay period</option>
                                          <option>Prior full pay period</option>
                                          <option>Last 30 days</option>
                                          <option>This calendar month to date</option>
                                          <option>Last full calendar month</option>
                                          <option>Last 12 calendar months</option>
                                          <option>Last 4 quarters</option>
                                          <option>All time to date</option>
                                        </select>
                                      </legend>
                                     </div>
                                      <!-- <div class="degro">
                                            Hours
                                          </div> -->
                                        <div id="chartContainer" style="height: 300px; width: 100%;"><div class="canvasjs-chart-container" style="position: relative; text-align: left; cursor: auto;"><canvas class="canvasjs-chart-canvas" width="480" height="300" style="position: absolute;"></canvas><canvas class="canvasjs-chart-canvas" width="480" height="300" style="position: absolute; -webkit-tap-highlight-color: transparent; cursor: default;"></canvas><div class="canvasjs-chart-toolbar" style="position: absolute; right: 1px; top: 1px; border: 1px solid transparent;"></div><div class="canvasjs-chart-tooltip" style="position: absolute; height: auto; box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px 2px; z-index: 1000; pointer-events: none; display: none; border-radius: 0px; left: 22px; bottom: -125px; transition: left 0.1s ease-out 0s, bottom 0.1s ease-out 0s;"><div style="width: auto; height: auto; min-width: 50px; margin: 0px; padding: 5px; font-family: &quot;Trebuchet MS&quot;, Helvetica, sans-serif; font-weight: normal; font-style: normal; font-size: 14px; color: black; text-shadow: rgba(0, 0, 0, 0.1) 1px 1px 1px; text-align: left; border: 1px solid rgb(0, 0, 0); background: rgba(255, 255, 255, 0.9); text-indent: 0px; white-space: nowrap; border-radius: 0px; user-select: none;">Tue<br><span style="color:#225AA7;">Non-Billable:</span>&nbsp;&nbsp;4<br><span style="color:#17B758;">Billable:</span>&nbsp;&nbsp;5<br><span style="color:#000;">Total Hours:</span>&nbsp;&nbsp;4</div></div><a class="canvasjs-chart-credit" style="outline:none;margin:0px;position:absolute;right:2px;top:286px;color:dimgrey;text-decoration:none;font-size:11px;font-family: Calibri, Lucida Grande, Lucida Sans Unicode, Arial, sans-serif" tabindex="-1" target="_blank" href="https://canvasjs.com/">CanvasJS.com</a></div></div>
                                        <div class="hidetxt ">

                                            </div>
                                        </div>
                                        </div>
                    
                              
                                              
            
                                       
                                     
                                 
                                     
                                       <div class="col-md-4  col-sm-4  col-xs-12 pull-right">
                                 <div class="x_content grap" style="margin-top: 5px;"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                  <div class=" col-xs-12">
                                      <label class="col-sm-5 col-md-5 col-xs-5 row label-control" style="padding-top: 5px;">Total Hours</label>
                                        <select class="form-control col-md-7 col-sm-7 col-xs-7" style="width: 150px"> 
                                          <option>Last 7 days</option>
                                          <option>Last 14 days</option>
                                          <option>Most recent pay period</option>
                                          <option>Prior full pay period</option>
                                          <option>Last 30 days</option>
                                          <option>This calendar month to date</option>
                                          <option>Last full calendar month</option>
                                          <option>Last 12 calendar months</option>
                                          <option>Last 4 quarters</option>
                                          <option>All time to date</option>
                                        </select>
                                       

                                     </div>
                                     <legend class="col-sm-12"></legend>
                                       <div class="row"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                           <div class="col-xs-6 text-center">
                                            <span class="bill-able-span circle pull-right">Billable-Hours <span></span></span>
                                          </div>
                                          <div class="col-xs-6 text-center">
                                            <span class="nonbill-able-span circle">Non-Billable Hours  <span></span></span>
                                          </div>

                                          <canvas id="canvasDoughnut" style="width: 330px; height: 165px; display: block;" width="660" height="330">
                                            
                                          </canvas>

                                        </div>
            
                                       </div>
                                     </div>
                                  </div>
                                  
                               
                                        </div>
                                        
                            </div>
                          </div>
                          <div class="col-sm-4 col-xs-12">
                                <div class="col-sm-8 row">
                                <input type="" class="form-control" placeholder="Search Reports" name="">
                              </div>
                              </div>
                       
                        <div class="x_content " >
                            
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
                                <li><a href="activ-custom-reports.php" title="">Custom Reports</a></li>

                                <li><a href="activ-billing-rate.php" title="">Activity Billing Rates</a></li>
                                 <li><a href="user-daily-hours.php" title="">Daily Hours by User</a></li>
                                <li><a href="user-daily-hours-summary.php" title="">Daily Activity Hours Summary - by User</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li><a href="activity-report.php" title="">Activities Report</a></li>
                             <li><a href="activity-summary-billable.php" title="">Summary of Billable Hours by Activity and User</a></li>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <legend>Time  Entries, Expenses</legend>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li><a href="custom-reports.php" title="">Custom Reports</a></li>
                                <li><a href="time-approval-history.php" title="">Timesheet Approval History</a></li>
                                
                                <li><a href="time-timesheet-approvel.php" title="">Timesheet Approvals</a></li>
                                <li><a href="time-entry-print.php" title="">Print Timesheets</a></li>
                                <li><a href="time-entry-client-expenses.php" title="">Client Expenses by Matter</a></li>

                                              <!--  -->
                              <li><a href="time-entry-period.php" title="">Time Entries for Period</a></li>

                                        <!-- time-entry-expenses.php -->
                                <li><a href="time-entry-expenses.php" title="">Expenses by Type</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>

                                        <!-- time-entry-expense-detail.php -->
                                <li><a href="time-entry-expense-detail.php" title="">Expense Entry Detail</a></li>

                                            <!-- time-entry-detail.php -->
                                <li><a href="time-entry-detail.php" title="">Time Entry Detail</a></li>

                                        <!--  time-entry-weekly-hours.php -->
                                <li><a href="time-entry-weekly-hours.php" title="">Weekly Hours</a></li>

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
