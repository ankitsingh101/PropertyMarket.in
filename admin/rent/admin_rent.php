<?php
include_once('../../data.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_GET['reg']))
 {
extract($_GET);
if(isset($_POST['btnupdate']))
 {
    //echo "btnupdate";
	extract($_POST);
	$sql_update="update rent re set re.list_type='$rdogrplistingtype' ,re.prop_code='$prop_type_code',re.city_code='$city',re.min_area='$txtminarea',re.max_area='$txtmaxarea',re.rent_price='$txtrent_price',re.nego='$rdogrpprice',re.min_bedroom='$min_ddlbedrooms',re.max_bedroom='$max_ddlbedrooms',re.bathroom='$ddlbathroom',re.am_pb='$CheckboxGroup1', re.am_rwh='$CheckboxGroup2',re. am_club='$CheckboxGroup3', re.am_lift='$CheckboxGroup4', re.am_sp='$CheckboxGroup5', re.am_rp='$CheckboxGroup6', re.am_security='$CheckboxGroup7', re.am_gym='$CheckboxGroup8', re.am_sq='$CheckboxGroup9', re.am_vc='$CheckboxGroup10', re.am_park='$CheckboxGroup11', re.land_sm='$CheckboxGroup20',re.land_school='$CheckboxGroup21', re.land_hos='$CheckboxGroup22', re.land_atm='$CheckboxGroup23' where re.rent_id=$rent and re.reg_id=$reg";
	mysqli_query($con,$sql_update);
 }
 if(isset($_POST['btndelete']))
 {
	 extract($_POST);
     $sqldelete="delete from rent  where rent_id='$rent' and reg_id='$reg'";	 
	 $resdelete=mysqli_query($con,$sqldelete) or die("not connected");
	 echo "Delete Successfully";
	 header("Location:rent.php");
}
$sql="select * from city_master c,property_master p,rent re,registration r where c.city_code=$city and p.prop_code=$prop and re.rent_id=$rent and r.reg_id=$reg";
$show=mysqli_query($con,$sql);
 @$nshow=mysqli_num_rows($show);
 /* reg_id,list_type, prop_code, prop_type, city_code, min_area, max_area, min_price, max_price,
sqft, nego, min_bedroom, max_bedroom, bathroom, floor, possession, construction, furnished, facing, ownership_type,
 am_pb, am_rwh, am_club, am_lift, am_sp, am_rp, am_security, am_gym, am_sq, am_vc, am_park, land_sm,
 land_school, land_hos, land_atm, upload_img, desc*/
 
$row=mysqli_fetch_array($show);
   extract($row);
   //echo "$reg_id";
$reg1=$reg_id; 
echo "$reg1";
$rdogrplistingtype=$list_type;
echo "$rdogrplistingtype";
$prop_type_name=$Prop_name;
echo"$prop_type_name";
$city_type_name=$city_name;
echo "$city_type_name";
$txtminarea=$min_area;
echo "$txtminarea";
$txtmaxarea=$max_area;
echo "$txtmaxarea";
$txtrent_price=$rent_price;
echo "$txtrent_price";
$rdogrpprice=$nego;
echo "$rdogrpprice";
$min_ddlbedrooms=$min_bedroom;
echo "$min_ddlbedrooms";
$max_ddlbedrooms=$max_bedroom;
echo "$max_ddlbedrooms";
$ddlbathroom=$bathroom;
echo "$ddlbathroom";
$CheckboxGroup1=$am_pb;
$CheckboxGroup2=$am_rwh;
//echo"$CheckboxGroup2";
$CheckboxGroup3=$am_club;
$CheckboxGroup4=$am_lift;
$CheckboxGroup5=$am_sp;
$CheckboxGroup6=$am_rp;
$CheckboxGroup7=$am_security;
$CheckboxGroup8=$am_gym;
$CheckboxGroup9=$am_sq;
$CheckboxGroup10=$am_vc;
$CheckboxGroup11=$am_park;
$CheckboxGroup20=$land_sm;
$CheckboxGroup21=$land_school;
$CheckboxGroup22=$land_hos;
$CheckboxGroup23=$land_atm;
$fileupload=$upload_img;
//echo "$fileupload";
$txtdescrption=$desc;

}
 
 ?>
<form id="form1" name="form1" method="post" action="">
  <table width="703" height="586" align="center" cellspacing="2">
      <tr>
        <th colspan="2" align="center">Rent  Property</th>
      </tr>
      <tr>
        <td width="265" height="21"></td>
        <td width="426">&nbsp;</td>
      </tr>
      <tr>
        <td>Listing Type</td>
        <td><p>
          <label>
            <input name="rdogrplistingtype" type="radio" id="rdogrplistingtype" value="Fast Response" <?php if($rdogrplistingtype=="Fast Response"){echo"checked";}?>/>
            Fast Response ( 1099) </label> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input name="rdogrplistingtype" type="radio" id="rdogrplistingtype" value="Basic" <?php if($rdogrplistingtype=="Basic"){echo"checked";}?>/>
            Basic ( 599)</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td><span id="s3">Property Type </span></td>
        <td><p>
          <?php 
	 $prop=mysqli_query($con,"select prop_code,prop_name from property_master");
	 $nprop=mysqli_num_rows($prop);
	?>
          <select name="prop_type_code" id="prop_type_code">
            <?php 
	 for($i=1;$i<$nprop;$i++)
     {
	   $rprop=mysqli_fetch_array($prop);
	
     	extract($rprop);
       echo "<option value='$i'";
       if($prop_name==$prop_type_name) echo "selected";
	   echo ">$prop_name";
      echo"</option>";
    }?>
          </select>
          <br />
        </p></td>
      </tr>
      <tr>
        <td><span id="s6">City </span></td>
        <td><?php 
	
	 $city=mysqli_query($con,"select city_code,city_name from city_master");
	 $ncity=mysqli_num_rows($city);
	?>
    <select name='city'>
    
    <?php 
	//echo "<select name='city'>";
	  for($i=1;$i<$ncity;$i++)
      {
	    $rcity=mysqli_fetch_array($city);
	
	    extract($rcity);
        echo "<option value='$i'";
		if($city_name==$city_type_name) echo "selected";
        echo ">$city_name";
        echo"</option>";
      }
	  //echo "</select>";
	?></select></td>
      </tr>
      <tr>
        <td height="40"><span id="s8">Area <br />
        (As in property document) </span></td>
        <td><p>
          <input name="txtminarea" type="text" id="txtminarea" size="25" value="<?php echo"$txtminarea"?>" />
          (Minimum Area)</p>
          <p>
            <input name="txtmaxarea" type="text" id="txtmaxarea" size="25" value="<?php echo"$txtmaxarea"?>"/>
        (Maximum Area)</p></td>
      </tr>
      <tr>
        <td height="32"><span id="s">Rent  Price (<img title="Rupee" alt="Rupee" align="absmiddle" src="http://img.makaan.com/images/rupee/11-normal-black.png" />)   (Approx.)</span></td>
        <td><input name="txtrent_price" type="text" id="txtrent_price" size="25" value="<?php echo "$txtrent_price";?>" /></td>
      </tr>
      <tr>
        <td><p><span id="smsg">Total Price (In Words)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Is&nbsp;the price negotiable ? </p></td>
        <td><p>
          <label>
            <input type="radio" name="rdogrpprice" value="yes" id="rdogrpprice"<?php if($rdogrpprice=="yes"){ echo "checked";} ?>  />
            Yes</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="rdogrpprice" value="no" id="rdogrpprice"<?php if($rdogrpprice=="no"){ echo "checked";} ?> />
            No</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><div id="div_show_price"><strong>Rate (Price / Area)</strong> for your property is <strong><img title="Rupee" alt="Rupee" align="absmiddle" src="http://img.makaan.com/images/rupee/10-bold-orange.png" /> 0 / Unit   Area</strong></div></td>
      </tr>
      <tr>
        <td>Bedrooms <span id="sbd">(Optional)</span></td>
        <td><select name="min_ddlbedrooms" id="min_ddlbedrooms">
          <option value="-1">-- Minimum Bedroom -- </option>
        <option value="1" <?php if($min_ddlbedrooms==1){echo"selected";} ?>>min 1 Bedroom</option>
        <option value="2" <?php if($min_ddlbedrooms==2){echo"selected";} ?>>min 2 Bedroom</option>
        <option value="3" <?php if($min_ddlbedrooms==3){echo"selected";} ?>>min 3 Bedroom</option>
        <option value="4" <?php if($min_ddlbedrooms==4){echo"selected";} ?>>min 4 Bedroom</option>
        <option value="5" <?php if($min_ddlbedrooms==5){echo"selected";} ?>>min 5 Bedroom</option>
        </select>
          <select name="max_ddlbedrooms" id="max_ddlbedrooms">
          <option value="-1">-- Maximum Bedroom --</option>
          <option value="1" <?php if($max_ddlbedrooms==1){echo"selected";} ?>>max 1 Bedroom</option>
          <option value="2" <?php if($max_ddlbedrooms==2){echo"selected";} ?>>max 2 Bedroom</option>
          <option value="3" <?php if($max_ddlbedrooms==3){echo"selected";} ?>>max 3 Bedroom</option>
          <option value="4" <?php if($max_ddlbedrooms==4){echo"selected";} ?>>max 4 Bedroom</option>
          <option value="5" <?php if($max_ddlbedrooms==5){echo"selected";} ?>>max 5 Bedroom</option>
        </select></td>
      </tr>
   </table>
    <table width="713" height="504" align="center" cellspacing="2">
      <tr>
        <td width="271"><span id="s13">Bathrooms</span></td>
        <td width="426"><select name="ddlbathroom" id="ddlbathroom">
        <option>-- Number of Bathrooms --</option>
        <option value="1" <?php if($ddlbathroom==1){echo"selected";} ?> >1</option>
        <option value="2" <?php if($ddlbathroom==2){echo"selected";} ?> >2</option>
        <option value="3" <?php if($ddlbathroom==3){echo"selected";} ?> >3</option>
        <option value="4" <?php if($ddlbathroom==4){echo"selected";} ?> >4</option>
        <option value="5" <?php if($ddlbathroom==5){echo"selected";} ?> >5</option>
        <option value="6" <?php if($ddlbathroom==6){echo"selected";} ?> >6</option>
        <option value="7" <?php if($ddlbathroom==7){echo"selected";} ?> >7</option>
        <option value="8" <?php if($ddlbathroom==8){echo"selected";} ?> >8</option>
        <option value="9" <?php if($ddlbathroom==9){echo"selected";} ?> >9</option>
        <option value="10"<?php if($ddlbathroom==10){echo"selected";} ?> >10</option>
        <option value="11"<?php if($ddlbathroom==11){echo"selected";} ?>  >10+</option>
        </select></td>
      </tr>
      <tr>
        <td height="46" colspan="2" align="left" valign="top"><table width="700" cellspacing="0">
  <tr>
    <td width="155"><span id="s20"><strong>Additional Features :</strong></span> <br />
      <span id="s20a"><strong>Amenities</strong></span></td>
    <td width="169">&nbsp;</td>
    <td width="133">&nbsp;</td>
    <td width="142">&nbsp;</td>
  </tr>
  <tr>
  <td width="155"><label>
    <input type="checkbox" name="CheckboxGroup1" value="Power Backup" id="CheckboxGroup1" <?php if($CheckboxGroup1=="Power Backup"){ echo "checked";} ?>   />
    Power Backup</label>
&nbsp;</td>
    <td width="169"><label>
      <input type="checkbox" name="CheckboxGroup2" value="Rain Water Harvesting" id="CheckboxGroup2"  <?php if($CheckboxGroup2=="Rain Water Harvestin"){ echo "checked";} ?> />
      Rain Water Harvesting</label></td>
    <td width="133"><label>
      <input type="checkbox" name="CheckboxGroup3" value="Club" id="CheckboxGroup3" <?php if($CheckboxGroup3=="Club"){ echo "checked";} ?> />
      Club</label>
&nbsp;</td>
    <td width="142"><label>
      <input type="checkbox" name="CheckboxGroup4" value="Lift" id="CheckboxGroup1_4" <?php if($CheckboxGroup4=="Lift"){ echo "checked";} ?> />
      Lift</label>
      <label> &nbsp;&nbsp;</label></td>
  </tr>
  <tr>
  <td width="147" align="left">
    <label>
      <input type="checkbox" name="CheckboxGroup5" value="Swimming Pool" id="CheckboxGroup5"  <?php if($CheckboxGroup5=="Swimming Pool"){ echo "checked";} ?> />
      Swimming Pool</label>
&nbsp;</td>
    <td width="147"><label>
      <input type="checkbox" name="CheckboxGroup6" value="Reserved Parking" id="CheckboxGroup6" <?php if($CheckboxGroup6=="Reserved Parking"){ echo "checked";} ?> />
      Reserved Parking</label></td>
    <td width="147"><label>
      <input type="checkbox" name="CheckboxGroup7" value="Security" id="CheckboxGroup7" <?php if($CheckboxGroup7=="Security"){ echo "checked";} ?> />
      Security</label>
      <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
    <td width="147"><input type="checkbox" name="CheckboxGroup8" value="Gym" id="CheckboxGroup8" <?php if($CheckboxGroup8=="Gym"){ echo "checked";} ?> />
Gym </td>
  </tr>
  <tr>
    <td width="155"><label>
      <input type="checkbox" name="CheckboxGroup9" value="Servant Quarters" id="CheckboxGroup9" <?php if($CheckboxGroup9=="Servant Quarters"){ echo "checked";} ?> />
      Servant Quarters</label></td>
    <td width="169"><label>
      <input type="checkbox" name="CheckboxGroup10" value="Vaastu Compliant" id="CheckboxGroup10" <?php if($CheckboxGroup10=="Vaastu Compliant"){ echo "checked";} ?> />
      Vaastu Compliant </label></td>
    <td width="133"><label>
      <input type="checkbox" name="CheckboxGroup11" value="Park" id="CheckboxGroup11" <?php if($CheckboxGroup11=="Park"){ echo "checked";} ?> />
      Park</label>
      <label> &nbsp;</label></td>
    <td width="142">&nbsp;</td>
  </tr>
  
</table>
</td>
      </tr>
      <tr>
        <td><span id="s20b"><strong>Near Landmarks</strong></span></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="46" colspan="2"><table width='100%'  border='0' cellpadding='0' cellspacing='0'>
			<tr>
							<td width='30%'>&nbsp;
							 
							    <label>
			      <input type="checkbox" name="CheckboxGroup20" value="Shopping Mall" id="CheckboxGroup20" <?php if($CheckboxGroup20=="Shopping Mall"){ echo "checked";} ?> />
						        Shopping Mall</label>
							    
					       </td>
							<td width='23%'> <label>
							      <input type="checkbox" name="CheckboxGroup21" value="School" id="CheckboxGroup21" <?php if($CheckboxGroup21=="School"){ echo "checked";} ?> />
					        School</label></td>
							<td width='25%'> <label>
							      <input type="checkbox" name="CheckboxGroup22" value="Hospital" id="CheckboxGroup22" <?php if($CheckboxGroup22=="Hospital"){ echo "checked";} ?> />
					        Hospital</label></td>
							<td width='22%' > <label>
							      <input type="checkbox" name="CheckboxGroup23" value="ATM" id="CheckboxGroup23" <?php if($CheckboxGroup23=="ATM"){ echo "checked";} ?> />
					        ATM</label></td>
			</tr>
					</table>
</td>
      </tr>
      <tr>
        <td><span id="s2">Property Description (Min 100 chars)  </span></td>
        <td><textarea name="txtdescrption" id="txtdescrption" cols="45" rows="5" ><?php echo"$txtdescrption";?></textarea></td>
      </tr>
      <tr>
        <td height="35" colspan="2">&nbsp;&nbsp;Note: Landmarks will only be considered if they are 10kms or less.</td>
      </tr>
      <tr>
        <td height="35" colspan="2">&nbsp;Upload property image &nbsp;&nbsp;&nbsp;&nbsp;
          <input name="fileupload" type="file" id="fileupload" size="45" /></td>
      </tr>
      <tr>
       <td colspan="2">&nbsp;</td>
       
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="btnupdate" id="btnupdate" value="Update" />
          <input type="submit" name="btndelete" id="btndelete" value="Delete" /></td>
      </tr>
   </table>
  </form>
</body>
</html>