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
             <!-- <div class="page-title">
              <div class="title_left">
                <br/>
                <p>Dashboard / Hourly Usage By Matter</p>
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
            </div> -->

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
                    <div class=" form-group text-center">
                               <div class="checkbox  checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">  Include Inactive Matters   </label>
                              </div>
                            </div>
                            <div class="table-responsive">
                              <table width="100%" class="table-bordered table table-striped " cellpadding="3" cellspacing="0" class="datagrid">
                                  <tbody><tr class="report_header_row">
                                    <th><a href='javascript:void sortOrder("projects")'></a>&nbsp;&nbsp;Matter</th>
                                    <th>Client</th>
                                    <th><a href='javascript:void sortOrder("hours")'></a>&nbsp;&nbsp;Hours</th>    
                                    <th>Manager</th>
                                    <th><a href='javascript:void sortOrder("exportcode")'></a>&nbsp;&nbsp;Code for exporting Matter</th>
                                    <th>Contact Information</th>
                                      
                                  </tr>

                                  <tr valign="Top">
                                    <td>ClientScore project</td>
                                    <td>Alex Dracup</td>
                                    
                                    
                                  <td>49.80</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>Severus Holdings work</td>
                                    <td>Alex Dracup</td>
                                    
                                    
                                  <td>26.30</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>General Legal Matters</td>
                                    <td>Alex Dracup</td>
                                    
                                    
                                  <td>8.10</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>Termination of General Contractor</td>
                                    <td>Alex Holland</td>
                                    
                                    
                                  <td>0.70</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>Quiet Title of 13894 Sagassum Ct</td>
                                    <td>Alice Kelly</td>
                                    
                                    
                                  <td>0.40</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>La Jolla CC&amp;R short-term rental research</td>
                                    <td>Amir Bahreman</td>
                                    
                                    
                                  <td>1.40</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>Escondido Residential Purchase</td>
                                    <td>Andrew Arter</td>
                                    
                                    
                                  <td>2.30</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>Eviction - Clairemont Mesa Condo</td>
                                    <td>Ann Edwards</td>
                                    
                                    
                                  <td>9.30</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>In re Marriage of Annette Borsack and William Borsack</td>
                                    <td>Annette Borsack</td>
                                    
                                    
                                  <td>62.30</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr valign="Top">
                                    <td>Pels v. Sister - 1766 Promenade Cir</td>
                                    <td>Anthony Pels</td>
                                    
                                    
                                  <td>7.10</td>
                                  <td></td>  
                                  <td></td>       
                                  
                                  <td>Name:&nbsp;&nbsp;&nbsp;<br>
                                  Phone:&nbsp;&nbsp;<br>E-Mail:&nbsp;&nbsp;</td>
                                  
                                  </tr>

                                  <tr class="noborder">
                                    <td colspan="2" nowrap="" align="right"><b>Sub-Total/Total Hours:</b></td>
                                    <td class="light" nowrap=""><b>167.70/3543.70</b></td>
                                    <td colspan="3" align="left">&nbsp;</td>
                                  </tr>
                                  <tr class="noborder"> 
                                  <td nowrap="" align="right" colspan="6">
                                    Printed on Wednesday, April 11, 2018
                                  </td></tr>
                                </tbody></table>
                            </div>
                             <div class="col-md-3 text-left">
                                   <div class="row">

                                       <select name="" id="input" class="form-control" required="required">
                                         <option value="">Per Page</option>
                                          <option value="">100</option>
                                          <option value="">250</option>
                                          <option value="">300</option>
                                          <option value="">500</option>
                                       </select>
                                   </div>
                                </div>
                                <div class="col-md-9 text-right">
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
                          <div class="form-group form-inline form-documents">
                    
                    <label><a href=""><i class="fa fa-print"></i> Print</a></label>
                    
                    <label><a href=""><i class="fa fa-file-pdf-o"></i> PDF</a></label>
                   
                   <label><a href=""><i class="fa fa-file-word-o"></i> MS Word</a></label>
                    
                    <label><a href=""><i class="fa fa-file-excel-o"></i> MS Excel</a></label>
                    
                    <label><a href=""><i class="fa fa-file"></i> CSV</a></label>
                     
                     <label><a href=""><i class="fa fa-file-text-o"></i> TEXT</a></label>
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
