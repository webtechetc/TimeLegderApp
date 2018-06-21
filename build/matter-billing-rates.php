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
                <p>Dashboard / Bill Matter Time According To</p>
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
                    <div class="table-responsive">
                      <table width="100%" border="0" cellpadding="2" class="table-bordered table table-striped " cellspacing="1" class="report_table">
                              <tbody><tr class="report_header_row">
                              <th width="50%">Matter</th>
                              <th width="14%">Bill Time According To</th>
                              <th width="12%">Effective Hourly Rate or Total Cost</th>
                              <th width="12%">Users with Special Rates</th>
                              <th width="12%">Bill Time up to Date</th>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=422773&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Dracup &gt; ClientScore project</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=413701&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Dracup &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=404204&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Dracup &gt; Severus Holdings work</a></td>
                              <td align="left">User Rate 6</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">1</td>
                              <td align="right">$360.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=445867&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alex Holland &gt; Termination of General Contractor</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$245.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=460271&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Alice Kelly &gt; Quiet Title of 13894 Sagassum Ct</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$140.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=444317&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Amir Bahreman &gt; La Jolla CC&amp;R short-term rental research</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$693.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=458562&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Andrew Arter &gt; Escondido Residential Purchase</a></td>
                              <td align="left">Flat Rate</td>
                              <td align="right">$1,495.00</td>
                              <td align="center">N/A</td>
                              <td align="right">$1,495.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=448223&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Ann Edwards &gt; Eviction - Clairemont Mesa Condo</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">3</td>
                              <td align="right">$3,255.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=415796&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Annette Borsack &gt; In re Marriage of Annette Borsack and William Borsack</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$14,941.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=415380&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Anthony Pels &gt; Pels v. Sister - 1766 Promenade Cir</a></td>
                              <td align="left">User Rate 2</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=459216&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Betty Hamilton &gt; Gift transfer of property to daughter</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">3</td>
                              <td align="right">$525.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=464400&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Brink &gt; Deposition of Christy Brink</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">4</td>
                              <td align="right">$1,435.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=418150&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; Equity for Work - Hourly</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$250.00</td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$3,850.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=423077&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Contract Drafting</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$1,150.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=418149&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; Flat Rate Equity for Work Agreement</a></td>
                              <td align="left">Flat Rate</td>
                              <td align="right">$1,150.00</td>
                              <td align="center">N/A</td>
                              <td align="right">$1,150.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=420291&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$150.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=422045&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Bill Parkes, Chief Digital Advisors LLC &gt; nFusion opinion letter - flat rate</a></td>
                              <td align="left">Flat Rate</td>
                              <td align="right">$995.00</td>
                              <td align="center">N/A</td>
                              <td align="right">$995.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=448246&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Blizzard Colin &gt; </a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">3</td>
                              <td align="right">$735.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=410512&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Blue Loyal &gt; PPDdatabase matter</a></td>
                              <td align="left">Flat Rate</td>
                              <td align="right">$695.00</td>
                              <td align="center">N/A</td>
                              <td align="right">$695.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=403252&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brad Glaser &gt; Palming Off Matter</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$1,041.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=423323&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brandon Howard &gt; Mission Viejo Lease Dispute</a></td>
                              <td align="left">Flat Rate</td>
                              <td align="right">$350.00</td>
                              <td align="center">N/A</td>
                              <td align="right">$350.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=392449&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; Business Sale - Feb-Apr 2015 only</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$295.00</td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$1,150.50</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=416201&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; General Legal Matters (not for Shaw time)</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">10</td>
                              <td align="right">$3,150.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=405555&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; GreenTree Litgation</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">1</td>
                              <td align="right">$973.50</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=465969&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">9</td>
                              <td align="right">$148.50</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=463349&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Britzgo, Ltd. &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$70.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=465975&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Casebolt Law Corp., PC. &gt; Forrest v. Wilks - Collection</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">7</td>
                              <td align="right">$123.50</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=406090&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Cathy Montie &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">4</td>
                              <td align="right">$4,125.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=412290&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Cathy Montie &gt; Robert Ruggeri v Cathy Montie</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">6</td>
                              <td align="right">$64,256.50</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=410547&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; CCI v. Newkoa LLC et al</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=413397&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=413398&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">CCI - Cosmopolitan Commercial Inc. - John Lee &gt; Temple Property Demand Letter</a></td>
                              <td align="left">Flat Rate</td>
                              <td align="right">$695.00</td>
                              <td align="center">N/A</td>
                              <td align="right">$695.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=463937&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Chris Ekholm / Tim Baker &gt; </a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$210.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=461908&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Daniel Devoe &gt; Devoe v. Heinemann</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">7</td>
                              <td align="right">$4,150.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=463350&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Daniel Devoe &gt; Devoe v. Vizio</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$4,235.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=460545&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Daniel Rodriguez &gt; Lake Elsinore property line matter</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">4</td>
                              <td align="right">$140.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=397996&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Danny Cavic &gt; Cavic v. Forensic Accountant</a></td>
                              <td align="left">User Rate 6</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$306.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=406296&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Danny Ho / ICD Construction &gt; Blue Mountain Breach of Contract matter</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$2,765.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=413326&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Danny Ho / ICD Construction &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">3</td>
                              <td align="right">$3,744.50</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=457532&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">David Wolff &gt; General Legal Work</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$735.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=413768&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DBG Partners, Inc. &gt; General Legal Matters</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$715.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=412283&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DBG Partners, Inc. &gt; Miller v DBG Partners</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">8</td>
                              <td align="right">$1,225.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=426385&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">Dennis Spence &gt; Easements for 859 Anns Way</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">4</td>
                              <td align="right">$1,435.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=411971&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DKO International / Richard D Oh &gt; NMTech Korea Co., LTD. vs. DKO International, Inc.</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">5</td>
                              <td align="right">$560.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=420678&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP - RoboLaw &gt; Mechanics Lien Machine #ME</a></td>
                              <td align="left">User Rate 4</td>
                              <td align="right"><a href="report_tkrates.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199">various</a></td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=464390&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Accounting by Maricar</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$0.00</td>
                              <td align="center">2</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=398353&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; DPmarketing</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$0.00</td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=445978&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Improve Firm Infrastructure</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$0.00</td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><a href="project.asp?pi=410204&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Work on Billing</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$0.00</td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$0.00</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><a href="project.asp?pi=410022&amp;ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199#billrate">DP Internal / Admin &gt; Work re Potential New Client</a></td>
                              <td align="left">Matter Rate 1</td>
                              <td align="right">$0.00</td>
                              <td align="center">&nbsp;</td>
                              <td align="right">$0.00</td>
                              </tr>
                              </tbody></table>
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
