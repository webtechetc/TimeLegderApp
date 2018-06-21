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
                <p>Dashboard / Hours by User</p>
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
                    <div class="col-md-12 col-sm-12 col-xs-12 settings-text">
                        <form class="form-inline" style="margin-bottom: 20px;">
                                 <label for="ex4">For period from</label>
                                <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">     
                                <label for="ex4">To:</label>
                                <input id="datetimepicker5" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">
                                  <button class="btn btn-primary" type="button">Go</button>
                          </form>
                          <p><strong>To see all data on one page -- please select one of these export formats:</strong></p>
                    </div>
                    <div class="form-group form-inline form-documents">
                          
                      <label><a href=""><i class="fa fa-print"></i> Print</a></label>
                      
                      <label><a href=""><i class="fa fa-file-pdf-o"></i> PDF</a></label>
                     
                     <label><a href=""><i class="fa fa-file-word-o"></i> MS Word</a></label>
                      
                      <label><a href=""><i class="fa fa-file-excel-o"></i> MS Excel</a></label>
                      
                      <label><a href=""><i class="fa fa-file"></i> CSV</a></label>
                       
                       <label><a href=""><i class="fa fa-file-text-o"></i> TEXT</a></label>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Bell, Terry</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                               
                                <th class="column-title" style="display: table-cell;">Client > Matter </th>
                                <th class="column-title" style="display: table-cell;">Billable</th>
                                <th class="column-title" style="display: table-cell;">Non-Billable </th>
                                <th class="column-title">Total</th>
                               
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" ">Total</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>                           
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Burgraff, Kimberly</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                               
                                <th class="column-title" style="display: table-cell;">Client > Matter </th>
                                <th class="column-title" style="display: table-cell;">Billable</th>
                                <th class="column-title" style="display: table-cell;">Non-Billable </th>
                                <th class="column-title">Total</th>
                               
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" ">Total</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>                           
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Diaz, Denise L</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                               
                                <th class="column-title" style="display: table-cell;">Client > Matter </th>
                                <th class="column-title" style="display: table-cell;">Billable</th>
                                <th class="column-title" style="display: table-cell;">Non-Billable </th>
                                <th class="column-title">Total</th>
                               
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" ">Total</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>                           
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Clarambeau, Adlore</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                               
                                <th class="column-title" style="display: table-cell;">Client > Matter </th>
                                <th class="column-title" style="display: table-cell;">Billable</th>
                                <th class="column-title" style="display: table-cell;">Non-Billable </th>
                                <th class="column-title">Total</th>
                               
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" ">Total</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>                           
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
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
