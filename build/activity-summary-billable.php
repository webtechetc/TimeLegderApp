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
                <p>Dashboard / Summary of Billable Hours by Activity and User</p>
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
                    <form class="form-horizontal">
                            <div class="form-group ">
                              
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
                                  <button class="btn btn-primary" type="button">Refresh</button>
                               

                          </form>
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
                  <div class="table-responsive">
                    <table class="table table-bordered  table-striped jambo_table">
                        <tbody><tr class="report_header_row">
                        <td>User Name</td>
                        <td>Activity</td>
                        <td>Matter</td>
                        <td>Billable Hours</td>
                        <td>Rate</td>
                        <td>Billable Amount</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Alex Dracup &gt; Severus Holdings work</td>
                        <td align="right">2.00</td>
                        <td align="right">$180.00</td>
                        <td align="right">$360.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Andrew Arter &gt; Escondido Residential Purchase</td>
                        <td align="right">2.30</td>
                        <td align="right">F</td>
                        <td align="right">F</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Ann Edwards &gt; Eviction - Clairemont Mesa Condo</td>
                        <td align="right">9.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$3,150.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Annette Borsack &gt; In re Marriage of Annette Borsack and William Borsack</td>
                        <td align="right">1.00</td>
                        <td align="right">$250.00</td>
                        <td align="right">$250.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Betty Hamilton &gt; Gift transfer of property to daughter</td>
                        <td align="right">1.50</td>
                        <td align="right">$350.00</td>
                        <td align="right">$525.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Bill Parkes, Chief Digital Advisors LLC &gt; Equity for Work - Hourly</td>
                        <td align="right">14.00</td>
                        <td align="right">$250.00</td>
                        <td align="right">$3,500.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Blizzard Colin &gt; </td>
                        <td align="right">1.80</td>
                        <td align="right">$350.00</td>
                        <td align="right">$630.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Brent Wood, Gordon Wood, Guinevere Wood &gt; General Legal Matters (not for Shaw time)</td>
                        <td align="right">0.20</td>
                        <td align="right">$350.00</td>
                        <td align="right">$70.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</td>
                        <td align="right">0.80</td>
                        <td align="right">$495.00</td>
                        <td align="right">$396.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Mediation</td>
                        <td align="right">23.80</td>
                        <td align="right">$350.00</td>
                        <td align="right">$8,330.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Brian Brent &gt; Yogurt Shack Incident of Aug 9 2014</td>
                        <td align="right">1.20</td>
                        <td align="right">$350.00</td>
                        <td align="right">$420.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Cathy Montie &gt; Robert Ruggeri v Cathy Montie</td>
                        <td align="right">84.40</td>
                        <td align="right">$250.00</td>
                        <td align="right">$21,100.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Daniel Rodriguez &gt; Lake Elsinore property line matter</td>
                        <td align="right">0.30</td>
                        <td align="right">$350.00</td>
                        <td align="right">$105.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Danny Ho / ICD Construction &gt; Blue Mountain Breach of Contract matter</td>
                        <td align="right">1.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$350.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Danny Ho / ICD Construction &gt; General Legal Matters</td>
                        <td align="right">0.50</td>
                        <td align="right">$350.00</td>
                        <td align="right">$175.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">David Wolff &gt; General Legal Work</td>
                        <td align="right">2.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$700.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Dennis Spence &gt; Easements for 859 Anns Way</td>
                        <td align="right">3.80</td>
                        <td align="right">$350.00</td>
                        <td align="right">$1,330.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">DP Internal / Admin &gt; Jennifer / Amy Moser collection</td>
                        <td align="right">0.30</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">DP Internal / Admin &gt; Work re Potential New Client</td>
                        <td align="right">2.60</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Dracup &amp; Patterson, ALC &gt; Veritext v. Dracup &amp; Patterson, ALC.</td>
                        <td align="right">29.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$10,150.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Eddy Lane / John Plag &gt; Lane v. Tran and Hua</td>
                        <td align="right">1.50</td>
                        <td align="right">$395.00</td>
                        <td align="right">$592.50</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Eddy Preciado &gt; Roofing dispute</td>
                        <td align="right">4.20</td>
                        <td align="right">$350.00</td>
                        <td align="right">$1,470.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Gerald and Sima Moore &gt; Moore - Insurance Demands</td>
                        <td align="right">1.70</td>
                        <td align="right">$395.00</td>
                        <td align="right">$671.50</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Gerald and Sima Moore &gt; Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356</td>
                        <td align="right">0.90</td>
                        <td align="right">$395.00</td>
                        <td align="right">$355.50</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Gerald and Sima Moore &gt; Whitfield v. Moore - Appeal Only</td>
                        <td align="right">93.60</td>
                        <td align="right">$395.00</td>
                        <td align="right">$36,972.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Gerald and Sima Moore &gt; Whitfield v. Moore - Matters other than appeal</td>
                        <td align="right">29.90</td>
                        <td align="right">$395.00</td>
                        <td align="right">$11,810.50</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Grecita and Angeline Enriquez &gt; 431 Graves Ave</td>
                        <td align="right">4.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$1,400.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Hope Howard &gt; 8653 West Olympic Blvd</td>
                        <td align="right">1.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$350.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Hugo Wende &gt; Wende Corp. v Free ATM, LLC</td>
                        <td align="right">2.20</td>
                        <td align="right">$350.00</td>
                        <td align="right">$770.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Jing Jaing &gt; Quiet Title Action</td>
                        <td align="right">1.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$350.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Jon Noceda, USN (Ret) &gt; Jon Noceda (ExpressPros) v ELD Logistics</td>
                        <td align="right">0.80</td>
                        <td align="right">$350.00</td>
                        <td align="right">$280.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Jon Noceda, USN (Ret) &gt; Roamcare - Synergy Franchise Purchase</td>
                        <td align="right">7.30</td>
                        <td align="right">$350.00</td>
                        <td align="right">$2,555.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Katherine Bryan, Kristie Griess, KB2 Consulting &gt; Willer Collection</td>
                        <td align="right">57.90</td>
                        <td align="right">$350.00</td>
                        <td align="right">$20,265.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Katherine Bryan, Kristie Griess, KB2 Consulting &gt; Willer Collection</td>
                        <td align="right">3.20</td>
                        <td align="right">$395.00</td>
                        <td align="right">$1,264.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Lonnie Hogan &gt; Goodwill Baptist Church v. Hogan</td>
                        <td align="right">1.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$350.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Madeline Vasely &gt; Vasely v. Chiu</td>
                        <td align="right">1.50</td>
                        <td align="right">$350.00</td>
                        <td align="right">$525.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Mario Serrano &gt; Lease Dispute - 7281 El Cajon Blvd</td>
                        <td align="right">2.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$700.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Mark Hagen / Margaret Willett &gt; Hagen v. Procopio / Cuba Beverage</td>
                        <td align="right">6.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$2,100.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Mary Molloy &gt; Molloy v. SLS Mortgage</td>
                        <td align="right">36.00</td>
                        <td align="right">$350.00</td>
                        <td align="right">$12,600.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Meagan Stevens &gt; Objection to Subpoena</td>
                        <td align="right">0.50</td>
                        <td align="right">$395.00</td>
                        <td align="right">$197.50</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Medmark / Garrity Systems, Inc. &gt; Kraft v. Medmark</td>
                        <td align="right">12.30</td>
                        <td align="right">$350.00</td>
                        <td align="right">$4,305.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">MG Architects (Mort Goodarzi) &gt; MG Architects Inc. v Paseo, LLC</td>
                        <td align="right">1.00</td>
                        <td align="right">$395.00</td>
                        <td align="right">$395.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Michael Artavia &gt; Auto Loan Contract</td>
                        <td align="right">5.30</td>
                        <td align="right">$395.00</td>
                        <td align="right">$2,093.50</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Michael Cook/Miguel Gonzo/Black Car &gt; General Legal Matters</td>
                        <td align="right">0.20</td>
                        <td align="right">$350.00</td>
                        <td align="right">$70.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Michael Stith &gt; Adverse Possession of LA property</td>
                        <td align="right">2.10</td>
                        <td align="right">$395.00</td>
                        <td align="right">$829.50</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Muhammed Hasan Mirza (Course) &gt; Course Media LLC v. Hasan Mirza</td>
                        <td align="right">29.40</td>
                        <td align="right">$350.00</td>
                        <td align="right">$10,290.00</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Natalie Dracup &gt; Natalie Dracup v RCOC  (PDV Medical Case)</td>
                        <td align="right">12.00</td>
                        <td align="right">$450.00</td>
                        <td align="right">$5,400.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">No Client &gt; </td>
                        <td align="right">16.30</td>
                        <td align="right">$495.00</td>
                        <td align="right">$8,068.50</td>
                        </tr>
                        <tr class="report_even_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">One Taste / Eli Block &gt; Fill out Venice Business License</td>
                        <td align="right">0.10</td>
                        <td align="right">$350.00</td>
                        <td align="right">$35.00</td>
                        </tr>
                        <tr class="report_odd_row">
                        <td align="left">Terry Bell</td>
                        <td align="left">&nbsp;</td>
                        <td align="left">Paige White &gt; Commission Split Arbitration</td>
                        <td align="right">1.30</td>
                        <td align="right">$0.00</td>
                        <td align="right">$0.00</td>
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
