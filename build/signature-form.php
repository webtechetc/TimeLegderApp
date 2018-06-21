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
                <br>
                <p>Dashboard / Signature Form</p>
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
                   <div class="col-sm-12 settings-text">
                    <h4><label>TimeLedger - User Signature Entry Form</label></h4>
                     <a href="">Click Here to Print This Form</a>
                   </div>
                   <div>
                     <p>Please enter your signature in the box below - on the signature line. For your signature to appear properly on your submitted timesheets, we need you to sign completely inside the box.

                Once you've signed this, please take a picture of it (you can use your mobile phone) and email it to <b>jeff.dracup@dracupandpatterson.com</b>, or otherwise fax it to your TimeLedger Administrator.</p>
                                   </div>
                                   <div class="col-sm-4 "></div>
                                   <div class="col-sm-4 " style="margin-top: 10px;">
                                   <div class="signature">
                        <hr class="signature-line">
                      </div>
                    </div>
                    <div class="col-sm-4 "></div>
                     
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
