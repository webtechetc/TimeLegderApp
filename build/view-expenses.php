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
        <div class="right_col settings" role="main" style="min-height: 444px;">
          <div class="">
                <div class="col-md-4 pull-right form-group">
                  <div class="row paddL">
                    <div class="col-sm-6 text-right " style="padding-top:10px;">
                        <label for="" style="font-size:12px;">Expense Entry for:</label>
                    </div>

                    <div class="col-sm-6" style="margin-bottom0px;">
                      <div class="row">
                        <select class="form-control" name="">
                          <option value="48226">Bell, Terry</option>
                          <option value="50385">Burgraff, Kimberly</option>
                          <option value="48227">Clarambeau, Adlore</option>
                          <option value="50138">Diaz, Denise</option>
                          <option value="49076">Dracup, Alex</option>
                          <option value="49807">Dracup, Brittany</option>
                          <option value="48087" selected="">Dracup, Jeffrey</option>
                          <option value="50128">Jenkins, Michelle</option>
                          <option value="50126">Kiamilev, Chandra</option>
                          <option value="50155">Larmore, Thomas</option>
                          <option value="50125">Payne, Richard</option>
                          <option value="48865">Thomas, Cynthia</option>
                          <option value="48209">Wheeler, Kristie</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                       
                 
                       <div class="x_panel">
                            <div class="timesheet-view">
                              <h3>View Expenses</h3>
                              
                              <div class="clearfix"></div>
                            </div>

                            <div class="x_content ">
                             <form class="form-inline ">
                                <div class="form-group">
                                    <label for="ex3">Event</label>
                                          <select class="form-control" style="width:50%;">
                                              <option>--Any--</option>
                                              <option>--None--</option>
                                            </select>
                                      </div>                 
                                     <label for="ex4">For period from</label>
                                    <input id="datetimepicker6" type="text" class="form-control form-group" placeholder="03/06/2018 8:24 PM" style="width: 83px;">     
                                    <label for="ex4">To:</label>
                                    <input id="datetimepicker5" type="text" class="form-control form-group" placeholder="03/06/2018 8:24 PM" style="width: 83px;">                  

                                  <div class="btn-group">
                                  <button class="btn btn-primary" class="form-control" type="button">Display Selection</button>
                                </div>
                                 </form>
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

</body></html>