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
                <p>Dashboard / Total Time by Activity</p>
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
                      <table class="table table-bordered  table-striped jambo_table">
                          <tbody><tr class="report_header_row">
                          <td>Activity / Matter</td>
                          <td>Billable</td>
                          <td>Non-Billable</td>
                          <td>Total Hours</td>
                          </tr>
                          <tr class="report_even_row">
                          <td>&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          </tr>
                          <tr class="report_total_row">
                          <td>&lt; Unspecified &gt;</td>
                          <td align="right">17.60</td>
                          <td align="right">4.80</td>
                          <td align="right">22.40</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">Bill Brink &gt; Deposition of Christy Brink</td>
                          <td align="right">0.10</td>
                          <td align="right">0.00</td>
                          <td align="right">0.10</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</td>
                          <td align="right">0.80</td>
                          <td align="right">0.20</td>
                          <td align="right">1.00</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">Britzgo, Ltd. &gt; General Legal Matters</td>
                          <td align="right">0.70</td>
                          <td align="right">0.00</td>
                          <td align="right">0.70</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Dracup &amp; Patterson, ALC &gt; Medmark/Tony Rice/Justine Heist Collection</td>
                          <td align="right">0.10</td>
                          <td align="right">0.00</td>
                          <td align="right">0.10</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">Duke Fightmaster &gt; General Legal Matters</td>
                          <td align="right">0.00</td>
                          <td align="right">0.20</td>
                          <td align="right">0.20</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Gerald and Sima Moore &gt; Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356</td>
                          <td align="right">0.70</td>
                          <td align="right">0.10</td>
                          <td align="right">0.80</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">Katherine Bryan, Kristie Griess, KB2 Consulting &gt; Willer Collection</td>
                          <td align="right">4.90</td>
                          <td align="right">0.00</td>
                          <td align="right">4.90</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Madeline Vasely &gt; Vasely v. Chiu</td>
                          <td align="right">4.30</td>
                          <td align="right">0.00</td>
                          <td align="right">4.30</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">Michael Stith &gt; Adverse Possession of LA property</td>
                          <td align="right">0.10</td>
                          <td align="right">0.00</td>
                          <td align="right">0.10</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Muhammed Hasan Mirza (Course) &gt; Course Media LLC v. Hasan Mirza</td>
                          <td align="right">0.30</td>
                          <td align="right">0.00</td>
                          <td align="right">0.30</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">No Client &gt; </td>
                          <td align="right">5.50</td>
                          <td align="right">3.80</td>
                          <td align="right">9.30</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Rachel Owenswalker &gt; Disability Claim</td>
                          <td align="right">0.00</td>
                          <td align="right">0.40</td>
                          <td align="right">0.40</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td class="pr">Rachel Owenswalker &gt; Owenswalker v. Drug Company</td>
                          <td align="right">0.00</td>
                          <td align="right">0.10</td>
                          <td align="right">0.10</td>
                          </tr>
                          <tr class="report_even_row">
                          <td class="pr">Yoram Kahana / Joyce Vinje &gt; LA Property Assessment</td>
                          <td align="right">0.10</td>
                          <td align="right">0.00</td>
                          <td align="right">0.10</td>
                          </tr>
                          <tr class="report_odd_row">
                          <td>&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          <td align="right">&nbsp;</td>
                          </tr>
                          <tr class="report_total2_row">
                          <td>Grand Total</td>
                          <td align="right">17.60</td>
                          <td align="right">4.80</td>
                          <td align="right">22.40</td>
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
