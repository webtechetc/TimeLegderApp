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
                <br/>
                <p>Dashboard / Matter Billing Options</p>
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
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="form-group form-inline form-documents">
                    
                    <label><a href=""><i class="fa fa-print"></i> Print</a></label>
                    
                    <label><a href=""><i class="fa fa-file-pdf-o"></i> PDF</a></label>
                   
                   <label><a href=""><i class="fa fa-file-word-o"></i> MS Word</a></label>
                    
                    <label><a href=""><i class="fa fa-file-excel-o"></i> MS Excel</a></label>
                    
                    <label><a href=""><i class="fa fa-file"></i> CSV</a></label>
                     
                     <label><a href=""><i class="fa fa-file-text-o"></i> TEXT</a></label>
                  </div>
                    <div class="table-responsive">
                      <table width="100%" border="0" class="table-bordered table table-striped " cellpadding="2" cellspacing="1" class="report_table">
                                <tbody><tr class="report_header_row">
                                <td width="40%">Matter</td>
                                <td width="15%">Invoice</td>
                                <td width="15%">Default Billable</td>
                                <td width="15%">Bill Time According To</td>
                                <td width="15%">Effective Hourly Rate</td>
                                <td>Expense Markup Rule</td>
                                <td>Effective Markup</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=422773&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Dracup &gt; ClientScore project</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=413701&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Dracup &gt; General Legal Matters</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=404204&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Dracup &gt; Severus Holdings work</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 6</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=445867&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Holland &gt; Termination of General Contractor</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=460271&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alice Kelly &gt; Quiet Title of 13894 Sagassum Ct</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=444317&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Amir Bahreman &gt; La Jolla CC&amp;R short-term rental research</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=458562&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Andrew Arter &gt; Escondido Residential Purchase</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">Flat Rate</td>
                                <td align="right">N/A</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=448223&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Ann Edwards &gt; Eviction - Clairemont Mesa Condo</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=415796&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Annette Borsack &gt; In re Marriage of Annette Borsack and William Borsack</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=415380&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Anthony Pels &gt; Pels v. Sister - 1766 Promenade Cir</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 2</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=459216&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Betty Hamilton &gt; Gift transfer of property to daughter</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=464400&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Brink &gt; Deposition of Christy Brink</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=418150&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; Equity for Work - Hourly</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$250.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=423077&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Contract Drafting</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=418149&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Equity for Work Agreement</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">Flat Rate</td>
                                <td align="right">N/A</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=420291&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; General Legal Matters</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=422045&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; nFusion opinion letter - flat rate</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">Flat Rate</td>
                                <td align="right">N/A</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=448246&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Blizzard Colin &gt; </a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=410512&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Blue Loyal &gt; PPDdatabase matter</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">Flat Rate</td>
                                <td align="right">N/A</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=403252&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brad Glaser &gt; Palming Off Matter</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=423323&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brandon Howard &gt; Mission Viejo Lease Dispute</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">Flat Rate</td>
                                <td align="right">N/A</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=392449&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; Business Sale - Feb-Apr 2015 only</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$295.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=416201&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; General Legal Matters (not for Shaw time)</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=405555&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; GreenTree Litgation</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=465969&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=463349&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Britzgo, Ltd. &gt; General Legal Matters</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=465975&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Casebolt Law Corp., PC. &gt; Forrest v. Wilks - Collection</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=406090&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Cathy Montie &gt; General Legal Matters</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=412290&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Cathy Montie &gt; Robert Ruggeri v Cathy Montie</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=410547&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; CCI v. Newkoa LLC et al</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=413397&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; General Legal Matters</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=413398&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; Temple Property Demand Letter</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">Flat Rate</td>
                                <td align="right">N/A</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=463937&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Chris Ekholm / Tim Baker &gt; </a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=461908&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Daniel Devoe &gt; Devoe v. Heinemann</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=463350&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Daniel Devoe &gt; Devoe v. Vizio</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=460545&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Daniel Rodriguez &gt; Lake Elsinore property line matter</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=397996&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Danny Cavic &gt; Cavic v. Forensic Accountant</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 6</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=406296&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Danny Ho / ICD Construction &gt; Blue Mountain Breach of Contract matter</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=413326&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Danny Ho / ICD Construction &gt; General Legal Matters</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=457532&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">David Wolff &gt; General Legal Work</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=413768&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DBG Partners, Inc. &gt; General Legal Matters</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=412283&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DBG Partners, Inc. &gt; Miller v DBG Partners</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="project.asp?pi=412283&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Matter</a></td>
                                <td align="left">20%</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=426385&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Dennis Spence &gt; Easements for 859 Anns Way</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=411971&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DKO International / Richard D Oh &gt; NMTech Korea Co., LTD. vs. DKO International, Inc.</a></td>
                                <td align="left">Combined</td>
                                <td align="left">Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=420678&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP - RoboLaw &gt; Mechanics Lien Machine #ME</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">User Rate 4</td>
                                <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=464390&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Accounting by Maricar</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$0.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=398353&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; DPmarketing</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$0.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=445978&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Improve Firm Infrastructure</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$0.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_even_row">
                                <td align="left"><a href="project.asp?pi=410204&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Work on Billing</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$0.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
                                </tr>
                                <tr class="report_odd_row">
                                <td align="left"><a href="project.asp?pi=410022&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Work re Potential New Client</a></td>
                                <td align="left">Separately</td>
                                <td align="left">Non-Billable</td>
                                <td align="left">Matter Rate 1</td>
                                <td align="right">$0.00</td>
                                <td align="left"><a href="expense_types.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">Expense Type</a></td>
                                <td align="left">var</td>
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
