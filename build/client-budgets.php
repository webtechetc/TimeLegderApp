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
                <p>Dashboard / Client Budgets</p>
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
                  
                  <div class="x_content">
                    <form class=" form-inline form-group text-center">
                    <div class="checkbox  checkbox-success">
                           <input type="checkbox" id="" value="">
                            <label for="">Show billable time only </label>
                     </div>
                     <div class="checkbox  checkbox-success ">
                           <input type="checkbox" id="" value="">
                            <label for="">Include inactive Clients </label>
                     </div>
                     <div class="checkbox  checkbox-success ">
                           <input type="checkbox" id="" value="">
                            <label for="">Hide Clients with no budgets </label>
                     </div>
                    <button class="btn btn-primary btn-sm">Go</button>
                  </form>
                  <div class="form-group form-inline form-documents">
                    
                    <label><a href=""><i class="fa fa-print"></i> Print</a></label>
                    
                    <label><a href=""><i class="fa fa-file-pdf-o"></i> PDF</a></label>
                   
                   <label><a href=""><i class="fa fa-file-word-o"></i> MS Word</a></label>
                    
                    <label><a href=""><i class="fa fa-file-excel-o"></i> MS Excel</a></label>
                    
                    <label><a href=""><i class="fa fa-file"></i> CSV</a></label>
                     
                     <label><a href=""><i class="fa fa-file-text-o"></i> TEXT</a></label>
                  </div>
                    <div class="table-responsive">
                      <table class=" table-bordered table table-striped text-center" width="100%" cellspacing="1" cellpadding="2" border="0">
                        <tbody><tr class="report_header_row">
                        <td rowspan="2"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-1">Client</a></td>
                        <td rowspan="2"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=8">Second Client ID</a></td>
                        <td colspan="3">Time</td>
                        <td colspan="3">Labor</td>
                        <td colspan="3">Expense</td>
                        <td colspan="3">Labor + Expense</td>
                        </tr>
                        <tr class="report_header_row">
                        <td align="left"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-2">Budget</a></td>
                        <td align="left"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-3">Used</a></td>
                        <td align="right">%</td>
                        <td align="right"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-4">Budget</a></td>
                        <td align="right"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-5">Used</a></td>
                        <td align="right">%</td>
                        <td align="right"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-6">Budget</a></td>
                        <td align="right"><a href="/beta/report_clientbudgets.asp?ci=14317&amp;ti=49076&amp;fn=979256646&amp;td=43202&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;sort=-7">Used</a></td>
                        <td align="right">%</td>
                        <td align="right">Budget</td>
                        <td align="right">Used</td>
                        <td align="right">%</td>
                        </tr>
                        
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=161586#budgets">Annette Borsack</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">62.30</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$14,941.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$781.84</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$15,722.84</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=161419#budgets">Anthony Pels</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">7.10</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=182755#budgets">Betty Hamilton</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">1.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$525.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$525.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=184482#budgets">Bill Brink</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">4.40</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,435.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($2,625.00)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">($1,190.00)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=162780#budgets">Bill Parkes, Chief Digital Advisors LLC</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">26.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$5,150.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($2,145.00)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$3,005.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                       
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=149853#budgets">Brent Wood, Gordon Wood, Guinevere Wood</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">118.70</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$38,028.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($18,649.75)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$19,378.75</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=184055#budgets">Britzgo, Ltd.</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.20</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$70.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$20.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$90.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=185174#budgets">Casebolt Law Corp., PC.</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">1.30</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$123.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$123.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=156857#budgets">Cathy Montie</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">284.80</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$68,381.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($29,915.91)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$38,465.59</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=158738#budgets">CCI - Cosmopolitan Commercial Inc. - John Lee</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">27.70</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($1,337.51)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">($1,337.51)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=184281#budgets">Chris Ekholm / Tim Baker</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">1.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$210.00</td>
                        <td class="inrange" align="right">2.8%</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        <td align="right">$7,500.00</td>
                        <td align="right">$210.00</td>
                        <td class="inrange" align="right">2.8%</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=183576#budgets">Daniel Devoe</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">31.80</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$8,385.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">239.6%</td>
                        <td align="right">n/a</td>
                        <td align="right">($5,095.00)</td>
                        <td class="inrange" align="right">-145.6%</td>
                        <td align="right">$3,500.00</td>
                        <td align="right">$3,290.00</td>
                        <td class="almost-used" bgcolor="FFFF80" align="right">94.0%</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=183150#budgets">Daniel Rodriguez</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.40</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$140.00</td>
                        <td class="inrange" align="right">28.3%</td>
                        <td align="right">n/a</td>
                        <td align="right">($495.00)</td>
                        <td class="inrange" align="right">-100.0%</td>
                        <td align="right">$495.00</td>
                        <td align="right">($355.00)</td>
                        <td class="inrange" align="right">-71.7%</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=152649#budgets">Danny Cavic</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">1.70</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$306.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$306.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=156959#budgets">Danny Ho / ICD Construction</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">19.80</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$6,509.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($4,872.50)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$1,637.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=182052#budgets">David Wolff</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">2.10</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$735.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$735.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=160002#budgets">DBG Partners, Inc.</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">7.40</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,940.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($469.72)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$1,470.28</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=166919#budgets">Dennis Spence</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">4.10</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,435.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">102.5%</td>
                        <td align="right">n/a</td>
                        <td align="right">($1,400.00)</td>
                        <td class="inrange" align="right">-100.0%</td>
                        <td align="right">$1,400.00</td>
                        <td align="right">$35.00</td>
                        <td class="inrange" align="right">2.5%</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=159869#budgets">DKO International / Richard D Oh</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">1.60</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$560.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$7.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$567.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=164065#budgets">DP - RoboLaw</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">10.90</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=152812#budgets">DP Internal / Admin</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">74.60</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$386.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$386.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=184198#budgets">Dr. Edward Laurance</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        <td align="right">$1,000.00</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=156387#budgets">Dracup &amp; Patterson, ALC</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">116.60</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$12,715.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,282.18</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$13,997.68</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=183682#budgets">Duke Fightmaster</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">25.10</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$385.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$385.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=178408#budgets">Eddy Lane / John Plag</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">25.20</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$9,864.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">281.8%</td>
                        <td align="right">n/a</td>
                        <td align="right">($3,500.00)</td>
                        <td class="inrange" align="right">-100.0%</td>
                        <td align="right">$3,500.00</td>
                        <td align="right">$6,364.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">181.8%</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=178591#budgets">Eddy Preciado</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">4.70</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,645.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">365.6%</td>
                        <td align="right">n/a</td>
                        <td align="right">($700.00)</td>
                        <td class="inrange" align="right">-155.6%</td>
                        <td align="right">$450.00</td>
                        <td align="right">$945.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">210.0%</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=182843#budgets">Foshan Vohom Technology Co., Ltd</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">30.10</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$10,535.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">246.4%</td>
                        <td align="right">n/a</td>
                        <td align="right">($4,275.00)</td>
                        <td class="inrange" align="right">-100.0%</td>
                        <td align="right">$4,275.00</td>
                        <td align="right">$6,260.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">146.4%</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=155816#budgets">Gene and Sarina Vinson</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.30</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=160874#budgets">Gene Vinson</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.30</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$105.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$105.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=163579#budgets">Gerald and Sima Moore</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">56.00</td>
                        <td align="right">411.80</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">735.4%</td>
                        <td align="right">n/a</td>
                        <td align="right">$125,171.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">500.7%</td>
                        <td align="right">n/a</td>
                        <td align="right">($89,236.48)</td>
                        <td class="inrange" align="right">-356.9%</td>
                        <td align="right">$25,000.00</td>
                        <td align="right">$35,934.52</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">143.7%</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=156447#budgets">Gordon Wood</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">17.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$5,950.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($1,729.09)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$4,220.91</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=162249#budgets">Grecita and Angeline Enriquez</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">3.00</td>
                        <td align="right">5.60</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">186.7%</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,960.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">186.7%</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        <td align="right">$1,050.00</td>
                        <td align="right">$1,960.00</td>
                        <td class="overbudget" bgcolor="FF8080" align="right">186.7%</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=167751#budgets">Hope Howard</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">3.90</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$1,365.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$1,365.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=178989#budgets">Hugo Wende</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">2.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$875.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">$875.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                        <tr class="report_even_row" valign="top">
                        <td align="left"><a href="client.asp?cli=183494#budgets">Jason Haycraft/Llywelyn</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">0.50</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        <td align="right">n/a</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        <td align="right">$5,000.00</td>
                        <td align="right">$0.00</td>
                        <td class="inrange" align="right">0.0%</td>
                        </tr>
                        <tr class="report_odd_row" valign="top">
                        <td align="left"><a href="client.asp?cli=149862#budgets">Jason Longo</a></td>
                        <td align="left">&nbsp;</td>
                        <td align="right">0.00</td>
                        <td align="right">16.10</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">$5,600.00</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">n/a</td>
                        <td align="right">($6,785.00)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        <td align="right">$0.00</td>
                        <td align="right">($1,185.00)</td>
                        <td class="not-set" align="right">&nbsp;</td>
                        </tr>
                       
                        </tbody></table>
                    </div>
                    <div class="col-md-4  col-sm-4 col-xs-12 ">
                                     <div class="row">
                                          <ul class="pagination" style="margin: 0;">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                          </ul>
                                     </div>
                                  </div>
                                <div class="col-md-2 col-sm-3 ">
                                     <div class="row">

                                         <select name="" id="input" class="form-control desktop-table-week" required="required">
                                           <option value="">Rows per page:</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">100</option>
                                            <option value="">150</option>
                                         </select>
                                         <select name="" id="input" class="col-xs-12 form-control mobile-table-week" required="required" style="margin-top: 10px;">
                                           <option value="">Rows per page:</option>
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">15</option>
                                            <option value="">20</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                         </select>
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
