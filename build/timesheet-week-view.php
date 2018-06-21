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
                <div class="row tab-bar" style="">
                 
                  
                  </div>
                    
                          <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 timeline-view" >

                            
                              
                                  <div class="col-sm-7 col-xs-12" >
                                    <div class="row">
                                   
                                    <div class="datetime">
                                       <h1>Week View <strong >Today is Friday, March 16, 2018 &nbsp;It is 3:07 p.m. 
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
                            

                              <div class="x_content ">
                                  <div class="row ">
                                    <div class="row">
                                    <div class="col-sm-3 col-xs-12 form-group" >
                                     <div class="input-group">
                                         <input type="search" id="tags" aria-controls="datatable" class="form-control  ui-autocomplete-input" placeholder="Search Client > Projects..." autocomplete="off">
                                        <span class="input-group-btn form-group1">
                                          <button type="button" class="btn btn-primary"><i class="fa fa-search"></i>  </button>
                                         </span>
                                       </div>


                                       </div>
                                         <div class="col-sm-3 col-xs-12 form-group">
                                          <select style="" name="" id="input" class="form-control " required="required">
                                            <option>Sort By:</option>
                                            <option class="opt-strong">Most Recent Sorts: </option>
                                            <option>- Most Total Hours Entered Last 7 Days</option>
                                            <option>- Most Remaining Money Budget</option>
                                            <option>- Closest to Deadline</option>
                                            <option></option>
                                            <option class="opt-strong">More Sort Options:</b></option>
                                            <option>- Most recent</option>
                                            <option>- Client Name (A to Z)</option>
                                            <option>- Client Name (Z to A)</option>
                                           <option> - Project Name (A to Z) </option>
                                           <option> - Project Name (Z to A) </option>
                                            <option>- Most Total Hours Entered Last 7 Days</option>
                                           <option> - Least Total Hours Entered Last 7 Days</option>
                                            <option>- Most Total Billable Hours Entered Last 7 Days</option>
                                            <option>- Least Total Billable Hours Entered Last 7 Days</option>
                                            <option>- Most Total Non-Billable Hours Entered Last 7 Days</option>
                                           <option> - Least Total Non-Billable Hours Entered Last 7 Days</option>
                                            <option>- Most Time Entered in Last 30 Days</option>
                                            <option>- Least Time Entered in Last 30 Days</option>
                                            <option>- Most Remaining Money Budget</option>
                                            <option>- Least Remaining Money Budget</option>
                                           <option> - Most % Remaining Money Budget</option>
                                           <option> - Least % Remaining Money Budget</option>
                                           <option> - Closest to Deadline</option>
                                           <option> - Most Recently Assigned to Me</option>
                                           <option> - Client Most Likely to Pay the Soonest </option>
                                           <option> - To Do List order</option>
                                            <option>- Most Profitable in Last 60 Days</option>
                                           <option> - Least Profitable in Last 60 Days</option>
                                           
                                         </select>
                                      </div>


                                     
                                    
                                    <div class="col-sm-6">
                                      <div class="row">
                                       <div class="col-md-4 col-sm-4 col-lg-6 col-xs-2 calender ">
                                           <form class=" input-group  date pull-right"  id="datetimepicker1">

                                       <input class="form-control" type="text" style="display: none;">
                                        <div class="">
                                        <span class="input-group-addon cal-btn" style="">
                                            <span class="fa fa-calendar fa-2x"></span>
                                              </span>

                                      </div>
                                    </form>
                                        </div>
                                   <div class="col-md-8 col-sm-8 col-lg-6 col-xs-10">

                                       <div class="form-group btn-group pull-right">
                                        <div class="" >
                                          <button type="button" class="btn btn-primary">&lt; Prior Week </button>
                                          <button type="button" class="btn btn-primary"> Next Week &gt;</button>
                                        </div>
                                      </div>
                                    </div>
                                      
                                    </div>
                                  </div>
                                </div>
                               

                                <div class="clearfix">
                                
                                </div>
                                
                                <div class="table-responsive">

                                  <table  class="table table-striped jambo_table bulk_action desktop-table-week indent-name">
                                    <thead>
                                      <tr class="headings ">
                                        <th class="column-title "></th>
                                        <th class="column-title">Client<br/> &nbsp;> Matter<br/> &nbsp;&nbsp;> Subproject</th>
                                        <th class="column-title text-center">Mon<br/>Mar-12</th>
                                        <th class="column-title text-center">Tue <br/>Mar-13 </th>
                                        <th class="column-title text-center">Wed<br/>Mar-14</th>
                                        <th class="column-title text-center">Thu<br/>Mar-15</th>
                                        <th class="column-title text-center">Fri<br/>Mar-16</th>
                                        <th class="column-title text-center">Sat<br/>Mar-17</th>
                                         <th class="column-title text-center">Sun<br/>Mar-18 </th>
                                        <th class="column-title text-center">Total<br/>Hours</th>
                                        
                                      </tr>
                                    </thead>

                                    <tbody>
                                      <tr class="even pointer collapse in " id="hide-row">
                                        
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                            <!--  <li><a data-toggle="collapse" data-target="#hide-row"><span><center><b>Hide row</b></center></span></a></li> -->
                                   </ul>
                                    </div>
                                    </td>

                                        </td>
                                        <td class="bil-able ">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input ">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input ">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input ">
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1"  class="week-input">
                                        </td>
                                        <td class=" text-center" ><strong>
                                          0.00</strong>
                                        </td>
                                        
                                      </tr>
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row1" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                        <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Bill Brink </b>
                                          </a>
                                         <p><a href=""> > Deposition Subpoena of Diane Brink </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                        
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                          <input type="text"  data-toggle="modal" href="" data-target="#entry1" class="week-input" value="0.10">
                                         
                                           <!-- <div class="desc-box4" style="display:none;">
                                            <form action="">
                                              <h3>Time entry detail for Weds, May 12, 2018</h3>
                                              <div class="form-inline">
                                               <ul class="nav nav-pills nav-justified">
                                                <li class="active"><a href="#">Add a time entry for</a></li>
                                                <li><a href="#">Make Expense Entry</a></li>
                                              </ul>
                                            </div> -->
                                            <!--   <button type="submit" class="btn btn-primary btn-xs">Save</button>
                                              <button type="button" class="btn btn-danger btn-xs cancel-desc4">Cancel</button> -->
                                            </form>
                                          </div>
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center">
                                         <strong>
                                          0.30</strong>
                                        </td>
                                        
                                      </tr>
                                      <tr class="even pointer collapse in" id="hide-row2">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row2" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                         <td class="no-bill">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Bill Brink </b>
                                          </a>
                                          <p><a href=""> > Deposition Subpoena of Diane Brink </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                        <!-- -->
                                          </span></td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" class="week-input " value="0.50">
                                            
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                         <strong>
                                          0.50</strong>
                                        </td>
                                       
                                      </tr>
                                      <tr class="even pointer collapse in" id="hide-row3">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row3" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                         <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Brent Wood </b>
                                          </a>
                                          <p>
                                          <a href=""> > Wood v. Shaw  </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                       
                                        
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                          <strong>
                                          0.00</strong>
                                        </td>
                                        
                                      </tr>
                                      <tr class="even pointer collapse in" id="hide-row4">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row4" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                          <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Brent Wood </b>
                                          </a>
                                          <p><a href=""> > Wood v. Shaw  </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                        
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                          <strong>
                                          0.00</strong>
                                        </td>
                                        
                                       <tr class="even pointer collapse in" id="hide-row5">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row5" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                          <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo  </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                       
                                        
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                          <strong>
                                          0.00</strong>
                                        </td>
                                       
                                      </tr>
                                       <tr class="even pointer collapse in" id="hide-row6">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row6" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                        </td>
                                          <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Bill Brink </b>
                                          </a>
                                          <p><a href=""> > Deposition Subpoena of Diane Brink  </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                        
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1"  class="week-input" value="0.10">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input " value="0.20">
                                         
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center">
                                          <strong>
                                          0.30</strong>

                                        </td>
                                        
                                      </tr>
                                      <tr class="even pointer collapse in" id="hide-row7">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row7" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                          <td class="no-bill">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Bill Brink </b>
                                          </a>
                                          <p><a href=""> > Deposition Subpoena of Diane Brink  </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                       
                                              
                                          </span></td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input" value="0.50">
                                          
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" class="week-input ">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                          <strong>
                                          0.50</strong>
                                        </td>
                                       
                                      </tr>
                                      <tr class="even pointer collapse in" id="hide-row8">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row8" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                          <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Bill Brink </b>
                                          </a>
                                          <p><a href=""> > Deposition Subpoena of Diane Brink  </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                          <strong>
                                          0.00</strong>
                                        </td>
                                        
                                      </tr>
                                       <tr class="even pointer collapse in" id="hide-row9">
                                        

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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                 <li>
                                    <a data-toggle="collapse" data-target="#hide-row9" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                    </td>
                                         <td class="bil-able">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Bill Brink </b>
                                          </a>
                                           <p><a href=""> > Deposition Subpoena of Diane Brink  </a> </p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </td>
                                        
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                           <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class="bg-success text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                         <td class="text-center">
                                          <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input">
                                        </td>
                                        <td class=" text-center" >
                                          <strong>
                                          0.00</strong>
                                        </td>
                                        
                                      </tr>
                                      
                                    </tbody>

                                  </table>

                                  <!-- for mobile -->
                                  
                                  <table   class="table table-borderd jambo_table bulk_action mobile-table-week indent-name" style="width:100%;">
                                        <thead>
                                          <tr class="headings">
                                            <th class="column-title">Client <br/> &nbsp;> Matter <br/> &nbsp;&nbsp;> Subproject</th>
                                            <th class="column-title ">Total Hours</th>
                                            
                                          </tr>
                                        </thead>

                                        <tbody>
                                          <tr class="collapse in" id="hide-row10" >
                                            <td class="poject-space " >
                                              <div class="bil-able pull-left">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </div>
                                        <div class="dropdown modal-font pull-right">
                                            <!--  <a ><i class="fa fa-eye-slash fa-2x" title="Hide row"  data-toggle="collapse" title="Hide row" data-target="#hide-row10" aria-hidden="true"></i></a> -->
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                  <li>
                                    <a data-toggle="collapse" data-target="#hide-row10" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                
                                   </ul>
                                    </div>
                                              
                                              <table>
                                                <thead style="background-color: transparent; color: #000;">
                                                  <tr>
                                                    
                                                    <th class="column-title">Mon<br/>Mar-12 </th>
                                                    <th class="column-title">Tue <br/>Mar-13 </th>
                                                    <th class="column-title">Wed<br/>Mar-14</th>
                                                    <th class="column-title">Thu<br/>Mar-15</th>
                                                    <th class="column-title">Fri<br/>Mar-16</th>
                                                    <th class="column-title">Sat<br/>Mar-17</th> <th class="column-title">Sun<br/>Mar-18 </th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="">
                                                     <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal" href="" data-target="#entry1" class="week-input-mobile" value="0.2">
                                                      
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class=" text-center">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    
                                                  </tr>
                                                  

                                                </tbody>
                                              </table>
                                            </td>
                                            <td class="text-center" style="vertical-align: bottom;"><strong>0.00</strong></td>
                                          </tr>
                                          <tr class="collapse in" id="hide-row11" >
                                            <td class="poject-space " >
                                              <div class="bil-able pull-left">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </div>
                                        <div class="dropdown modal-font pull-right">
                                             
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#hide-row11" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                              <table>
                                                <thead style="background-color: transparent; color: #000;">
                                                  <tr>
                                                    
                                                    <th class="column-title">Mon<br/>Mar-12 </th>
                                                    <th class="column-title">Tue <br/>Mar-13 </th>
                                                    <th class="column-title">Wed<br/>Mar-14</th>
                                                    <th class="column-title">Thu<br/>Mar-15</th>
                                                    <th class="column-title">Fri<br/>Mar-16</th>
                                                    <th class="column-title">Sat<br/>Mar-17</th> <th class="column-title">Sun<br/>Mar-18 </th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id=""  class="week-input-mobile" value="0.2">
                                                      
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class=" text-center">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    
                                                  </tr>
                                                  

                                                </tbody>
                                              </table>
                                            </td>
                                            </td>
                                            <td class="text-center " style="vertical-align: bottom;"><strong>0.00</strong></td>
                                          </tr>
                                           <tr class="collapse in" id="hide-row12" >
                                            <td class="poject-space " >
                                              <div class="bil-able pull-left">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </div>
                                        <div class="dropdown modal-font pull-right">
                                            
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#hide-row12" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                      
                                              <table>
                                                <thead style="background-color: transparent; color: #000;">
                                                  <tr>
                                                    
                                                    <th class="column-title">Mon<br/>Mar-12 </th>
                                                    <th class="column-title">Tue <br/>Mar-13 </th>
                                                    <th class="column-title">Wed<br/>Mar-14</th>
                                                    <th class="column-title">Thu<br/>Mar-15</th>
                                                    <th class="column-title">Fri<br/>Mar-16</th>
                                                    <th class="column-title">Sat<br/>Mar-17</th> 
                                                    <th class="column-title">Sun<br/>Mar-18 </th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile" value="0.2">
                                                      
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class=" text-center">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    
                                                  </tr>
                                                  

                                                </tbody>
                                              </table>
                                            </td>
                                            <td class="text-center" style="vertical-align: bottom;"><strong>0.00</strong></td>
                                          </tr>
                                           <tr class="collapse in" id="hide-row13" >
                                            <td class="poject-space " >
                                              <div class="bil-able pull-left">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </div>
                                        <div class="dropdown modal-font pull-right">
                                            
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#hide-row13" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                              <table>
                                                <thead style="background-color: transparent; color: #000;">
                                                  <tr>
                                                    
                                                    <th class="column-title">Mon<br/>Mar-12 </th>
                                                    <th class="column-title">Tue <br/>Mar-13 </th>
                                                    <th class="column-title">Wed<br/>Mar-14</th>
                                                    <th class="column-title">Thu<br/>Mar-15</th>
                                                    <th class="column-title">Fri<br/>Mar-16</th>
                                                    <th class="column-title">Sat<br/>Mar-17</th> <th class="column-title">Sun<br/>Mar-18 </th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id=""  data-toggle="modal"  data-target="#entry1" class="week-input-mobile" value="0.2">
                                                       
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class=" text-center">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    
                                                  </tr>
                                                  

                                                </tbody>
                                              </table>
                                            </td>
                                            </td>
                                            <td class="text-center " style="vertical-align: bottom;"><strong>0.00</strong></td>
                                          </tr>
                                           <tr class="collapse in" id="hide-row14" >
                                            <td class="poject-space " >
                                              <div class="bil-able pull-left">
                                          <a href="client-maintenance.php" target="_blank">
                                          <b>Invoice  Ann Edwards </b>
                                          </a>
                                          <p><a href=""> > Eviction - Clairemont Mesa Condo </a></p>
                                          <h6><a href=""> > Subproject name</a></h6>
                                        </div>
                                        <div class="dropdown modal-font pull-right">
                                             
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
                                  <a class="dropdown-item fa fa-plus-circle " title="" href="#"><span> Add a [Project] for this [Client]</span></a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" data-target="#hide-row14" class="fa fa-eye-slash"> <span> Hide row</span></a>
                                  </li>
                                   </ul>
                                    </div>
                                              <table>
                                                <thead style="background-color: transparent; color: #000;">
                                                  <tr>
                                                    
                                                    <th class="column-title">Mon<br/>Mar-12 </th>
                                                    <th class="column-title">Tue <br/>Mar-13 </th>
                                                    <th class="column-title">Wed<br/>Mar-14</th>
                                                    <th class="column-title">Thu<br/>Mar-15</th>
                                                    <th class="column-title">Fri<br/>Mar-16</th>
                                                    <th class="column-title">Sat<br/>Mar-17</th> <th class="column-title">Sun<br/>Mar-18 </th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                       <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile" value="0.2">
                                                      
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class=" text-center">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    <td class="">
                                                      <input type="text" id="" data-toggle="modal"  data-target="#entry1" class="week-input-mobile">
                                                    </td>
                                                    
                                                  </tr>
                                                  

                                                </tbody>
                                              </table>
                                            </td>
                                            </td>
                                            <td class="text-center " style="vertical-align: bottom;"><strong>0.00</strong></td>
                                          </tr>
                                         
                                          
                                        </tbody>
                                  </table>
        
                                  <!-- end for mobile -->

                                  
                                </div>
                                   <div class="col-md-3  col-sm-4 col-xs-12 ">
                                     <div class="row">
                                          <ul class="pagination" style="margin: 0;">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                          </ul>
                                     </div>
                                  </div>

                                  <div class="col-md-2 col-sm-3 ">
                                     <div class="row">

                                         <select name="" id="input" class="form-control desktop-table-week" required="required">
                                           <option value="">Rows per page:</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">100</option>
                                            <option value="">150</option>
                                         </select>
                                         <select name="" id="input" class="col-xs-12 form-control mobile-table-week" required="required">
                                           <option value="">Rows per page:</option>
                                            <option value="">5</option>
                                            <option value="">10</option>
                                            <option value="">15</option>
                                            <option value="">20</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                         </select>
                                     </div>
                                  </div>
                                <div class="col-sm-12 form-group"><hr/></div>
                                  <!-- <div class="col-md-6">
                                    <h4>Client/Matter not listed?</h4>
                                    <form action="" method="get" accept-charset="utf-8">
                                      <div class="form-group">
                                        <label>Search here:</label>
                                        <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                                      </div>
                                      <div class="form-group">         
                                        <label>Activity:</label>
                                        <select name="activity" class="form-control" >
                                          <option value="1" billable="1">Select&nbsp;Activity</option>
                                        </select> 
                                      </div>
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-default">Print</button>
                                      </div>                          
                                    </form>
                                  </div> -->
                                  <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="row form-group">
                               
                                <div class="  col-sm-6 col-xs-12 ">
                                  <div class="x_content">
                                     <div class=" form-inline">
                                       <label class="col-xs-3 label-control" style="padding-top: 5px;"><strong class="pull-right">Hours</strong> </label>
                                       <legend>
                                       
                                        <select class="form-control" style="width: 150px;"> 
                                          <option>Last 7 days</option>
                                          <option>Last 14 days</option>
                                          <option>Most recent pay period</option>
                                          <option>Prior full pay period</option>
                                          <option>Last 30 days</option>
                                          <option>This calendar month to date</option>
                                          <option>Last full calendar month</option>
                                          <option>Last 12 calendar months</option>
                                          <option>Last 4 quarters</option>
                                          <option>All time to date</option>
                                        </select>
                                      </legend>
                                     </div>
                                      <!-- <div class="degro">
                                            Hours
                                          </div> -->
                                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                        <div class="hidetxt ">

                                            </div>
                                        </div>
                                        </div>
                    
                              
                                              
            
                                       
                                     
                                 
                                     
                                       <div class="col-md-4  col-sm-4  col-xs-12 pull-right">
                                 <div class="x_content grap"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                  <div class=" col-xs-12">
                                      <label class="col-sm-5 col-md-5 col-xs-5 row label-control" style="padding-top: 5px;">Total Hours</label>
                                        <select class="form-control col-md-7 col-sm-7 col-xs-7" style="width: 150px"> 
                                          <option>Last 7 days</option>
                                          <option>Last 14 days</option>
                                          <option>Most recent pay period</option>
                                          <option>Prior full pay period</option>
                                          <option>Last 30 days</option>
                                          <option>This calendar month to date</option>
                                          <option>Last full calendar month</option>
                                          <option>Last 12 calendar months</option>
                                          <option>Last 4 quarters</option>
                                          <option>All time to date</option>
                                        </select>
                                       

                                     </div>
                                     <legend class="col-sm-12"></legend>
                                       <div class="row">
                                           <div class="col-xs-6 text-center">
                                            <span class="bill-able-span circle pull-right">Billable-Hours <span></span></span>
                                          </div>
                                          <div class="col-xs-6 text-center">
                                            <span class="nonbill-able-span circle">Non-Billable Hours  <span></span></span>
                                          </div>

                                          <canvas id="canvasDoughnut" style="width: 241px; height: 121px;">
                                            
                                          </canvas>

                                        </div>
            
                                       </div>
                                     </div>
                                  </div>
                                  
                               
                                        </div>
                                        
                                      </div>
                                    </div>
                                   
                                 
                            <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action desktop-table-week">
                              <tbody>
                                 <tr >
                                        <th colspan="5"></th>
                                       
                                        <th class="text-center"> Mon<br/>Mar-12 </th>
                                        <th class="text-center">Tue <br/>Mar-13 </th>
                                        <th class="text-center">Wed<br/>Mar-14</th>
                                        <th class="text-center">Thu<br/>Mar-15</th>
                                        <th class="text-center">Fri<br/>Mar-16</th>
                                        <th class="text-center">Sat<br/>Mar-17</th>
                                        <th class="text-center">Sun<br/>Mar-18 </th>
                                        <th class="text-center">Total Hours</th>
                                        
                                    
                                      </tr>
                                      <tr class="bg-billable text-center" >
                                        <td colspan="5" class="text-right "><strong title="Billable Total for all projects for this week">Billable Total:</strong></td>
                                       <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class=""><strong>2.05</strong></td>
                                        
                                    
                                      </tr>
                                      <tr class="bg-nonbill text-center">
                                        <td colspan="5" class="text-right" ><strong title="Non-Billable Total for all projects for this week">Non-Billable Total:</strong></td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class=""><strong>2.05</strong></td>
                                       
                                      </tr>
                                      <tr class="text-center">
                                        <td colspan="5" class="text-right"><strong title="Total is for all projects for this week">Total:</strong></td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class="">0.00 </td>
                                        <td class=""><strong>2.05</strong></td>
                                       
                                      </tr>
                              </tbody>
                            </table>
                            </div>
                             <!-- mobile table -->

                              
                              
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Mon Mar-12</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Tue Mar-13</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                               <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Wed Mar-14</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Thu Mar-15</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Fri Mar-16</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Sat Mar-17</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center>Sun Mar-18</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable">Billable</td>
                                    <td class="bg-billable">12.25</td>
                                    <td class="bg-nonbill">Non-Billable</td>
                                    <td class="bg-nonbill">1.25</td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <table   class="table table-borderd jambo_table bulk_action mobile-table-week" style="width:100%;">
                                
                               <thead>
                                  <tr class="headings">
                                    <th colspan="4" class=" center"><center><h4><strong>Total for Week</strong></h4></center></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                    <td class="bg-billable"><strong>Billable</strong></td>
                                    <td class="bg-billable"><strong>36.75</strong></td>
                                    <td class="bg-nonbill"><strong>Non-Billable</strong></td>
                                    <td class="bg-nonbill"><strong>3.75</strong></td>
                                  </tr>
                                   
                                </tbody>

                              </table>
                              <!-- ..............Table End.......... -->

                            
                          
                                  <div class="col-sm-4 col-xs-12">
                                      <div class="row">
                                        <table class="timesheet-panel table table-bordered" >
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
                                          <td colspan="2" class=" text-center ">
                                           
                                            <div class="form-group ">
                                            <button type="button" class="btn btn-primary">Send for Approval</button>
                                             <button type="button" class="btn btn-primary">Print</button>
                                           </div>
                                           
                                          </td>

                                        </tr>
                                        
                                      </tbody></table>
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
      <script>
      jQuery(document).ready(function() {
      
$('#chartContainer').contains('Hours').remove();​
           });
  </script>
      <!-- <script type="text/javascript">




jQuery(document).ready(function() {
    console.log( "ready!" );
      jQuery(':contains("CanvasJS.com")').each(function(){
      jQuery(this).html($(this).html().split("By:").join(""));
  });
});
    </script> -->
     <?php
      include_once "modal.php";
      ?>
    
    </body>
  </html>
