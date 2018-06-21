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
                <p>Dashboard / Work Descriptions</p>
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
                      <div class="col-sm-6">
                    <form class="form-horizontal">
                            <div class="form-group ">
                              
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
                          </form>
                          <form class="form-horizontal form-group">
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
                          </form>
                          
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
                      <div class="table-responsive">
                        <table class="table table-bordered  table-striped jambo_table" >
                    <tbody><tr class="report_header_row">
                    <td>Client</td>
                    <td>Matter</td>
                    <td>User</td>
                    <td width="50%">Description</td>
                    </tr>
                    <tr class="report_even_row">
                    <td>Bill Brink</td>
                    <td>Deposition of Christy Brink</td>
                    <td>Dracup, Jeffrey</td>
                    <td>Read and respond to email from Matt McMillan stating Christy Brink deposition is no longer necessary.</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td>Dracup &amp; Patterson, ALC</td>
                    <td>Medmark/Tony Rice/Justine Heist Collection</td>
                    <td>Bell, Terry</td>
                    <td>Search service address</td>
                    </tr>
                    <tr class="report_even_row">
                    <td>Duke Fightmaster</td>
                    <td>General Legal Matters</td>
                    <td>McQueen, Andrea A</td>
                    <td>Reviewed case info&lt;br&gt;Draft correspondence to opposing counsel&lt;br&gt;Email to attorney w/ questions and review of letter </td>
                    </tr>
                    <tr class="report_odd_row">
                    <td>Katherine Bryan, Kristie Griess, KB2 Consulting</td>
                    <td>Willer Collection</td>
                    <td>Dracup, Jeffrey</td>
                    <td>Read and respond to email from Andrew.</td>
                    </tr>
                    <tr class="report_even_row">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Review Colorado collection status - read and respond to emails from Andrew Toft.</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td>Madeline Vasely</td>
                    <td>Vasely v. Chiu and related matters</td>
                    <td>Diaz, Denise L</td>
                    <td>Draft outline re: hearing on Madsen's request for restraining order</td>
                    </tr>
                    <tr class="report_even_row">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Dracup, Jeffrey</td>
                    <td>Emails with Denise in preparation for April 25th hearing.</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Meeting with client.  Appear at downtown Madsen restraining order hearing.</td>
                    </tr>
                    <tr class="report_even_row">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Prepare for restraining order hearing tomorrow morning.</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td>Muhammed Hasan Mirza (Course)</td>
                    <td>Course Media LLC v. Hasan Mirza</td>
                    <td>Dracup, Jeffrey</td>
                    <td>Text with Mickey re: settlement.</td>
                    </tr>
                    <tr class="report_even_row">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Update Mickey on settlement status.</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td>No Client</td>
                    <td>&nbsp;</td>
                    <td>McQueen, Andrea A</td>
                    <td>Reviewed dismissal, made edits&lt;br&gt;Submit dismissal for e-filing</td>
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
