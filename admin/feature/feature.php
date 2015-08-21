<?php
include_once("../../data.inc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../admin_css/admin_css.css" rel="stylesheet" />
</head>

<body>
<?php 
include_once('data.inc');
//update

 if(isset($_POST['btnupdate']))
 {
	 extract($_POST);
	 //echo "$txtsr";
	 //echo "$txtcomp";
	// $sqlupdate="update featureproject f set f.comp='$txtcomp',f.saddress='$txtsaddress',f.city_name='$txtcity',f.prop_name='$txtprop',f.min_price='$txtmin_price',f.max_price='$txtmax_price',f.bedroom=$txtbedroom,f.min_area='$txtmin_area' ,f.max_price_sq='$txtmax_price_sq',f.status='$txtstatus',f.landmark='$txtlandmark' where f.fp_id='$txtsr' ";
	 $sqlupdate="update featureproject f set f.comp='$txtcomp',f.saddress='$txtsaddress',f.address='$txtaddress',f.city_code='$txtcity',f.prop_code='$txtprop',f.min_price='$txtmin_price' ,f.max_price='$txtmax_price' ,f.bedroom='$txtbedroom',f.min_area='$txtmin_area',f.max_price_sq='$txtmax_price_sq',f.status='$status',f.landmark='$txtlandmark' where f.fp_id='$txtsr'";
	 $resup=mysqli_query($con,$sqlupdate);
	 echo"update succefully";
}

 if(isset($_POST['btndelete']))
 {
	 extract($_POST);
     $sqldelete="delete from featureproject  where fp_id='$txtsr'";	 
	 $resdelete=mysqli_query($con,$sqldelete) or die("not connected");
	 echo "Delete Successfully";
	 header("Location:feature.php");
}

$sql="select * from featureproject";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
?>
<table width="1064" align="center" border="1">
<thead>
<tr>
<th width="41">Sr. no.</th>
<th width="68">Company name</th>
<th width="66">Short address</th>
<th width="55">Address</th>
<th width="74">Property name</th>
<th width="51">City Name</th>
<th width="79">Minimum price</th>
<th width="79">Maxmum price</th>
<th width="61">Bedroom</th>
<th width="79">Minimum Area</th>
<th width="63">Price per Sq feet</th>
<th width="69">Landmark</th>
<th width="47">Status</th>

</tr>
<?php
for($i=0;$i<$n;$i++)
{
  $row=mysqli_fetch_array($result);
  extract($row);
?>
  <tr bgcolor="#FF6600" class="td_txt">
     <td>
	  <?php echo "$fp_id"; ?>
     </td>
     <td>
	  <?php echo "$comp"; ?>
     </td>
     <td>
	  <?php echo "$saddress"; ?>
     </td>
     <td>
	  <?php echo "$address"; ?>
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
     <td>
	  <?php echo "$min_price"; ?>
     </td>
     <td>
	  <?php echo "$max_price"; ?>
     </td>
     <td>
	  <?php echo "$bedroom"; ?>
     </td>
     <td>
	  <?php echo "$min_area"; ?>
     </td>
     <td>
	  <?php echo "$max_price_sq"; ?>
     </td>
     <td>
	  <?php echo "$landmark"; ?>
     </td>
     <td>
	  <?php echo "$status"; ?>
     </td>
     <td>
     
     <?php
          echo "<a href='feature.php?fp=$fp_id&city=$city_code&prop=$prop_code' target='frm1'>Detail</a>";
	   //echo "$fp_id"; ?>
     </td> 
  </tr>
 
<?php } ?>
</thead>
</table>
<?php
 //include_once('../../data.inc');
 //extract($_GET);
 //$a=@$fp;
 //echo $a;
 if(isset($_GET['fp']))
 {
 extract($_GET);
  $sql1="select fp_id,city_name,Prop_name,comp,saddress,address,min_price,max_price,bedroom,min_area,max_price_sq,landmark,status from city_master c,property_master p,featureproject f where c.city_code=$city and p.prop_code=$prop and f.fp_id=$fp";
 $show=mysqli_query($con,$sql1);
 @$nshow=mysqli_num_rows($show);
 //for($i=0;$i<$nshow;$i++)
 {
   $row=mysqli_fetch_array($show);
   extract($row);
   $txtsr=$fp_id;
   $txtcomp=$comp;
   $txtsaddress=$saddress; 
   $txtaddress=$address;
   $txtcity=$city_name;
   $txtprop=$Prop_name;
   $txtmin_price=$min_price;
   $txtmax_price=$max_price;
   $txtbedroom=$bedroom;
   $txtmin_area=$min_area;
   $txtmax_price_sq=$max_price_sq;
   $txtstatus=$status;
   $txtlandmark=$landmark; 
 }
 }

?>

<form id="frm1" name="frm1" action="" method="post">
<table width="1000" border="1" align="center">
  <tr>
    <td width="42%">&nbsp;</td>
    <td width="47%">&nbsp;</td>
    <td width="11%">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="98%" border="0">
      <tr>
        <td width="28%">Sr. No.</td>
        <td width="72%"><label>
          <input name="txtsr" type="text" id="txtsr" value="<?php echo @$txtsr;?>" readonly="readonly" />
        </label></td>
        </tr>
      <tr>
        <td>Company name</td>
        <td><input type="text" name="txtcomp" id="txtcomp" value="<?php echo @$txtcomp; ?>" /></td>
        </tr>
      <tr>
        <td>Short address</td>
        <td><input type="text" name="txtsaddress" id="txtsaddress" value="<?php echo @$txtsaddress;?>" /></td>
        </tr>
      <tr>
        <td>Address</td>
        <td><input type="text" name="txtaddress" id="txtaddress" value="<?php echo @$txtaddress;?>" /></td>
        </tr>
      <tr>
        <td>Property name</td>
        <td><!--<input type="text" name="txtprop" id="txtprop" value="<?php //echo @$txtprop;?>" /> -->
            <?php 
	 
	 $prop=mysqli_query($con,"select prop_code,Prop_name from property_master");
	 $nprop=mysqli_num_rows($prop);
	?>
            <select name="txtprop" id="txtprop">
              <?php 
	 for($i=1;$i<$nprop;$i++)
     {
	   $rprop=mysqli_fetch_array($prop);
	
     	extract($rprop);
       echo "<option value='$i'";
	   if(@$Prop_name==@$txtprop) echo " selected ";
       echo ">$Prop_name";
       echo"</option>";
    }?>
            </select></td>
        </tr>
      <tr>
        <td>City Name</td>
        <td><!--<input type="text" name="txtcity" id="txtcity" value="<?php //echo @$txtcity;?>" /> -->
          <?php 
	
	 $city=mysqli_query($con,"select city_code,city_name from city_master");
	 $ncity=mysqli_num_rows($city);
	?>
    <select name='txtcity' id="txtcity">
    
    <?php 
	//echo "<select name='city'>";
	  for($i=1;$i<$ncity;$i++)
      {
	    $rcity=mysqli_fetch_array($city);
	
	    extract($rcity);
        echo "<option value='$i'";
        if(@$city_name==@$txtcity) echo "selected ";
	    echo ">$city_name";
        echo"</option>";
	}
	  //echo "</select>";
	?></select>

        
        </td>
        </tr>
      <tr>
        <td>Minimum price</td>
        <td><input type="text" name="txtmin_price" id="txtmin_price" value="<?php echo @$txtmin_price;?>" /></td>
        </tr>
      <tr>
        <td>Maxmum price</td>
        <td><input type="text" name="txtmax_price" id="txtmax_price" value="<?php echo @$txtmax_price;?>" /></td>
        </tr>
    </table></td>
    <td><table width="100%" border="0">
      <tr>
        <td width="28%">Bedroom</td>
        <td width="72%" colspan="2"><input type="text" name="txtbedroom" id="txtbedroom" value="<?php echo @$txtbedroom;?>"/></td>
        </tr>
      <tr>
        <td>Minimum Area</td>
        <td colspan="2"><input type="text" name="txtmin_area" id="txtmin_area" value="<?php echo @$txtmin_area;?>"/></td>
        </tr>
      <tr>
        <td>Price per Sq feet</td>
        <td colspan="2"><input type="text" name="txtmax_price_sq" id="txtmax_price_sq" value="<?php echo @$txtmax_price_sq;?>" /></td>
        </tr>
      <tr>
        <td>Landmark</td>
        <td colspan="2"><input type="text" name="txtlandmark" id="txtlandmark" value="<?php echo @$txtlandmark;?>" /></td>
        </tr>
      <tr>
        <td>Current Status</td>
        <td colspan="2"><input type="text" name="txtstatus" id="txtstatus" value="<?php echo @$txtstatus;?>" /></td>
        </tr>
      <tr>
        <td>Change Status</td>
        <td colspan="2">
           <select name="status">
             <option value="pendding">Pendding</option>
             <option value="approved">Approved</option>
             <option value="disapproved">Dis Approved</option>
           </select>
        </td>
        </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td height="34" colspan="3"><label>
          <input type="submit" name="btnupdate" id="btnupdate" value="Update" />
          <input type="submit" name="btndelete" id="btndelete" value="Delete" />
          <input type="submit" name="btnsave" id="btnsave" value="save" />
        </label></td>
        </tr>
    </table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>
<?php
if(isset($_POST["btnsave"]))
{
  extract($_POST);
 $res=mysqli_query($con,"insert into featureproject(comp,saddress,address,prop_code,city_code,min_price,max_price,bedroom,min_area,max_price_sq,landmark,status) values('$txtcomp','$txtsaddress','$txtaddress','$txtprop','$txtcity','$txtmin_price','$txtmax_price','$txtbedroom','$txtmin_area','txtmax_price_sq','$txtlandmark','$status')") or die("unable to connect table featureprojec");
 header("Location:feature.php");
}


?>
</body>
</html>