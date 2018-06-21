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
              <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 timeline-view" >

                            
                              
                                  <div class="col-sm-7 col-xs-12" >
                                    <div class="row">
                                   
                                    <div class="datetime">
                                       <h1>Timesheet Period View <strong >Today is Friday, March 16, 2018 &nbsp;It is 3:07 p.m. 
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

                            <div class="x_title">
                              <h2>Search / Add Client > Matter > Subproject</h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                
                              </ul>
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                              <div class="row">
                              <div class="col-sm-4">
                                <form class=" input-group">
                                      <input type="search" id="tags" aria-controls="datatable" class="form-control ui-autocomplete-input" placeholder="Search here..." autocomplete="off">
                                      <div class="input-group-btn">
                                      <button class="btn  btn-primary"><i class="fa fa-search"></i></button>
                                    </div>
                                    </form>
                                  </div>
                                  <div class="col-sm-4"></div>
                                  <div class="col-sm-4">
                                <button type="button" class="btn btn-primary pull-right">Add a Client</button>
                              </div>
                            </div>
                              <div class="table-responsive">
                                <table   class="table table-striped jambo_table bulk_action">
                                  <thead>
                                    <tr class="headings">
                                      <th class="column-title no-link last"><span class="nobr"></span>
                                      <th class="column-title">Client > Matter > Subproject</th>
                                      <th class="column-title text-center">Sun<br/>Mar-11 </th>
                                      <th class="column-title text-center">Mon<br/>Mar-12</th>
                                      <th class="column-title text-center">Tue <br/>Mar-13 </th>
                                      <th class="column-title text-center">Wed<br/>Mar-14</th>
                                      <th class="column-title text-center">Thu<br/>Mar-15</th>
                                      <th class="column-title text-center">Fri<br/>Mar-16</th>
                                      <th class="column-title text-center">Sat<br/>Mar-17</th>
                                      <th class="column-title">Total<br/>Hours</th>
                                    
                                      </th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr class="even pointer collapse in" id="hide-row1">
                                      
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
                            <!--  <li><a data-toggle="collapse" data-target="#hide-row"><span><center><b>Hide row</b></center></span></a></li> -->
                                   </ul>
                                    </div>
                                    </td>
                                      <td class=""><a href="#"> Invoice  Ann Edwards > Eviction - Clairemont Mesa Condo </a></td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center bg-success">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
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
                            <!--  <li><a data-toggle="collapse" data-target="#hide-row"><span><center><b>Hide row</b></center></span></a></li> -->
                                   </ul>
                                    </div>
                                    </td>
                                      <td class=""><a href="#"> Invoice  Ann Edwards > Eviction - Clairemont Mesa Condo </a></td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center bg-success">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center" >
                                        0.00
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
                            <!--  <li><a data-toggle="collapse" data-target="#hide-row"><span><center><b>Hide row</b></center></span></a></li> -->
                                   </ul>
                                    </div>
                                    </td>
                                      <td class=""><a href="#"> Invoice  Ann Edwards > Eviction - Clairemont Mesa Condo </a></td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="bg-success text-center">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
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
                            <!--  <li><a data-toggle="collapse" data-target="#hide-row"><span><center><b>Hide row</b></center></span></a></li> -->
                                   </ul>
                                    </div>
                                    </td>
                                      <td class=""><a href="#"> Invoice  Ann Edwards > Eviction - Clairemont Mesa Condo </a></td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center bg-success">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      
                                    </tr>
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
                            <!--  <li><a data-toggle="collapse" data-target="#hide-row"><span><center><b>Hide row</b></center></span></a></li> -->
                                   </ul>
                                    </div>
                                    </td>
                                      <td class=""><a href="#"> Invoice  Ann Edwards > Eviction - Clairemont Mesa Condo </a></td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                         0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center bg-success">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      <td class="text-center ">
                                        0.00
                                      </td>
                                      
                                    </tr>
                                     <tr >
                                      <td colspan="2"></td>
                                     <td class="text-center">Sun<br/>Mar-11 </td>
                                      <td class="text-center"> Mon<br/>Mar-12 </td>
                                      <td class="text-center">Tue <br/>Mar-13 </td>
                                      <td class="text-center">Wed<br/>Mar-14</td>
                                      <td class="text-center">Thu<br/>Mar-15</td>
                                      <td class="text-center">Fri<br/>Mar-16</td>
                                      <td class="text-center">Sat<br/>Mar-17</td>
                                      <td></td>
                                  
                                    </tr>
                                    <tr class="bg-info">
                                      <td colspan="2" class="text-right"><strong>Billable Total:</strong></td>
                                     <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">2.05</td>
                                      
                                  
                                    </tr>
                                    <tr class="">
                                      <td colspan="2" class="text-right"><strong>Non-Billable Total:</strong></td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">2.05</td>
                                     
                                    </tr>
                                    <tr >
                                      <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">0.00 </td>
                                      <td class="text-center ">2.05</td>
                                     
                                    </tr>
                                  </tbody>
                                </table>
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

                                         <select name="" id="input" class="form-control form-group desktop-table-week" required="required">
                                           <option value="">Rows per page:</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">100</option>
                                            <option value="">150</option>
                                         </select>
                                         <select name="" id="input" class="col-xs-12 form-control form-group mobile-table-week" required="required">
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
                                <div class="col-xs-12 settings-text">
                                  <button type="button" class="btn btn-primary">Print Timesheet </button>
                                </div>
                              
                             
                                <div class="col-md-6 ">
                                    <div class="row">
                                      <table class="timesheet-panel table table-bordered">
                                      <tbody><tr><td style="font-size:10pt; padding-bottom: 15px;"><b>Timesheet Approval</b></td></tr>
                                      <tr><td><table border="0" width="100%">
                                        <tbody class="text-center"><tr>
                                          <td style="font-size:8pt;" align="center"><b>Period</b></td>
                                          <td> | </td>
                                          <td style="font-size:8pt;" align="center"><b>Due date</b>
                                        </td></tr>
                                        <tr><td colspan="3" height="1" bgcolor="black"></td></tr>
                                        <tr>
                                          <td style="font-size:8pt;">Mar-10-2018&nbsp;To&nbsp;Mar-16-2018</td>
                                          <td> | </td>
                                          <td style="font-size:8pt;">Saturday, March 17, 2018</td>
                                        </tr>
                                      </tbody></table></td></tr>
                                      <tr>
                                        <td colspan="2" class=" text-center ">
                                         
                                 <div class="form-group ">
                                          <button type="button" class="btn btn-primary">Send for Approval</button>
                                           <button type="button" class="btn btn-default">Print</button>
                                         </div>
                                         
                                        </td>

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
