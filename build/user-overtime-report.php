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
                <p>Dashboard / Overtime Report</p>
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
                    
                      <p class="text-center">Overtime is when an individual works more than specified hours in a day or more than specified hours in a week.</p>
                      <div class="row">
                   <div class="col-sm-6">
                    <form class="form-horizontal">
                            <div class="form-group ">
                              
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" type="radio">
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
                        </div>
                        <div class="col-sm-6">
                          <form class="" style="margin-bottom: 20px;">
                              <div class="form-group">
                                 <label for="ex4">For period from:</label>
                                <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text"> 
                                </div>
                                <div class="form-group">    
                                <label for="ex4">To:</label>
                                <input id="datetimepicker5" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">
                                 </div>
                                  <button class="btn btn-primary" type="button">Go</button>
                               

                          </form>
                        </div>
                      </div>
                      <div class="text-center">
                           <p>(The period is automatically adjusted to the whole weeks)</p>
                         </div>
                         <div class="table-responsive">
                         <table width="100%" border="0" cellpadding="2" cellspacing="1" class=" table table-bordered  table-striped jambo_table text-center">
                        <tbody>
                        <tr class="report_header_row">
                              <td rowspan="2">User / Group / Week</td>
                              <td colspan="2" >Threshold</td>
                              <td colspan="7" >Work Hours</td>
                              <td >Leave Hours</td>
                              <td colspan="3" rowspan="2">Overtime</td>
                              </tr>
                               <tr class="report_header_row">
                        <td>Day</td>
                        <td align="right">Week</td>
                        <td align="right">Sun</td>
                        <td align="right">Mon</td>
                        <td align="right">Tue</td>
                        <td align="right">Wed</td>
                        <td align="right">Thu</td>
                        <td align="right">Fri</td>
                        <td align="right">Sat</td>
                        <td align="right">Week</td>
                        </tr>
                        <tr class="report_even_row">
                        <td>&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_total_row">
                        <td>Bell, Terry</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">3.30</td>
                        <td align="right">0.50</td>
                        <td align="right">1.00</td>
                        <td align="right">1.10</td>
                        <td align="right">0.00</td>
                        <td align="right">1.50</td>
                        <td align="right">0.00</td>
                        <td align="right">7.40</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td class="pr">Apr-08-2018 ... Apr-14-2018</td>
                        <td align="right">8.00</td>
                        <td align="right">40.00</td>
                        <td align="right">3.30</td>
                        <td align="right">0.50</td>
                        <td align="right">1.00</td>
                        <td align="right">1.10</td>
                        <td align="right">0.00</td>
                        <td align="right">1.50</td>
                        <td align="right">0.00</td>
                        <td align="right">7.40</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td>&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_total_row">
                        <td>Burgraff, Kimberly</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">1.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.20</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">3.20</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td class="pr">Apr-08-2018 ... Apr-14-2018</td>
                        <td align="right">24.00</td>
                        <td align="right">168.00</td>
                        <td align="right">0.00</td>
                        <td align="right">1.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.20</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">3.20</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td>&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_total_row">
                        <td>Diaz, Denise L</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">2.50</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.20</td>
                        <td align="right">0.70</td>
                        <td align="right">0.00</td>
                        <td align="right">3.40</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td class="pr">Apr-08-2018 ... Apr-14-2018</td>
                        <td align="right">8.00</td>
                        <td align="right">40.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.50</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.20</td>
                        <td align="right">0.70</td>
                        <td align="right">0.00</td>
                        <td align="right">3.40</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td>&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_total_row">
                        <td>Dracup, Jeffrey</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">0.20</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.20</td>
                        <td align="right">4.80</td>
                        <td align="right">0.40</td>
                        <td align="right">0.40</td>
                        <td align="right">6.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td class="pr">Apr-08-2018 ... Apr-14-2018</td>
                        <td align="right">8.00</td>
                        <td align="right">40.00</td>
                        <td align="right">0.20</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.20</td>
                        <td align="right">4.80</td>
                        <td align="right">0.40</td>
                        <td align="right">0.40</td>
                        <td align="right">6.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td>&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_total_row">
                        <td>McQueen, Andrea A</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td class="pr">Apr-08-2018 ... Apr-14-2018</td>
                        <td align="right">24.00</td>
                        <td align="right">168.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.00</td>
                        <td align="right">0.00</td>
                        <td align="right">2.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td>&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_total2_row">
                        <td>Grand Total</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">3.50</td>
                        <td align="right">4.00</td>
                        <td align="right">1.00</td>
                        <td align="right">1.30</td>
                        <td align="right">7.20</td>
                        <td align="right">4.60</td>
                        <td align="right">0.40</td>
                        <td align="right">22.00</td>
                        <td align="right">0.00</td>
                        <td align="right">0.00</td>
                        </tr>
                        </tbody></table>
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
