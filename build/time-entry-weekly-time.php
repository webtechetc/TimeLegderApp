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
            <div class="page-title">
             <!--  <div class="title_left">
                <br>
                <p>Dashboard / Weekly Time report</p>
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
                    <div class="text-center">
                    <form class="form-group form-inline">
                      <label>For:</label>
                      <select name="tk" id="tk" multiple="" class="form-control">
                          <option value="48226">Bell, Terry</option>
                          <option value="50385">Burgraff, Kimberly</option>
                          <option value="48227">Clarambeau, Adlore</option>
                          <option value="50138">Diaz, Denise L</option>
                          <option value="49076" selected="">Dracup, Alex</option>
                          <option value="49807">Dracup, Brittany</option>
                          <option value="48087">Dracup, Jeffrey</option>
                          <option value="50128">Jenkins, Michelle A</option>
                          <option value="50126">Kiamilev, Chandra E</option>
                          <option value="50155">Larmore, Thomas A</option>
                          <option value="50428">McQueen, Andrea A</option>
                          <option value="50125">Payne, Richard</option></select>
                    </form>
                    <form class="form-group form-inline">
                      <label>Month</label>
                      <select class="form-control" id="smonth" name="smonth">
                        <option selected="" value="4"> April</option>
                          <option value="1">January</option>
                          <option value="2">February</option>
                          <option value="3">March</option>
                          <option value="4">April</option>
                          <option value="5">May</option>
                          <option value="6">June</option>
                          <option value="7">July</option>
                          <option value="8">August</option>
                          <option value="9">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                          </select>
                  <label>Year</label>
                  <select id="syear" class="form-control" name="syear"><option selected="" value="2018"> 2018</option>
                       
                          <option value="2016">2016</option>
                        
                          <option value="2017">2017</option>
                        
                          <option value="2018">2018</option>
                        
                          <option value="2019">2019</option>
                        
                          <option value="2020">2020</option>
                        
                          <option value="2021">2021</option>
                        
                          <option value="2022">2022</option>
                        
                          <option value="2023">2023</option>
                        
                          <option value="2024">2024</option>
                        
                          <option value="2025">2025</option>
                        
                         </select>
                    </form>
                    <div style="padding-bottom: 20px;">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                  </div>
                  <label>Alex Dracup</label>
                  <div class="table-responsive">

                    <table class="table table-bordered  table-striped jambo_table">
                             <tbody><tr class="report_header_row">
                                  <td></td>
                                  <td class="white"><b>Week Beginning</b></td>
                                  <td class="white"><b>Work</b></td>
                                  <td class="white"><b>Sick</b></td>
                                  <td class="white"><b>Vacation</b></td>
                                  <td class="white"> <b>Holiday</b></td>
                                  <td class="white"> <b>Personal Time</b></td>
                                  <td class="white"> <b>Jury Duty</b></td>
                                  <td class="white"> <b>Family/Medical Leave</b></td>

                                 <td><b>Total</b></td>
                                  <td class="yellow"><b>Complete?</b></td>
                                </tr>

                                <tr>
                                   <td></td>
                                   <td class="white"><b>4/1/2018</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>

                                   <td class="yel"><b>0.00</b></td>
                                   <td class="yellow" align="center"><b>
                                              <a href="weekview.asp?ti=49076&amp;ci=14317&amp;td=43199&amp;fn=979252386&amp;tk=49076&amp;aday=4/1/2018">X</a></b>
                                </td>
                               
                                </tr>
                             
                                <tr>
                                   <td></td>
                                   <td class="white"><b>4/8/2018</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>

                                   <td class="yel"><b>0.00</b></td>
                                   <td class="yellow" align="center"><b>
                                              <a href="weekview.asp?ti=49076&amp;ci=14317&amp;td=43199&amp;fn=979252386&amp;tk=49076&amp;aday=4/8/2018">X</a></b>
                                </td>
                               
                                </tr>
                             
                                <tr>
                                   <td></td>
                                   <td class="white"><b>4/15/2018</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>

                                   <td class="yel"><b>0.00</b></td>
                                   <td class="yellow" align="center"><b>
                                              <a href="weekview.asp?ti=49076&amp;ci=14317&amp;td=43199&amp;fn=979252386&amp;tk=49076&amp;aday=4/15/2018">X</a></b>
                                </td>
                               
                                </tr>
                             
                                <tr>
                                   <td></td>
                                   <td class="white"><b>4/22/2018</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>

                                   <td class="yel"><b>0.00</b></td>
                                   <td class="yellow" align="center"><b>
                                              <a href="weekview.asp?ti=49076&amp;ci=14317&amp;td=43199&amp;fn=979252386&amp;tk=49076&amp;aday=4/22/2018">X</a></b>
                                </td>
                               
                                </tr>
                             
                                <tr>
                                   <td></td>
                                   <td class="white"><b>4/29/2018</b></td>
                                   <td class="white"><b>1.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>
                                   <td class="white"><b>0.00</b></td>

                                   <td class="yel"><b>1.00</b></td>
                                   <td class="yellow" align="center"><b>
                                              <a href="weekview.asp?ti=49076&amp;ci=14317&amp;td=43199&amp;fn=979252386&amp;tk=49076&amp;aday=4/29/2018">X</a></b>
                                </td>
                               
                                </tr>
                             
                             <tr>
                                <td></td>
                                   <td><b>Total</b></td>
                                   <td><b>1.00</b></td>
                                   <td><b>0.00</b></td>
                                   <td><b>0.00</b></td>
                                   <td><b>0.00</b></td>
                                   <td><b>0.00</b></td>
                                   <td><b>0.00</b></td>
                                   <td><b>0.00</b></td>      

                                   <td><b>1.00</b></td>
                                   <td class="yellow">.</td>
                                </tr>
                                   
                             


                             </tbody></table>
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
