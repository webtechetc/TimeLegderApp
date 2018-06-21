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
           <!--  <div class="page-title">
              <div class="title_left">
                <br>
                <p>Dashboard / Print Timesheets</p>
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
                    <div class="text-center">
                    <form class=" form-inline">
                      <label>Select Timesheet Period ending:</label>
                     <select name="period" class="form-control">
                        <option value="3/16/2018" selected="">Mar-16-2018</option>
                        <option value="12/8/2017">Dec-08-2017</option>
                        <option value="8/4/2017">Aug-04-2017</option>
                        <option value="7/28/2017">Jul-28-2017</option>
                        <option value="1/1/2017">Jan-01-2017</option>
                        <option value="9/4/2016">Sep-04-2016</option>
                        <option value="8/28/2016">Aug-28-2016</option>
                        <option value="8/7/2016">Aug-07-2016</option>
                        <option value="5/8/2016">May-08-2016</option>
                        <option value="5/1/2016">May-01-2016</option>
                        <option value="4/10/2016">Apr-10-2016</option>
                        <option value="4/3/2016">Apr-03-2016</option>
                        <option value="3/20/2016">Mar-20-2016</option>
                        <option value="3/13/2016">Mar-13-2016</option>
                        <option value="3/6/2016">Mar-06-2016</option>
                        <option value="2/14/2016">Feb-14-2016</option>
                        <option value="1/31/2016">Jan-31-2016</option>
                        <option value="1/10/2016">Jan-10-2016</option>
                        <option value="12/27/2015">Dec-27-2015</option>
                        <option value="12/20/2015">Dec-20-2015</option>
                        <option value="10/4/2015">Oct-04-2015</option>
                        <option value="9/13/2015">Sep-13-2015</option>
                        <option value="8/9/2015">Aug-09-2015</option>
                        <option value="6/14/2015">Jun-14-2015</option>
                        <option value="5/3/2015">May-03-2015</option>
                        <option value="4/26/2015">Apr-26-2015</option>
                        <option value="4/19/2015">Apr-19-2015</option>
                        <option value="4/12/2015">Apr-12-2015</option>
                        </select>
                        <button class="btn btn-primary">Go</button>
                       </form>
                       <form class="form-group">
                        <div class="checkbox  checkbox-success">
                           <input type="checkbox" id="" value="">
                            <label for=""> Include Timesheets not approved  </label>
                     </div>
                     <div class="checkbox  checkbox-success">
                           <input type="checkbox" id="" value="">
                            <label for=""> Include Timesheets not submitted </label>
                     </div>
                   </form>
                    <p>No Timesheets were found for this period.</p>
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
