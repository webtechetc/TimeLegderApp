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
                              <h2>Client Maintenance</h2>
                              
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content text-center">
                             <div class="col-sm-12">
                              <h4><a href="">Archived Clients Maintenance</a></h4>
                              <h3>Add, edit or inactivate a Client:</h3>
                              <div class="ln_solid"></div>
                            </div>
                            
                            <form class="form-inline">
                              <div class="form-group">
                                <label for="ex3">Type any part of the Client Name:</label>
                                <input type="text" id="ex3" class="form-control" placeholder=" ">
                              </div>
                              <div class="form-group">
                                <label for="ex4">or</label>
                               
                              </div>
                              <div class="btn-group">
                              <button type="submit" class="btn btn-primary">Show All</button>
                            </div>
                            </form><br>
                            <div class="col-sm-12">
                              <div class="col-sm-3"></div>
                              <div class="col-sm-6">
                              <div class="form-group">
                             <select name="id" size="10" class="form-control" style="width: 100%" onchange="">
                                  <option value="0" selected="">Type in the box above to search for a Client</option>


                                      </select>
                            </div>
                          </div>
                          <div class="col-sm-3"></div>
                             
                         </div>
                                <button class="btn btn-primary">Edit Client Information</button>
                                <button class="btn btn-primary">Add new Client</button>
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
