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
                              <h2>Users Maintenance</h2>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content text-center">
                              <div class="col-sm-12">
                                <div class="col-sm-3">
                              </div>
                              <div class="col-sm-6">
                                <div class="col-sm-6">
                                  <h4><a href="">Archived Users Maintenance</a></h4>
                                   </div>
                                  <div class="col-sm-6">
                                    <h4><a href="">Chargeable Users Report</a></h4>
                              </div>
                             
                              </div>

                              <div class="col-sm-3">
                              </div>

                            </div>
                            <div class=" col-sm-12">
                            <button class="btn btn-primary">Add One or More Users</button>
                          </div>
                            <div class="col-sm-12">
                              <h4><label>Or</label></h4>
                            </div>
                            <div class="col-sm-12">
                              <h4><label>Search for a User to edit or set to inactive (i.e. delete)</label></h4>
                              <form class="form-inline ">
                              <div class="form-group">
                                <label for="ex3">Type any part of the User's name or Second User ID: </label>
                                <input type="text" id="ex3" class="form-control" placeholder=" ">
                              </div>
                              <div class="form-group">
                                <label for="ex4">or</label>
                              </div>
                              <div class="btn-group">
                              <button type="submit" class="btn btn-primary">Show All</button>
                            </div>
                            </form>
                            <form class="form-horizontal">
                           
                                  <div class="form-group">
                                    <div class="radio radio-inline">
                                       <input name="r" id="" value="" checked="checked" type="radio">
                                      <label>
                                        Search Only Active Users
                                      </label>
                                    </div>
                                    <div class="radio radio-inline">
                                       <input name="r" id="" value="" type="radio">
                                      <label>
                                        Search Only Inactive Users
                                      </label>
                                    </div>
                                    <div class="radio radio-inline">
                                       <input name="r" id="" value="" type="radio">
                                      <label>
                                        Search Both Active and Inactive Users
                                      </label>
                                    </div>

                                   </div>
                                </form>
                              </div>
                              <div class="col-sm-12">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                <div class=" form-group " >
                                <select name="items" size="10" class="form-control"   ondblclick="">
                                
                                  <option value="0">Double-click on the User you want to edit:</option>
                                  <option value=" 48226">Bell, Terry</option>
                                  <option value=" 50385">Burgraff, Kimberly</option>
                                  <option value=" 48227">Clarambeau, Adlore</option>
                                  <option value=" 50138">Diaz, Denise L</option>
                                  <option value=" 49076">Dracup, Alex</option>
                                  <option value=" 49807">Dracup, Brittany</option>
                                  <option value=" 48087">Dracup, Jeffrey</option>
                                  <option value=" 50128">Jenkins, Michelle A</option>
                                  <option value=" 50126">Kiamilev, Chandra E</option>
                                  <option value=" 50155">Larmore, Thomas A</option>
                                  <option value=" 50428">McQueen, Andrea A</option>
                                  <option value=" 50125">Payne, Richard</option>
                              </select>
                            </div>
                          </div>
                        </div>
                          <div class="col-sm-3"></div> 
                          <div class="col-sm-12">   
                              <button class="btn btn-primary">Edit Selected Users</button>
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
