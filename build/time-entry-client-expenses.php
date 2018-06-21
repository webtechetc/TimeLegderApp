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
                <p>Dashboard / Client Expenses By Matter</p>
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
                              <td>&nbsp;</td>
                              <td>Bal Fwd</td>
                              <td>Court Doc Download Fee</td>
                              <td>Court Filing Fee</td>
                              <td>Discount</td>
                              <td>Mailing/Postage</td>
                              <td>Outside Services</td>
                              <td>Parking Fees</td>
                              <td>Payment</td>
                              <td>Retainer Replenishment</td>
                              <td>Search Fee</td>
                              <td>Total</td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Bill Brink &gt; Deposition of Christy Brink</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Andrea,McQueen</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">($2,625.00)</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>($2,625.00)</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($2,625.00)</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($2,625.00)</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Arbitration</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Jeffrey,Dracup</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$3,500.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$3,500.00</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$3,500.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$3,500.00</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Brent Wood, Gordon Wood, Guinevere Wood &gt; Wood v. Shaw Mediation</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Cynthia,Thomas</td>
                              <td align="right">$9,765.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">($10,429.50)</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>($664.50)</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Jeffrey,Dracup</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">($6,793.75)</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>($6,793.75)</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$9,765.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($17,223.25)</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($7,458.25)</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Daniel Devoe &gt; Devoe v. Heinemann</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Kimberly,Burgraff</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">($1,500.00)</td>
                              <td align="right">$1,125.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>($375.00)</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($1,500.00)</b></td>
                              <td align="right"><b>$1,125.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($375.00)</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">DP Internal / Admin &gt; Work re Potential New Client</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Terry,Bell</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$20.00</td>
                              <td align="right"><b>$20.00</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$20.00</b></td>
                              <td align="right"><b>$20.00</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Dracup &amp; Patterson, ALC &gt; Medmark/Tony Rice/Justine Heist Collection</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Jeffrey,Dracup</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$26.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$26.00</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$26.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$26.00</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Duke Fightmaster &gt; General Legal Matters</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Denise,Diaz</td>
                              <td align="right">$0.00</td>
                              <td align="right">$7.50</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$7.50</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$7.50</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$7.50</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Gerald and Sima Moore &gt; Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356 (Our File:  421-4356)</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Terry,Bell</td>
                              <td align="right">$0.00</td>
                              <td align="right">$15.21</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$15.21</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$15.21</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$15.21</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Katherine Bryan, Kristie Griess, KB2 Consulting &gt; Willer Collection</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Cynthia,Thomas</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$485.26</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$231.23</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$716.49</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Jeffrey,Dracup</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">($500.00)</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>($500.00)</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Kimberly,Burgraff</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$390.00</td>
                              <td align="right"><b>$390.00</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Terry,Bell</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$10.00</td>
                              <td align="right"><b>$10.00</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$485.26</b></td>
                              <td align="right"><b>($500.00)</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$231.23</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$400.00</b></td>
                              <td align="right"><b>$616.49</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Madeline Vasely &gt; Vasely v. Chiu</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Denise,Diaz</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$30.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$30.00</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Jeffrey,Dracup</td>
                              <td align="right">$1,436.45</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">($1,436.45)</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$0.00</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$1,436.45</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$30.00</b></td>
                              <td align="right"><b>($1,436.45)</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$30.00</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Medmark / Garrity Systems, Inc. &gt; General Legal Matters</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Terry,Bell</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$10.00</td>
                              <td align="right"><b>$10.00</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$10.00</b></td>
                              <td align="right"><b>$10.00</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Muhammed Hasan Mirza (Course) &gt; Course Media LLC v. Hasan Mirza</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              <td align="right">&nbsp;</td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Andrea,McQueen</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$4.10</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>$4.10</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left">Cynthia,Thomas</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$435.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$44.65</td>
                              <td align="right">$0.00</td>
                              <td align="right">($4,935.00)</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right"><b>($4,455.35)</b></td>
                              </tr>
                              <tr class="report_odd_row">
                              <td align="left">Terry,Bell</td>
                              <td align="right">$0.00</td>
                              <td align="right">$11.80</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$0.00</td>
                              <td align="right">$5.00</td>
                              <td align="right"><b>$16.80</b></td>
                              </tr>
                              <tr class="report_even_row">
                              <td align="left"><b>Subtotal:</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$11.80</b></td>
                              <td align="right"><b>$435.00</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$4.10</b></td>
                              <td align="right"><b>$44.65</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>($4,935.00)</b></td>
                              <td align="right"><b>$0.00</b></td>
                              <td align="right"><b>$5.00</b></td>
                              <td align="right"><b>($4,434.45)</b></td>
                              </tr>
                              <tr class="report_total_row">
                              <td align="left">Total expenses</td>
                              <td align="right">$11,201.45</td>
                              <td align="right">$34.51</td>
                              <td align="right">$4,420.26</td>
                              <td align="right">($500.00)</td>
                              <td align="right">$30.10</td>
                              <td align="right">$275.88</td>
                              <td align="right">$30.00</td>
                              <td align="right">($27,719.70)</td>
                              <td align="right">$1,125.00</td>
                              <td align="right">$435.00</td>
                              <td align="right"><b>($10,667.50)</b></td>
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
