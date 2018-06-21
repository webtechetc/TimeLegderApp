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
                <p>Dashboard / Profitability Report: Selection Screen</p>
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
                    <div class="row">
                    <div class="col-sm-6">
                    <form class="">
                      
                      <label>1. Select Clients and Matters to invoice:</label>
                      <div class=" form-group">
                               <div class="checkbox  checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for=""> Expand Active Matters below </label>
                              </div>
                              <div class="checkbox checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Expand Inactive Matters below</label>
                              </div>
                        </div>

                   
                    <div class="">
                      <select name="pr" size="6" multiple="" style="width: 100%" class="form-control">
                            <option value="*" selected="">Select both Active and Inactive Matters</option>
                            <option value="TA">Select All Active Matters</option>
                           <option value="TB">Select All Inactive Matters</option>
                        </select>
                      </div>
                    </form>
                     </div>
                        
                       <div class="col-sm-6">
                          <label>2. Select Date Range:</label>
                         <form class="form-group">
                          
                         <label for="ex4">From:</label>
                         
                           <input id="datetimepicker6" type="text" class="form-control" placeholder="03/1/2018">  
                         </form>
                         <form class="form-group">
                            <label for="ex4">To:</label>
                       
                            <input id="datetimepicker5" type="text" class="form-control" placeholder="03/1/2018">
                              </form>      
                        <button class="btn btn-primary">Show Report</button>
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
