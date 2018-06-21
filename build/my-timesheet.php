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
                <p>Dashboard / My Timesheet</p>
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
                    <div class="settings-text"><h4><label>Timesheets of Alex Dracup</label></h4></div>
                      <div class="table-responsive">
                        <div>
                     <span class="not-subted">Not Submitted</span> &nbsp;
                      <span class="sbmited">Submitted But Not Yet Approved</span>&nbsp;
                       <span class="approved">Approved</span> &nbsp;
                     </div>
                     <table class="table table-striped jambo_table bulk_action table-bordered">
                      <thead><tr class="heading">
                        <th>Status</th>
                        <th>Period</th>
                        <th>Date/time submitted</th>

                        <th>Hours</th>

                        <th>Expenses</th>

                        <th>Date Approved</th>
                        <th>Approved By</th>
                        <th>Locked</th>
                     </tr>
                   </thead>
                   <tbody>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=4/27/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  4/21/2018 - 4/27/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=4/20/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  4/14/2018 - 4/20/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=4/13/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  4/7/2018 - 4/13/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=4/6/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  3/31/2018 - 4/6/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=3/30/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  3/24/2018 - 3/30/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">3.50</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=3/23/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  3/17/2018 - 3/23/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=3/16/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  3/10/2018 - 3/16/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=3/9/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  3/3/2018 - 3/9/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=3/2/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  2/24/2018 - 3/2/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=2/23/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  2/17/2018 - 2/23/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=2/16/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  2/10/2018 - 2/16/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=2/9/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  2/3/2018 - 2/9/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=2/2/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  1/27/2018 - 2/2/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=1/26/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  1/20/2018 - 1/26/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=1/19/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  1/13/2018 - 1/19/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=1/12/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  1/6/2018 - 1/12/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=1/5/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  12/30/2017 - 1/5/2018</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=12/29/2017&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  12/23/2017 - 12/29/2017</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=12/22/2017&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  12/16/2017 - 12/22/2017</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  <tr>
                  <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                  <td>

                  <a href="report4approval.asp?date=12/15/2017&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View/Submit Timesheet details">
                  12/9/2017 - 12/15/2017</a></td>


                    <td>&nbsp;</td>
                    <td align="right">&nbsp;</td><td align="right">&nbsp;</td>
                    <td>&nbsp;</td><td>&nbsp;</td>

                  <td>&nbsp;</td>

                  </tr>

                  </tbody></table>
                      </div>
                      <div class="btn-group center">
                        <button class="btn btn-default">More...</button>
                        <button class="btn btn-primary">Show All</button>
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
