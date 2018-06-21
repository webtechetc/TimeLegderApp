 <!-- Custom Theme Scripts -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.js"></script>
      <!-- bootstrap-daterangepicker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/Chart.js/dist/Chart.js"></script>
    <script src="js/chart-stack.js"></script>
    <script src="js/echarts/dist/echarts.min.js"></script>
    <script src="js/echarts/map/js/world.js"></script>
    <!-- morris.js -->
    <script src="lib/raphael/raphael.min.js"></script>
    <script src="lib/morris.js/morris.min.js"></script>
    <!-- ......Day Chart........ -->
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
     <!-- jQuery Sparklines -->
    <script src="lib/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- easy-pie-chart -->
    <script src="lib/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="lib/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    
    <script>
     $(function() {
        $("input#tags").autocomplete({
            source: [
                 "Invoice Ann Edwards",
          "Bill Brink",
          "Brent Wood"
                ],
            response: function(event, ui) {
                if (ui.content.length === 0) {
                    $("#empty-message").text(' "Wood" ');
                } else {
                    $("#empty-message").empty();
                }
            }
        });
    });
  </script>
   <script>
     $(function() {
        $("input#tag").autocomplete({
            source: [
                 "Bell, Terry",
                  "Burgraff, Kimberly",
                  "Diaz, Denise",
                  "Clarambeau, Adlore",
                  "Diaz, Denise",
                  "Dracup, Alex",
                  "Dracup, Brittany",
                  "Dracup, Jeffrey",
                  "Jenkins, Michelle",
                  "Kiamilev, Chandra",
                  "Larmore, Thomas",
                  "Payne, Richard",
                  "Thomas, Cynthia",
                  "Wheeler, Kristie"
                ],
            response: function(event, ui) {
                if (ui.content.length === 0) {
                    $("#empty-message").text(' "Wood" ');
                } else {
                    $("#empty-message").empty();
                }
            }
        });
    });
  </script>
            <script>
              $('#entry1').on('hidden.bs.modal', function (e) {
            $(this)
              .find("input")
                 .val('')
                 .end()
              .find("")
                 .prop("checked", "")
                 .end();
          })
            </script>

           

    <script type="text/javascript">
        
            jQuery(function () {
                jQuery('#datetimepicker1').datetimepicker();
                jQuery('#datetimepicker2').datetimepicker();
                jQuery('#datetimepicker3').datetimepicker();
                jQuery('#datetimepicker4').datetimepicker();
                jQuery('#datetimepicker5').datetimepicker();
                jQuery('#datetimepicker6').datetimepicker();
            });
           jQuery(document).ready(function($) {
              jQuery('.x_panel.off').css('height', 'auto');
              jQuery('.x_content.off').css('display', 'none');
            });

        </script>
        
        <script>
     
            jQuery(".desc-click").dblclick(function() {
             $(".desc-box").css('display', 'block');
            });
            jQuery(".cancel-desc").click(function() {
              $('.desc-box').css({
                display: 'none',
              });
            });
             jQuery(".desc-click1").dblclick(function() {
             $(".desc-box1").css('display', 'block');
            });
            jQuery(".cancel-desc1").click(function() {
              $('.desc-box1').css({
                display: 'none',
              });
            });
             jQuery(".desc-click2").dblclick(function() {
             $(".desc-box2").css('display', 'block');
            });
            jQuery(".cancel-desc2").click(function() {
              $('.desc-box2').css({
                display: 'none',
              });
            });

             jQuery(".desc-click3").dblclick(function() {
             $(".desc-box3").css('display', 'block');
            });
            jQuery(".cancel-desc3").click(function() {
              $('.desc-box3').css({
                display: 'none',
              });
            });
             jQuery(".desc-click4").dblclick(function() {
             $(".desc-box4").css('display', 'block');
            });
            jQuery(".cancel-desc4").click(function() {
              $('.desc-box4').css({
                display: 'none',
              });
            });

        </script>
        <script src="js/jquery.selectlistactions.js"></script>
        <script>
        $('#btnAvenger').click(function (e) {
            $('select').moveToList('#StaffList', '#PresenterList');
            e.preventDefault();
        });

        $('#btnRemoveAvenger').click(function (e) {
            $('select').removeSelected('#PresenterList');
            e.preventDefault();
        });

        $('#btnAvengerUp').click(function (e) {
            $('select').moveUpDown('#PresenterList', true, false);
            e.preventDefault();
        });

        $('#btnAvengerDown').click(function (e) {
            $('select').moveUpDown('#PresenterList', false, true);
            e.preventDefault();
        });

        $('#btnShield').click(function (e) {
            $('select').moveToList('#StaffList', '#ContactList');
            e.preventDefault();
        });

        $('#btnRemoveShield').click(function (e) {
            $('select').removeSelected('#ContactList');
            e.preventDefault();
        });

        $('#btnShieldUp').click(function (e) {
            $('select').moveUpDown('#ContactList', true, false);
            e.preventDefault();
        });

        $('#btnShieldDown').click(function (e) {
            $('select').moveUpDown('#ContactList', false, true);
            e.preventDefault();
        });

        $('#btnJusticeLeague').click(function (e) {
            $('select').moveToList('#StaffList', '#FacilitatorList');
            e.preventDefault();
        });

        $('#btnRemoveJusticeLeague').click(function (e) {
            $('select').removeSelected('#FacilitatorList');
            e.preventDefault();
        });

        $('#btnJusticeLeagueUp').click(function (e) {
            $('select').moveUpDown('#FacilitatorList', true, false);
            e.preventDefault();
        });

        $('#btnJusticeLeagueDown').click(function (e) {
            $('select').moveUpDown('#FacilitatorList', false, true);
            e.preventDefault();
        });
    
        $('#btnRight').click(function (e) {
            $('select').moveToListAndDelete('#lstBox1', '#lstBox2');
            e.preventDefault();
        });

        $('#btnAllRight').click(function (e) {
            $('select').moveAllToListAndDelete('#lstBox1', '#lstBox2');
            e.preventDefault();
        });

        $('#btnLeft').click(function (e) {
            $('select').moveToListAndDelete('#lstBox2', '#lstBox1');
            e.preventDefault();
        });

        $('#btnAllLeft').click(function (e) {
            $('select').moveAllToListAndDelete('#lstBox2', '#lstBox1');
            e.preventDefault();
        });
</script>
<script >
  $('.btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $collapse = $this.closest('.collapse-group').find('.collapse');
    $collapse.collapse('toggle');
});
</script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker11').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker12').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
        <script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}


</script>

<script type="text/javascript">
$('.clockpicker').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'Done'
});
</script>
<script type="text/javascript">
$('.clock2').clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'Done'
});
</script>
     <script src="js/custom.js"></script>
     <script src="js/custom-script.js"></script>
     <script  src="js/index.js"></script>
