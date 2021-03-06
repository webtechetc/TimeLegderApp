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
               <div class="col-md-8">
                  <div class="row">
                  <ul id="myTab" class="nav nav-tabs bar_tabs pull-left " role="tablist">
                        <li role="presentation" >
                        	<a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Your Settings</a>
                        </li>
                        <li role="presentation" class="active">
                        	<a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Company Settings</a>
                        </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 pull-right" >
                  <div class="row">
                    <div class="col-sm-3 text-right"  style="padding-top:10px;">
                        <label for="">Jump to:</label>
                    </div>

                    <div class="col-sm-9" style="margin-bottom0px;">
                      <div class="row">
                        <select class="form-control" name="">
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
                        </select>
                      </div>
                    </div>
                  </div>

                  </div>
                </div>
                 <div class="col-xs-12" style="margin-bottom: 30px;"></div>
                  <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 settings-text">
                    <h1>Company-Wide Settings</h1>
                    <p>(To save any changes you make on this page, please click on any "Save Changes" button before leaving this page) <br>(You can quickly find any word on this page by typing Ctrl-F on a 
                    PC (Command Key-F on a Mac))</p>
                    <button class="btn btn-primary" type="button">Save Changes</button>
                </div>
            </div>
                  
                <div id="myTabContent" class="tab-content">
                    <!--===============================Tab  Your settigs =================================-->
                    <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
                       <div class="x_panel">
                            <div class="x_title">
                              <h2>Personal Settings</h2>
                               <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                              <div class="clearfix"></div>

                            </div>


                            <div class="open-content ">
                              <div class="col-xs-12 settings-text">
                              <h1>For Alex Dracup</h1>
                              <h5>(Required fields are shown with an *)</h5>
                            </div>
                            
                            <div class="col-xs-12">
                              <h3>TimeLedger account</h3>
                              <div class="ln_solid"></div>
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
                                  <label><span>*</span>ReEnter Passowrd</label>
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
                          </div>
                            <div class="col-xs-12">
                              <h3>TimeLedger settings</h3>
                              <div class="ln_solid"></div>
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
                                    
                            <h4>Send me email notifications upon TimeLedger activity:</h4>
                            <div class="checkbox checkbox-success form-group">
                           <input type="checkbox"> <label>On timesheet submission </label>
                                  </div>
                             <div class="checkbox checkbox-success form-group">
                                    <input type="checkbox"> <label>When new Client or Matter added</label>
                                </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-sm-12">
                        <h3>Email</h3>
                        <div class="ln_solid"></div>
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
                    </div>
                      <div class="col-sm-12">
                        <h3>Address</h3>
                        <div class="ln_solid"></div>
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
                    </div>
                      <div class="col-sm-12">
                        <h3>Contact Numbers</h3>
                        <div class="ln_solid"></div>
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
                    <div class="col-sm-12 text-center">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </div>
                  </div> 
                    <!--=============================== Tab Company info- settigs satrt =================================-->
                    <div role="tabpanel" class="tab-pane fade  active in" id="tab_content2" aria-labelledby="profile-tab">
                        
                        <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                              <div class="x_title">
                                <h2>Company Info</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content open-content">
                                <br>
                                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">

                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Company name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="company-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Federal Tax ID 

                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="federal-tax" name="federal-tax" required="required" class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="address-Line" class="control-label col-md-3 col-sm-3 col-xs-12">Address Line 1</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="address-Line" class="form-control col-md-7 col-xs-12" name="Address-Line " type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="address-Line" class="control-label col-md-3 col-sm-3 col-xs-12">Address Line 2</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="address-Line2" class="form-control col-md-7 col-xs-12" name="Address-Line 2" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">State / Province</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                    <label for="" class="control-label col-md-1">Zip Code</label>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <select name="" id="" class="form-control" >
                                        <option value="">United States</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Main Telephone</label>
                                   <div class="col-md-3 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                    <label for="" class="control-label col-md-1">Extension</label>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Main Administrator Emai</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Fax</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input name="gender" value="male" type="radio"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input name="gender" value="female" type="radio"> Female
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                  
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group text-center">
                                    <a href="https://app.timeledger.com/tl/companies.asp?ci=14317&ti=49076&fn=979257153&td=46803#" title="">Brand TimeLedger with your company logo</a>
                                  </div>
                                  <div class="ln_solid"></div>
                                  <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                                  </div>

                                </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- row End -->
                        <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                              <div class="x_title">
                                <h2>Billing Info</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content" >
                                <br>
                                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left">
                                  <div class="form-group ">
                                    <div class="radio radio-inline ">
                                       <input type="radio" name="r" id="" value="" checked="checked">
                                      <label>
                                       
                                        Same mailing address as for Company Info above
                                      </label>
                                    </div>
                                    <div class="radio radio-inline">
                                      <input type="radio" name="r" id="" value="" >
                                      <label>
                                        
                                         Use this address for billing
                                      </label>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Company name<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="company-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Federal Tax ID 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="federal-tax" name="federal-tax"  class="form-control col-md-7 col-xs-12" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="address-Line" class="control-label col-md-3 col-sm-3 col-xs-12">Address Line 1</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="address-Line" class="form-control col-md-7 col-xs-12" name="Address-Line " type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="address-Line" class="control-label col-md-3 col-sm-3 col-xs-12">Address Line 2</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="address-Line2" class="form-control col-md-7 col-xs-12" name="Address-Line 2" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">State / Province</label>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                    <label for="" class="control-label col-md-1">Zip Code</label>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Country</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <select name="" id="" class="form-control" >
                                        <option value="">United States</option>
                                      </select>
                                    </div>
                                  </div>
                                  <legend>Accounts Payable Contact</legend>
                                  
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                                   <div class="col-md-3 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                    <label for="" class="control-label col-md-1">Extension</label>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12">Fax</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="" class="control-label col-md-3 col-sm-3 col-xs-12"><Fax>Email</Fax></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input id="" class="form-control col-xs-12" name="" type="text">
                                    </div>
                                  </div>
                                  
                                  <div class="ln_solid"></div>
                                  <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                                  </div>

                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- row End -->
                        <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                              <div class="x_title">
                                <h2> Currency Settings</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                <br>
                                <div class="row">
                                  
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                    <strong>Use this symbol for currency</strong>
                                      <select name="" id="" class="form-control">
                                          <option value="USD" selected="">$</option>
                                          <option value="EUR">€</option>
                                          <option value="GBP">£</option>
                                          <option value="AUD">AUD</option>
                                          <option value="CAD">CAD</option>
                                          <option value="NZD">NZD</option>
                                          <option value="JPY">¥</option>
                                          <option value="CHF">CHF</option>
                                          <option value="FIM">FIM</option>
                                          <option value="SEK">SEK</option>
                                          <option value="NOK">NOK</option>
                                          <option value="RUR">RUR</option>
                                          <option value="AED">AED</option>
                                          <option value="BRL">R$</option>
                                      </select> 
                                      </div> 
                                  </div>
                                 
                                   <div class="col-sm-6">
                                    <div class="form-group">
                                    <strong>Use this word for currency:</strong>
                                      <select  name="" id="" class="form-control">
                                          <option value="Dollar" selected="">Dollar</option>
                                          <option value="Euro">Euro</option>
                                          <option value="Pound">Pound</option>
                                          <option value="Yen">Yen</option>
                                          <option value="Franc">Franc</option>
                                          <option value="Peseta">Peseta</option>
                                          <option value="Guilder">Guilder</option>
                                          <option value="Mark">Mark</option>
                                          <option value="Markka">Markka</option>
                                          <option value="Krona">Krona</option>
                                          <option value="Krone">Krone</option>
                                          <option value="Rouble">Rouble</option>
                                          <option value="Dirham">Dirham</option>
                                          <option value="Reais">Reais</option>
                                      </select></div>
                                      </div>
                                  </div>

                                 <div class="col-xs-12">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p>(This symbol and word will be available on screens and reports on a rollout basis.<br>
                                      Please notify us if you would like a particular screen or report pushed to the top of our list.)</p>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                  <div class="ln_solid"></div>
                                  
                              
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                              </div>
                                </div>

                                
                            </div>
                          </div>
                            
                              
                        <!-- row End -->
                        <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                              <div class="x_title">
                                <h2>Profit Calculation Settings</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content table-use calculation" >
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p><strong>Profit is calculated by subtracting overhead from gross billings</strong></p> 
                                        <div class="table-responsive">
                                          <table class="table" border="0">
                                               <tbody><tr valign="baseline">
                                                 <td align="right">Calculate overhead as:</td>
                                                 <td>
                                                  <div class="radio radio-inline">
                                                    <input id="flatrateoverhead" name="flatrateoverhead" value="1" checked="" type="radio">
                                                    <label for="flatrateoverhead">
                                                       A flat amount (same every month) of 
                                                    </label>
                                                  </div>
                                                  <div class="radio radio-inline">
                                                    <input name="OverheadAmountType" value="True" checked="" type="radio">
                                                    <label>
                                                        $&nbsp;
                                                    </label>
                                                </div>
                                                  <input size="5" maxlength="5" onkeypress="return numberOnly(this,event,false);" name="amountOverhead1" value="0.00" type="text">
                                                  <div class="radio radio-inline">
                                                    <input name="OverheadAmountType" value="False" type="radio">
                                                    <label>
                                                      or
                                                    </label>
                                                  </div>
                                                  <input size="5" maxlength="5" onkeypress="return numberOnly(this,event,false);" name="amountOverhead2" value="0.00" type="text"> % of gross billing
                                                  <br>
                                                  <div class="radio radio-inline">
                                                    <input name="flatrateoverhead" value="2" type="radio">
                                                    <label>
                                                      A percentage of Timekeeper's billing rate: </label>
                                                   </div>
                                                  <input size="5" maxlength="5" onkeypress="return numberOnly(this,event,false);" name="overhead" value="0.00" type="text" style="margin: 10px 0 10px 20px;"> %
                                                  <br>
                                                  <div class="radio radio-inline">
                                                     <input name="flatrateoverhead" value="3" type="radio"> 
                                                    <label>
                                                       According to a table of different monthly amounts
                                                    </label>
                                                  </div>
                                                </td>
                                                </tr>
                                               </tbody>
                                        </table>
                                        <div class="checkbox checkbox-success">
                                          <input name="client_budgets" checked="" type="checkbox">
                                          <label> Allocate budgets and allow budget alerts at Client level</label>
                                        </div>
                                        <br/>
                                        <div class="checkbox checkbox-success">
                                          <input name="project_budgets" checked="" type="checkbox"> 
                                          <label>Allocate budgets and allow budget alerts at Matter level</label>
                                        </div>
                                      </div>
                                        <div class="col-xs-12 text-center">
                                        <button class="btn btn-primary" type="reset">Save</button>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        <!-- row End -->
                         <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                              <div class="x_title">
                                <h2>Matter Billing Options</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content table-use matter" >
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <legend>Fixed Price (Flat Rate) Billing</legend>
                                        <div class="checkbox checkbox-success">
                                          <input onclick="setFixedPrice(this);" name="flat_rate" checked="" type="checkbox">
                                        <label> Allow Fixed Price billing. </label>
                                        </div>
                                        <p><strong>For example:</strong> The Client will be charged $1,000 no matter what hours are spent on Project ABC. Once checked, Fixed Price billing will then be added as an option on the Matter Maintenance pages. You can also then change any existing hourly billed project to Fixed Price billing.</p>
                                    </div>
                                    <div class="col-xs-12">
                                        <legend>Custom User Rates</legend>
                                        <p>
                                        When "Allow Users to Select Matter Billing Rates by Title" is checked below,
                                Timekeeper can select a Billing <input size="10" style="width: 4em;" title="A word to be used on the screens. Please type in a singular form." name="ct_rate" value="Rate" maxlength="30" type="text"> on the Day View time entry screen. No Billing Role drop dropdown-menu menu will show for Matters billed at a Fixed Price. The User or Matter default Rate will be used on Week View.
                                        </p>
                                         <div class="checkbox checkbox-success">
                                          <input name="custom_rates" type="checkbox">
                                          <label> Allow Users to Select Matter Billing Rates by Title ("regular time", "time and a half", etc.) from drop-down menu on the Day View time entry screen.</label>
                                        </div>
                                        <p><strong>Please note:</strong> If you export TimeLedger data to QuickBooks, please be aware that QuickBooks does not currently support TimeLedger's Rates by Role capability. So your rate information will not export to QuickBooks.</p>
                                        <p>We highly recommend you only switch to Billing Rates at the end of your last billable day, the day before your new billing cycle (for example, if Feb 1st is on a Tuesday, you'd want to activate Rates by Role Monday evening on Jan 31st.).</p>
                                    </div>
                                   <div class="col-xs-12">
                                     <legend>Setting Billing Roles to be Common to all, or Unique by User and/or Matter</legend>
                                     <div class="checkbox checkbox-success">
                                      <input name="use_tkrates" type="checkbox"> 
                                     <label>Each User will carry a unique list of Billing Rates listed on their User Maintenance page.</label>
                                   </div>
                                     <p>(If only this "User" box is checked, then any User assigned to a Matter will see only their own list of possible Billing Rates on the Day View time entry screen (the Rate title only - not the amounts of any billing rates, unless they have permission to see those).</p>
                                     <div class="checkbox checkbox-success"> <input name="use_pjrates" type="checkbox"> <label>Each Matter will carry a unique list of Billing Rates listed on the Matter Maintenance screen.</label></div>
                                     <p>(If only this "Matter" box is checked, then any User assigned to a Matter will see all available Billing Rates for that Matter (but not the amounts of any billing rates, unless they have permission to see those).</p>
                                     <p>When both of these boxes are checked, a User can be assigned only to Matters that have one or more Billing Rates that match one of the User's Billing Rates. For example, if Matter XYZ has Billing Rates of "Associate Level 1" and "Associate Level 2", but User Smith only has a Billing Rate of "Associate Level 3", then User Smith cannot be assigned to Matter XYZ.</p>
                                   </div>
                                    <div class="col-xs-12">
                                      <legend>New Matters</legend>
                                        <div class="row">
                                        <label class="col-sm-6">
                                          <div class="form-group">
                                          Set default time entry billing status for newly added Matters to <select name="new_project_billable" class="form-control">
                                        <option value="0">Non-Billable</option>
                                        <option value="1" selected="">Billable</option>
                                        <option value="2">Follow Activity</option>
                                        </select>
                                      </div>

                                        </label>
                                        <label class="col-sm-6">
                                        <div class="form-group">
                                        Set default billing method for newly added Matters to <select  class="form-control " name="new_project_rate">
                                        <option value="21">Client Fixed Rate</option>
                                        <option value="1">Matter Fixed Rate</option>
                                        <option value="7">User Rate 1</option>
                                        <option value="8">User Rate 2</option>
                                        <option value="9">User Rate 3</option>
                                        <option value="10" selected="">User Rate 4</option>
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
                                        </div>
                                        </label>
                                         
                                       <label class="col-sm-6">
                                        <div class="form-group">
                                        Set default Activity for newly added Matters to <select  class="form-control " name="new_project_activity">
                                        <option value="1" selected="">None</option>
                                        <option value="68923">Telephone call</option>
                                        </select>
                                      </div>
                                      </label>
                                       <label class="col-sm-6">
                                        <div class="form-group">
                                        Set default category for newly added Matters to <select name="new_project_category"  class="form-control ">
                                        <option value="0" selected="" >None</option>
                                        </select>
                                        </div>
                                        </label>

                                       <div class="form-group text-center"> <a href="project_categories.asp?ci=14317&amp;ti=49076&amp;fn=979257153&amp;td=46803" style="margin-left: 1em;">Manage Categories</a></div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                    
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>

                                </div>
                          </div>
                        </div>
                        <!-- row End -->
                         <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel " >
                              <div class="x_title">
                                <h2>Expense Markup or Discount</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">                                
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>Add a default markup (or discount by entering a negative number - i.e. "-10%") of <input size="7" maxlength="8" style="margin-left:.5em" onkeypress="return numberOnly(this,event,true);" name="expense_markup" value="0.00" type="text"> % of total expenses</p>
                                     <div class="checkbox checkbox-success">
                                      <input name="_update_expense_markups" type="checkbox">
                                      <label> Recalculate the markups for entered expenses</label>
                                    </div>
                                    <p>Update only expenses entered from  </p>  
                                    <div class="row">
                                      
                                      <div class="col-md-4">
                                         <div class='input-group date ' id='datetimepicker1'>
                                              <input type='text' class="form-control" />
                                              <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                              </span>

                                          </div>
                                      </div>
                                      <div class="col-md-2 text-center" style="padding-top:10px;">
                                        <strong>to</strong>
                                      </div>
                                      <div class="col-md-4">
                                           <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                          </div>
                                       
                                     </div>
                                     <div class="col-md-2 " style="padding-top:10px;">
                                       inclusively
                                     </div>
                                   </div>
                                   <p>All expenses entered will show on invoices with this markup added. I.e. - a $10.00 expense will show on the Client invoice as $12.00 if you enter a 20% markup.</p>
                                   <p>The default markup can be overridden or adjusted for each Expense Type, Client or Matter individually on the Maintenance screen for that item. Use the <a href="report_pjmarkups.asp?ci=14317&amp;ti=49076&amp;fn=979257153&amp;td=46803">Effective Expense Markup</a> report to check the current markup values applied to each Matter.</p>
                                  </div>
                                </div>
                                 
                                 <div class="clearfix">
                                
                                </div>
                                <div class="ln_solid"></div>
                                <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                              </div>
                                
                            </div>
                          </div>
                          </div>
                        <!-- row End -->
                        <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel" >
                              <div class="x_title">
                                <h2>Permissions and Assignments</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content table-use permissions">
                                 <br>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="checkbox checkbox-success">
                                        <input name="edit_others" checked="" type="checkbox"> 
                                        <label>
                                           Allow users with "Administrator" or "Data Entry" permission level (as set on the Maintenance &gt; User screen) to view and edit time entries of other Users</label>
                                        </div>    
                                        <br>
                                        <div class="checkbox checkbox-success">
                                          <input name="AssignAllUsersToNewProject" checked="" type="checkbox"> 
                                          <label>
                                            Assign all Users in the Company to any new Matter</label>
                                          </div>
                                        <small class="indented">(When an Administrator creates a new Matter, all Users will be assigned to it by default.)</small>
                                        <div class="checkbox checkbox-success">
                                           <input name="AssignAllProjectsToNewUser" checked="" type="checkbox"> 
                                          <label>
                                             Assign all existing&nbsp;Matters to any new User</label>
                                        </div>

                                        <small class="indented">(When an Administrator creates a new User account, all Matters will be assigned to it by default.)</small>
                                        <div class="checkbox checkbox-success">
                                          <input name="assignAllActivitiestoTimekeeper" checked="" type="checkbox"> 
                                        <label>
                                            Assign all Company&nbsp;Activities to any new User</label>
                                           </div> 
                                        <small class="indented">(When an Administrator creates a new User, all Activities will be assigned to it by default.)</small>
                                         <div class="checkbox checkbox-success">
                                          <input name="assignAllTimekeepersToActivity" checked="" type="checkbox">
                                        <label>
                                             Assign all Company&nbsp;Users to any new Activity</label>
                                          </div>  
                                        <small class="indented">(When an Administrator creates a new Activity, all Users will be assigned to it by default.)</small>
                                       
                                          <legend>Associate Activity lists with individual</legend>
                                           <div class="radio">
                                             <input name="AssignActivitiestoProjects" value="False" checked="" type="radio"> 
                                            <label>
                                               Users (each User will carry a unique list of Activities)</label>
                                           
                                          </div>
                                          <div class="clearfix">
                                          
                                          </div>
                                          <div class="radio">
                                            <input name="AssignActivitiestoProjects" value="True" type="radio">
                                            <label>
                                                 Matters (each Matter will carry a unique list of Activities)</label>
                                        </div>
                                         <div class="clearfix">
                                          
                                          </div>
                                        <div class="checkbox checkbox-success">
                                           <input name="has_subprojects" checked="" type="checkbox"> 
                                          <label>
                                           Use Subprojects</label>
                                          </div> 
                                           <div class="clearfix">
                                          
                                          </div>
                                        <div class="checkbox checkbox-success">
                                           <input name="timekeeper_groups" checked="" type="checkbox"> 
                                            <label>
                                           Use Groups</label>
                                         </div>  
                                    <div class="clearfix">
                                    
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                                  </div>
                              </div>
                          </div></div>
                        <!-- row End -->
                        <!-- row start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Time Entry Screen Settings</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content table-use entryscreen">
                                 <br>
                                  <div class="row">
                                    <div class="col-xs-12">
                                        <legend>Default Time Entry Screen</legend>
                                        <div class="row">
                                        <div class="col-sm-4">
                                          <label>Initially set default timing page for all Users to </label>
                                          
                                          <select name="default_timing"  class="form-control">
                                            <option value="3">Timesheet Period View</option>
                                            <option value="1">Week View</option>
                                            <option value="2" selected="">Day View</option>
                                          </select>
                                        </div>
                                      </div>
                                  </div>
                                   <div class="col-xs-12">
                                       <legend>Items Displayed and Behavior of Time Entry Screens</legend>
                                       <div class="checkbox checkbox-success">
                                        <input onclick="if(!this.checked) this.form.show_activity.checked = false;" name="detailed_weekview" checked="" type="checkbox"> 
                                       <label>
                                         Allow selection of Activity on Timesheet Period View, Week View and Day View</label>
                                      </div>
                                      <div class="checkbox checkbox-success">
                                        <input onclick="if(this.checked) this.form.detailed_weekview.checked = true;" name="show_activity" type="checkbox"> 
                                      <label for="">
                                          Require selection of Activity on Timesheet Period View, Week View and Day View</label>
                                      </div>
                                      <div class="checkbox checkbox-success">
                                        <input name="show_billable" checked="" type="checkbox"> 
                                      <label>
                                         Allow selection of "Billable / Non-Billable" on Week View and Day View</label>
                                       </div>  
                                      <legend>Timesheet Period View</legend>
                                       <div class="checkbox checkbox-success">
                                        <input name="show_tpview" checked="" type="checkbox"> 
                                      <label>
                                          Show "Timesheet Period View" Screen</label>
                                         </div> 
                                      <legend>Week View</legend>
                                      <div class="checkbox checkbox-success">
                                         <input name="show_weekview" checked="" type="checkbox"> 
                                        <label>
                                         Show "Week View" Screen</label>
                                        </div> 
                                      
                                          Week starts on
                                          <select name="week_starts_on">
                                              <option value="1" selected="">Sunday</option>
                                              <option value="2">Monday</option>
                                              <option value="7">Saturday</option>
                                          </select>
                                      
                                      <div class="checkbox checkbox-success">
                                         <input name="description_required" type="checkbox"> 
                                      <label>
                                         Require entry of Description on Week View</label>
                                        </div>  
                                      <p>Period for which unused Matters are displayed on Week View:
                                          <input maxlength="4" style="text-align:center; width: 40px;" onkeypress="return digitsOnly(event);" name="week_show_unused_projects" value="14" type="text"> days. (Setting this value to "0" means the period has no limit.)
                                      </p>
                                      <legend>Day View</legend>
                                      <div class="checkbox  checkbox-success">
                                        <input name="show_dayview" checked="" type="checkbox">
                                      <label>
                                           Show "Day View" Screen</label>
                                        </div>
                                        <div class="radio  checkbox-success">
                                           <input name="focus_description" value="False" type="radio">
                                        <label>
                                        
                                          Place cursor on Activity drop-down menu as soon as Matter is selected in Day View</label>
                                        </div>
                                         <div class="radio  checkbox-success">
                                          <input name="focus_description" value="True" checked="" type="radio"> 
                                        <label>
                                          Place cursor in Description Box as soon as Matter is selected in Day View</label>
                                        </div>
                                        <div class="checkbox  checkbox-success">
                                          <input name="start_timer" checked="" type="checkbox">
                                      <label>
                                           Start timer automatically when Matter selected on Day View</label>
                                         </div>
                                      <legend>Minimum Time Increment
                                          <select name="billing_increment">
                                              <option value="1">1 minute</option>
                                              <option value="3">3 minutes</option>
                                              <option value="5">5 minutes</option>
                                              <option value="6" selected="">6 minutes</option>
                                              <option value="10">10 minutes</option>
                                              <option value="12">12 minutes</option>
                                              <option value="15">15 minutes</option>
                                              <option value="20">20 minutes</option>
                                              <option value="30">30 minutes</option>
                                              <option value="60">1 hour</option>
                                          </select>
                                      </legend>
                                      <p>(For example if you set this increment to 6 minutes and the timer is stopped at 22 minutes, the time recorded will be rounded up to .4 hours or 24 minutes.)</p>
                                       <div class="checkbox  checkbox-success">
                                          <input name="timeCharts" checked="" type="checkbox"> 
                                      <label>
                                        Allow Graphs to display on Time Entry Screens</label>
                                       </div>   
                                    </div>
                                    <div class="clearfix">
                                    
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                              </div>
                          </div>
                        </div>
                        <!-- row End -->
                        <!-- row Star -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Emailing Time Entries Into TimeLedger</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use">
                                  <br>
                                  <div class="row">
                                      <div class="col-xs-12">
                                        <div class="checkbox  checkbox-success">
                                          <input name="ee_enable" checked="" type="checkbox"> 
                                         <label>Allow users to email their time entries directly into TimeLedger</label>
                                       </div>
                                        </div>
                                        <div class="clearfix">
                                    
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                                      </div>
                                  </div>
                        </div>
                        <!-- row End -->
                         <!-- row Star -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Timesheet Approval Settings</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use approvals">
                                  <br>
                                  <div class="row">
                                      <div class="col-xs-12">
                                        <div class="checkbox  checkbox-success">
                                          <input name="_ta_in_use" checked="" type="checkbox"> 
                                         <label>Use Timesheet Approval System ?
                                         </label>
                                       </div>
                                        <div class="checkbox  checkbox-success">
                                          <input name="locktimesheet" type="checkbox">
                                         <label> Lock Timesheets after they are submitted for approval</label>
                                       </div>
                                        <div class="checkbox  checkbox-success">
                                          <input class="indented" name="lock_expenses" type="checkbox"> 
                                         <label>Lock expense entries along with the time entries</label>
                                        </div> 
                                         <div class="table-responsive">
                                            <table class="table table-bordered" cellspacing="0" cellpadding="0" border="0">
                                              <tbody><tr valign="top">
                                                <td>
                                                  <div class="outline cell">
                                                  <b>Close Timesheets:</b><br>
                                                  <div class="radio radio-inline"><input name="submitted" value="1" checked="" type="radio"><label></label></div>
                                                   Weekly on <select name="weekly">
                                            <option value="2">Monday</option>
                                            <option value="3">Tuesday</option>
                                            <option value="4">Wednesday</option>
                                            <option value="5">Thursday</option>
                                            <option value="6" selected="">Friday</option>
                                            <option value="7">Saturday</option>
                                            <option value="1">Sunday</option>
                                            </select>
                                            
                                                  <div class="radio">
                                                  <input name="submitted" value="2" type="radio" > 
                                                  <label>Every two weeks</label>
                                                  
                                                  </div>
                                                  <div class="indented">
                                                    Starting 
                                              <input id="datetimepicker3"  type="text" placeholder="03/06/2018 9:27 PM">
                                              

                                                  </div>
                                                  <div class="radio">
                                                  <input name="submitted" value="4" type="radio">
                                                  <label> Monthly on the last day of month</label>
                                                  </div>
                                                  <div class="radio">
                                                  <input name="submitted" value="3" type="radio"> 
                                                  <label>Other:</label>
                                                  
                                                </div>
                                                  <div class="indented">First day of 1st monthly pay period:
                                                    &nbsp;<select name="custom_first">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            </select>

                                                  </div>
                                                  <div class="indented">First day of 2nd monthly pay period:
                                                    <select name="custom_sec">
                                            <option value="16" selected="">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            </select>

                                                  </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="outline cell">
                                                  <b>Timesheets are due:</b><br>
                                                    <select name="dueday" class="indented">
                                            <option value="0">0</option>
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            </select>
                                             day(s) after Timesheet period closes
                                                  </div>


                                                  <div class="outline cell">
                                                     <div class="checkbox checkbox-success">
                                                  <input name="_ta_alerting" checked="" type="checkbox">
                                                  <label>Start Alerting Users Via Email:</label>
                                                  
                                                </div>
                                                
                                                  <select name="alerting" class="indented">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            </select>
                                             calendar day(s) before Timesheet due date
                                             <p>at</p>
                                                
                                                   <select name="scheduleAlerts">
                                            <option value="6">6:00 am</option>
                                            <option value="7">7:00 am</option>
                                            <option value="8">8:00 am</option>
                                            <option value="9" selected="">9:00 am</option>
                                            <option value="10">10:00 am</option>
                                            <option value="11">11:00 am</option>
                                            <option value="12">12:00 pm</option>
                                            <option value="13">1:00 pm [13:00]</option>
                                            <option value="14">2:00 pm [14:00]</option>
                                            <option value="15">3:00 pm [15:00]</option>
                                            <option value="16">4:00 pm [16:00]</option>
                                            <option value="17">5:00 pm [17:00]</option>
                                            <option value="18">6:00 pm [18:00]</option>
                                            <option value="19">7:00 pm [19:00]</option>
                                            <option value="20">8:00 pm [20:00]</option>
                                            </select>
                                            <select name="timeZoneBias">
                                            <option value="-780">UTC-13</option>
                                            <option value="-720">UTC-12</option>
                                            <option value="-660">UTC-11</option>
                                            <option value="-600">UTC-10 [Hawaii]</option>
                                            <option value="-540">UTC-9 [Alaska]</option>
                                            <option value="-480" selected="">UTC-8 [Pacific Standard Time]</option>
                                            <option value="-420">UTC-7 [Mountain Standard Time]</option>
                                            <option value="-360">UTC-6 [Central Standard Time]</option>
                                            <option value="-300">UTC-5 [Eastern Standard Time]</option>
                                            <option value="-270">UTC-4:30 </option>
                                            <option value="-240">UTC-4 </option>
                                            <option value="-210">UTC-3:30 </option>
                                            <option value="-180">UTC-3 [Argentina, Brasilia]</option>
                                            <option value="-120">UTC-2</option>
                                            <option value="-60">UTC-1</option>
                                            <option value="0">UTC, GMT [Greenwich Mean Time]</option>
                                            <option value="60">UTC+1 [Central European Time]</option>
                                            <option value="120">UTC+2 [Eastern European Time]</option>
                                            <option value="180">UTC+3 [East Africa, Arabia]</option>
                                            <option value="210">UTC+3:30</option>
                                            <option value="240">UTC+4 [Moscow]</option>
                                            <option value="270">UTC+4:30</option>
                                            <option value="300">UTC+5</option>
                                            <option value="330">UTC+5:30 [Indian Standard Time]</option>
                                            <option value="360">UTC+6</option>
                                            <option value="420">UTC+7</option>
                                            <option value="480">UTC+8 [Western Standard Time]</option>
                                            <option value="540">UTC+9</option>
                                            <option value="570">UTC+9:30</option>
                                            <option value="600">UTC+10</option>
                                            <option value="660">UTC+11</option>
                                            <option value="720">UTC+12 [New Zeland Standard Time]</option>
                                            </select>

                                                    <br>
                                                     <select name="DaylightSaving">
                                            <option value="0">None</option>
                                            <option value="1" selected="">US/Canada</option>
                                            <option value="2">Europe/GB</option>
                                            </select> Daylight Savings

                                                  </div>
                                                
                                                </td>
                                              </tr>
                                              </tbody></table>
                                              <div class="radio ">
                                                <input name="approvalalert_dedicatedemail" value="False" checked="" type="radio">
                                                <label>  Use Administrator or Manager email address as a return address for all Approval Alert Emails</label>
                                              </div>
                                               <div class="radio radio-inline">
                                                <input name="approvalalert_dedicatedemail" value="True" type="radio"> 
                                                <label>Use dedicated email address as a return address for all Approval Alert Emails:</label>
                                                
                                                </div>
                                               <input size="50" name="approvaldedicated_email" value="" maxlength="50" type="text">

                                              <p>On Timesheet Approval reports, have the oldest Timesheet period displayed
                                            be that with a closeout period ending after 
                                            <input id="datetimepicker1" type="text">
                                            
                                            <br> You can change this date at any time.
                                            You can lock out individual Timesheet periods <a href="timesheet_locks.asp?ci=14317&amp;ti=49076&amp;fn=979257153&amp;td=46803">here</a>.
                                           </p>
                                           <div class="checkbox checkbox-success">
                                            <input name="approval_groups" type="checkbox"> 
                                           <label>Allow Administrators to assign timesheet approval capability to any user</label>
                                         </div>
                                           <p>(But only for those users assigned to that user).<br>
                             This will add a link at the top of the User Maintenance page "Approval List for [User Name]"<br>
                              where Administrators can select which users' timesheets can be approved by that approving user.</p>
                           </div>
                            </div>
                          </div>
                              <div class="clearfix">
                            
                              </div>
                              <div class="ln_solid"></div>
                              <div class="col-xs-12 text-center">
                              <button class="btn btn-primary" type="reset">Save</button>
                            </div>
                            </div>
                        </div>
                        <!-- row End -->
                        <!-- row Start -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Maximum Time Entry Limits</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use">
                                  <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                       <legend>Block users from entering time beyond these daily and weekly maximum levels:</legend>
                                       <div class="checkbox checkbox-inline checkbox-success">
                                          <input name="alert_day" checked="" type="checkbox">
                                          <label> Maximum allowable time entry for any day:</label>
                                       </div>
                                       
                                        <input size="5" maxlength="20" onkeypress="return numberOnly(this,event,false);" name="day_ceiling" value="16.0" type="text"> hours</p>
                                        <div class="checkbox checkbox-inline  checkbox-success">
                                        <input name="alert_week" checked="" type="checkbox"> 
                                        <label>Maximum allowable time entry for any calendar week (through Saturday):</label>
                                        
                                      </div>
                                        <input size="5" maxlength="20" onkeypress="return numberOnly(this,event,false);" name="week_ceiling" value="168.0" type="text"> hours
                                      </div>
                                    </div>
                                    <div class="clearfix">
                                    
                                      </div>
                                      <div class="ln_solid"></div>
                                      <div class="col-xs-12 text-center">
                                        <button class="btn btn-primary" type="reset">Save</button>
                                      </div>
                                </div>
                        </div>
                        <!-- row End -->
                        <!-- row Start -->
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Printable Timesheet Settings</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use printable">
                                  <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                       <legend>Block users from entering time beyond these daily and weekly maximum levels:</legend>
                                       <div class="checkbox checkbox-success checkbox-inline">
                                         <input name="_tp_in_use" checked="" type="checkbox"> 
                                          <label>Enable printable Timesheet (for signature, filing, etc.)</label>

                                       </div>
                                     

                                      <div class="outline col-sm-6 ">
                                            <div class="radio">
                                              <input name="tp_setting" value="False" type="radio"> 
                                              <label> Same as period used above for Timesheet approvals</label>
                                            </div>
                                            <div class="radio">
                                              <input name="tp_setting" value="True" checked="" type="radio"> 
                                              <label>Use this Period:</label>
                                            </div>
                                            <div class="radio radio-inline">
                                              <input name="tp_tsoption" value="1" checked="" type="radio"> 
                                              <label>Weekly on </label>
                                            </div>
                                                    <select name="tp_weekly">
                                              <option value="2">Monday</option>
                                              <option value="3">Tuesday</option>
                                              <option value="4">Wednesday</option>
                                              <option value="5">Thursday</option>
                                              <option value="6" selected="">Friday</option>
                                              <option value="7">Saturday</option>
                                              <option value="1">Sunday</option>
                                              </select>

                                              <div class="radio">
                                                <input name="tp_tsoption" value="2" type="radio"> 
                                                <label>Every two weeks </label>
                                                
                                              </div>
                                              <div class="indented">
                                                Starting 
                                                <input id="datetimepicker5"  type="text" placeholder="03/06/2018 8:17 PM">
                                         
                                              </div>
                                              <div class="radio">
                                              <input name="tp_tsoption" value="4" type="radio">
                                              <label> Monthly</label>
                                              </div>
                                              <div class="radio">
                                              <input name="tp_tsoption" value="3" type="radio"> 
                                              <label>Custom:</label>
                                                </div>
                                              <div class="indented">First day of 1st monthly pay period:
                                                <select name="tp_custom_first">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                </select>

                                              <div class="indented">First day of 2nd monthly pay period:
                                                <select name="tp_custom_sec">
                                                <option value="16" selected="">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                </select>

                                              </div>
                                            </div>
                                          </div>

                                        <div class="outline col-sm-6 vspace" style="float:left;">
                                          <div class="table-responsive">
                                          <table class="list" border="0">
                                          <tbody><tr>
                                            <td colspan="3"><b>Include on Printed Timesheet:</b></td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class=" checkbox checkbox-success">
                                              <input onchange="if(!this.checked) { this.form.tp_address.disabled=true; this.form.tp_address.checked = false;} else this.form.tp_address.disabled=false;" name="tp_cheader" checked="" type="checkbox">
                                              <label>Company Name</label>
                                              
                                            </div>
                                            </td>
                                            <td>
                                              <div class=" checkbox checkbox-success">
                                              <input name="tp_address" checked="" type="checkbox">
                                              <label>Company Addres</label>
                                              
                                            </td>
                                          </tr>
                                          <tr>
                                            <td><div class=" checkbox checkbox-success">
                                              <input name="tp_billed" checked="" type="checkbox">
                                              <label>Billable status</label>
                                              </div>
                                            </td>
                                            <td><div class=" checkbox checkbox-success">
                                              <input name="tp_act" checked="" type="checkbox">
                                              <label>&nbsp;Activity&nbsp;Names</label>
                                            </div>
                                              </td>
                                          </tr>
                                          <tr>
                                            <td><div class=" checkbox checkbox-success"><input name="tp_cli" checked="" type="checkbox"><label>&nbsp;Client&nbsp;Names</label></div></td>
                                            <td><div class=" checkbox checkbox-success"><input name="tp_signiture" checked="" type="checkbox"><label>&nbsp;Approval Signature lines</label></div></td>
                                          </tr>
                                          <tr>
                                            <td><div class=" checkbox checkbox-success"><input name="tp_proj" checked="" type="checkbox"><label>&nbsp;Matter&nbsp;Names</label></div></td>
                                            <td><div class=" checkbox checkbox-success"><input name="tp_comment" checked="" type="checkbox"><label>&nbsp;Comments</label></div></td>
                                          </tr>
                                          </tbody></table>
                                          </div>
                                        </div>
                                      
                                      </div>
                                    </div>
                                    <div class="clearfix">
                                    
                                      </div>
                                      <div class="ln_solid"></div>
                                      <div class="col-xs-12 text-center">
                                        <button class="btn btn-primary" type="reset">Save</button>
                                      </div>
                                </div>
                          </div>
                        <!-- row End -->
                        <!-- row Start -->
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                <h2>Payroll Settings</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                   
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content table-use payroll">
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                       <legend>Overtime</legend>
                                       <div class="radio radio-inline">
                                        <input name="overtime_billingrates" value="False" checked="" type="radio"> 
                                       <label>System calculates Regular/Overtime hours (default) based on the following parameters:</label></div><br>

                                       <label>Maximum Regular Paid Hours per Day: <input size="2" maxlength="20" onkeypress="return numberOnly(this,event,false);" name="daily_ot" value="8.0" type="text"></label><br>
                                       <label>  Maximum Regular Paid Hours per Calendar Week: <input size="3" maxlength="20" onkeypress="return numberOnly(this,event,false);" name="weekly_ot" value="40.0" type="text">
                                       </label><br>
                                       <div class="checkbox checkbox-success">
                                        <input name="overtime_updateeveryone" type="checkbox"> 
                                       <label>Apply these Settings to Everyone</label></div><br>
                                       <div class="radio ">
                                        <input name="overtime_billingrates" value="True" type="radio">
                                        <label> &nbsp;User specifies Regular/Overtime hours on Time Entry Day View form</label>
                                      </div>
                                      <legend>Pay Period</legend>
                                      </div>
                                      <div class="outline col-md-6 vspace">
                                          <div class="radio ">

                                            <input name="pperiod" value="False" type="radio">  <label>Same as period used above for Timesheet approvals</label>
                                          </div>
                                           
                                            <div class="radio ">
                                            <input name="pperiod" value="True" checked="" type="radio"> 
                                            <label>Use this Period:</label>
                                            </div>
                                            <br>
                                            <div class="radio radio-inline">
                                              <input name="ppsubmitted" value="1" checked="" type="radio"> <label>Weekly on</label>
                                            </div>

                                               <select name="ppweekly">
                                        <option value="2">Monday</option>
                                        <option value="3">Tuesday</option>
                                        <option value="4">Wednesday</option>
                                        <option value="5">Thursday</option>
                                        <option value="6">Friday</option>
                                        <option value="7">Saturday</option>
                                        <option value="1" selected="">Sunday</option>
                                        </select>

                                              
                                              <div class="radio ">
                                                <input name="ppsubmitted" value="2" type="radio">
                                                <label> Every two weeks</label>
                                              </div>
                                              <div class="indented">
                                                Starting 
                                          <input id="datetimepicker6" type="text" placeholder="03/06/2018 8:24 PM">
                                         

                                              </div>
                                              <div class="radio ">
                                                <input name="ppsubmitted" value="4" type="radio">
                                                <label> Monthly</label>
                                              </div>
                                              <div class="radio ">
                                              <input name="ppsubmitted" value="3" type="radio"> 
                                              <label>Custom:</label>
                                            </div>
                                              <div class="indented">
                                                First day of 1st monthly pay period:&nbsp;
                                                <select name="ppcustom_first">
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        </select>

                                              </div>
                                              <div class="indented">
                                                First day of 2nd monthly pay period:
                                                <select name="ppcustom_sec">
                                        <option value="16" selected="">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="clearfix">
                                    
                                      </div>
                                      <div class="ln_solid"></div>
                                      <div class="col-xs-12 text-center">
                                        <button class="btn btn-primary" type="reset">Save</button>
                                      </div>
                            </div>
                          </div>
                        </div>
                        <!-- row End -->
                        <!-- row Start -->

                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Printable Expense Settings</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use">
                                  <br>
                                  <div class="row">
                                      <div class="col-xs-12">
                                        <div class="checkbox">
                                          <input name="ep_expoption" checked="" type="checkbox"> 
                                           <label>Enable printable expense report (for signature, filing, etc.)</label>
                                        </div>
                                        
                                         <div class="table-responsive">
                                           <table class=" table " border="0">
                                            <tbody><tr>
                                              <td colspan="3"><b>Include on Printed Expense Report:</b>
                                            </td></tr>
                                            <tr>
                                              <td>
                                              <div class="checkbox checkbox-success"><input name="ep_cheader" checked="" type="checkbox"> <label>Company Name and Address</label></div></td>

                                              <td><div class="checkbox checkbox-success"><input name="ep_signiture" checked="" type="checkbox"> <label>Approval Signature lines</label></div></td>

                                              <td> <div class="checkbox checkbox-success"><input name="ep_billed" checked="" type="checkbox"> <label>Billable status</label></div></td>
                                            </tr>
                                            <tr>
                                              <td><div class="checkbox checkbox-success">
                                                <input name="ep_tk" checked="" type="checkbox"><label>UserNames</label></div></td>
                                              <td><div class="checkbox checkbox-success"><input name="ep_proj" checked="" type="checkbox"><label>MatterNames</label></div></td>
                                              <td><div class="checkbox checkbox-success"><input name="ep_cli" checked="" type="checkbox"><label>ClientNames</label></div></td>
                                            </tr>
                                            <tr>
                                              <td><div class="checkbox checkbox-success"><input name="ep_dayexp" checked="" type="checkbox"> <label>Date of Expense</label></div></td>
                                              <td><div class="checkbox checkbox-success"><input name="ep_act" checked="" type="checkbox">
                                                <label>Activities</label></div></td>
                                              <td><div class="checkbox checkbox-success"><input name="ep_comment" checked="" type="checkbox">
                                               <label>Comments</label></div></td>
                                            </tr>
                                            </tbody>
                                          </table>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="clearfix">
                                  
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                                  </div>
                                    
                          </div> 
  
                        <!-- row End -->

                        <!-- row Start -->

                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Terms to be Used Throughout TimeLedger</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use termsto ">
                                  <br>
                                  <div class="row">
                                      <div class="col-xs-12">
                                        <div class="table-responsive">
                                        <table class="table">
                                              <tbody><tr>
                                                <td>Customer:</td>
                                                <td><select onchange="doAddNewTerm(this,2,0)" name="ct_ClientTerm" size="1" style="width:150px">
                                                  <option selected="" value="Client">Client</option><option value="Partner">Partner</option><option value="">Add new Term</option>
                                                  </select></td>
                                              </tr>
                                              <tr>
                                                <td>Customers (plural): </td>
                                                <td><select onchange="doAddNewTerm(this,2,1)" name="ct_clients" size="1" style="width:150px">
                                                  <option selected="" value="Clients">Clients</option><option value="Partners">Partners</option><option value="">Add new Term</option>
                                                  </select></td>
                                              </tr>
                                              <tr>
                                                <td>Client ID or Code:</td>
                                                <td><input name="ct_clientid2" maxlength="60" value="Second Client ID" style="width:150px" type="text">
                                                <em><small>(maximum 60 characters)</small></em></td>
                                              </tr>
                                              <tr>
                                                <td colspan="2"><br></td>
                                              </tr>
                                              <tr>
                                                <td>Project: </td>
                                                <td><select onchange="doAddNewTerm(this,3,0)" name="ct_projectTerm" size="1" style="width:150px">
                                                  <option selected="" value="Matter">Matter</option><option value="Project">Project</option><option value="File">File</option><option value="">Add new Term</option>
                                                  </select></td>
                                              </tr>
                                              <tr>
                                                <td>Projects (plural):</td>
                                                <td><select onchange="doAddNewTerm(this,3,1)" name="ct_projects" size="1" style="width:150px">
                                                <option selected="" value="Matters">Matters</option><option value="Projects">Projects</option><option value="Files">Files</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr>
                                                <td>Matter Contact:</td>
                                                <td><input name="ct_salesperson" size="30" maxlength="30" value="Manager" style="width:150px" type="text">
                                                <em><small>(maximum 30 characters)</small></em> </td>
                                              </tr>
                                              <tr>
                                                <td>Matter ID or Code:</td>
                                                <td><input name="ct_projectid2" maxlength="60" value="Second Matter ID" style="width:150px" type="text">
                                                <em><small>(maximum 60 characters)</small></em> </td>
                                              </tr>
                                              <tr>
                                                <td>Matter Export Code:</td>
                                                <td><input name="ct_export_code" size="40" maxlength="60" value="Code for exporting Matter" type="text">
                                                <em><small>(maximum 60 characters)</small></em> </td>
                                              </tr>
                                              <tr><td colspan="2"><br></td></tr>
                                              <tr>
                                                <td>Subproject: </td>
                                                <td><select onchange="doAddNewTerm(this,4,0)" name="ct_subprojectterm" size="1" style="width:150px">
                                                <option selected="" value="Subproject">Subproject</option><option value="Subtask">Subtask</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr>
                                                <td>Subprojects (plural): </td>
                                                <td><select onchange="doAddNewTerm(this,4,1)" name="ct_subprojects" size="1" style="width:150px">
                                                <option selected="" value="Subprojects">Subprojects</option><option value="Subtasks">Subtasks</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr><td colspan="2"><br></td></tr>
                                              <tr>
                                                <td>Activity:</td>
                                                <td><select onchange="doAddNewTerm(this,6,0)" size="1" name="ct_activity_singular" style="width:150px">
                                                <option selected="" value="Activity">Activity</option><option value="Task">Task</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr>
                                                <td>Activities (plural):</td>
                                                <td><select onchange="doAddNewTerm(this,6,1)" size="1" name="ct_activity_plural" style="width:150px">
                                                <option selected="" value="Activities">Activities</option><option value="Tasks">Tasks</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr>
                                                <td>Activity ID or Code:</td>
                                                <td><input name="ct_activityid2" maxlength="60" value="Second Activity ID" style="width:150px" type="text">
                                                    <em><small>(maximum 60 characters)</small></em> </td>
                                              </tr>
                                              <tr><td colspan="2"><br></td></tr>
                                              <tr>
                                                <td>Group:</td>
                                                <td><select onchange="doAddNewTerm(this,7,0)" name="ct_timekeeper_group" size="1" style="width:150px">
                                                <option selected="" value="Group">Group</option><option value="Team">Team</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr>
                                                <td>Groups (plural):</td>
                                                <td><select onchange="doAddNewTerm(this,7,1)" name="ct_timekeeper_groups" size="1" style="width:150px">
                                                <option selected="" value="Groups">Groups</option><option value="Teams">Teams</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr><td colspan="2"><small>(Term for Group of Users)</small><p></p></td></tr>
                                              <tr><td colspan="2"><br></td></tr>
                                              <tr>
                                                <td>Timekeeper:</td>
                                                <td><select onchange="doAddNewTerm(this,8,0)" name="ct_timekeeperTerm" size="1" style="width:150px">
                                                <option selected="" value="User">User</option><option value="Timekeeper">Timekeeper</option><option value="">Add new Term</option>
                                                </select></td>
                                              </tr>
                                              <tr>
                                                <td>Timekeepers (plural): </td>
                                                <td><select onchange="doAddNewTerm(this,8,1)" name="ct_timekeepers" size="1" style="width:150px">
                                                <option selected="" value="Users">Users</option><option value="Timekeepers">Timekeepers</option><option value="">Add new Term</option>
                                                </select> </td>
                                              </tr>
                                              <tr>
                                                <td>User ID or Code:</td>
                                                <td><input name="ct_userid2" maxlength="60" value="Second User ID" style="width:150px" type="text">
                                                <em><small>(maximum 60 characters)</small></em> </td>
                                              </tr>
                                              <tr><td colspan="2"><br></td></tr>
                                              <tr>
                                                <td>Billable Entries:</td>
                                                <td><input name="ct_billable" size="20" maxlength="30" value="Billable" style="width:150px" type="text">
                                                <em><small>(maximum 30 characters)</small></em> </td>
                                              </tr>
                                              <tr>
                                                <td>NonBillable Entries:</td>
                                                <td><input name="ct_nonbillable" size="20" maxlength="30" value="Non-Billable" style="width:150px" type="text">
                                                <em><small>(maximum 30 characters)</small></em> </td>
                                              </tr>
                                              <tr><td colspan="2"><br></td></tr>
                                              <tr>
                                                <td>Time Sheet:</td>
                                                <td><input name="ct_timesheet" size="20" maxlength="30" value="Timesheet" style="width:150px" type="text">
                                                <em><small>(maximum 30 characters)</small></em> </td>
                                              </tr>
                                              <tr><td colspan="2">&nbsp;</td></tr>
                                              <tr>
                                                <td>Time Entry Tags:</td>
                                                <td><input name="ct_entrytag" size="20" maxlength="30" value="Time Entry Tag" style="width:150px" type="text">
                                                <em><small>(maximum 30 characters)</small></em> </td>
                                              </tr>
                                              <tr><td colspan="2">&nbsp;</td></tr>
                                              </tbody></table>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="clearfix">
                                    
                                      </div>
                                    <div class="ln_solid"></div>
                                    <div class="col-xs-12 text-center">
                                      <button class="btn btn-primary" type="reset">Save</button>
                                    </div>
                                  </div>
                                      
                          </div> 
  
                        <!-- row End -->
                        <!-- row Start -->
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>TimeLedger Appearance</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                     
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content table-use appearancetime">
                                  <br>
                                  <div class="row">
                                      <div class="col-xs-12">
                                        <div class="table-responsive">
                                         <table class="table">
                                              <tbody><tr>
                                                <td>
                                                  <div class="radio"><input name="stylesheet" value="" type="radio"> <label>TimeLedger Classic</label></div></td>
                                                <td><img src="images/palette-classic.png" alt="TimeLedger Classic palette" width="375" height="32" border="0"></td>
                                              </tr>
                                              <tr>
                                                <td><div class="radio"><input name="stylesheet" value="palette-mono-blue.css" checked="" type="radio"><label> Light Blue</label></div></td>
                                                <td><img src="images/palette-mono-blue.png" alt="Blue colors for tabs and page decorations" width="375" height="32" border="0"></td>
                                              </tr>
                                              <tr>
                                                <td><div class="radio"><input name="stylesheet" value="palette-springtime.css" type="radio"> <label>Springtime</label></div></td>
                                                <td><img src="images/palette-springtime.png" alt="Lighter version of the classic colors" width="375" height="32" border="0"></td>
                                              </tr>
                                              <tr>
                                                <td><div class="radio"><input name="stylesheet" value="palette-neutral.css" type="radio"><label> Neutral</label></div></td>
                                                <td height="40">TimeLedger Classic tab colors, colorless page decoration</td>
                                              </tr>
                                              </tbody></table>
                                            </div>
                                            <div class="checkbox checkbox-success" >
                                              <input name="user_stylesheet" checked="" type="checkbox"> 
                                               <label>Allow Users to select their own color palette.</label>
                                            </div>
                                             
                                              <legend>Forgotten Passwords Service</legend>
                                              When User forgot their password:
                                                <select name="forgot_password">
                                            <option value="1">Send plain text password</option>
                                            <option value="2">Send password reminder</option>
                                            <option value="3" selected="">Send a temporary login link</option>
                                            <option value="4">Send a request to company administrator</option>
                                            </select>

                                        </div>
                                        <div class="clearfix">
                                    
                                          </div>
                                        <div class="ln_solid"></div>
                                        <div class="col-xs-12 text-center">
                                          <button class="btn btn-primary" type="reset">Save</button>
                                        </div>
                                      </div>
                                      

                            </div>
                          </div>
                        <!-- row End -->
    
                    <!-- ===================Tab Company info End ================================================-->
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
