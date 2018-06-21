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
        <div class="right_col settings" role="main">
          <div class="">
            
            
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <div class="row tab-bar">
               <div class="col-md-12 ">
                <div class="row">
                  <ul id="myTab" class="nav nav-tabs bar_tabs pull-left" role="tablist" >
                    <li role="presentation" class="active">
                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Quick</a>
                      </li>
                      <li role="presentation" >
                       <a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Clients</a>
                      </li>
                      <li role="presentation" >
                        <a href="#tab_content3" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Matters</a>
                      </li>
                       <li role="presentation" >
                        <a href="#tab_content4" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Activities</a>
                      </li>
                      <li role="presentation" >
                        <a href="#tab_content5" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Users</a>
                      </li>
                      <li role="presentation" >
                        <a href="#tab_content6" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Groups</a>
                      </li>
                      <li role="presentation" >
                        <a href="#tab_content7" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false">Expense Types</a>
                      </li>
                  </ul>
                </div>
                </div>
              </div>
                
                <div class="col-xs-12" style="margin-bottom: 30px;"></div>
                  
                <div id="myTabContent" class="tab-content">
                    <!--=============================== Tab  Time entry 1 =================================-->
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Quick</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content quick">
                               <h3>Quick Search</h3>
                              <div class="ln_solid"></div>
                              <div class="col-sm-12">
                              
                              <p>(A good way to avoid adding double items (Clients, Matters, Activities or Users) is to first search for an item in the above search box. You can just type a few characters which can be in any part of the item title. If that item already exists - it will come up as a link so you can view it quickly.)</p>
                              <div class="ln_solid">
                                </div>
                              </div>
                              <div class="col-sm-12 row">
                                 
                                
                                  <div class="col-sm-8 ">
                                     <label>Select the Maintenance Items you want to search:</label>
                                     
                                <div class="col-sm-12">
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
                            <div class="col-sm-4 ">
                              <label>Type any part of any item (minimum 2 characters):</label>
                              <div class="input-group">
                              <input type="" class="form-control" name="">
                            <span class="input-group-btn">
                               <button type="button" class="btn btn-primary">Go!</button>
                                </span>
                          </div>
                            </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="row">
                              <div class="col-sm-3">
                              <h3>Maintenance</h3>
                            </div>
                            <div class="col-sm-9">
                              <h5></h5>
                            </div>
                          </div>
                              <div class="ln_solid"></div>
                            </div>
                            <div class="col-sm-4">
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
                                <ul><li>(For reporting across Clients and Matters i.e. "meetings", "travel", "phone call", etc.)</li></ul>
                              </ul>
                            </div>
                            <div class="col-sm-4">
                              <ul>
                                <li><a href="">Users</a></li>
                                <ul>
                                  <li><a href="">Groups</a></li>
                                </ul>
                              <li><a href="">Expense Types</a></li>
                              <li><a href="">Time Entry Tags</a></li>
                              <ul>
                                <li>(Create tag categories to add to time entries that can be used for searching and reports - such as "Location" or other time entry type.)</li>
                              </ul>
                            </ul>
                            </div>
                            <div class="col-sm-4">
                              <ul>
                                <li><a href="">Holiday Schedule</a></li>
                                <li><a href="">Tax Rules for Invoices</a></li>
                              </ul>
                            </div>
                            <div class="col-sm-12">
                            <h3>Import</h3>
                            <div class="ln_solid"></div>
                            <ul><li><a href="">Import Users, Matters, and/or Clients from QuickBooks</a></li></ul>
                            <h3>Export</h3>
                            <div class="ln_solid"></div>
                            <ul>
                              <li><a href="">Export Timeledger data in saveable custom formats</a></li>
                              <li><a href="">Export Time, Expense, Users, Matters, and/or Clients to QuickBooks</a></li>
                              <li><a href="">Export Timeledger data to Excel</a></li>
                            </ul>
                          </div>
                        </div>
                            </div>

                        </div>
                    <!-- =================== Tab  Time entry End 1 ================================================-->
                    <!--=============================== Tab  Time entry 2 =================================-->
                  <div role="tabpanel" class="tab-pane fade  " id="tab_content2" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Client Maintenance</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                  
                              </ul>
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
                              <div class="btn-group">
                                <button class="btn btn-default">Edit Client Information</button>
                                <button class="btn btn-primary">Add new Client</button>
                            </div>
                            </div>
                          
                       
                    </div>
                  </div>
                    <!-- =================== Tab  Time entry End 2 ================================================-->
                    <!--=============================== Tab  Time entry 3 =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Matter Maintenance</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                  
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content text-center">
                              <div class="col-sm-12">
                                <div class="col-sm-3">
                              </div>
                              <div class="col-sm-6">
                                <div class="col-sm-6">
                                  <h4><a href="">Unused Matters List</a></h4>
                                   </div>
                                  <div class="col-sm-6">
                                    <h4><a href="">Archived Matter Maintenance</a></h4>
                              </div>
                             
                              </div>

                              <div class="col-sm-3">
                              </div>

                            </div>

                            <h3>Add, edit or inactivate a Matter:</h3>
                            <div class="ln_solid"></div>
                            <form class="form-inline">
                              <div class="form-group">
                                <label for="ex3">Type any part of the Matter name or code: </label>
                                <input type="text" id="ex3" class="form-control" placeholder=" ">
                              </div>
                              <div class="form-group">
                                <label for="ex4">or</label>
                               
                              </div>
                              <div class="btn-group">
                              <button type="submit" class="btn btn-primary">Show All</button>
                            </div>
                            </form>
                            <div class="checkbox checkbox-inline checkbox-success form-group">
                                  <input type="checkbox" id="" value="">
                                  <label for="">include inactive Matters </label>
                              </div>
                              <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">show inactive only</label>
                              </div>
                              <div class="col-sm-12">
                              <div class="col-sm-3"> </div>
                              <div class="col-sm-6">
                              <div class="form-group">
                             <select name="id" size="10" class="form-control" style="width: 100%" onchange="">
                                  <option value="0" selected="">Type in the box above to search for matter</option>


                                      </select>
                            </div>
                          </div>
                            </div>
                          <div class="col-sm-3"> </div>
                          <div class="col-sm-12">
                              <div class="btn-group">
                                <button class="btn btn-default">Edit Matter Information</button>
                                <button class="btn btn-primary">Add new Matter</button>
                         
                           </div>
                         </div>
                           
                         
                            
                          
                         
                          </div>
                    </div>
                  </div>
                    <!-- =================== Tab  Time entry End 3 ================================================-->
                    <!--=============================== Tab  Time entry 4 =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Activity Maintenance</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                  
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content text-center">
                                  <h4><a href="">Archived Activities</a></h4>

                            <h3>Add, edit or inactivate an Activity:</h3>
                            <div class="ln_solid"></div>
                            <form class="form-inline ">
                              <div class="form-group">
                                <label for="ex3">Type any part of the Activity name or code:</label>
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
                                  <option value="0" selected="">No matching Activity names found</option>


                                      </select>
                            </div>
                          </div>
                          <div class="col-sm-3"></div>
                              <div class="btn-group">
                                <button class="btn btn-default">Edit Activity Information</button>
                                <button class="btn btn-primary">Add new Activity</button>
                         
                           </div>
                         </div>
                            </div>
                          </div>
                        
                    </div>
                    <!-- =================== Tab  Time entry End 4 ================================================-->
                    <!--=============================== Tab  Time entry 5 =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Users Maintenance</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                  
                              </ul>
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
                    <!-- =================== Tab  Time entry End 5 ================================================-->
                    <!--=============================== Tab  Time entry 6 =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Group Maintenance</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                  
                              </ul>
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
                                <div class="btn-group" >
                                <button class="btn btn-default">Save</button>
                                <button class="btn btn-primary">Delete</button>
                              </div>
                            </div>
                              </div>
                              
                            </div>
                          </div>
                    </div>
                    <!-- =================== Tab  Time entry End 6 ================================================-->
                    <!--=============================== Tab  Time entry 7 =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Expense Types Maintenance</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                  
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                              <h4><a href="">Add New Expense Type</a></h4>
                              <div class="table-responsive">
                              <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr class="headings">
                                  <th>Expense Type Name</th>
                                  <th> Expense Type Code</th>
                                  <th>Expense Type Code for linking to other programs</th>
                                  <th>Status</th>
                                  <th>Billable/Changeable by user</th>
                                  <th>Reimb./Changeable by user</th>
                                  <th>Unit Price  </th>
                                  <th>Markup</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Air Travel</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>Yes/No</td>
                                  <td>Yes/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Bal Fwd</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>Yes/No</td>
                                  <td>Yes/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Court Doc Download Fee</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>Yes/Yes</td>
                                  <td>Yes/Yes</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Court Filing Fee</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/Yes</td>
                                  <td>  Yes/Yes</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Courtcall - Telephone Appearance Fee</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/No</td>
                                  <td>  Yes/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                 <tr>
                                  <td>Delivery charge</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/Yes</td>
                                  <td>  Yes/Yes</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                 <tr>
                                  <td>Discount</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/Yes</td>
                                  <td>  No/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Hotel</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/Yes</td>
                                  <td>  Yes/Yes</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Interest</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/No</td>
                                  <td>  Yes/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Jury Fees</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/No</td>
                                  <td>  Yes/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                                <tr>
                                  <td>Mailing/Postage</td>
                                  <td></td>
                                  <td></td>
                                  <td>Active</td>
                                  <td>  Yes/No</td>
                                  <td>  Yes/No</td>
                                  <td>n/a</td>
                                  <td>0%</td>
                                  <td><a href="">Edit</a></td>
                                </tr>
                              </tbody>
                            </table>
                            </div>
                          </div>
                          </div>
                    </div>
                    <!-- =================== Tab  Time entry End 7 ================================================-->
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
