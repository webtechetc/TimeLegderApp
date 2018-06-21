
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
                <p>Dashboard / Work Hours by User</p>
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
            </div>
 -->
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
                    
                    
                      <div class="row">
                              <div class="col-sm-6">
                                <div class="row">
                                <div class="col-sm-6">
                                 <select class="form-control" onchange="">
                                  <option value="0">New Report</option>
                                  </select>
                                   </div>
                                  <div class="col-sm-6">
                                    <h4><a href="">Setup Report</a></h4>
                              </div>
                            </div>
                            <div class="row">
                               <div class="col-sm-12">
                                <form class="form-horizontal">
                            <div class="form-group ">
                              
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" type="radio">
                                <label>
                                  For all Clients and Matters
                                </label>
                              </div>
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" type="radio">
                                <label>
                                For selected Clients
                                </label>
                              </div>
                              <div class="radio radio-inline">
                                 <input name="r" id="" value="" type="radio">
                                <label>
                                For selected Matters
                                </label>
                              </div>
                             </div>
                          </form>
                              </div>
                             </div>
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
                            <label >For period from Feb-06-2018 to Apr-14-2018</label>
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
                  <div class="table-responsive">
                    <table class="table table-bordered  table-striped jambo_table">
                        <tbody><tr class="report_header_row" valign="top">
                        <td>Date</td>
                        <td>Air Travel</td>
                        <td>Bal Fwd</td>
                        <td>Court Doc Download Fee</td>
                        <td>Court Filing Fee</td>
                        <td>Courtcall - Telephone Appearance Fee</td>
                        <td>Delivery charge</td>
                        <td>Total</td>
                        </tr>
                        <tr class="report_header_row" valign="top">
                        <td align="left">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left">Feb-06-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$11.95</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$11.95</b></td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left">Feb-07-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$15.55</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$15.55</b></td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left">Feb-10-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$1,436.45</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$1,436.45</b></td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left">Feb-25-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$457.76</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$457.76</b></td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left">Mar-01-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$15.21</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$15.21</b></td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left">Mar-09-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$11.80</td>
                        <td align="right">$435.00</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$446.80</b></td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left">Mar-20-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$3,500.00</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$3,500.00</b></td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left">Apr-10-2018</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">$7.50</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right">&nbsp;</td>
                        <td align="right"><b>$7.50</b></td>
                        </tr>
                        <tr class="report_total_row" valign="top">
                        <td align="left">TOTAL</td>
                        <td align="right">$0.00</td>
                        <td align="right">$1,436.45</td>
                        <td align="right">$34.51</td>
                        <td align="right">$4,420.26</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
                        <td align="right">$5,891.22</td>
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
