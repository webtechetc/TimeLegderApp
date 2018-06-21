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
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                            <div class="x_title">
                              <h2>Expense Types Maintenance</h2>
                              
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
