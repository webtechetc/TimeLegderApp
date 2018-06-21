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
                <p>Dashboard /Billing Rates by Activity</p>
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
                    
                    
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Bell, Terry</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                               
                                <th class="text-center">Activity Name</th>
                                <th class="text-center">Activity Category</th>
                                <th class="text-center">Rate 1</th>
                                <th class="text-center">Rate 2</th>
                                <th class="text-center">Rate 3</th>
                                <th class="text-center">Rate 4</th>
                                <th class="text-center">Rate 5</th>
                                <th class="text-center">Rate 6</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="text-center">
                                <td>
                                  <a href="#">Bell, Terry</a>
                                </td>
                                <td>$495.00</td>
                                <td>$450.00</td>
                                <td>$395.00</td>
                                <td>$350.00</td>
                                <td>$295.00</td>
                                <td>$180.00</td>
                                <td>$180.00</td>
                              </tr>
                              <tr class="text-center">
                                <td>
                                  <a href="#">Burgraff, Kimberly</a>
                                </td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                              </tr>
                              <tr class="text-center">
                                <td>
                                  <a href="#">Bell, Terry</a>
                                </td>
                                <td>$495.00</td>
                                <td>$450.00</td>
                                <td>$395.00</td>
                                <td>$350.00</td>
                                <td>$295.00</td>
                                <td>$180.00</td>
                                <td>$180.00</td>
                              </tr>
                              <tr class="text-center">
                                <td>
                                  <a href="#">Burgraff, Kimberly</a>
                                </td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
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
