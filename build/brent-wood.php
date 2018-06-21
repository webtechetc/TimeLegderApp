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
            <div class="page-title">
              <div class="title_left">
                <br>
                <p>Dashboard / Client Maintenance</p>
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
            </div>

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
                    
                  <div class="col-sm-12 ">
                    <div class="row settings-text">
                      <div class="col-sm-2"><a href=""> Select Another Client</a></div>
                      <div class="col-sm-2"><a href="">Add New Client</a></div>
                      <div class="col-sm-2"><a href="">View Matters for this Client</a></div>
                      <div class="col-sm-3"><a href="">Add a Matter for this Client</a></div>
                      <div class="col-sm-3"><a href=""> Assign Existing Matters for this Client</a></div>
                    </div>
                  </div>
                  <div class="col-xs-12 settings-text">
                    
                      <form class="form-inline"> 
                        <label>(Always click on "Save" before leaving a page)</label>
                        <button class="btn btn-primary btn-xs">Save</button>
                      </form>
                    </div>
                    <div class="col-xs-12">
                      <div class="row">
                        <div class="col-xs-12">
                      <legend>General Information</legend>
                    </div>
                    <div class="col-sm-6">
                      <form class="">
                        <label>Client Name:</label> 
                        <input type="" class="form-control" value="Brent Wood" name="">
                        <i>You can change the name of a Client at any time. All historical data will remain attached to this Client even if the name is changed. To start another Client with no prior data, just add a new Client.</i>
                        </form>
                        
                       
                          <form class="form-group">
                        <label>Client ID:</label> 
                        <input class="form-control" type="" value="" name="">
                      </form>
                       <form class="form-group">
                        <label>Second Client ID:</label> <input class="form-control" type="" value="" name="">
                        <i>Second Client ID is optional. It is used to export TimeLedgerWeb data to other programs you might be using.</i>
                      </form>
                       <form class="form-group">
                        <label>Client Type:</label> 
                          <select name="client_type" class="form-control">
                      <option value="A" selected="">A - key</option>
                      <option value="B">B - medium</option>
                      <option value="C">C - client</option>
                      <option value="I">I - internal</option>
                      <option value="P">P - partner</option>
                      <option value="R">R - restricted</option>
                      <option value="S">S - speculative</option>
                      <option value="X">X - archived</option>
                      </select>
                      <i>Use "Client type" setting to classify Clients into broad groups.   For example, you might use "A" for key Clients, "B" for next level Clients, and "C" for lower priority Clients.  "R" allows managers to restrict timing on any Matters of a Client unless a permission code is provided by the manager to the timekeeper.</i>
                      </form>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                          <label>Client Status:</label>
                          <select name="status" class="form-control">
                            <option value="A" selected="">Active</option>
                            <option value="I">Inactive</option>
                            </select>
                            <i>If you set Client status to "Inactive", this Client and all assigned Matters will no longer appear in Client and Matter lists</i>
                        </div>
                        <div class="form-group">
                          <label>Default Matter Manager:</label>
                          <select name="client_manager" class="form-control">
                          <option value="" selected="">none assigned</option>
                          <option value="49076">Alex Dracup</option>
                          <option value="49807">Brittany Dracup</option>
                          <option value="48087">Jeffrey Dracup</option>
                          </select>
                          <i>The selected Matter manager will be automatically assigned to every Matter of this Client. You can override this selection for each Matter individually on the Matter Maintenance.</i>
                        </div>

                    </div>
                    <div class="col-sm-12">
                      <legend>Location and Contacts</legend>
                      </div>
                      <div class="col-xs-6">
                      <form class="form-group">
                        <label>Address Line 1:</label>
                        <input type="" value="1987 Chalcedony" name="" class="form-control">
                      </form>
                      <form class="form-group">
                        <label>Line 2:</label>
                        <input type="" name="" class="form-control">
                      </form>
                         <form class="form-group">
                        <label>Line 3:</label>
                        <input type="" name="" class="form-control">
                      </form>
                         <form class="form-group">
                        <label>City:</label>
                        <input type="" value="San Diego" name="" class="form-control">
                      </form>
                         <form class="form-group">
                        <label>State</label>
                        <input type="" value="CA" name="" class="form-control">
                      </form>
                         <form class="form-group">
                        <label>Zip/Postal Code:</label>
                        <input type="" value="92109" name="" class="form-control">
                      </form>
                         
                    </div>
                    <div class="col-xs-6">
                    <form class="form-group">
                        <label>Country:</label>
                        <input type="" name="" class="form-control">
                      </form>
                      <form class="form-group">
                         <label>Main Phone:</label>
                        <input type="" name="" class="form-control">
                      </form>
                     
                      <form class="form-group">
                        <label>Bill Fax:</label>
                        <input type="" name="" class="form-control">
                      </form>
                        <form class="form-group">
                        <label>Bill Email:</label>
                        <input type="" value="alexpdracup@gmail.com" name="" class="form-control">
                      </form>
                        <form class="form-group">
                        <label>Bill Contact:</label>
                        <select name="bill_contact" class="form-control">
                        <option value="0" selected="">None</option>
                        </select>
                      </form>
                      <div class="settings-text">
                      <label>Clients Contact: <a href="">Enter New Contact</a></label>
                    </div>
                    </div>
                    <div class="col-xs-12">
                      <legend>Billing Options</legend>
                    </div>
                    <div class="col-xs-6">
                      <div class="settings-text"><h4>How to invoice this Client</h4></div>
                     <div class="checkbox  checkbox-success">
                       <label for="">Create a separate invoice for every Matter and Subproject</label>
                       <input type="checkbox" id="" value="">
                       </div>
                       <div class="checkbox  checkbox-success">
                       <label for="">Create a separate invoice for every Matter (without breaking out Subprojects separately)</label>
                       <input type="checkbox" id="" value="">
                       </div>
                       <div class="checkbox  checkbox-success">
                       <label for="">Create a single invoice that includes all this Client's Matters and Subprojects</label>
                       <input type="checkbox" id="" value="">
                       </div>
                       <div class="checkbox checkbox-inline checkbox-success">
                       <label for="">Do not create invoices for this Client</label>
                       <input type="checkbox" id="" class="form-control" value="">
                       </div>
                       <div class="settings-text"><h4>Expense Markup or Discount</h4></div>
                       <div class="checkbox checkbox-inline checkbox-success form-inline">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Override the current 0% company-wide default markup and individual expense type markups, if any, and instead use:<input type="" class="form-control" name=""> % (i.e. 10.5% or -15.2%, etc.) as the markup for all expenses for this Client.</label>
                                  
                              </div>
                              <i>(If checked this will change the current 0% expense markup now set on the Company Settings page and any markup or discount set for an expense type individually -- for only this Client. Expenses for this Client will show on invoices modified by this percentage. For example, a $10.00 expense will show on the invoice as "$12.00" if you enter an overriding 20% markup).</i>
                     </div>

                     <div class="col-xs-6">
                      <div class="settings-text"><h4>Invoice Net Days</h4></div>
                       <div class="checkbox checkbox-success">
                       <input type="checkbox" id="" value="">
                      <label for="">Use the current company-wide default value Net 2 days</label>

                       </div>
                       <form class="checkbox checkbox-inline checkbox-success">
                       <label for="">Override the company-wide default value Net 2 days and instead use: </label>
                       <input type="checkbox" id="" value="">
                       </form>
                       <form class="form-inline">
                         <label>Net</label>
                         <input type="" class="form-control" name="">
                         <label>Days</label>
                          ("0" hides the due date line) <br>
                          <i>If you run a custom invoice template some options may not work. Please contact TimeLedger support team for details.</i>
                       </form>
                      
                       <form class="form-inline">
                         <label>Client Fixed Rate:</label> &#36;<input type="" class="form-control" value="0.00" name="">
                       </form>
                       <i>This Client Fixed Rate is the hourly rate this Client will be charged for any work done by any User. It only goes into effect if the "Matter Billing Rate:" option on the Matter Maintenance screen is set to "Client Fixed Rate". In addition, any newly-added Matter will inherit this Client Fixed Rate as Matter Fixed Rate 1.</i>
                       <form>
                         <div class="checkbox checkbox-inline checkbox-success form-inline">
                                  <input type="checkbox" id="" value="">
                                  <label> Recalculate the markups for previously entered expenses for this Client</label>
                                </div>
                       </form>
                       <form class="form-group">
                       <div class="">
                                 <label for="ex4">Update only expenses entered from</label>
                                <input id="datetimepicker6" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">     
                                <label for="ex4">To:</label>
                                <input id="datetimepicker5" class="form-control" placeholder="03/06/2018 8:24 PM" type="text"> <label>inclusively</label>
                                </div>
                              </form>
                    </div>
                    <div class="col-xs-12"><legend>New Matter Options</legend></div>
                      <div class="col-xs-12 ">You can define the options which will be used for any new Matter added to this Client. You can change these settings anytime for any individual Matter on its maintenance screen.</div>
                      <div class="col-xs-6">
                        <form class="form-inline">
                          <label>Matter Category:</label>
                          <select name="new_project_category" class="form-control">
                          <option value="0" selected="">None</option>
                          </select>
                          <a href=""> Category Maintenance</a>
                        </form>
                         <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label> Update categories for all existing Matters for this Client</label>
                      </div>
                      <form class="form-group">
                        <label>Default Time Entry Status:</label>
                          <select name="new_project_billable" class="form-control">
                          <option value="" selected="">Company-wide (Billable)</option>
                          <option value="0">Non-Billable</option>
                          <option value="1">Billable</option>
                          <option value="2">Follow Activity</option>
                          </select>
                      </form>
                        <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label>Update default status and set this status for all time entries retroactively for all Matters for this Client.</label>
                                </div>
                              </div>
                              <div class="col-xs-6">
                          <form class="form-group">
                            <label>Matter Billing Rate:</label>
                            <select name="new_project_billrate" class="form-control">
                              <option value="" selected="">Company-wide (User Rate 4)</option>
                              <option value="21">Client Fixed Rate</option>
                              <option value="1">Matter Fixed Rate</option>
                              <option value="7">User Rate 1</option>
                              <option value="8">User Rate 2</option>
                              <option value="9">User Rate 3</option>
                              <option value="10">User Rate 4</option>
                              <option value="11">User Rate 5</option>
                              <option value="12">User Rate 6</option>
                              <option value="13">Activity Rate 1</option>
                              <option value="14">Activity Rate 2</option>
                              <option value="15">Activity Rate 3</option>
                              <option value="16">Activity Rate 4</option>
                              <option value="17">Activity Rate 5</option>
                              <option value="18">Activity Rate 6</option>
                              <option value="19">Fixed Price</option>
                              </select>
                          </form>
                          <form class="form-group">
                           <label> Bill these Users at a different hourly rate:</label>
                           <select class="form-control">
                                  <option value="" selected="">Select a User</option>
                                  <option value="48226">Bell, Terry</option>
                                  <option value="50385">Burgraff, Kimberly</option>
                                  <option value="48227">Clarambeau, Adlore</option>
                                  <option value="50138">Diaz, Denise L</option>
                                  <option value="49076">Dracup, Alex</option>
                                  <option value="49807">Dracup, Brittany</option>
                                  <option value="48087">Dracup, Jeffrey</option>
                                  <option value="50128">Jenkins, Michelle A</option>
                                  <option value="50126">Kiamilev, Chandra E</option>
                                  <option value="50155">Larmore, Thomas A</option>
                                  <option value="50428">McQueen, Andrea A</option>
                                  <option value="50125">Payne, Richard</option>
                                  </select>
                          </form>
                          <i>You can add as many Users as you need. To remove the User from the list leave the rate field blank. Any newly-added Matter will inherit this list of specific User rates, but you can edit it (add/remove Users or change rates) anytime on the individual Matter Maintenance screen.</i>
                           <div class="checkbox checkbox-inline checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label>Update billing rate options retroactively for all existing Matters for this Client</label>
                                </div>
                      </div>
                      <div class="col-xs-12"><legend>Budgets</legend></div>
                      <div class="col-xs-12">Here you can set budgets for the real-time total labor, expenses and/or time being charged against this Client. This is optional -- but highly recommended -- it's a very powerful way to use TimeLedger to automatically help watch over your projects.

                          For each budget, you can set any number of alerts. You can include custom text to go out for each alert (i.e. different text for "we've used up 80% of our budget" to "heck! - we've used 99% of our budget!" with each alert going to any number of email addresses. You can also send these email alerts<a href=""> to cell phones.</a>

                          </div>
                          
                          <div class="col-xs-6">
                            <div class="settings-text"><h4>Time Budget and Alerts</h4></div>
                            <label>Time Budget for this client:</label>
                            <form class=" form-inline ">
                              
                              <input type="" class="form-control" value="0" name=""> <label>Hours</label>
                               <button class="btn btn-primary">Update Budget Graph</button>
                            </form>
                             
                              <div class="">&#8212;103.80 hours have been used</div>
                               <div class="checkbox  checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                </div>
                                <i class="fa fa-exclamation-triangle"></i> <label>Time Budget Alerts:</label>
                                <a href="">Add a Time Budget Alert</a>
                          </div>
                          <div class="col-xs-6">
                            <div class="settings-text"><h4>Monetary Budgets and Alerts</h4></div>
                             <label>Total Labor and Expense Budget for this client:</label>
                            <form class=" form-inline ">
                             
                              <input type="" class="form-control" value="$0.00" name="">
                               <button class="btn btn-primary">Update Budget Graph</button>
                            </form>
                             
                              <div class="">&#8212; $510.00 has been used</div>
                               <div class="checkbox  checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label>Let me budget Labor and Expenses separately</label>
                                </div>
                                <i class="fa fa-exclamation-triangle"></i> <label>Monetary Budget Alerts:</label>
                                <a href="">Add a Monetary Budget Alert</a>


                          </div>

                          <div class="col-sm-12"><legend>Deadline and Review Date</legend> </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                                 <label for="ex4">Date last Matter needs to be completed for this Client</label>
                                <input id="datetimepicker4" class="form-control" placeholder="03/06/2018 8:24 PM" type="text">  
                                </div>
                                <div class="form-group">   
                                <label for="ex4">Next date this Client needs to be reviewed:</label>
                                <input id="datetimepicker3" class="form-control" placeholder="03/06/2018 8:24 PM" type="text"><br>
                                <label>Date added:  9/21/2015 11:50:44 AM</label>
                                </div>
                              </div>
                                <div class="col-sm-12">
                                <legend></legend>
                                <div class="settings-text">
                                <button class="btn btn-primary">Save</button>
                                <p>(Always "Save" before leaving a page)</p>
                              </div>
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
