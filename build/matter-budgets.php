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
                <p>Dashboard / Matter Budgets</p>
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
                            <label for="">Hide Matters with no budgets </label>
                     </div>
                      <div class="checkbox  checkbox-success ">
                           <input type="checkbox" id="" value="">
                            <label for="">Show person responsible  </label>
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
                              <td rowspan="2">Person Responsible</td>
                              <td rowspan="2"><a href="">Matter</a></td>
                              <td rowspan="2"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=8">Second Matter ID</a></td>
                              <td colspan="3">Time</td>
                              <td colspan="3">Labor</td>
                              <td colspan="3">Expense</td>
                              <td colspan="3">Labor + Expense</td>
                              </tr>
                              <tr class="report_header_row">
                              <td align="left"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=-2">Budget</a></td>
                              <td align="left"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=-3">Used</a></td>
                              <td align="right">%</td>
                              <td align="right"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=-4">Budget</a></td>
                              <td align="right"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=-5">Used</a></td>
                              <td align="right">%</td>
                              <td align="right"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=-6">Budget</a></td>
                              <td align="right"><a href="/tl/report_budgets.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;tk=49076&amp;showInactive=False&amp;hideZero=False&amp;billable=False&amp;resp=True&amp;sort=-7">Used</a></td>
                              <td align="right">%</td>
                              <td align="right">Budget</td>
                              <td align="right">Used</td>
                              <td align="right">%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=422773#budgets">Alex Dracup &gt; ClientScore project</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">49.80</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$150.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$150.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=413701#budgets">Alex Dracup &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">8.10</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=404204#budgets">Alex Dracup &gt; Severus Holdings work</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">26.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$360.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$360.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=445867#budgets">Alex Holland &gt; Termination of General Contractor</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">1.00</td>
                              <td align="right">0.70</td>
                              <td class="inrange" align="right">70.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$245.00</td>
                              <td class="inrange" align="right">32.7%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$750.00</td>
                              <td align="right">$245.00</td>
                              <td class="inrange" align="right">32.7%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=460271#budgets">Alice Kelly &gt; Quiet Title of 13894 Sagassum Ct</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">0.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$140.00</td>
                              <td class="inrange" align="right">7.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$2,000.00</td>
                              <td align="right">$140.00</td>
                              <td class="inrange" align="right">7.0%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=444317#budgets">Amir Bahreman &gt; La Jolla CC&amp;R short-term rental research</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">1.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$693.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">140.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$495.00</td>
                              <td align="right">$693.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">140.0%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=458562#budgets">Andrew Arter &gt; Escondido Residential Purchase</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">2.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$1,496.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=448223#budgets">Ann Edwards &gt; Eviction - Clairemont Mesa Condo</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">3.00</td>
                              <td align="right">9.30</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">310.0%</td>
                              <td align="right">$995.00</td>
                              <td align="right">$3,255.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">327.1%</td>
                              <td align="right">$455.00</td>
                              <td align="right">($2,928.00)</td>
                              <td class="inrange" align="right">-643.5%</td>
                              <td align="right">$1,450.00</td>
                              <td align="right">$327.00</td>
                              <td class="inrange" align="right">22.6%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=415796#budgets">Annette Borsack &gt; In re Marriage of Annette Borsack and William Borsack</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">20.00</td>
                              <td align="right">62.30</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">311.5%</td>
                              <td align="right">n/a</td>
                              <td align="right">$14,941.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">2,490.2%</td>
                              <td align="right">n/a</td>
                              <td align="right">$781.84</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">130.3%</td>
                              <td align="right">$600.00</td>
                              <td align="right">$15,722.84</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">2,620.5%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=415380#budgets">Anthony Pels &gt; Pels v. Sister - 1766 Promenade Cir</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">120.00</td>
                              <td align="right">7.10</td>
                              <td class="inrange" align="right">5.9%</td>
                              <td align="right">$5,000.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$1,000.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$6,000.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=459216#budgets">Betty Hamilton &gt; Gift transfer of property to daughter</a></td>
                              <td align="right">&nbsp;</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=464400#budgets">Bill Brink &gt; Deposition of Christy Brink</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">4.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,435.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">273.3%</td>
                              <td align="right">n/a</td>
                              <td align="right">($2,625.00)</td>
                              <td class="inrange" align="right">-500.0%</td>
                              <td align="right">$525.00</td>
                              <td align="right">($1,190.00)</td>
                              <td class="inrange" align="right">-226.7%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=418150#budgets">Bill Parkes, Chief Digital Advisors LLC &gt; Equity for Work - Hourly</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">15.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$3,850.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$3,850.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=423077#budgets">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Contract Drafting</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">4.60</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,150.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($1,150.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=418149#budgets">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Equity for Work Agreement</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">4.90</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$1,150.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=420291#budgets">Bill Parkes, Chief Digital Advisors LLC &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">1.20</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$150.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$150.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=422045#budgets">Bill Parkes, Chief Digital Advisors LLC &gt; nFusion opinion letter - flat rate</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">0.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">($995.00)</td>
                              <td class="inrange" align="right">-100.0%</td>
                              <td align="right">$995.00</td>
                              <td align="right">($995.00)</td>
                              <td class="inrange" align="right">-100.0%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=448246#budgets">Blizzard Colin &gt; </a></td>
                              <td align="right">&nbsp;</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=403252#budgets">Brad Glaser &gt; Palming Off Matter</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">3.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,041.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">231.3%</td>
                              <td align="right">n/a</td>
                              <td align="right">($437.30)</td>
                              <td class="inrange" align="right">-97.2%</td>
                              <td align="right">$450.00</td>
                              <td align="right">$603.70</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">134.2%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=423323#budgets">Brandon Howard &gt; Mission Viejo Lease Dispute</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">1.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">($350.00)</td>
                              <td class="inrange" align="right">-100.0%</td>
                              <td align="right">$350.00</td>
                              <td align="right">($350.00)</td>
                              <td class="inrange" align="right">-100.0%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=392449#budgets">Brent Wood, Gordon Wood, Guinevere Wood &gt; Business Sale - Feb-Apr 2015 only</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">4.20</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,150.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$1,150.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=416201#budgets">Brent Wood, Gordon Wood, Guinevere Wood &gt; General Legal Matters (not for Shaw time)</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">11.70</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$3,150.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($1,121.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$2,029.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=405555#budgets">Brent Wood, Gordon Wood, Guinevere Wood &gt; GreenTree Litgation</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">3.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$973.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($973.50)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=465969#budgets">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">4.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$148.50</td>
                              <td class="inrange" align="right">0.7%</td>
                              <td align="right">n/a</td>
                              <td align="right">$3,500.00</td>
                              <td class="inrange" align="right">17.5%</td>
                              <td align="right">$20,000.00</td>
                              <td align="right">$3,648.50</td>
                              <td class="inrange" align="right">18.2%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=463349#budgets">Britzgo, Ltd. &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=465975#budgets">Casebolt Law Corp., PC. &gt; Forrest v. Wilks - Collection</a></td>
                              <td align="right">&nbsp;</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=406090#budgets">Cathy Montie &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">16.90</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$4,125.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($4,150.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">($25.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=412290#budgets">Cathy Montie &gt; Robert Ruggeri v Cathy Montie</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">267.90</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$64,256.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($25,765.91)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$38,490.59</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=410547#budgets">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; CCI v. Newkoa LLC et al</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">24.40</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($642.51)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">($642.51)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=413397#budgets">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($695.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">($695.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=413398#budgets">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; Temple Property Demand Letter</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">3.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$695.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=463937#budgets">Chris Ekholm / Tim Baker &gt; </a></td>
                              <td align="right">&nbsp;</td>
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
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=461908#budgets">Daniel Devoe &gt; Devoe v. Heinemann</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">19.70</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$4,150.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">118.6%</td>
                              <td align="right">n/a</td>
                              <td align="right">($3,350.00)</td>
                              <td class="inrange" align="right">-95.7%</td>
                              <td align="right">$3,500.00</td>
                              <td align="right">$800.00</td>
                              <td class="inrange" align="right">22.9%</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=463350#budgets">Daniel Devoe &gt; Devoe v. Vizio</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">12.10</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$4,235.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($1,745.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$2,490.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=460545#budgets">Daniel Rodriguez &gt; Lake Elsinore property line matter</a></td>
                              <td align="right">&nbsp;</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=397996#budgets">Danny Cavic &gt; Cavic v. Forensic Accountant</a></td>
                              <td align="right">&nbsp;</td>
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
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=406296#budgets">Danny Ho / ICD Construction &gt; Blue Mountain Breach of Contract matter</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">7.90</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$2,765.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($1,995.00)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$770.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=413326#budgets">Danny Ho / ICD Construction &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">11.90</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$3,744.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($2,877.50)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$867.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=457532#budgets">David Wolff &gt; General Legal Work</a></td>
                              <td align="right">&nbsp;</td>
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
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=413768#budgets">DBG Partners, Inc. &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">2.20</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$715.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$715.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=412283#budgets">DBG Partners, Inc. &gt; Miller v DBG Partners</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">5.20</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,225.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">($469.72)</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$755.28</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=426385#budgets">Dennis Spence &gt; Easements for 859 Anns Way</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">4.10</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,435.00</td>
                              <td bgcolor="FF8080" class="overbudget" align="right">102.5%</td>
                              <td align="right">n/a</td>
                              <td align="right">($1,400.00)</td>
                              <td class="inrange" align="right">-100.0%</td>
                              <td align="right">$1,400.00</td>
                              <td align="right">$35.00</td>
                              <td class="inrange" align="right">2.5%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=420678#budgets">DP - RoboLaw &gt; Mechanics Lien Machine #ME</a></td>
                              <td align="right">&nbsp;</td>
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
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=464390#budgets">DP Internal / Admin &gt; Accounting by Maricar</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">1.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              <td align="right">$500.00</td>
                              <td align="right">$0.00</td>
                              <td class="inrange" align="right">0.0%</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=398353#budgets">DP Internal / Admin &gt; DPmarketing</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">11.90</td>
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
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=445978#budgets">DP Internal / Admin &gt; Improve Firm Infrastructure</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">3.70</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$200.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$200.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=410204#budgets">DP Internal / Admin &gt; Work on Billing</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">11.70</td>
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
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=410022#budgets">DP Internal / Admin &gt; Work re Potential New Client</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">39.80</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$0.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$69.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$69.30</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=463786#budgets">Dr. Edward Laurance &gt; General Legal Matters</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">0.50</td>
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
                              <tr class="report_odd_row" valign="top">
                              <td align="left">&nbsp;</td>
                              <td align="left"><a href="project.asp?pi=462876#budgets">Dracup &amp; Patterson, ALC &gt; Medmark/Tony Rice/Justine Heist Collection</a></td>
                              <td align="right">&nbsp;</td>
                              <td align="right">0.00</td>
                              <td align="right">21.90</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$1,382.50</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">n/a</td>
                              <td align="right">$45.00</td>
                              <td class="not-set" align="right">&nbsp;</td>
                              <td align="right">$0.00</td>
                              <td align="right">$1,427.50</td>
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
                                         <select name="" id="input" class="col-xs-12 form-control mobile-table-week" required="required">
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
