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
                <p>Dashboard / Billable/Non-Billable Hours</p>
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
                      <div class="col-xs-12 text-center">
                        <div class="row">
                          <form class="form-horizontal">
                            <div class="form-group col-sm-6">
                              
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
                             <div class="form-group col-sm-6">
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
                        <div class="row">
                          <div class="table-responsive">          
                            <p><strong>For period from Apr-04-2018 to Apr-11-2018</strong></p>              
                              <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                  <tr class="headings">
                                    <th class="column-title text-center">Second User ID </th>
                                    <th class="column-title text-center">User </th>
                                    <th class="column-title text-center">Billable Hours</th>
                                    <th class="column-title text-center">%</th>
                                    <th class="column-title text-center">Non-Billable Hours</th>
                                    <th class="column-title text-center">%</th>
                                    <th class="column-title text-center">Total Hours</th>
                                    
                                  </tr>
                                </thead>

                                <tbody>
                                 <tr class="even pointer">
                                    <td>&nbsp;</td>
                                    <td>Bell, Terry</td>
                                    <td>3.20</td>
                                    <td>100.00%</td>
                                    <td>0.00</td>
                                    <td>0.00%</td>
                                    <td>3.20</td>
                                  </tr>
                                  <tr class="odd pointer">
                                    <td>&nbsp;</td>
                                    <td>Bell, Terry</td>
                                    <td>3.20</td>
                                    <td>100.00%</td>
                                    <td>0.00</td>
                                    <td>0.00%</td>
                                    <td>3.20</td>
                                  </tr>
                                  <tr class="even pointer">
                                     <td>&nbsp;</td>
                                    <td>Bell, Terry</td>
                                    <td>3.20</td>
                                    <td>100.00%</td>
                                    <td>0.00</td>
                                    <td>0.00%</td>
                                    <td>3.20</td>
                                  </tr>
                                  <tr class="odd pointer">
                                    <td>&nbsp;</td>
                                    <td>Bell, Terry</td>
                                    <td>3.20</td>
                                    <td>100.00%</td>
                                    <td>0.00</td>
                                    <td>0.00%</td>
                                    <td>3.20</td>
                                  </tr>
                                 
                                  <tr class="bg-info">
                                    <td>&nbsp;</td>
                                    <td>Total</td>
                                    <td>4.90</td>
                                    <td>36.57%</td>
                                    <td>8.50</td>
                                    <td>63.43%</td>
                                    <td>13.40</td>
                                    </tr>
                                </tbody>
                              </table>
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
