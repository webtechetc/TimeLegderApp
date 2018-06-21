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
                <p>Dashboard / Who's working on what</p>
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
                    <div class="row form-group">
                    <div class="col-sm-4">
                    <form class="form-inline">
                      <label>Highlight users who have:</label>
                      <p>Less than <input style="width: 50px;" type="" placeholder="50" class="text-right form-control" width="50" > % of their time entered</p>

                      <p> Or greater than <input placeholder="100" style="width: 50px;" type="" class="text-right form-control" width="50" > % of their time entered</p>
                    </form>           

                    </div>
                    <div class="col-sm-4">
                      <select multiple="" class="form-control" size="6" name="timekeepers" width="120">

                        <option selected="" value="-1">(All)</option>
                        <option value="48226">Bell, Terry</option>
                        <option value="50385">Burgraff, Kimberly</option>
                        <option value="48227">Clarambeau, Adlore</option>
                        <option value="48088">Davis, Kim</option>
                        <option value="50138">Diaz, Denise L</option>
                        <option value="49076">Dracup, Alex</option>
                        <option value="49807">Dracup, Brittany</option>
                        <option value="48087">Dracup, Jeffrey</option>
                        <option value="50128">Jenkins, Michelle A</option>
                        <option value="49844">Jester, Myca</option>
                        <option value="50126">Kiamilev, Chandra E</option>
                        <option value="50155">Larmore, Thomas A</option>
                        <option value="50428">McQueen, Andrea A</option>
                        <option value="50125">Payne, Richard</option>
                        <option value="50344">Roldan, Maricar</option>
                        <option value="48612">Shepard, Sharon</option>
                        <option value="48865">Thomas, Cynthia</option>
                        <option value="48209">Wheeler, Kristie</option>

                        </select>
                    </div>
                    <div class="col-sm-4">
                      <form class="form-inline">
                      <p>Refresh report every <input type="" style="width: 50px;" placeholder="10" class="form-control" name=""> Minutes
                      </p>
                    </form>
                  </div>

                  </div>
                   <div class="col-sm-12  text-center">
                    <button class="btn btn-primary">Display Report</button>
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
