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
                <br/>
                <p>Dashboard / Labor and Expense Charges</p>
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
                    <div class="row">
                    <div class="col-sm-6">
                     <div class="form-group">
                               <div class="checkbox checkbox-inline checkbox-success form-group">
                                  <input type="checkbox" id="" value="">
                                  <label for="">  For all Clients and Matters </label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">  For selected Client   </label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">  For selected Matter   </label>
                              </div>
                              <div class="form-group">
                        <div class="radio radio-inline">
                          <input type="radio" name="" class="form-control">
                          <label>Detailed Report</label>
                        </div>
                        <div class="radio radio-inline">
                          <input type="radio" name="" class="form-control">
                          <label>Summary Report</label>
                        </div>
                      </div>
                    </div>

                            </div>
                            <div class="col-sm-6">
                             <form class=" form-group">
                          
                         <label for="ex4">From:</label>
                         
                           <input id="datetimepicker6" type="text" class="form-control" placeholder="03/1/2018">  
                         </form>
                         <form class="form-group">
                            <label for="ex4">To:</label>
                       
                            <input id="datetimepicker5" type="text" class="form-control" placeholder="03/1/2018">
                                    
                        
                        </form>
                        <button class="btn btn-primary">Refresh</button>
                      </div>
                    </div>
                      
                      <label>For period from Mar-01-2018 to Mar-23-2018</label>
                      <div class="table-responsive">
                        
                      <table class="table table-striped jambo_table bulk_action">
                                <colgroup width="35%"></colgroup>

                                <colgroup width="15%"></colgroup>

                                <colgroup span="6" width="8%"></colgroup>
                                <tbody><tr class="report_header_row">
                                 <th class="column-title" style="display: table-cell;">Client &gt; Matter</td>
                                 <th class="column-title" style="display: table-cell;">User</td>
                                  <th class="column-title" style="display: table-cell;">Hours</td>
                                  <th class="column-title" style="display: table-cell;">Billable Status</td>
                                 <th class="column-title" style="display: table-cell;">Hourly Billing Rate</td>
                                  <th class="column-title" style="display: table-cell;">Billed Labor</td>
                                  <th class="column-title" style="display: table-cell;">Project Expenses</td>
                                 <th class="column-title" style="display: table-cell;">Total Billed</td>
                                </tr>
                                <tr class="even pointer">
                                <td class="pname">Bill Brink &gt; Deposition of Christy Brink</td>
                                <td>Jeffrey Dracup</td>
                                <td>1.50</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$525.00</td>
                                <td>$0.00</td>
                                <td>$525.00</td>
                                </tr>
                                <tr class="odd pointer">
                                <td colspan="2">&nbsp;</td>
                                <td>1.50</td>
                                <td align="right" colspan="3">$525.00</td>
                                <td>$0.00</td>
                                <td>$525.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</td>
                                <td>Jeffrey Dracup</td>
                                <td>1.40</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$3,500.00</td>
                                <td>$3,500.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>1.40</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$3,500.00</td>
                                <td>$3,500.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Mediation</td>
                                <td>Jeffrey Dracup</td>
                                <td>1.40</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>1.00</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$350.00</td>
                                <td>($6,793.75)</td>
                                <td>($6,443.75)</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Terry Bell</td>
                                <td>0.50</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$175.00</td>
                                <td>$0.00</td>
                                <td>$175.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>2.90</td>
                                <td align="right" colspan="3">$525.00</td>
                                <td>($6,793.75)</td>
                                <td>($6,268.75)</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Casebolt Law Corp., PC. &gt; Forrest v. Wilks - Collection</td>
                                <td>Andrea McQueen</td>
                                <td>1.30</td>
                                <td>Billable</td>
                                <td>$95.00</td>
                                <td>$123.50</td>
                                <td>$0.00</td>
                                <td>$123.50</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>1.30</td>
                                <td align="right" colspan="3">$123.50</td>
                                <td>$0.00</td>
                                <td>$123.50</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Chris Ekholm / Tim Baker &gt; </td>
                                <td>Jeffrey Dracup</td>
                                <td>0.10</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.10</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Daniel Devoe &gt; Devoe v. Heinemann</td>
                                <td>Andrea McQueen</td>
                                <td>1.80</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.80</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>1.00</td>
                                <td>Billable</td>
                                <td>$250.00</td>
                                <td>$250.00</td>
                                <td>$0.00</td>
                                <td>$250.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Kimberly Burgraff</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>($375.00)</td>
                                <td>($375.00)</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>3.60</td>
                                <td align="right" colspan="3">$250.00</td>
                                <td>($375.00)</td>
                                <td>($125.00)</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">DP Internal / Admin &gt; Accounting by Maricar</td>
                                <td>Maricar Roldan</td>
                                <td>0.50</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.50</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">DP Internal / Admin &gt; DPmarketing</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.10</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.10</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">DP Internal / Admin &gt; Improve Firm Infrastructure</td>
                                <td>Jeffrey Dracup</td>
                                <td>1.60</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>1.60</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">DP Internal / Admin &gt; Work re Potential New Client</td>
                                <td>Jeffrey Dracup</td>
                                <td>3.00</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Terry Bell</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$10.00</td>
                                <td>$10.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>3.00</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$10.00</td>
                                <td>$10.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Dracup &amp; Patterson, ALC &gt; Medmark/Tony Rice/Justine Heist Collection</td>
                                <td>Brittany Dracup</td>
                                <td>3.60</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.50</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$26.00</td>
                                <td>$26.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>4.10</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$26.00</td>
                                <td>$26.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Duke Fightmaster &gt; General Legal Matters</td>
                                <td>Brittany Dracup</td>
                                <td>0.10</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Denise Diaz</td>
                                <td>2.30</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>6.80</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>9.20</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Gerald and Sima Moore &gt; Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356</td>
                                <td>Jeffrey Dracup</td>
                                <td>4.70</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Terry Bell</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$15.21</td>
                                <td>$15.21</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>4.70</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$15.21</td>
                                <td>$15.21</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Katherine Bryan, Kristie Griess, KB2 Consulting &gt; Willer Collection</td>
                                <td>Andrea McQueen</td>
                                <td>1.90</td>
                                <td>Billable</td>
                                <td>$95.00</td>
                                <td>$180.50</td>
                                <td>$0.00</td>
                                <td>$180.50</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Brittany Dracup</td>
                                <td>0.10</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Cynthia Thomas</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$231.23</td>
                                <td>$231.23</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>3.00</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$1,050.00</td>
                                <td>$0.00</td>
                                <td>$1,050.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Kimberly Burgraff</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$390.00</td>
                                <td>$390.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>5.00</td>
                                <td align="right" colspan="3">$1,230.50</td>
                                <td>$621.23</td>
                                <td>$1,851.73</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Madeline Vasely &gt; Vasely v. Chiu</td>
                                <td>Brittany Dracup</td>
                                <td>0.10</td>
                                <td>Billable</td>
                                <td>$145.00</td>
                                <td>$14.50</td>
                                <td>$0.00</td>
                                <td>$14.50</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>4.20</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$1,470.00</td>
                                <td>$0.00</td>
                                <td>$1,470.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>4.30</td>
                                <td align="right" colspan="3">$1,484.50</td>
                                <td>$0.00</td>
                                <td>$1,484.50</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Muhammed Hasan Mirza (Course) &gt; Course Media LLC v. Hasan Mirza</td>
                                <td>Cynthia Thomas</td>
                                <td>0.00</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>($4,455.35)</td>
                                <td>($4,455.35)</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Jeffrey Dracup</td>
                                <td>4.90</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$1,715.00</td>
                                <td>$0.00</td>
                                <td>$1,715.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Terry Bell</td>
                                <td>24.60</td>
                                <td>Billable</td>
                                <td>$350.00</td>
                                <td>$8,610.00</td>
                                <td>$16.80</td>
                                <td>$8,626.80</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>29.50</td>
                                <td align="right" colspan="3">$10,325.00</td>
                                <td>($4,438.55)</td>
                                <td>$5,886.45</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">No Client &gt; </td>
                                <td>Kimberly Burgraff</td>
                                <td>16.30</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">&nbsp;</td>
                                <td>Kimberly Burgraff</td>
                                <td>2.20</td>
                                <td>Billable</td>
                                <td class="warning">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>18.50</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Rachel Owenswalker &gt; Owenswalker v. Drug Company</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.10</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.10</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Single Cell Technology (SCT) &gt; Fund Raise - Mar 2015</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.80</td>
                                <td>Billable</td>
                                <td>$200.00</td>
                                <td>$160.00</td>
                                <td>$0.00</td>
                                <td>$160.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.80</td>
                                <td align="right" colspan="3">$160.00</td>
                                <td>$0.00</td>
                                <td>$160.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">Sycamore Entertainment, Inc. (Ed Sylvan) &gt; Plastic Nations (PNMR) v. Sampson / Sycamore</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.20</td>
                                <td>Billable</td>
                                <td>$495.00</td>
                                <td>$99.00</td>
                                <td>$0.00</td>
                                <td>$99.00</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.20</td>
                                <td align="right" colspan="3">$99.00</td>
                                <td>$0.00</td>
                                <td>$99.00</td>
                                </tr>
                                <tr class="white">
                                <td class="pname">TimeLedger &gt; Marketing</td>
                                <td>Jeffrey Dracup</td>
                                <td>0.80</td>
                                <td>Non-Billable</td>
                                <td>N/A</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                <td>N/A</td>
                                </tr>
                                <tr class="report_total_row">
                                <td colspan="2">&nbsp;</td>
                                <td>0.80</td>
                                <td align="right" colspan="3">$0.00</td>
                                <td>$0.00</td>
                                <td>$0.00</td>
                                </tr>
                                <tr class="report_total2_row">
                                <td align="right" colspan="2">Grand Totals</td>
                                <td>93.20</td>
                                <td align="right" colspan="3">$14,722.50</td>
                                <td>($7,434.86)</td>
                                <td>$7,287.64</td>
                                </tr>
                                </tbody></table>
                    </div>
                    <div class="col-md-3 text-left">
                                   <div class="row">

                                       <select name="" id="input" class="form-control" required="required">
                                         <option value="">Per Page</option>
                                          <option value="">100</option>
                                          <option value="">250</option>
                                          <option value="">300</option>
                                          <option value="">500</option>
                                       </select>
                                   </div>
                                </div>
                                <div class="col-md-9 text-right">
                                   <div class="row">
                                        <ul class="pagination" style="margin: 0;">
                                          <li><a href="#">&laquo;</a></li>
                                          <li><a href="#">1</a></li>
                                          <li><a href="#">2</a></li>
                                          <li><a href="#">3</a></li>
                                          <li><a href="#">4</a></li>
                                          <li><a href="#">5</a></li>
                                          <li><a href="#">&raquo;</a></li>
                                        </ul>
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
