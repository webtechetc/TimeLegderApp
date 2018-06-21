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
                <p>Dashboard / Timesheet Approval History</p>
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
                   <div class="col-sm-12">
                    
                      <div class="col-sm-3 settings-text"><a href=""><h4>Timesheet Review</h4></a>
                      </div>
                      <div class="col-sm-3 settings-text"><a href=""><h4>Timesheet Approvals</h4></a>
                      </div>
                      <div class="col-sm-3 settings-text"><a href=""> <h4>Timesheet Period Locking</h4></a>
                      </div>
                      <div class="col-sm-3 settings-text"><a href=""><h4>Show/Hide Users</h4></a>
                      </div>
                      <div class="col-sm-12 settings-text">
                      <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Also Show Hidden, Inactive and Terminated Users</label>
                              </div>
                      </div>
                    
                   </div>
                   <div class="col-sm-12">
                    <div class="table-responsive">

                    <table class="table table-striped jambo_table bulk_action table-bordered">
                      <span class="not-subted">Not Submitted</span> &nbsp;
                      <span class="sbmited">Submitted But Not Yet Approved</span>&nbsp;
                       <span class="approved">Approved</span> &nbsp;
                       <span class="locked-period">Locked Period</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="pull-right">Timesheet Period Ending</label>
                       
                          <tbody><tr class="headings">
                            <td align="center" width="20%">
                          <b>User</b>

                      </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=12/15/2017&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">15<br>Dec<br>2017</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=12/22/2017&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">22<br>Dec<br>2017</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=12/29/2017&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">29<br>Dec<br>2017</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=1/5/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">5<br>Jan<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=1/12/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">12<br>Jan<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=1/19/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">19<br>Jan<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=1/26/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">26<br>Jan<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=2/2/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">2<br>Feb<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=2/9/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">9<br>Feb<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=2/16/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">16<br>Feb<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=2/23/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">23<br>Feb<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=3/2/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">2<br>Mar<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=3/9/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">9<br>Mar<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=3/16/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">16<br>Mar<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=3/23/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">23<br>Mar<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=3/30/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">30<br>Mar<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=4/6/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">6<br>Apr<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=4/13/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">13<br>Apr<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=4/20/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">20<br>Apr<br>2018</a>
                          </td>

                          <td align="center" width="4%"><a href="timesheet_approve.asp?period=4/27/2018&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">27<br>Apr<br>2018</a>
                          </td>

                         </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=48226&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Bell, Terry</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50385&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Burgraff, Kimberly</a></td>


                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="submitted">1.00</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=48227&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Clarambeau, Adlore</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50138&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Diaz, Denise L</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=49076&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Dracup, Alex</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=49807&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Dracup, Brittany</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=48087&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Dracup, Jeffrey</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50128&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Jenkins, Michelle A</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=49844&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Jester, Myca</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50126&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Kiamilev, Chandra E</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50155&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Larmore, Thomas A</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50428&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      McQueen, Andrea A</a></td>


                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50125&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Payne, Richard</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=50344&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Roldan, Maricar</a></td>


                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>


                      </tr>

                      <tr>
                        <td><a href="timesheets.asp?tk=48865&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View User's Timesheets">
                      Thomas, Cynthia</a></td>


                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="not_submitted">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>

                          <td align="center" class="notimesheet">&nbsp;</td>


                      </tr>

                      </tbody></table>
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
