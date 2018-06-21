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
          
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 timeline-view" >

                            
                              
                                  <div class="col-sm-7 col-xs-12" >
                                    <div class="row">
                                   
                                    <div class="datetime">
                                       <h1>Day View <strong >Today is Friday, March 16, 2018 &nbsp;It is 3:07 p.m. 
                                      </strong></h1>
                                       
                                    </div>
                                </div>
                              </div>
                                
                                
                               <div class="col-sm-5 col-xs-12 form-inline text-font desktop-table-week"  style="margin-top: 10px;">
                                <div class=" pull-right">
                                <label class=" " style="padding-top: 5px;">Timesheet for:</label>
                                <input class="form-control" type="search" id="tag" aria-controls="datatable" class="form-control  ui-autocomplete-input" placeholder="Search...." autocomplete="off" name="">
                          
                             </div>
                           </div>
                             

                              <div class=" col-xs-12 form-inline  mobile-table-week"  style="margin-top: 10px;">
                                <div class="row">
                               <div class=" col-xs-4 text-font">
                                <div class="row">
                                <label class=" ">Timesheet for:</label>
                              </div>
                              </div>
                              <div class=" col-xs-7 ">
                                <div class="row">
                                 <input class="form-control" type="search" id="tag" aria-controls="datatable" class="form-control  ui-autocomplete-input" placeholder="Search...." autocomplete="off" name="">
                              </div>
                            </div>
                             </div>
                           </div>
                               
                               
                                  <!-- <div class="col-sm-3 pull-right form-group " style="margin-top: 10px;">
                                    <div class="pull-right">
                           <button class="btn btn-primary" title="Period &gt; Mar-10-2018 To Mar-16-2018     &#8739;     Due Date &gt; Saturday, March 17, 2018">Send for Approval</button>
                                <button class="btn btn-primary">Print</button>
                              </div>
                              </div> -->
                            </div>
                             </div>

                            <div class="x_panel">
                              <div class="timesheet-view">
                                <div class="col-xs-0 col-sm-2"></div>
                                <div class="col-xs-12 col-sm-8">
                                <h3>Add Time Entry for Friday, March 16, 2018</h3>
                                <div class="form-group ">
                                     
                                      <button type="button" class="btn btn-primary pull-left">&lt; Prior day</button>
                                      <button type="button" class="btn btn-primary pull-right"> Next Day &gt;</button>
                                  
                                    </div>
                              </div>
                              
                                <div class="clearfix"></div>
                              <div class="x_content day-edit">
                                    <div class="row">
                                    <div class="col-md-6 col-xs-12">

                                    <div class="row">

                                            <div class="input-group">
                                       <input type="search" id="tags" aria-controls="datatable" class="form-control " placeholder="Select Client > Project:" autocomplete="off">
                                      <span class="input-group-btn form-group1">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i>  </button>
                                       </span>
                                     </div>

                                          <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search for Activities" name="">
                                          </div>

                                          <div class="form-group1">
                                            
                                              <div class="form-group">
                                               <textarea name="" id="input" class="form-control" rows="3" required="required" placeholder="Enter work description..."></textarea>
                                             </div>
                                               <div class="pull-right">
                                              <div class="collapse-group">
                                            <a class="btn btn-primary" href="#">Most Recent Descriptions &raquo;</a>
                                                <div class="collapse">
                                                  <div class="collapse-group">

                                                <select class="form-control form-group" type="text"   >
                                                <option class="btn" >Invoice Ann Edwards > Eviction - Clairemont Mesa Condo </option>
                                                <option class="btn" >Bill Brink > Eviction - Clairemont Mesa Condo </option>
                                               </select>
                                           
                                              <div  class="form-group collapse in">
                                              <textarea type=""  class="form-control" value="" name="" > Search for Activities</textarea>
                                                 </div>
                                                </div>

                                            </div>
                                           </div>
                                         </div>
                                            </div>
                                            <div class="row">
                                         <div class="col-sm-12">
                                           <label >Amount of time:</label>
                                         </div>
                                          <div class="col-sm-7 col-xs-12 form-inline">

                                            <select name="" class="form-control" style="width:120px;display: inline-block;">
                                                <option value="0">0.00 = 0 hr </option>
                                                <option value="1">0.02 = 01 min</option>
                                            </select> -OR-  
                                            <button type="button " style="margin-top: 2px;" title="You can add time to any amount of time selected using the timer." class="btn btn-primary">Start Timer</button>
                                            <div class="">Time to show on invoice (using your minimum time increment):  <strong>0.1 hr, 6 min</strong>
                                            </div>
                                          </div> 
                                          
                                          <div class="col-sm-5 form-inline form-group">
                                            <div class="row">
                                            <div class="col-sm-12 col-xs-12" style="margin-bottom: 5px;">
                                            <label>Start time:</label>
                                            <input type="" placeholder="5:45 PM" id='datetimepicker11' class="form-control" name="" style="width: 135px;">
                                          </div>
                                          <div class="col-sm-12 col-xs-12 form-group">
                                             <label>&nbsp;End time:&nbsp;</label>
                                            <input type="" placeholder="5:45 PM" id='datetimepicker11' class="form-control" name="" style="width: 135px;">
                                          </div>
                                          <div class="col-sm-12 col-xs-12">
                                             <label>&nbsp;Total Hours:</label>
                                            <select class="form-control form-group" style="margin-bottom: 5px; width: 160px;">
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
                                            </div>
                                       </div>
                                        </div>

                                          
                                          
                                          
                                  <div class="row ">
                                  <div class="col-sm-12">
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <div class="row">
                                           <div class="form-group col-xs-12  col-sm-6">
                                      <select class="form-control">
                                          <option>Billable</option>
                                              <option value="">Non-Billable</option>
                                          </select>
                                    </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                  </div>
                                  <div class="col-sm-12 col-xs-12 settings-text">
                                    <div class="row">
                                              <button type="button" class="btn btn-save btn-primary">Save Entry</button>
                                            </div>
                                            </div>
                                  
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-md-6"></div>
                                  <div class="clearfix"></div>
                                  <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action indent-name">
                                             <thead>
                                    <tr class="headings ">
                                      
                                      <th class="column-title " style="letter-spacing: 1.1px;"></th>
                                      <th class="column-title">Client &gt; Matter &gt; Subproject</th>
                                      <th class="column-title">   Activity</th>
                                      <th colspan="" class="column-title text-left">Description</th>
                                      <th class="column-title text-center">Non-Billable</th>
                                      <th class="column-title text-center">Billable</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="odd pointer collapse in" id="hide-row1">
                                      
                                                                         <td>
                                            <div class="dropdown modal-font">
                                            <a class="dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v fa-2x " ></i>
                                          </a>
                                         

                                <ul class="dropdown-menu" style="" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item fa fa-paperclip "  href="#"><span> Attachments</span></a>
                                </li>
                                <li> 
                                  <a class="dropdown-item fa fa-file " title="" href="#"><span> Invoice Preview</span></a></li>
                                  <li> 
                                  <a class="dropdown-item fa fa-close" data-toggle="modal" 
                                  data-target="#del-client" ><span> 
                                    Delete [Client > Project Name]? Yes No</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row1" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                      <td class="">
                                        <a href="client-maintenance.php" target="_blank">
                                        <b>Invoice  Ann Edwards </b>
                                        </a>
                                         <p><a href=""> &gt; Eviction - Clairemont Mesa Condo </a></p>
                                        <h6><a href="" > &gt; Subproject name</a></h6>
                                      </td>
                                      <td class=""></td>
                                      <td colspan="">
                                        <strong>
                                        Review and respond to emails from Dan. Email to attorney Diaz re: <br/>Case Management Statement and paying jury fees. Email to Dan re: Jury fee discussion.
                                        </strong>
                                      </td>
                                     

                                      <td class="text-right">
                                        
                                      </td>
                                      <td class="text-right">
                                        0.70
                                      </td>
                                      
                                    </tr>
                                    <tr class="odd pointer collapse in" id="hide-row2">
                                      
                                                                        <td>
                                            <div class="dropdown modal-font">
                                            <a class="dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v fa-2x " ></i>
                                          </a>
                                         

                                <ul class="dropdown-menu" style="" aria-labelledby="dropdownMenuButton">
                                <li>
                                  <a class="dropdown-item fa fa-paperclip "  href="#"><span> Attachments</span></a>
                                </li>
                                <li> 
                                  <a class="dropdown-item fa fa-file " title=""  href="#"><span> Invoice Preview</span></a></li>
                                 <li> 
                                  <a class="dropdown-item fa fa-close" data-toggle="modal" 
                                  data-target="#del-client"><span> 
                                    Delete [Client > Project Name]? Yes No</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row2" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                      <td class="">
                                        <a href="client-maintenance.php" target="_blank">
                                        <b>Invoice  Ann Edwards </b>
                                        </a>
                                         <p><a href=""> &gt; Eviction - Clairemont Mesa Condo </a></p>
                                        <h6><a href="" > &gt; Subproject name</a></h6>
                                      </td>
                                      <td class=""></td>
                                      <td colspan="">
                                        <strong>
                                        Read email from Andrew Toft and attachments and respond.
                                        </strong>
                                      </td>
                                     

                                      <td class="">
                                        
                                      </td>
                                      <td class="text-right">
                                        0.30
                                      </td>
                                      
                                    </tr>
                                    <tr class="collapse sub-total">
                                      <td colspan="4" class="text-right"><strong>Hourly-Rate:</strong></td>
                                      <td class="text-right">0.00</td>
                                      <td class="text-right">1.00</td>
                                    </tr>
                                    <tr class="collapse sub-total">
                                      <td colspan="4" class="text-right"><strong>Sub-Total:</strong></td>
                                      <td class="text-right">0.00</td>
                                      <td class="text-right">1.00</td>
                                    </tr>
                                    
                                    <tr >
                                      <td colspan="4" class="text-right"><strong>Total:</strong></td>
                                      <td class="text-right">0.00</td>
                                      <td class="text-right">1.00</td>
                                     
                                    </tr>
                                  </tbody>
                                           </table>

                                  </div>
                                    
                                 <div id="del-client" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h4 class="modal-title">Delete Client &gt; Project</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Do you want to Delete [Client &gt; Project Name]?</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>

                                         <div class="col-sm-12">
                                          <div class="form-group1 text-center">
                                         <button class="btn btn-primary" data-toggle="collapse" data-target=".sub-total">Show Rates and Subtotals </button>
                                         </div>
                                       </div>
                                         



                                       <div class="col-sm-4 col-xs-12">
                                    <div class="row">
                                      <table class="timesheet-panel table table-bordered">
                                      <tbody><tr class="text-center"><td style="font-size:10pt; padding-bottom: 15px;"><b>Timesheet Approval</b></td></tr>
                                      <tr><td><table border="0" width="100%">
                                        <tbody class="text-center"><tr>
                                          <td style="font-size:8pt;" align="center"><b>Period</b></td>
                                          <td> | </td>
                                          <td style="font-size:8pt;" align="center"><b>Due date</b>
                                        </td></tr>
                                        <tr><td colspan="3" height="1" bgcolor="black"></td></tr>
                                        <tr>
                                          <td style="font-size:8pt;">Mar-10-2018&nbsp;to&nbsp;Mar-16-2018</td>
                                          <td> | </td>
                                          <td style="font-size:8pt;">Saturday, March 17, 2018</td>
                                        </tr>
                                      </tbody></table></td></tr>
                                      <tr>
                                        <td colspan="2" class="text-center ">
                                      <div class=" ">
                                          <button type="button" class="btn btn-primary">Send for Approval</button>
                                           <button type="button" class="btn btn-primary">Print</button>
                                         </div>
                                        </td>

                                      </tr>
                                        <tr>
                                          <td colspan="2" class="text-center"><small class="text-danger">There is no data to submit for Friday, March 16, 2018
                            Please input data or select another day in the pay period.</small></td>
                                        </tr>
                                      </tbody>
                                    </table>
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
    <script type="text/javascript">$().DataTable();</script>
   <?php
    include_once "modal.php";
    ?>
  
  </body>
</html>
