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
                <br/>
                <p>Dashboard / Invoices</p>
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
                    <h2>Select Invoices to View, Edit and/or Print</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                    <div class="col-sm-6">
                      
                    <form class="form-group">
                      
                      <label>1. Select Clients and Matters to invoice:</label>
                   
                    <div class="">
                      <select  class="form-control">
                            <option value="*" selected="">---------- SELECT ALL </option>
                            <option value="TA">---------- ALL Matters Type 'A' </option>
                           <option value="TB">---------- ALL Matters Type 'B' </option>
                            <option value="TI">---------- ALL Matters Type 'I' </option>
                            <option value="TS">---------- ALL Matters Type 'S' </option>
                        </select>
                      </div>
                    </form>
                     <div class=" form-group">
                               <div class="checkbox  checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Show Clients</label>
                              </div>
                              <div class="checkbox checkbox-success ">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Show Matters</label>
                              </div>
                              <div class="checkbox  checkbox-success">
                                  <input type="checkbox" id="" value="">
                                  <label for=""> Show Inactive Items </label>
                              </div>
                              <div class="checkbox  checkbox-success">
                                  <input type="checkbox" id="" value="">
                                  <label for="">Run invoices for inactive Clients and/or Matters</label>
                              </div>
                        </div>

                        
                       
                          <label>2. Select Range of Dates to Include on Invoices:</label>
                         <form class="form-group">
                          
                         <label for="ex4">From:</label>
                         
                           <input id="datetimepicker6" type="text" class="form-control" placeholder="03/1/2018" style="width: 80px;">  
                         </form>
                         <form class="form-group">
                         
                            <label for="ex4">To:</label>
                       
                            <input id="datetimepicker5" type="text" class="form-control" placeholder="03/1/2018" style="width: 80px;">
                                    
                        </form>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>3. Select Invoice Options:</label>
                        <form class=" form-group">
                          <label>Invoice Date</label>
                           <input id="datetimepicker4" type="text" class="form-control" placeholder="04/10/2018" style="width: 80px;">
                         </form>
                         <div class=" form-group">
                         <label>First Invoice to start with number:</label>
                         <input type="" name="" class="form-control" value="50583" style="width: 50%">
                         
                         <div class="checkbox checkbox-success Active">
                              <input type="checkbox" id="" value=""> 
                              <label for="">Auto update at next run</label>
                              </div>
                       </div>
                       <div class="checkbox checkbox-success Active">
                              <input type="checkbox" id="" value=""> 
                              <label for="">Hide invoices with zero total amount</label>
                         </div>
                          <div class="checkbox checkbox-success">
                              <input type="checkbox" id="" value=""> 
                              <label for="">Include all entries, even Non-Billable</label>
                         </div>
                         <div class="radio active">
                                       <input name="r" id="" value="" checked="checked" type="radio">
                                      <label >
                                        Use decimal format for hours (i.e. "1.10")
                                      </label>
                                    </div>
                           <div class="radio ">
                              <input name="r" id="" value="" checked="checked" type="radio">
                               <label>
                                 Use colon format for hours (i.e. "1:06")
                                  </label>
                              </div>
                              <div class="form-group row col-sm-6 col-md-6 col-xs-12">
                                <label>Invoice Template: </label>
                                <select name="invoice_template_id" class="form-control">
                                  <option value="1" selected="">General</option>
                                  <option value="11">Regular Invoice w/o Rate Shown</option>
                                  <option value="7">TimeLedger Old Style</option>
                                  </select>
                              </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 row">
                              <button class="btn btn-primary">Display or Print Invoices</button>
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

   <?php
    include_once "modal.php";
    ?>
  

  </body>
</html>
