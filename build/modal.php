
  <!-- ==========================   MODALS    ============================= -->
   <div class="modal fade " id="entry1" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header head-btn">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <table class="table table-striped jambo_table bulk_action indent-name">
                          <thead class="headings">
                            <th> <strong><h4 style="margin: 0;">Time and Expense Detail </h4>
                              <h4 style="margin: 0;" id="myDIV">For Weds, May 12, 2018</h4></strong>
                              [Client Name]
                                <p> [Project Name]</p>
                                <p>&nbsp;&nbsp;[Subproject Name]</p>
                                </th>
                          </thead>
                        </table>

                 <div class="" role="tabpanel" data-example-id="togglable-tabs">
              <div class="row ">
               <div class="col-md-12 ">
                <div class="row ">
                <ul id="myTab" class="nav nav-tabs bar_tabs pull-left" role="tablist" style="border-bottom: none;">
                    <li role="presentation" class="active">
                        <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true" onclick="myFunction()">Time Entries</a>
                      </li>
                      <li role="presentation" >
                       <a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="false" onclick="myFunction()">Expense Entries</a>
                      </li>
                  </ul>
                </div>
                </div>
              </div>
                
                <div class="col-xs-12" ></div>
                    
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                       <div class="x_panel">
                            

                            <div class="x_content ">
                             <div class="row">
                                    <div class="col-md-12 col-xs-12">

                                    <div class="row">

                                 <div class="col-sm-12 col-xs-12 form-inline">
                                            <div class="row">
                                            <div class="col-sm-6 col-xs-6 form-inline" style="margin-bottom: 10px">
                                            <label >Start Time:</label>
                                           <input  type="" placeholder="5:45 PM" id='datetimepicker11' class="form-control" style="width: 89px">
                                          </div>
                                          <div class="col-sm-6 col-xs-6 form-inline" style="margin-bottom: 10px"> 
                                              <label>End Time:&nbsp;</label>
                                           <input  type="" placeholder="6:45 PM" id='datetimepicker12' class="form-control" style="width: 89px">
                                          </div>

                                            </div>
                                       </div>
                                        <div class="form-inline col-sm-6"><label>Total Time:</label>
                                                <select class="form-control form-group" style="width: 168px" style="margin-bottom: 5px;">
                                                <?php  
                                                $x = 0.1;
                                                for ($m = 6; $m <=1440; $m+=6) 
                                                {

                                                echo "<option> ".number_format($x,1)." ($m minutes) </option>";
                                                $x+=0.1;
                                                }
                                                ?>  
                                              </select>
                                          </div>
                                          <div class="col-sm-6 col-xs-12 form-inline " id="cont" >
                                             
                                          <button class="btn btn-primary" id="create"> Start Timer</button>
                                          </div>
                                          <div class="col-sm-6 col-xs-12 form-group form-inline " style="margin-top: 10px; margin-bottom: 10px;">
                                                <label>Activity: &nbsp; &nbsp;</label>
                                                <input type="text" class="form-control" placeholder="Search for Activities..." name="">
                                        </div>
                                       <div class="col-sm-12 col-xs-12" style="margin-top: 10px;">
                                        <div class=" form-group">
                                            <label >Work Description:</label>
                                            <textarea placeholder="Enter Description..." class="form-control"></textarea>
                                          </div>
                                       </div> 
                                          <div class="form-group col-sm-12 ">
                                      <select class="form-control" style="width: 124px;">
                                              <option value="">Billable</option>
                                              <option value="">Non-Billable</option>
                                          </select>
                                    </div>
                                      
                                       <div class="col-sm-12 col-xs-12 settings-text" style="margin-top: 5px;">
                                              <button type="button" class="btn btn-save btn-primary">Save Entry</button>
                                            </div>
                                            <table class="table table-striped jambo_table bulk_action indent-name">
                                              <thead class="headings">
                                                <th> <strong><h4 style="margin: 0;">Time Entry Log for Weds May 12, 2018</h4></strong>
                                                  Client Name
                                                    <p>Project Name</p>
                                                    <p>&nbsp;&nbsp;Subproject Name</p>
                                                  </th>
                                              </thead>
                                            </table>
                                            
                                            <div class="table-responsive">
                                              <table class="table table-striped jambo_table">
                                                <thead>
                                                  <tr>
                                                    <th colspan="2">Activity</th>
                                                  </tr>
                                                  
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                  <td>Work Description</td>
                                                  <td class="text-right">Hours</td>
                                                </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <legend></legend>
                                               <div class="table-responsive">
                                              <table class="table table-striped jambo_table">
                                                <thead>
                                                    <th colspan="2">Meeting</th>
                                                </thead>
                                                <tbody>
                                                  <td> Meeting with Tom and Mary</td>
                                                  <td class="text-right">1.2</td>
                                                </tbody>
                                              </table>
                                            </div>

                                            <div class="row form-group">
                                            <div class="col-sm-12 ">
                                            <div class="row ">
                                              <div class="col-sm-3 col-xs-6 ">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                                          <a type="button" class="btn btn-default disabled" ><b style="position: relative;left: 5px;">0.1</b></a>
                                          <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                        </div>
                                          </div>
                                         
                                          
                                          <div class="col-sm-3 col-xs-6 ">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                                          <a type="button" class="btn btn-default disabled"><b style="position: relative;left: 5px;">0.5</b></a>
                                          <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                        </div>
                                          </div>
                                        </div>
                                          </div>
                                        </div>
                                        <legend></legend>
                                        <div class="table-responsive">
                                              <table class="table table-striped jambo_table">
                                                <thead>
                                                    <th colspan="2">Research</th>
                                                </thead>
                                                <tbody>
                                                  <td> Review documents</td>
                                                  <td class="text-right">4.2</td>
                                                </tbody>
                                              </table>
                                            </div>
                                            
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                            <div class="row">
                                              <div class="col-sm-3 col-xs-6 ">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                                          <a type="button" class="btn btn-default disabled "><b style="position: relative;left: 5px;">0.1</b></a>
                                          <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                        </div>
                                          </div>
                                         
                                          
                                          <div class="col-sm-3 col-xs-6 ">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-primary"><i class="fa fa-minus"></i></button>
                                          <a type="button" class="btn btn-default disabled"><b style="position: relative;left: 5px;">0.5</b></a>
                                          <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                        </div>
                                          </div>
                                        </div>
                                          </div>
                                        </div>
                                          <legend></legend>
                                    <div class="table-responsive">
                                              <table class="table table-striped jambo_table">
                                                <thead>
                                                  <th>Total Hours</th>
                                                  <th class="text-right">5.2</th>
                                                </thead>
                                              </table>
                                            </div>
                                          <legend></legend>

                                       </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               
                              

                                    
                    
                    <!-- =================== Tab  Time entry End 1 ================================================
                    <!--=============================== Tab  Time entry 2 =================================-->
                  <div role="tabpanel" class="tab-pane fade  " id="tab_content2" aria-labelledby="home-tab">
                       <div class="x_panel">
                       <!--  <div class="row">
                        <table class="table table-striped jambo_table bulk_action indent-name">
                          <thead class="headings">
                            <th>Client Name<br/>
                                > Project Name<br/>
                                > Subproject Name</th>
                          </thead>
                        </table>
                            </div> -->
                            <div class="x_content">
                              <div class="row">
                              <div class="col-sm-12 col-xs-12">
                                <div class="col-sm-12 row ">
                                  <div class="form-group form-inline row">
                                 <label> Date Expense Incurred:</label> <input id="datetimepicker3" type="text" placeholder="06/07/2018" class="form-control" style="width: 82px;">
                                   </div>
                                 </div>
                                  <div class="row form-group">
                                     <div class="col-sm-12 col-xs-12 form-group form-inline row">
                                                <input type="text" class="form-control" placeholder="Search for Expense Type..." name="">
                                               
                                        </div>
                                         <div class="col-sm-12 col-xs-12 form-group form-inline row">
                                                
                                                <input type="text" class="form-control" placeholder="Search Event..." name="">
                                        </div>
                                  
                                      <div class=" form-group">
                                            <label >Expense Description <br/>(to appear on invoice or expense report):</label>
                                            <textarea placeholder="Enter Description..." class="form-control"></textarea>
                                          </div>
                                          <label class="form-group">Upload expense receipt or related images</label>
                                            <div class="form-group">
                                        <input type="file" name="" > 
                                        
                                      </div>
                                      <div class="form-group col-sm-12 row">
                                      <select class="form-control" style="width: 124px;">
                                              <option value="">Billable</option>
                                              <option value="">Non-Billable</option>
                                          </select>
                                    </div>
                                    <div class="col-sm-12 col-xs-12 settings-text">
                                              <button type="button" class="btn btn-save btn-primary">Save Expense Entry</button>
                                            </div>
                                             <div class="row">
                                        <table class="table table-striped jambo_table bulk_action indent-name">
                                              <thead class="headings">
                                                <tr><th>Expense Entry Log for<br>
                                                  Client Name
                                                    <p>Project Name</p>
                                                    <p>&nbsp;&nbsp;Subproject Name</p>
                                                  </th>
                                              </tr></thead>
                                            </table>
                                            </div>

                                            <div class="row">
                                            <div class="table-responsive form-group">
                                              <table class="table table-striped jambo_table bulk_action">
                                                <thead>
                                                  <tr>
                                                    <th class="">May 1, 2018</th>
                                                  </tr>
                                                  <tr>
                                                    <th class="text-center">Lodging</th>
                                                  </tr>
                                                  <tbody>
                                                    <tr>
                                                      <td>Marriott hotel for trip to Chicago</td></tr>
                                                  </tbody>
                                                  <thead>
                                                  <tr>
                                                    <th class="text-center">Amount</th>
                                                    <th class="text-center">Receipt</th>
                                                  </tr>
                                                  </thead>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-center">$543.12</td>
                                                    <td class="text-center"><i class="fa fa-copy"></i></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            <div class="table-responsive form-group">
                                              <table class="table table-striped jambo_table bulk_action">
                                                <thead>
                                                  <tr>
                                                    <th class="">May 3, 2018</th>
                                                  </tr>
                                                  <tr>
                                                    <th class="text-center">Paint</th>
                                                  </tr>
                                                  <tbody>
                                                    <tr>
                                                      <td>Red paint for 2nd floor of house.<br>Was purchased from Home Depot</td></tr>
                                                  </tbody>
                                                  <thead>
                                                    <th class="text-center"># of Units</th>
                                                    <th class="text-center">Price/Unit</th>
                                                  </thead>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-center">12.0 gallons</td>
                                                    <td class="text-center">USD $40.00/gallon</td>
                                                  </tr>
                                                  <thead>
                                                    <th class="text-center">Amount</th>
                                                    <th class="text-center">Receipt</th>
                                                  </thead>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="text-center">USD $480.00</td>
                                                    <td class="text-center"><i class="fa fa-copy"></i></td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            
                                            
                                             <div class="table-responsive">
                                              <table class="table table-striped jambo_table bulk_action">
                                                <thead>
                                                  <tr>
                                                    <th>USD $1,023.12</th>
                                                  </tr>
                                                </thead>
                                              </table>
                                            </div>
                                            </div>
                                              </div>
                            </div>  </div>  </div>  </div></div>
                 
                <div class="modal-footer mtl-ftr">
                  <p>
                  Copyright © 1997-2018 Equative, Inc.<br> All Rights Reserved. </p>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
          
      </div>
    </div>
</div>
</div></div>


              <!-- Feedback-Modal -->
              
              <div class="modal fade fdback" id="FeedbackModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2>Feedback</h2>
                </div>
                <div class="modal-body">
                  <form class="form-group">
                  <label class="">Things you do not like about this page:</label>
                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                    
                    <label>Things you like about this page:</label>
                      <textarea class="form-control" rows="3" placeholder=""></textarea>
                      <label>Suggestions to make TimeLedger better:</label>
                     <textarea class="form-control" rows="3" placeholder=""></textarea>
                     </form>
                      <button class="btn btn-primary">Send These Comments</button>
                      
                </div>
                <div class="modal-footer mtl-ftr">
                  <p>
                  Copyright © 1997-2018 Equative, Inc.<br> All Rights Reserved. </p>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
                          <!-- Feedback-Modal END -->

                          <!-- Support-Modal -->
          <div class="modal fade" id="SupportModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2>Support</h2>
                </div>
                <div class="modal-body">
                    <div class="">
                        <p>&nbsp&nbsp&nbsp Equative, Inc. provides free support and training for both Free Trial and Licensed Users. If there is something about TimeLedger that doesn't work for you, we want to know about it.</p>
                       <hr>
                       <h3>Equative, Inc. offers:</h3>
                       <ul>
                     <li>Free Training and Support by email and telephone:</li>
                    <li>Email <a href="mailto:support@timeledger.com">support@timeledger.com</a> or</li>
                  <li>Call (800) 239-2201   </li>
                <li>(Monday - Friday 8 a.m. to 5 p.m. PST Pacific Standard Time)</li>
              <br>
                  <li>To schedule on-site training and support, email us at <a href="mailto:support@timeledger.com">support@timeledger.com</a> or</li>
                     <li>Call Customer Support at (800) 239-2201</li>
                       <li>(Monday - Friday 8:00 a.m. to 5:00 p.m. PST Pacific Standard Time)</li>
                 <ul>
              </div>
                </div>
                <div class="modal-footer mtl-ftr">
                  <p>
                  Copyright © 1997-2018 Equative, Inc.<br> All Rights Reserved. </p>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
                      <!-- Support-Modal END -->
                      <!-- Email This page Modal -->
          <div class="modal fade" id="EmailModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2>Email This Page</h2>
                </div>
                <div class="modal-body">
                  <h3>Emailable Report</h3>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">To<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">For:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="" value="alexpdracup@gmail.com" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Subject:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" value="Timeledger Report" type="text" name="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Note:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer mtl-ftr">
                  <p>
                  Copyright © 1997-2018 Equative, Inc.<br> All Rights Reserved. </p>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

                    <!-- Email This Page Modal END -->
                    <!-- Tell a Friend Modal -->
          <div class="space">
          <div class="modal fade" id="FriendModal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h2> Tell a Friend</h2>
                </div>
                <div class="modal-body">
                  <form class="form-group " >
                      <label for="">1. Enter your e-mail address:</label>
                      <input type="text" id="" class="form-control" name="" required />
                      <label for="email">2. Enter e-mail addresses of people who might be interested in trying TimeLedger:</label>
                      <div class="row">
                      <div class="col-sm-6" >
                        <input type="" name="" class="form-control">
                      </div>
                    <div class="col-sm-6">
                      <input type="" name="" class="form-control">
                    </div>
                  </div>
                    <div class="row" >
                    <div class="col-sm-6">
                      <input type="" name="" class="form-control">
                    </div>
                    <div class="col-sm-6">
                      <input type="" name="" class="form-control">
                    </div>
                    </div>
                 </form>
              <label>3. Review and/or revise the message to be emailed:</label>
                  <form class="form-group">
                          <label>Subject:</label>
                             <input type="text" id="" class="form-control" name="" value="Web-based time tracking and billing software."  >
                          </form>
                       <div class="col-lg-12"></div>
                    <div ><center><p><textarea cols="55" name="body" rows="4" class="form-control" tabindex="9">Hello!

I wanted to tell you about www.TimeLedger.com - an easy to setup and use online 
time and expense tracking application for small to large companies.   

Your organization can be setup and using
www.TimeLedger.com in one hour.

TimeLedger &lt;http://www.TimeLedger.com&gt; allows companies and organizations of
1 to 10,000 people to collect timesheet and expense information from people
through mobile devices such as iPhones, iPads and Android phones and through any web browser.

Employees and contractors can also record time and expenses offline on their laptop or desktop
and also offline using their mobile phones.   Then as soon as they have cell service or WiFi access, 
their data is automatically synchronized to the main TimeLedger servers.

TimeLedger can produce thousands of graphs, charts and reports and includes 
powerful ad hoc reporting.   It send email alerts to remind users and
managers of when projects are running over time and/or expense budgets, and when timesheets 
need to be submitted for approval.   TimeLedger has a robust approval system that allows
managers to review individual timesheet detail, ask questions directly to users, and to lock and unlock 
time entries before final timesheet approval.

Try the fully-functional TimeLedger Free Trial right now at:
http://www.timeledger.com/signup/

In the Free Trial, you can add any number of users, groups and departments.


Contact TimeLedger at sales@timeledger.com 

Equative, Inc.
270 N. El Camino Real #510
Encinitas, CA 92024-2874

Or call at (800) 239-2201
</textarea></p></center></div></td>
                  <button class="btn btn-primary">Send Email Now</button>
                </div>
                <div class="modal-footer mtl-ftr">
                  <p>
                  Copyright © 1997-2018 Equative, Inc.<br> All Rights Reserved. </p>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
       

<!-- ======================================================   MODALS END   =================================================== -->



