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
                <p>Dashboard / Organization Chart by Management Level</p>
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
                   
                      <div class="col-xs-12">
                      <div class="row">
                    <div class="col-xs-6">
                      <label>Dracup & Patterson, A Law Corp.</label>
                      <div class="sortable" id="sortable">

                        <li class="administrator"><i class="fa fa-user"></i> Terry Bell</li>
                      <li class="administrator"><i class="fa fa-user"></i> Dracup, Alex</li>

                      <li class="manager"><i class="fa fa-user"></i> Dracup, Jeffrey</li>

                      <li class="user-profile"><i class="fa fa-user"></i> Dracup, Brittany</li>

                      <li class="user-profile"><i class="fa fa-user"></i> Bell, Terry</li>

                      <li  class="user-profile"><i class="fa fa-user"></i> Burgraff, Kimberly</li>

                      <li  class="user-profile"><i class="fa fa-user"></i> Clarambeau, Adlore</li>

                      <li  class="user-profile"><i class="fa fa-user"></i> Diaz, Denise</li>

                      <li  class="user-profile"><i class="fa fa-user"></i> Jenkins, Michelle</li>

                      <li  class="user-profile"><i class="fa fa-user"></i> Kiamilev, Chandra</li>

                      <li class="user-profile" ><i class="fa fa-user"></i> Larmore, Thomas</li>

                      <li class="user-profile"><i class="fa fa-user"></i> McQueen, Andrea</li>

                      <li class="user-profile"><i class="fa fa-user"></i> Payne, Richard</li>

      
                    </div>
                  </div>
                  <div class="col-xs-6">
                    <label>Legend:</label>
                    <ul class="sortable">
                     <li class="administrator"><i class="fa fa-user "></i> Administrator</li>
                     <li class="report-viewer"><i class="fa fa-user"></i> Report Viewer</li>
                     <li class="data-entry"><i class="fa fa-user"></i> Data Entry</li>
                     <li class="manager"><i class="fa fa-user"></i> Manager</li>
                     <li class="user-profile"><i class="fa fa-user"></i>   User</li>
                   </ul>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $( function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
          } );
      </script>
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
