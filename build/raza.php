<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <select class="form-control form-group" style="width: 146px" style="margin-bottom: 5px;">



<?php  
$x = 0.1;
// for ($x = 0.1; $x <=24.0; $x+=0.1) {
for ($m = 6; $m <=1440; $m+=6) {
  // echo "<option> $x </option>";
   echo "<option> ".number_format($x,1)." ($m minutes) </option>";
   $x+=0.1;
}
//}
?>  
       </select>
</body>
</html

                                             

 