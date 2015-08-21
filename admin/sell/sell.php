<?php
include_once('../../data.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../admin_css/admin_css.css" />
</head>

<body>
<?php
$sql="select * from registration r,sell s where r.reg_id=s.reg_id";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
 
if(isset($_POST['btnsearch']))
 {
	extract($_POST);
	$type1=$type;
	if($type1=="All")
	{
      $sql="select * from registration r,sell s where r.reg_id=s.reg_id";
      $result=mysqli_query($con,$sql);
      $n=mysqli_num_rows($result);

    }
	else
	{
	  $sql="select * from registration r ,sell s where r.trans_type='$type1' and r.reg_id=s.reg_id ";
	  $result=mysqli_query($con,$sql);
      $n=mysqli_num_rows($result);
	}
 }
 

?>
<form method="post" action=""> 
<table width="336" height="30" align="right"><tr>
<td width="93" align="right">Search Record</td>
 <td width="133">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <select name="type" id="type">
<option value="All">All</option>
<option value="Agent">Agent</option>
<option value="Builder">Builder</option>
<option value="Individual">Individual</option>
 </select></td>
 <td width="94"><button id="btnsearch" name="btnsearch">Search</button></td>
</tr></table><br /><br />
<table width="1204" align="center" border="1">

<thead>
<tr>
<th width="24">Sr. no.</th>
<th width="97">CompanyType</th>
<th width="67">Company name</th>
<th width="41">User Name</th>
<!--<th width="55">Password</th> -->
<th width="42">City Name</th>
<!--<th width="51">Mobile No code</th> -->
<th width="52">Mobile No</th>
<!--<th width="79">country code</th> -->
<th width="63">Landline No</th>
<!--<th width="79">Website</th> -->
<th width="39">Email</th>
<!--<th width="79">Address</th> -->
<th width="53">Listing Type</th>
<th width="65">Property Type</th>
<th width="68">Minimum Area</th>
<th width="72">Maximum Area</th>
<th width="36">Min Price</th>
<th width="36">Max price</th>
<th width="38">Price Sq/ft</th>
<th width="68">Min Bedrooms</th>
<th width="68">Max Bedrooms</th>
<th width="69">Edit</th>
<!--<th width="11"></th> -->
</tr>
</thead>
<?php
for($i=0;$i<$n;$i++)
{
  $row=mysqli_fetch_array($result);
  extract($row);
?>
  <tr bgcolor="#FF6600" class="td_txt">
     <td height="22">
	  <?php echo "$reg_id"; ?>
     </td>
    
     <td>
	  <?php echo "$trans_type"; ?>
     </td>
     <td>
	  <?php echo "$full_name"; ?>
     </td>
     <td>
	  <?php echo "$username"; ?>
     </td>
     <!--<td>
	  <?php //echo "$password"; ?>
     </td> -->
     
     <td>
	  <?php 
	  $sql2="select city_name from city_master c where c.city_code=$city_code";
	  $res2=mysqli_query($con,$sql2);
	  $n2=mysqli_num_rows($res2);
	  for($k=0;$k<$n2;$k++)
	  {
	    $row2=mysqli_fetch_array($res2);
		extract($row2);
		echo "$city_name";
	  }
	   ?>
     </td>
     <!--<td>
	  <?php //echo "$mob_country_code"; ?>
     </td> -->
     <td>
	  <?php echo "$mobile_no"; ?>
     </td>
     <!--td>
	  <?php //echo "$area_code"; ?>
     </td> -->
     <td>
	  <?php echo "$landline"; ?>
     </td>
     <!--<td>
	  <?php //echo "$website"; ?>
     </td> -->
     <td>
	  <?php echo "$email"; ?>
     </td>
     <!--<td>
	  <?php //echo "$address"; ?>
     </td> -->
     <td>
	  <?php echo "$list_type"; ?>
     </td>
     <td>
	  <?php
	  
	    $sql1="select * from property_master p where p.prop_code = $prop_code";
		$res1=mysqli_query($con,$sql1);
		$n1=mysqli_num_rows($res1);
		for($j=0;$j<$n1;$j++)
		{
	      $row1=mysqli_fetch_array($res1);
		  extract($row1);
		  echo "$Prop_name";
		}
		?>
     </td>
     <td>
	  <?php echo "$min_area"; ?>
     </td>
     <td>
	  <?php echo "$max_area"; ?>
     </td>
      <td>
	  <?php echo "$min_price"; ?>
     </td>
     <td>
	  <?php echo "$max_price"; ?>
     </td>
     <td>
	  <?php echo "$sqft"; ?>
     </td>
     <td>
	  <?php echo "$min_bedroom"; ?>
     </td>
     <td>
	  <?php echo "$max_bedroom"; ?>
     </td>
     <td>
	 <button> <?php echo "<a href='admin_sell.php?reg=$reg_id&sell=$sell_id&city=$city_code&prop=$prop_code' target='frm1'>edit</a>"; ?></button>
     </td>
<?php }?>
</table>
<br />
<br />
</form>
</body>
</html>