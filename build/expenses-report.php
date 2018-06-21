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
                <p>Dashboard / Expenses Report</p>
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
                    <div class="col-sm-12">
                      <div class="row">
                   <form class="form-inline form-group settings-text">
                     <label>Expense Entries for </label>
                     <select name="tk" class="form-control" onchange="this.form.submit();">
                      <option value="48226">Bell, Terry </option>
                        <option value="50385">Burgraff, Kimberly</option>
                        <option value="48227">Clarambeau, Adlore</option>
                        <option value="50138">Diaz, Denise</option>
                        <option value="49076" selected="">Dracup, Alex</option>
                        <option value="49807">Dracup, Brittany</option>
                        <option value="48087">Dracup, Jeffrey</option>
                        <option value="50128">Jenkins, Michelle</option>
                        <option value="50126">Kiamilev, Chandra</option>
                        <option value="50155">Larmore, Thomas</option>
                        <option value="50428">McQueen, Andrea</option>
                        <option value="50125">Payne, Richard</option>
                        </select>
                   </form>
                      </div>
                    </div>
                      <div class="col-sm-12">
                        <div class="row">
                        <form class="form-inline settings-text">
                                <div class="form-group">
                                    <label for="ex3">Expense Group</label>
                                          <select class="form-control">
                                              <option>--Any--</option>
                                              <option>--None</option>
                                            </select>
                                      </div>                 
                                  <div class="form-group">
                                     <label for="ex4">For period from</label>
                                    <input id="datetimepicker6" type="text" class="form-control" placeholder="03/06/2018 8:24 PM">     
                                    <label for="ex4">To:</label>
                                    <input id="datetimepicker5" type="text" class="form-control" placeholder="03/06/2018 8:24 PM">                  
                                  </div>

                                  <div class="btn-group">
                                  <button class="btn btn-primary" type="button">Display Selection</button>
                                </div>
                                 </form>
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
