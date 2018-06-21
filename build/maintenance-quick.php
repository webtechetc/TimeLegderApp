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
                 
                  <div class="x_content">
                            <div class="x_content quick">
                               <h3>Quick Search</h3>
                              <div class="ln_solid"></div>
                              <div class="col-sm-12">
                              
                              <p>(A good way to avoid adding double items (Clients, Matters, Activities or Users) is to first search for an item in the above search box. You can just type a few characters which can be in any part of the item title. If that item already exists - it will come up as a link so you can view it quickly.)</p>
                              <div class="ln_solid">
                                </div>
                              </div>
                              <div class="col-sm-12 row">
                                 
                                
                                  <div class="col-sm-12 ">
                                     <label>Select the Maintenance Items you want to search:</label>
                                     
                                <div class="col-sm-12 row">
                               <div class="checkbox checkbox-inline checkbox-success form-group">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Clients</label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for=""> Matters </label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success">
                                  <input type="checkbox" id="" value="">
                                  <label for=""> Users </label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Activities</label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success">
                                  <input type="checkbox" id="" value="">
                                  <label for=""> Exclude Inactive Items </label>
                              </div>
                            </div>
                            </div>
                              
                            </div>
                            <div class="col-sm-4">
                              <label>Type any part of any item (minimum 2 characters):</label>
                              <div class="input-group">
                              <input type="" class="form-control" name="">
                            <span class="input-group-btn">
                               <button type="button" class="btn btn-primary">Go!</button>
                                </span>
                              </div>
                            </div>
                            <legend class="col-sm-12"></legend>
                            <div class="col-sm-12">
                              <h3>Maintenance</h3>
                            </div>
                            <div class="col-sm-4 quick-font list-style">
                              <ul>
                                <li><a href="">Clients</a></li>
                                <ul>
                                  <li><a href="">Matters and Subprojects</a></li>
                                  (Add one or more Matters per Client)
                                  <ul>
                                    <li><a href="">Matter Categories</a></li>
                                    (Create and types of Matters so they can be categorized in reports.)
                                  </ul>
                                </ul>
                                <li><a href=""> Activities</a></li>
                                <ul> (For reporting across Clients and Matters i.e. "meetings", "travel", "phone call", etc.)</ul>
                              </ul>
                            </div>
                            <div class="col-sm-4 quick-font list-style">
                              <ul>
                                <li><a href="">Users</a></li>
                                <ul>
                                  <li><a href="">Groups</a></li>
                                </ul>
                              <li><a href="">Expense Types</a></li>
                              <li><a href="">Time Entry Tags</a></li>
                              <ul>
                                (Create tag categories to add to time entries that can be used for searching and reports - such as "Location" or other time entry type.)
                              </ul>
                            </ul>
                            </div>
                            <div class="col-sm-4 quick-font list-style">
                              <ul>
                                <li><a href="">Holiday Schedule</a></li>
                                <li><a href="">Tax Rules for Invoices</a></li>
                              </ul>
                            </div>
                                                        <legend class="col-sm-12"></legend>

                            <div class="col-sm-12 quick-font list-style">
                            <h3>Import</h3>
                            <ul><li><a href="">Import Users, Matters, and/or Clients from QuickBooks</a></li></ul>
                                                        <div class="ln_solid"></div>

                            <h3 class="">Export</h3>
                            <ul>
                              <li><a href="">Export Timeledger data in saveable custom formats</a></li>
                              <li><a href="">Export Time, Expense, Users, Matters, and/or Clients to QuickBooks</a></li>
                              <li><a href="">Export Timeledger data to Excel</a></li>
                            </ul>
                                                        <div class="ln_solid"></div>

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
