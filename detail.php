<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
html{
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
}
</style>
</head>

<body>
<center>
<?php
 include_once('data.inc');
 extract($_GET);
 //echo $city;
 $sql1="select city_name,prop_name,comp,address,min_price,max_price,bedroom,min_area,max_price_sq from city_master c,property_master p,featureproject f where c.city_code=$city and p.prop_code=$prop and f.fp_id=$fp";
 $show=mysqli_query($con,$sql1);
 $nshow=mysqli_num_rows($show);
 for($i=0;$i<$nshow;$i++)
 {
   $row=mysqli_fetch_array($show);
   extract($row);
   echo "
     <table border='0' cellspacing='10' style='background-color:#ffffff;' height='400' width='500'>
     <tr>
    <td>Company Name</td>
    <td style='color:#452207;font-size:18px;'>$comp</td>
  </tr>
  <tr>
    <td>City</td>
    <td style='color:#452207;font-size:18px;'>$city_name</td>
  </tr>
  <tr>
    <td>Property Type</td>
    <td style='color:#452207;font-size:18px;'>$prop_name</td>
  </tr>
  <tr>
    <td>Address</td>
    <td style='color:#452207;font-size:18px;'>$address</td>
  </tr>
  <tr>
    <td>Minimum Price </td>
    <td style='color:#452207;font-size:18px;'>$min_price</td>
  </tr>
  <tr>
    <td>Maximum Price</td>
    <td style='color:#452207;font-size:18px;'>$max_price</td>
  </tr>
  <tr>
    <td>Bedroom</td>
    <td style=color:#452207;font-size:18px;'>$bedroom</td>
  </tr>
  <tr>
    <td>Square Per foot</td>
    <td style='color:#452207;font-size:18px;'>$max_price_sq</td>
  </tr>
</table>"; 
 }
?>
</center>
</body>
</html>