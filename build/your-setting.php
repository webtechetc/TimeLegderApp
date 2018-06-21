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
             
                <div class="col-md-3 col-xs-12 col-sm-4 pull-right" >
                  <div class="row">
                        <input type="text" placeholder="Search Settings" class="form-control" name="">
                        <!-- <select class="form-control" name="">
                          <option>Search Settings</option>
                          <option value="company-info">Company Info</option>
                          <option value="billing-info">Billing Info</option>
                          <option value="currency-settings">Currency Settings</option>
                          <option value="profit-calculation">Profit Calculation Settings</option>
                          <option value="billing-settings">Matter Billing Options</option>
                          <option value="expense-markup">Expense Markup or Discount</option>
                          <option value="permissions-assigning">Permissions and Assignments</option>
                          <option value="timescreen-settings">Time Entry Screen Settings</option>
                          <option value="emailing_entries">Emailing Time Entries Into TimeLedger</option>
                          <option value="timesheet-approval-settings">Timesheet Approval Settings</option>
                          <option value="Floor/Ceiling-settings">Time Entry Hours Limit</option>
                          <option value="printable-timesheet-settings">Printable Timesheet Settings</option>
                          <option value="payroll-settings">Payroll Settings</option>
                          <option value="printable-expense-settings">Printable Expense Settings</option>
                          <option value="terms-timeLedger">Terms to be Used Throughout TimeLedger</option>
                          <option value="tl-appearance">TimeLedger Appearance</option>
                        </select> -->
                      </div>
                    </div>
                 <div class="col-xs-12" style="margin-bottom: 10px;"></div>
                  <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 settings-text">
                    <h1>Company-Wide Settings</h1>
                    <p>(To save any changes you make on this page, please click on any "Save Changes" button before leaving this page) <br>(You can quickly find any word on this page by typing Ctrl-F on a 
                    PC (Command Key-F on a Mac))</p>
                    <button class="btn btn-primary" type="button">Save Changes</button>
                </div>
            </div>
                      <div class="x_panel">

                            <div class="open-content ">
                             <div class="timesheet-view" style="margin-left: 8px;"> <h3><strong>Personal Settings</strong> </h3>
                             </div>

                              <!-- <div class="col-xs-12 settings-text">
                              <h1>For Alex Dracup</h1>
                              <h5>(Required fields are shown with an *)</h5>
                            </div> -->
                            
                            <div class="col-xs-12">
                              <h3>TimeLedger account</h3>
                              <div class="row">
                              <div class="col-sm-6">
                                <form class="form-group">
                                  <label><span>*</span>Login</label>
                                  <input type="" class="form-control" name="">
                                </form>
                              </div>
                              <div class="col-sm-6">
                                <form class="form-group">
                                  <label><span>*</span>Password:</label>
                                  <input type="" class="form-control" name="">
                                </form>
                              </div>
                              <div class="col-sm-6">
                                <form class="form-group">
                                  <label><span>*</span>Re-enter Password</label>
                                  <input type="" class="form-control" name="">
                                </form>
                              </div>
                              <div class="col-sm-6">
                                <form class="form-group">
                                  <label>Password reminder: </label>
                                  <input type="" class="form-control" name="">
                                </form>
                              </div>
                            </div>
                            <legend></legend>
                          </div>
                            <div class="col-xs-12">
                              <h3>TimeLedger settings</h3>
                              <div class="row">
                              <div class="col-sm-6">
                              <div class="form-group">
                                    <label for="ex3">Set my default timing page to</label>
                                          <select class="form-control">
                                              <option>Time Period View</option>
                                              <option>Day View</option>
                                              <option>Week View</option>
                                            </select>
                                      </div>
                                    
                            <h4>Send me email notifications regarding TimeLedger activity:</h4>
                            <div class="checkbox checkbox-success form-group">
                           <input type="checkbox"> <label>On timesheet submission </label>
                                  </div>
                             <div class="checkbox checkbox-success form-group">
                                    <input type="checkbox"> <label>When new Client or Matter added</label>
                                </div>
                        </div>
                      </div>
                      <legend></legend>
                    </div>

                      <div class="col-sm-12">
                        <h3>Email</h3>
                        <div class="row">
                        <div class="col-sm-6">
                        <div class="form-group">
                          <label>Office:</label>
                          <input type="" class="form-control" name="" value="alexpdracup@gmail.com">
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Home:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                      </div>
                      </div>
                      <legend></legend>
                    </div>
                      <div class="col-sm-12">
                        <h3>Address</h3>
                        <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>Street:  </label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label>City: </label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>Unit/Apt:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>State:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>Zipcode/Province:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                      </div>
                      <legend></legend>
                    </div>
                      <div class="col-sm-12">
                        <h3>Contact Numbers</h3>
                        <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>Work:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>Cell:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>Fax:</label>
                          <input type="" class="form-control" name="" value="">
                        </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group">
                          <label>Messenger:</label>
                          <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 settings-text">
                      <button class="btn btn-primary">Save Changes</button>
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
    <script type="text/javascript">
      jQuery(document).ready(function($) {
              jQuery('.x_panel').css('height', 'auto');
              jQuery('.x_content').css('display', 'none');
            });

    </script>
   <?php
    include_once "modal.php";
    ?>
  </body>
</html>
