<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>App Timeledger</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/daterangepicker.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/daterangepicker.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- NProgress -->
   
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i" rel="stylesheet"> 

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col ">
          <div class="left_col scroll-view">
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Alex John</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li class="active"><a href="start.php"><i class="fa fa-edit"></i> Start</a></li>
                  <li><a href="time-entry.php"><i class="fa fa-desktop"></i> Time Entry </a></li>
                 <li><a href="expenses.php"><i class="fa fa-table"></i> Expenses </a></li>
                  <li><a href="reports.php"><i class="fa fa-bar-chart-o"></i> Reports </a></li>
                  <li><a href="maintenance.php"><i class="fa fa-dashboard"></i>Maintenance </a></li>
                  <li><a href="settings.php"><i class="fa fa-cogs"></i>Settings </a>
                   
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              
              <div class="logo-app"><img src="images/logo-alex.png" alt="app-logo"></div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Alex John
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a data-toggle="modal" href="javascript:;" data-target="#SupportModal">Support</a></li>
                    <li><a data-toggle="modal" href="javascript:;" data-target="#FeedbackModal">Feedback</a></li>
                    <li><a data-toggle="modal" href="javascript:;" data-target="#EmailModal">Email this Page</a></li>
                    <li><a data-toggle="modal" href="javascript:;" data-target="#FriendModal">Tell a Friend</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-blue">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
               <div class="title_left">
                <br/>
                <p>Dashboard / Start</p>
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

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> What would you like to do?</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                      <div class="row">
                       <a  href="time-entry.php" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-pencil"></i>
                              <h4>Make a Time Entry</h4>
                            </div>
                          </div>
                       </a>
                        <a href="#" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-pencil-square-o"></i>
                              <h4>Make an Expense Entry</h4>
                              
                            </div>
                          </div>
                        </a>
                        <a href="#" title="">
                           <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-file-text"></i>
                              <h4>View Reports</h4>
                              
                            </div>
                          </div>
                        </a>
                        <a href="#" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-cog"></i>
                              <h4>Change Company Settings</h4>
                              
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="row">
                        <a href="#" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-user"></i>
                              <h4>Add  Clients</h4>
                              
                            </div>
                          </div>
                        </a>
                       <a href="#" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-plus"></i>
                              <h4>Add  Matters</h4>
                              
                            </div>
                          </div>
                       </a>
                        <a href="#" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-user"></i>
                              <h4>Add  Users</h4>
                              
                            </div>
                          </div>
                        </a>
                        <a href="#" title="">
                          <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                              <i class="fa fa-download"></i>
                              <h4>Desktop Timeledger Download</h4>
                            </div>
                          </div>
                        </a>
                      </div>
                  </div>
                </div>
              </div>
              <!-- 2nd -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> What would you like to do?</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                      <div class="row">
                        <ul id="whats_new">

    <li><b>New Time Entry View - Matches your Timesheet approval period</b><br>We've added a new way to make time entries: Timesheet Period View - that matches the Timesheet period on your company <a href="companies.asp#timesheet-approval-settings">Settings</a>. The new view adds some cool features: you can click on any row and make multiple separate entries for any Client&gt;Matter and see the full detail of your work descriptions. Click <a href="tsview.asp">here</a> to see Timesheet Period View now!
    </li><li><b>Select Your TimeLedger Color Palette</b><br>On Settings &gt; TimeLedger Appearance - change the colors for TimeLedger.   As an Administrator, you can allow each user to select their own colors, or require the same colors for all users.  Users can set their own palette on Settings &gt; Your Settings. <a href="companies.asp#tl-appearance">Click here</a> to check it out!
    </li><li><b>Upload Expense Receipts</b><br>Upload images of expense receipts - on the Expense Entry page - <a href="expense.asp">check it out now!</a> Also upload expense receipt images from any mobile smartphone (Android, Blackberry, Windows, etc.)   at m.TimeLedger.com  (Download the iPhone app from the Apple App Store)
    </li><li><b>TimeLedger Mobile</b><br>TimeLedger Mobile - instantly available, without requiring any download, for iPhone, Android, Blackberry and any other smartphone with Internet access. Try it now! <a href="http://m.timeledger.com">m.TimeLedger.com</a>
    </li><li><b>Budget Alerts</b><br>Administrators and Managers can now view and set an unlimited amount of project budget milestone alerts directly on the project maintenance pages.   Budgets can be set for labor and expenses -- either as a single combined budget, or in separate budgets.   Total hours can also be budgeted and set for milestone alerts.   Each alert can have its own message, which can be emailed to any number of recipients.  <a href="projects.asp"> Check it out now by selecting a project and viewing its maintenance page</a>.
    </li><li><b>Email Time Entries Directly Into TimeLedger</b><br>Email your time entries - now you can email time entries to a unique TimeLedger email address we've assigned to you.  Then the next time you log into TimeLedger you can review, edit and approve your emailed entries.  <a href="ee_setuid.asp">Try it out now.</a>
    </li></ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          Copyright © 1997-2018 Equative, Inc. All Rights Reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   
    <!-- Custom Theme Scripts -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.js"></script>
      <!-- bootstrap-daterangepicker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/Chart.js/dist/Chart.js"></script>
    <script src="js/echarts/dist/echarts.min.js"></script>

 


     <script src="js/custom.js"></script>
      <script src="js/custom-script.js"></script>


  

<!-- ======================================================   MODALS    =================================================== -->
              <!-- Feedback-Modal -->
              
              <div class="modal fade fdback" id="FeedbackModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2>Feedback</h2>
                </div>
                <div class="modal-body">
                  <form class="form-group">
                  <label class="">Things you do not like about this page:</label>
                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                    
                    <label>Things you like about this page:</label>
                      <textarea class="form-control" rows="3" placeholder=""></textarea>
                      <label>Suggestions to make TimeLedger better:</label>
                     <textarea class="form-control" rows="3" placeholder=""></textarea>
                     </form>
                      <button class="btn btn-primary">Send These Comments</button>
                      
                </div>
                <div class="modal-footer">
                  Copyright © 1997-2018 Equative, Inc. All Rights Reserved. &nbsp&nbsp&nbsp
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
                          <!-- Feedback-Modal END -->

                          <!-- Support-Modal -->
          <div class="modal fade" id="SupportModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2>Support</h2>
                </div>
                <div class="modal-body">
                    <div class="">
                        <p>&nbsp&nbsp&nbsp Equative, Inc. provides free support and training for both Free Trial and Licensed Users. If there is something about TimeLedger that doesn't work for you, we want to know about it.</p>
                       <hr>
                       <h3>Equative, Inc. offers:</h3>
                       <ul>
                     <li>Free Training and Support by email and telephone:</li>
                    <li>Email <a href="mailto:support@timeledger.com">support@timeledger.com</a> or</li>
                  <li>Call (800) 239-2201   </li>
                <li>(Monday - Friday 8 a.m. to 5 p.m. PST Pacific Standard Time)</li>
              <br>
                  <li>To schedule on-site training and support, email us at <a href="mailto:support@timeledger.com">support@timeledger.com</a> or</li>
                     <li>Call Customer Support at (800) 239-2201</li>
                       <li>(Monday - Friday 8:00 a.m. to 5:00 p.m. PST Pacific Standard Time)</li>
                 <ul>
              </div>
                </div>
                <div class="modal-footer">
                 Copyright © 1997-2018 Equative, Inc. All Rights Reserved. &nbsp&nbsp&nbsp&nbsp
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
                      <!-- Support-Modal END -->
                      <!-- Email This page Modal -->
          <div class="modal fade" id="EmailModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2>Email This Page</h2>
                </div>
                <div class="modal-body">
                  <h3>Emailable Report</h3>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">To<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">For:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="" value="alexpdracup@gmail.com" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Subject:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" value="Timeledger Report" type="text" name="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Note:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                  Copyright © 1997-2018 Equative, Inc. All Rights Reserved.&nbsp&nbsp&nbsp
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

                    <!-- Email This Page Modal END -->
                    <!-- Tell a Friend Modal -->
          <div class="space">
          <div class="modal fade" id="FriendModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2> Tell a Friend</h2>
                </div>
                <div class="modal-body">
                  <form class="form-group " >
                      <label for="">1. Enter your e-mail address:</label>
                      <input type="text" id="" class="form-control" name="" required />
                      <label for="email">2. Enter e-mail addresses of people who might be interested in trying TimeLedger:</label>
                      <div class="row">
                      <div class="col-sm-6" >
                        <input type="" name="" class="form-control">
                      </div>
                    <div class="col-sm-6">
                      <input type="" name="" class="form-control">
                    </div>
                  </div>
                    <div class="row" >
                    <div class="col-sm-6">
                      <input type="" name="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                      <input type="" name="" class="form-control">
                    </div>
                    </div>
                 </form>
              <label>3. Review and/or revise the message to be emailed:</label>
                  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2" for="">Subject:</label>
                        <div class="col-xs-8">
                          <input type="text" id="" name="" value="Web-based time tracking and billing software." required="required" class="form-control  col-xs-10"  required />
                        </div>
                      </div>
                       <div class="col-lg-12"></div>
                    <div ><center><p><textarea cols="55" name="body" rows="4" class="form-control" tabindex="9">Hello!

I wanted to tell you about www.TimeLedger.com - an easy to setup and use online 
time and expense tracking application for small to large companies.   

Your organization can be setup and using
www.TimeLedger.com in one hour.

TimeLedger &lt;http://www.TimeLedger.com&gt; allows companies and organizations of
1 to 10,000 people to collect timesheet and expense information from people
through mobile devices such as iPhones, iPads and Android phones and through any web browser.

Employees and contractors can also record time and expenses offline on their laptop or desktop
and also offline using their mobile phones.   Then as soon as they have cell service or WiFi access, 
their data is automatically synchronized to the main TimeLedger servers.

TimeLedger can produce thousands of graphs, charts and reports and includes 
powerful ad hoc reporting.   It send email alerts to remind users and
managers of when projects are running over time and/or expense budgets, and when timesheets 
need to be submitted for approval.   TimeLedger has a robust approval system that allows
managers to review individual timesheet detail, ask questions directly to users, and to lock and unlock 
time entries before final timesheet approval.

Try the fully-functional TimeLedger Free Trial right now at:
http://www.timeledger.com/signup/

In the Free Trial, you can add any number of users, groups and departments.


Contact TimeLedger at sales@timeledger.com 

Equative, Inc.
270 N. El Camino Real #510
Encinitas, CA 92024-2874

Or call at (800) 239-2201
</textarea></p></center></div></td>
                  <button class="btn btn-primary">Send Email Now</button>
                </div>
                <div class="modal-footer">
                  Copyright © 1997-2018 Equative, Inc. All Rights Reserved.
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- ======================================================   MODALS END   =================================================== -->
  </body>
</html>
