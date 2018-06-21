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
                <p>Dashboard / Timesheet Approvals</p>
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
                   <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-4 text-center"><h4><a href="">Timesheet Approval History</a></h4></div>
                      <div class="col-sm-4 text-center"><h4><a href="">Approve Timesheets</a></h4></div>
                      <div class="col-sm-4 text-center"><h4><a href="">Show/Hide Users</a></h4></div>
                      <div class="col-sm-12 text-center" style="margin: 10px;"><label>Timesheets for the period from Mar-10-2018 to Mar-16-2018</label></div>
                      <div class="col-sm-12 text-center approve" style="padding-top: 5px;"><p>This period is unlocked. The Users can enter time or expenses, edit existing entries
                                  and submit their Timesheets unless their individual Timesheets are locked.</p></div>
                                  <div>
                                    Below is a list of all Users on your approval list.<br>

                              Change timekeepers on your list. If you have permission, you can modify which Users are on your list.<br>

                              Approve Timesheets. As long as that User was not opened first on any other approver's Timesheet Approval report, you can:<br>

                             - Approve<br>
                             - Leave as not-approved, or<br>
                             - Lock and unlock any Timesheet<br>
                              If someone else is reviewing the Timesheet, you can see who is reviewing that User but you cannot make any changes until the other approver is finished, or doesn't make any changes for 5 minutes (after 5 minutes, all Timesheets on an approver's list are released automatically and become available to any other approver).<br><br>

                              You can check to see if a Timesheet has been released by periodically refreshing your screen.<br>
                                  </div>
                                  <form class="form-group form-inline settings-text">
                                    <label>Select Timesheet Period ending: </label>
                                    <select name="period" class="form-control" onchange="this.form.submit();">
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
                                  </form>
                    </div>                      
                </div>
                <div class="col-sm-12">
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action table-bordered">
                    <div >
                     <span class="not-subted">Not Submitted</span> &nbsp;
                      <span class="sbmited">Submitted But Not Yet Approved</span>&nbsp;
                       <span class="approved">Approved</span> &nbsp;
                     </div>
                     <div>
                       <span style="background-color: red">11 (61%) </span>
                       <span style="background-color: yellow">1 (6%)</span>
                      <span style="background-color: lightgreen">0 (0%)</span>

                     </div>
                    <tr class="headings">
                      <th><a href="/tl/timesheet_review.asp?sort=0&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Status</a></th>
                      <th><a href="/tl/timesheet_review.asp?sort=1&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">User</a></th>

                    <th><a href="/tl/timesheet_review.asp?sort=5&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Group</a></th>

                      <th><a href="/tl/timesheet_review.asp?sort=3&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Date/time submitted</a></th>

                      <th><a href="/tl/timesheet_review.asp?sort=2&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Hours</a></th>

                    <th><a href="/tl/timesheet_review.asp?sort=4&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Expenses</a></th>

                      <!-- <th>Approved</th> -->
                      <th>Date Approved</th>
                      <th>Approved By</th>
                      <th>Question</th>
                      <th>Locked</th>
                      <th>Currently Being<br>Reviewed By</th>
                   </tr>
                   </thead><thead class="tableFloatingHeader" style="display: none; opacity: 0;">
                    <tr>
                      <th><a href="/tl/timesheet_review.asp?sort=0&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Status</a></th>
                      <th><a href="/tl/timesheet_review.asp?sort=1&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">User</a></th>

                    <th><a href="/tl/timesheet_review.asp?sort=5&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Group</a></th>

                      <th><a href="/tl/timesheet_review.asp?sort=3&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Date/time submitted</a></th>

                      <th><a href="/tl/timesheet_review.asp?sort=2&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Hours</a></th>

                    <th><a href="/tl/timesheet_review.asp?sort=4&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;period=3%2F16%2F2018">Expenses</a></th>

                      <!-- <th>Approved</th> -->
                      <th>Date Approved</th>
                      <th>Approved By</th>
                      <th>Question</th>
                      <th>Locked</th>
                      <th>Currently Being<br>Reviewed By</th>
                   </tr>
                   </thead>
                   <tbody>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=48226&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Bell, Terry</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(48226, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=48227&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Clarambeau, Adlore</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(48227, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50138&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Diaz, Denise L</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50138, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=49076&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Dracup, Alex</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(49076, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=48087&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Dracup, Jeffrey</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(48087, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50128&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Jenkins, Michelle A</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50128, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50126&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Kiamilev, Chandra E</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50126, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50155&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Larmore, Thomas A</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50155, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50428&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                McQueen, Andrea A</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50428, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50125&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Payne, Richard</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50125, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon not_submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=48865&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Thomas, Cynthia</a> </td>


                    <td>&nbsp;</td>

                <!-- <td>&nbsp;</td> --><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                <td>&nbsp;</td><td>&nbsp;</td>

                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(48865, '3/10/2018', '3/16/2018', 0)" title="Send User a question.">
                </td>


                <td>&nbsp;</td><td>&nbsp;</td>

                </tr>

                <tr>
                <td align="center"><div class="timesheet_icon submitted">&nbsp;&nbsp;</div></td>
                <td>

                <a href="timesheet.asp?date=3/16/2018&amp;tk=50385&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199" title="View timesheet details">
                Burgraff, Kimberly</a> </td>


                    <td>&nbsp;</td>

                <td align="center"><nobr>Mar-13-2018</nobr> <nobr>1:20 PM</nobr></td>

                <td align="right">1.00</td>

                <td align="right">$195.00&nbsp;</td>

                <!-- <td align="center"><input type="checkbox"
                 disabled></td> -->
                <td align="center">&nbsp;</td>
                <td align="center">&nbsp;</td>


                <td align="center">
                <input type="button" value="?" style="min-width:2em;font-weight:bold" onclick="question(50385, '3/10/2018', '3/16/2018', 561445)" title="Send User a question.">
                </td>


                <td align="center">No
                </td>
                <td align="center">&nbsp;</td>

                </tr>

                  </tbody>
                </table>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary">SAVE</button>
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
