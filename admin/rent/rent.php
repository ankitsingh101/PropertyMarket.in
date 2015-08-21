<?php
include_once('../../data.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#main {
	height: auto;
	width: auto;
	font-family: "Times New Roman", Times, serif;
}
#main #form1 table tr th {
	font-size: 18px;
	color: #000;
}
</style>
</head>

<body>
<?php
$sql="select * from registration r,rent re where r.reg_id=re.reg_id";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
 
if(isset($_POST['btnsearch']))
 {
	extract($_POST);
	$type1=$type;
	if($type1=="All")
	{
      $sql="select * from registration r,rent re where r.reg_id=re.reg_id";
      $result=mysqli_query($con,$sql);
      $n=mysqli_num_rows($result);

    }
	else
	{
	  $sql="select * from registration r ,rent re where r.trans_type='$type1' and r.reg_id=re.reg_id ";
	  $result=mysqli_query($con,$sql);
      $n=mysqli_num_rows($result);
	}
 }
?>
<div id="main">
  <form id="form1" name="form1" method="post" action="">
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
<th width="36">Rent Price</th>
<th width="36">Min Bedrooms</th>
<th width="38">Max Bedrooms</th>
<th width="68">Edit</th>

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
	  <?php echo "$rent_price"; ?>
     </td>
     
     
     <td>
	  <?php echo "$min_bedroom"; ?>
     </td>
     <td>
	  <?php echo "$max_bedroom"; ?>
     </td>
     <td>
	 <button> <?php echo "<a href='admin_rent.php?reg=$reg_id&rent=$rent_id&city=$city_code&prop=$prop_code' target='frm1'>edit</a>"; ?></button>
     </td>
<?php }?>
</table>
<br />
<br />

  </form>
</div>

<?php
/*include_once("data.inc");
$reg=$_SESSION['reg'];
/*if(!isset($_SESSION['mno']))
{
	header("Location:sellproperty_1.php");
//}
 if(isset($_POST['btnsubmit']))
 {
	 extract($_POST);
//$sql="insert into sell(`list_type`, `prop_code`, `prop_type`, `city_code`, `min_area`, `max_area`, `min_price`, `max_price`, `sqft`, `nego`, `min_bedroom`, `max_bedroom`, `bathroom`, `floor`, `possession`, `construction`, `furnished`, `facing`, `ownership_type`, `am_pb`, `am_rwh`, `am_club`, `am_lift`, `am_sp`, `am_rp`, `am_security`, `am_gym`, `am_sq`, `am_vc`, `am_park`, `land_sm`, `land_school`, `land_hos`, `land_atm`, `upload_img`, `desc`)
//values('$rdogrplistingtype', '$prop_type',''$rdogrpnrp', '$city', '$txtminarea', '$txtmaxarea', '$min_price', '$max_area', '$txtsqft', '$rdogrpprice' ,'$min_ddlbedrooms', '$max_ddlbedrooms', '$ddlbathroom', '$ddltotal_floor', '$ddltime_to_possession' ,'$ddlage_construction' ,'$ddlfurnished' ,'$ddlfacing', '$ddlownership', '$CheckboxGroup1',	   '$CheckboxGroup2','$CheckboxGroup3','$CheckboxGroup4','$CheckboxGroup5','$CheckboxGroup6','$CheckboxGroup7','$CheckboxGroup8','$CheckboxGroup9','$CheckboxGroup10','$CheckboxGroup11','$CheckboxGroup20','$CheckboxGroup21','$CheckboxGroup22','$CheckboxGroup23','$fileupload' ,'$txtdescrption')";
$sql=
"INSERT INTO `propertymarket`.`rent` 
(`reg_id`,`list_type`, `prop_code`, `city_code`, `min_area`, `max_area`, `rent_price`,
 `nego`, `min_bedroom`, `max_bedroom`, `bathroom`,
 `am_pb`, `am_rwh`, `am_club`, `am_lift`, `am_sp`, `am_rp`, `am_security`, `am_gym`, `am_sq`, `am_vc`, `am_park`, `land_sm`,
 `land_school`, `land_hos`, `land_atm`, `upload_img`, `desc`)
 VALUES ('$reg','$rdogrplistingtype', '$prop_type', '$city', '$txtminarea', '$txtmaxarea', '$txtrent_price', '$rdogrpprice', '$min_ddlbedrooms', '$max_ddlbedrooms', '$ddlbathroom',  '$CheckboxGroup1', '$CheckboxGroup2', '$CheckboxGroup3', '$CheckboxGroup4', '$CheckboxGroup5',
'$CheckboxGroup6', '$CheckboxGroup7', '$CheckboxGroup8', '$CheckboxGroup9', '$CheckboxGroup10', '$CheckboxGroup11', '$CheckboxGroup20', '$CheckboxGroup21', '$CheckboxGroup22', '$CheckboxGroup23', '$fileupload', '$txtdescrption')";
mysqli_query($con,$sql);
 }*/
?> 
</body>
</html>