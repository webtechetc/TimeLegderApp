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
                <p>Dashboard / Compensation Amount</p>
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
                    <div class="col-sm-12 ">
                      
                        <form class="form-inline text-center" style="margin-bottom: 20px;">
                             
                                 <label for="ex4">For period from:</label>
                                <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text"> 
                              
                                
                                <label for="ex4">To:</label>
                                <input id="datetimepicker5" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">
                                
                                
                                  <button class="btn btn-primary" type="button">Refresh</button>
                               
                          </form>
                     
                     
                    </div>
                  </div>
                    <div class="table-responsive">
                      <table class=" table table-bordered  table-striped jambo_table">
                    <tbody><tr class="report_header_row">
                    <td>User</td>
                    <td>Client</td>
                    <td>Matter</td>
                    <td>Compensation Amount</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Bell, Terry</td>
                    <td align="left">Brent Wood, Gordon Wood, Guinevere Wood</td>
                    <td align="left">Wood v. Shaw Arbitration</td>
                    <td align="right">$37.50</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Bell, Terry</td>
                    <td align="left">Gerald and Sima Moore</td>
                    <td align="left">Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356</td>
                    <td align="right">$52.50</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Bell, Terry</td>
                    <td align="left">Michael Stith</td>
                    <td align="left">Adverse Possession of LA property</td>
                    <td align="right">$7.50</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Bell, Terry</td>
                    <td align="left">Muhammed Hasan Mirza (Course)</td>
                    <td align="left">Course Media LLC v. Hasan Mirza</td>
                    <td align="right">$22.50</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Bell, Terry</td>
                    <td align="left">No Client</td>
                    <td align="left">&nbsp;</td>
                    <td align="right">$187.50</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Burgraff, Kimberly</td>
                    <td align="left">No Client</td>
                    <td align="left">&nbsp;</td>
                    <td align="right">$64.00</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Diaz, Denise L</td>
                    <td align="left">Madeline Vasely</td>
                    <td align="left">Vasely v. Chiu</td>
                    <td align="right">$170.00</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Bill Brink</td>
                    <td align="left">Deposition of Christy Brink</td>
                    <td align="right">$25.00</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Britzgo, Ltd.</td>
                    <td align="left">General Legal Matters</td>
                    <td align="right">$175.00</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Duke Fightmaster</td>
                    <td align="left">General Legal Matters</td>
                    <td align="right">$50.00</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Gerald and Sima Moore</td>
                    <td align="left">Moore v. Neil, Dymott APLC (Robert Frank) File #421-4356</td>
                    <td align="right">$25.00</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Katherine Bryan, Kristie Griess, KB2 Consulting</td>
                    <td align="left">Willer Collection</td>
                    <td align="right">$825.00</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Madeline Vasely</td>
                    <td align="left">Vasely v. Chiu</td>
                    <td align="right">$200.00</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Rachel Owenswalker</td>
                    <td align="left">Disability Claim</td>
                    <td align="right">$100.00</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Rachel Owenswalker</td>
                    <td align="left">Owenswalker v. Drug Company</td>
                    <td align="right">$25.00</td>
                    </tr>
                    <tr class="report_odd_row">
                    <td align="left">Dracup, Jeffrey</td>
                    <td align="left">Yoram Kahana / Joyce Vinje</td>
                    <td align="left">LA Property Assessment</td>
                    <td align="right">$25.00</td>
                    </tr>
                    <tr class="report_even_row">
                    <td align="left">McQueen, Andrea A</td>
                    <td align="left">Katherine Bryan, Kristie Griess, KB2 Consulting</td>
                    <td align="left">Willer Collection</td>
                    <td align="right">$60.00</td>
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
