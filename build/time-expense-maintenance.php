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
           <!--  <div class="page-title">
              <div class="title_left">
                <br>
                <p>Dashboard / Expense Types Maintenance</p>
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
                   
                    <h4><a href="">Add New Expense Type</a></h4>
                 
                   
                      <div class="table-responsive">
                        <table class=" table table-bordered  table-striped jambo_table">
                          <tbody><tr class="table_header">
                            <td>Expense Type Name</td>
                            <td>Expense Type Code</td>
                            <td>Expense Type Code for linking to other programs</td>
                            <td>Status</td>
                            <td>Billable/<br>Changeable by user</td>
                            <td>Reimb./<br>Changeable by user</td>
                            <td>Unit Price</td>
                            <td>Markup</td>
                            <td width="50">&nbsp;</td>
                          </tr>

                          <tr>
                            <td>Air Travel</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145310">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Bal Fwd</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145025">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Court Doc Download Fee</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145319">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Court Filing Fee</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144944">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Courtcall - Telephone Appearance Fee</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145414">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Delivery charge</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144945">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Discount</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>No / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145477">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Hotel</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144943">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Interest</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145421">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Jury Fees</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145711">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Mailing/Postage</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=147149">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Meals/Entertainment</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145359">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Meeting Fees</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145360">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Mileage</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>$0.75 per mile</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144895">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Office Assistant Services</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144954">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Outside Services</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145124">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Overnight (FedEx, UPS, etc.)</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144949">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Parking Fees</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145358">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Payment</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144950">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Photocopies</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>$0.20 per Copy</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144947">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Postage</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144948">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Retainer Replenishment</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>No / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145687">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Scanning</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145672">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Search Fee</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" title="Overriden">100%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=147094">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Service of Process</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=144946">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Subcontractor Expense:Mileage</td>
                            <td>Subcontractor Expense:Mileage</td>
                            <td>Mileage</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>$0.535 per mile</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145493">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Supplies</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145061">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Taxi/Transportation</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / Yes</td>
                            <td>Yes / Yes</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145361">Edit</a></td>
                          </tr> 

                          <tr>
                            <td>Transfer to other invoice</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Active</td>
                            <td>Yes / No</td>
                            <td>Yes / No</td>
                            <td>n/a</td>
                            <td align="right" style="color: #aaa;" title="Company Default">0%</td>
                            <td align="center"><a href="expense_type.asp?ci=14317&amp;ti=49076&amp;fn=979252386&amp;td=43199&amp;xt=145710">Edit</a></td>
                          </tr> 

                          </tbody></table>
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
