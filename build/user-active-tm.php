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
                <p>Dashboard / Your Active TimeLedger Users</p>
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
                       <p> Date Range: Mar 26, 2018 - Apr 25, 2018 </p>
                        <form class="form-inline">
                             <label for="ex4">For</label>
                            <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">     
                              <button class="btn btn-primary" type="button">Go</button>
                        </form>
                    </div>
                  
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Bell, Terry</legend>
                          <table class="table table-striped jambo_table bulk_action text-center">
                            <thead>
                              <tr class="headings ">
                                <th class="text-center">#</th>
                                <th class="text-center">User Name</th>
                                <th class="text-center">Permission Level</th>
                                <th class="text-center">Logins</th>
                                <th class="text-center">Time Entries</th>
                                <th class="text-center">Expense Entries</th>
                                <th class="text-center">Comment</th>
                              </tr>
                            </thead>

                            <tbody>
                             <tr class="text-center">
                                <td>1</td>
                                <td><a href="#">Bell, Terry</a></td>
                                <td>Timekeeper</td>
                                <td>5</td>
                                <td>15</td>
                                <td>3</td>
                                <td><a href="#">Added on 04/22/2015</a>&nbsp;</td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td><a href="#">Burgraff, Kimberly</a></td>
                                <td>Timekeeper</td>
                                <td>5</td>
                                <td>15</td>
                                <td>3</td>
                                <td><a href="#">Added on 04/22/2015</a>&nbsp;</td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td><a href="#">Diaz, Denise</a></td>
                                <td>Timekeeper</td>
                                <td>5</td>
                                <td>15</td>
                                <td>3</td>
                                <td><a href="#">Added on 04/22/2015</a>&nbsp;</td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td><a href="#">Clarambeau, Adlore</a></td>
                                <td>Timekeeper</td>
                                <td>5</td>
                                <td>15</td>
                                <td>3</td>
                                <td><a href="#">Added on 04/22/2015</a>&nbsp;</td>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td><a href="#">Bell, Terry</a></td>
                                <td>Timekeeper</td>
                                <td>5</td>
                                <td>15</td>
                                <td>3</td>
                                <td><a href="#">Added on 04/22/2015</a>&nbsp;</td>
                            </tr>
                             
                            </tbody>
                          </table>
                        </div>
                        <p><b>Total TimeLedger Users Mar 26, 2018 - Apr 25, 2018: 12<b></b></b></p>
                        <p>TimeLedger subscription fees are based on the maximum number of users your organization has set to "Active" status on the 
Timekeeper Maintenance screens during the period of the 26th of each month through the 25th of the following month.</p>
<p>For example -- if your company had a maximum of 100 users set to "Active" status between and including January 26th and February 
25th (Pacific Time), your company would be invoiced for those 100 users on February 26th.</p>
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
