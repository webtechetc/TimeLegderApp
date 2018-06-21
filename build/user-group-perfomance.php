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
        <div class="right_col" role="main">
          <div class="">
            <!-- <div class="page-title">
              <div class="title_left">
                <br>
                <p>Dashboard /Group and User Performance</p>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="col-xs-12 text-center">
                        <div class="row">
                          <form class="form-horizontal">
                            <div class="form-group">
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" checked="checked" type="radio">
                                <label>
                                 For all Users and Groups
                                </label>
                              </div>
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" type="radio">
                                <label>
                                  For selected Groups
                                </label>
                              </div>
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" type="radio">
                                <label>
                                 For selected Users
                                </label>
                              </div>
                             </div>
                          </form>
                          <form class="form-inline" style="margin-bottom: 20px;">
                              <div class="">
                                 <label for="ex4">For period from</label>
                                <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">     
                                <label for="ex4">To:</label>
                                <input id="datetimepicker5" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">
                                  <button class="btn btn-primary" type="button">Go</button>
                                </div>
                          </form>
                       

                      <div class="col-xs-12">
                          <div class="table-responsive">
                            <table class="table table-striped vertical-heading">
                            <tbody class=""><tr class="over-header">
                              <td colspan="10" style="background-color:white;">&nbsp;</td>
                              <td colspan="7">Productivity</td>
                              <td colspan="3">Training</td>
                            </tr>
                          <tr class="report_header_row " >
                          <td >User Name</td>
                          <td>User ID</td>
                          <td>Months since started working</td>
                          <td>Group</td>
                          <td>Total Workday Hours Possible</td>
                          <td>Billable Hours Entered</td>
                          <td>Non-Billable Hours Entered</td>
                          <td>Total Billable and Non-Billable Hours Entered</td>
                          <td>Amount Billed for Billable Hours</td>
                          <td>Compensation</td>
                          <td>Total Gross Profit from Labor</td>
                          <td>% Gross Profit from Labor</td>
                          <td>Billable Utilization:  Billable Hours Entered / Total Workday Hours</td>
                          <td>Non-Billable Utilization:  Non-Billable Hours Entered / Total Workday Hours</td>
                          <td>Ratio of Non-Billable to Billable Hours Entered</td>
                          <td>Compensation paid to get one Billable Hour</td>
                          <td>Compensation paid to get one Billable or Non-Billable Hour</td>
                          <td>Hours of Training Activity Received</td>
                          <td>Hours of Training Activity Received - To Date</td>
                          <td>Hours of Training Activity Received - in 12 Months Before This Time Period</td>
                          </tr>
                          <tr class="report_even_row">
                          <td align="left">Bell, Terry</td>
                          <td align="left">&nbsp;</td>
                          <td align="center">36</td>
                          <td align="left">&nbsp;</td>
                          <td align="center">40.00</td>
                          <td align="center">3.60</td>
                          <td align="center">0.00</td>
                          <td align="center">3.60</td>
                          <td align="center">$1,752.00</td>
                          <td align="center">$270.00</td>
                          <td align="center">$1,482.00</td>
                          <td align="center">548.9%</td>
                          <td align="center">100.0%</td>
                          <td align="center">0.0%</td>
                          <td align="center">0.0%</td>
                          <td align="center">$75.00</td>
                          <td align="center">$75.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td align="left">Burgraff, Kimberly</td>
                          <td align="left">&nbsp;</td>
                          <td align="center">1</td>
                          <td align="left">&nbsp;</td>
                          <td align="center">120.00</td>
                          <td align="center">0.00</td>
                          <td align="center">1.60</td>
                          <td align="center">1.60</td>
                          <td align="center">$0.00</td>
                          <td align="center">$32.00</td>
                          <td align="center">($32.00)</td>
                          <td align="center">-100.0%</td>
                          <td align="center">0.0%</td>
                          <td align="center">100.0%</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">$20.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          </tr>
                          <tr class="report_even_row">
                          <td align="left">Clarambeau, Adlore</td>
                          <td align="left">&nbsp;</td>
                          <td align="center">37</td>
                          <td align="left">&nbsp;</td>
                          <td align="center">40.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">-</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          <td align="center">0.00</td>
                          </tr>
                         
                          </tbody>
                          </table>
                        </div>
                      <div class="col-md-3 text-left" style="padding-top: 15px;">
                                   <div class="row">

                                       <select name="" id="input" class="form-control" required="required">
                                         <option value="">Per Page</option>
                                          <option value="">100</option>
                                          <option value="">250</option>
                                          <option value="">300</option>
                                          <option value="">500</option>
                                       </select>
                                   </div>
                                </div>
                                <div class="col-md-9 text-right">
                                   <div class="row">
                                        <ul class="pagination" >
                                          <li><a href="#">&laquo;</a></li>
                                          <li><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">4</a></li>
                                          <li><a href="#">5</a></li>
                                          <li><a href="#">&raquo;</a></li>
                                        </ul>
                                   </div>
                                </div>
                          <div class="form-group form-inline form-documents">
                    
                    <label><a href=""><i class="fa fa-print"></i> Print</a></label>
                    
                    <label><a href=""><i class="fa fa-file-pdf-o"></i> PDF</a></label>
                   
                   <label><a href=""><i class="fa fa-file-word-o"></i> MS Word</a></label>
                    
                    <label><a href=""><i class="fa fa-file-excel-o"></i> MS Excel</a></label>
                    
                    <label><a href=""><i class="fa fa-file"></i> CSV</a></label>
                     
                     <label><a href=""><i class="fa fa-file-text-o"></i> TEXT</a></label>

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
