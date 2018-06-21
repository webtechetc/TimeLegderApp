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
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                            <div class="x_title">
                              <h2>Group Maintenance</h2>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                              <div class="col-sm-12 text-center">
                                <h4><a href="">Assign users who can view reports for the selected Group</a></h4>
                              </div>
                              <div class="col-sm-6">
                                <div class="">
                                <label>Select a Group to Edit or Delete</label>
                              </div>
                                <select name="id" size="10" class="form-control" style="width: 100%" onchange="">
                                  <option value="0" selected=""> -- Add New Group -- </option>

                                    <option value="3196">test</option>

                                      </select>
                              </div>
                              <div class="col-sm-6 text">
                                <form class="form-group">
                                <label> Enter or edit Group name:</label>
                                <input type="" class="form-control" name="">
                              </form>
                              <div class="text-center">
                                <button class="btn btn-primary">Save</button>
                                <button class="btn btn-primary">Delete</button>
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
