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
                <p>Dashboard</p>
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
            </div>
 -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Dashboard</h2>
                    <!-- <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                        <!-- Line Graph chart -->
                        <div class="col-md-9 col-sm-6 col-xs-12"> 
                          <div class="row">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Payment Recive</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                  </ul>
                                </li>
                                
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <div id="echart_line" style="height:350px;"></div>

                            </div>
                          </div>
                         
                            
                          </div>
                        </div>
                        <!-- Line Graph chart end -->
                        <!-- Tiles Charts  -->
                        <div class="col-md-3 col-sm-6 col-xs-12 sparkline_wrraper">
                            <div class="row top_tiles" >
                            <div class="col-md-12 tile">
                              <span>Total Sessions</span>
                              <h2>231,809</h2>
                              <span class="sparkline_two" style="height: 160px;">
                                            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                        </span>
                            </div>
                            <div class="col-md-12 tile">
                              <span>Total Revenue</span>
                              <h2>$ 1,231,809</h2>
                              <span class="sparkline_two" style="height: 160px;">
                                            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                        </span>
                            </div>
                           
                            <div class="col-md-12 tile">
                              <span>Total Sessions</span>
                              <h2>231,809</h2>
                              <span class="sparkline_two" style="height: 160px;">
                                            <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                        </span>
                            </div>
                            <div class="col-xs-12">
                              <a type="button" href="#" class="btn btn-primary">View Reports</a>
                            </div>
                          </div>
                        </div>
                        <!-- Tiles Charts end -->
                  </div>
                </div>
              </div>
              <!-- 2nd -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                      <div class="row">
                         <!-- bar charts group -->
                          <!-- bar chart -->
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Bar Charts <br><small>Sessions</small></h2>
                                
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <div id="graph_bar" style="width:100%; height:290px;"></div>
                              </div>
                            </div>
                          </div>
                          <!-- /bar charts end -->
                         
                          <!-- /bar charts group end-->

                          <!-- pie chart -->
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Pie Chart <br><small>Sessions</small></h2>
                                
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content2">
                                <div id="graph_donut" style="width:100%; height:300px;"></div>
                              </div>
                            </div>
                          </div>
                          <!-- /Pie chart end-->

                          <!-- bar charts group -->
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Bar Chart Group <br> <small>Sessions</small></h2>
                                
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content2">
                                <div id="graphx" style="width:100%; height:300px;" ></div>
                              </div>
                            </div>
                          </div>
                          <!-- /bar charts group end -->

                         
                      </div>
                  </div>
                </div>
              </div>
              <!-- 3rd -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                      <div class="row">
                         <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Bar Graph <small>Sessions</small></h2>
                             
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <div id="mainb" style="height:350px;"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Horizontal Bar</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <div id="echart_bar_horizontal" style="height:350px;"></div>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Donut Graph</h2>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">

                                <div id="echart_donut" style="height:350px;"></div>

                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- 4th -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                      <div class="row">
                        <!-- graph area -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Graph area </h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content2">
                              <div id="graph_area" style="width:100%; height:360px;"></div>
                            </div>
                          </div>
                        </div>
                        <!-- /graph area -->
                        
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Gauge</h2>
                             
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <div id="echart_gauge" style="height:350px;"></div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Scatter Graph</h2>
                              
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <div id="echart_scatter" style="height:350px; width:100%;"></div>

                            </div>
                          </div>
                        </div>
                      </div>

                      
                  </div>
                </div>
              </div>
              <!-- 5th -->
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content home-main">
                      <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Pie Area</h2>
                              
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <!-- <div id="echart_pie2" style="height:350px;"></div> -->
                              <canvas id="polarArea"></canvas>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Pie Graph</h2>
                             
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <div id="echart_sonar" style="height:370px;"></div>

                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Pie Area</h2>
                              
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                               <canvas id="canvasRadar"></canvas>

                            </div>
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
