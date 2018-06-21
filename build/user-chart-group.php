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
                <p>Dashboard / Organization Chart by Group</p>
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
                    <div class="col-xs-6 ">
                     <label>Dracup & Patterson, A Law Corp.</label>

                     <ul class="sortable" id="sortable">

                      <li class="user-profile"><i class="fa fa-user"></i> Terry Bell</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Kimberly Burgraff</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Adlore Clarambeau</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Denise L Diaz</li>
                      <li class="administrator"><i class="fa fa-user"></i> Alex Dracup</li>
                      <li class="manager"><i class="fa fa-user"></i> Brittany Dracup</li>
                      <li class="administrator"><i class="fa fa-user"></i> Jeffrey Dracup</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Michelle A Jenkins</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Chandra E Kiamilev</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Thomas A Larmore</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Andrea A McQueen</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Richard Payne</li>
                      <li class="manager"><i class="fa fa-user"></i> Kim Davis</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Myca Jester</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Maricar Roldan</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Sharon Shepard</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Cynthia Thomas</li>
                      <li class="user-profile"><i class="fa fa-user"></i> Kristie Wheeler</li>
                   </ul>
                  </div>
                  <div class="col-xs-6 ">
                    <label>Legend:</label>
                    <ul class="sortable">
                     <li ><i class="fa fa-users"></i></i>  Group</li>
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
