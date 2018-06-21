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
                <p>Dashboard / Utilization Report</p>
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
                    <div class="col-md-12">
                      <div class="row">
                        <form class="form-inline" style="margin-bottom: 20px;">
                                 <label for="ex4">Utilization report for</label>
                                <select name="" id="input" class="form-control" >
                                  <option value="48226">Bell, Terry</option><option value="50385">Burgraff, Kimberly</option><option value="48227">Clarambeau, Adlore</option><option value="50138">Diaz, Denise L</option><option value="49076" selected="">Dracup, Alex</option><option value="49807">Dracup, Brittany</option><option value="48087">Dracup, Jeffrey</option><option value="50128">Jenkins, Michelle A</option><option value="50126">Kiamilev, Chandra E</option><option value="50155">Larmore, Thomas A</option><option value="50428">McQueen, Andrea A</option><option value="50125">Payne, Richard</option>
                                </select>
                                <div class="form-group">
                                  <label>Month</label>
                                  <select name="smonth" class="form-control">
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4" selected="">April</option>
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
                                  <select name="syear" class="form-control">
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018" selected="">2018</option>
                                    <option value="2019">2019</option>
                                  </select>
                                </div>
                                <div class="checkbox">
                                  <input type="checkbox" value="">
                                  <label>
                                    Show inactive Users
                                  </label>
                                </div>
                          </form>
                    </div>
                  </div>
                    
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Utilization</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                                <th class="column-title">Date</th>
                                <th class="column-title">Billable Hours </th>
                                <th class="column-title">Non-Billable Hours</th>
                                <th class="column-title">Unrecorded Hours</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" ">Mar 2018</td>
                                <td class=" ">3.50</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td> 
                              </tr>
                              <tr class="even pointer">
                                <td class=" ">Apr 2018</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>                           
                              </tr>
                              <tr class="even pointer">
                                <td class=" ">YTD 2018</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>                           
                              </tr>
                             
                            </tbody>
                          </table>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                                <th class="column-title">Date</th>
                                <th class="column-title">Target Utilization Rate</th>
                                <th class="column-title">Utilization </th>
                                <th class="column-title">Difference</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" ">Mar 2018</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">0.00</td> 
                              </tr>
                              <tr class="even pointer">
                                <td class=" ">Apr 2018</td>
                                <td class=" ">100.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">100.00</td>                           
                              </tr>
                              <tr class="even pointer">
                                <td class=" ">YTD 2018</td>
                                <td class=" ">+100.00</td>
                                <td class=" ">0.00</td>
                                <td class=" ">+100.00</td>                           
                              </tr>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Current Month Billable Time Summary</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                                <th class="column-title">Client > Matter</th>
                                <th class="column-title"> Hours </th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr class="even pointer">
                                <td class=" "></td>
                                <td class=" ">0.00</td> 
                              </tr>
                            </tbody>
                          </table>
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="table-responsive">
                          <legend>Unrecorded Time Detail</legend>
                          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                              <tr class="headings">
                                <th class="column-title">Date</th>
                                <th class="column-title"> Hours </th>
                              </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>4/2/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr >
                                    <td>4/3/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/4/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/5/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/6/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/9/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/10/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/11/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/12/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/13/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/16/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/17/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/18/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/19/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/20/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/23/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/24/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/25/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/26/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/27/2018</td>
                                    <td>8.00</td>
                                </tr>
                                <tr>
                                    <td>4/30/2018</td>
                                    <td>8.00</td>
                                </tr>
                            </tbody>
                          </table>
                         
                        </div>
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
