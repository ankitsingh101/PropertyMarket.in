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
if(isset($_GET['reg']))
 {
extract($_GET);
if(isset($_POST['btnupdate']))
 {
    //echo "btnupdate";
	extract($_POST);
	$sql_update="update sell s set s.list_type='$rdogrplistingtype' ,s.prop_code='$prop_type_code',s.prop_type='$rdogrpnrp',s.city_code='$city',s.min_area='$txtminarea',s.max_area='$txtmaxarea',s.min_price='$min_price',s.max_price='$max_price',s.sqft='$txtsqft',s.nego='$rdogrpprice',s.min_bedroom='$min_ddlbedrooms',s.max_bedroom='$max_ddlbedrooms',s.bathroom='$ddlbathroom',s.floor='$ddltotal_floor',s.possession='$ddltime_to_possession',s.construction='$ddlage_construction',s.furnished='$ddlfurnished',s.facing='$ddlfacing',s.ownership_type='$ddlownership',s.am_pb='$CheckboxGroup1', s.am_rwh='$CheckboxGroup2',s. am_club='$CheckboxGroup3', s.am_lift='$CheckboxGroup4', s.am_sp='$CheckboxGroup5', s.am_rp='$CheckboxGroup6', s.am_security='$CheckboxGroup7', s.am_gym='$CheckboxGroup8', s.am_sq='$CheckboxGroup9', s.am_vc='$CheckboxGroup10', s.am_park='$CheckboxGroup11', s.land_sm='$CheckboxGroup20',s.
 land_school='$CheckboxGroup21', s.land_hos='$CheckboxGroup22', s.land_atm='$CheckboxGroup23' where s.sell_id=$sell and s.reg_id=$reg";
	mysqli_query($con,$sql_update);
 }
 if(isset($_POST['btndelete']))
 {
	 extract($_POST);
     $sqldelete="delete from sell  where sell_id='$sell' and reg_id='$reg'";	 
	 $resdelete=mysqli_query($con,$sqldelete) or die("not connected");
	 echo "Delete Successfully";
	 header("Location:sell.php");
}
$sql="select * from city_master c,property_master p,sell s,registration r where c.city_code=$city and p.prop_code=$prop and s.sell_id=$sell and r.reg_id=$reg";
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
$rdogrpnrp=$prop_type;
echo "$rdogrpnrp";
$city_type_name=$city_name;
echo "$city_type_name";
$txtminarea=$min_area;
echo "$txtminarea";
$txtmaxarea=$max_area;
echo "$txtmaxarea";
$min_price=$min_price;
echo "$min_price";
$max_price=$max_price;
echo "$max_price";
$txtsqft=$sqft;
echo "$txtsqft";
$rdogrpprice=$nego;
echo "$rdogrpprice";
$min_ddlbedrooms=$min_bedroom;
echo "$min_ddlbedrooms";
$max_ddlbedrooms=$max_bedroom;
echo "$max_ddlbedrooms";
$ddlbathroom=$bathroom;
echo "$ddlbathroom";
$ddltotal_floor=$floor;
echo "$ddltotal_floor";
$ddltime_to_possession=$possession;
echo "$ddltotal_floor";
$ddlage_construction=$construction;
$ddlfurnished=$furnished;
$ddlfacing=$facing;
$ddlownership=$ownership_type;
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
<div id="main">
  <form id="form1" name="form1" method="post" action="">
    <table width="703" height="586" align="center" cellspacing="2">
      <tr>
        <th colspan="2" align="center">Sell  Property</th>
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
            <input type="radio" name="rdogrplistingtype" value="Basic" id="rdogrplistingtype" <?php if($rdogrplistingtype=="Basic"){echo"checked";}?>/>
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
        <td><span id="s4">dNew/Resale Property</span></td>
        <td><label>
          <input type="radio" name="rdogrpnrp" value="New Property" id="rdogrpnrp" <?php if($rdogrpnrp=="New Property"){ echo "checked";} ?> />
          New Property </label>
&nbsp;&nbsp;&nbsp;
<label>
  <input type="radio" name="rdogrpnrp" value="Resale Property" id="rdogrpnrp" <?php if($rdogrpnrp=="Resale Property"){ echo "checked";} ?> />
  Resale Property</label></td>
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
        <td height="32"><span id="s">dTotal Price (<img title="Rupee" alt="Rupee" align="absmiddle" src="http://img.makaan.com/images/rupee/11-normal-black.png" />)   (Approx.)</span></td>
        <td><select name='min_price' id="min_price">
          <option value=''>Min Price</option>
          <option value="1000000" <?php if($min_price==1000000){echo"selected";} ?>>10 Lacs</option>
          <option value="1500000" <?php if($min_price==1500000){echo"selected";} ?> >15 Lacs</option>
          <option value="2000000" <?php if($min_price==2000000){echo"selected";} ?>>20 Lacs</option>
          <option value="3000000" <?php if($min_price==3000000){echo"selected";} ?> >30 Lacs</option>
          <option value="4000000" <?php if($min_price==4000000){echo"selected";} ?> >40 Lacs</option>
          <option value="5000000" <?php if($min_price==5000000){echo"selected";} ?> >50 Lacs</option>
          <option value="6000000"  <?php if($min_price==6000000){echo"selected";} ?>>60 Lacs</option>
          <option value="7500000" <?php if($min_price==7500000){echo"selected";} ?> >75 Lacs</option>
          <option value="10000000" <?php if($min_price==10000000){echo"selected";} ?> >1 Crore</option>
          <option value="15000000" <?php if($min_price==15000000){echo"selected";} ?> >1.5 Crore</option>
          <option value="20000000" <?php if($min_price==20000000){echo"selected";} ?> >2 Crore</option>
          <option value="30000000" <?php if($min_price==30000000){echo"selected";} ?> >3 Crore</option>
          <option value="50000000" <?php if($min_price==50000000){echo"selected";} ?> >5 Crore</option>
          <option value="100000000" <?php if($min_price==100000000){echo"selected";} ?> >10 Crore</option>
          <option value="200000000" <?php if($min_price==200000000){echo"selected";} ?> >&gt;20 Crore</option>
        </select>
          <select name="max_price" id="max_price" style='width:90px' >
            <option value=''>Max Price</option>
             <option value="1000000" <?php if($max_price==1000000){echo"selected";} ?>>10 Lacs</option>
          <option value="1500000" <?php if($max_price==1500000){echo"selected";} ?> >15 Lacs</option>
          <option value="2000000" <?php if($max_price==2000000){echo"selected";} ?>>20 Lacs</option>
          <option value="3000000" <?php if($max_price==3000000){echo"selected";} ?> >30 Lacs</option>
          <option value="4000000" <?php if($max_price==4000000){echo"selected";} ?> >40 Lacs</option>
          <option value="5000000" <?php if($max_price==5000000){echo"selected";} ?> >50 Lacs</option>
          <option value="6000000"  <?php if($max_price==6000000){echo"selected";} ?>>60 Lacs</option>
          <option value="7500000" <?php if($max_price==7500000){echo"selected";} ?> >75 Lacs</option>
          <option value="10000000" <?php if($max_price==10000000){echo"selected";} ?> >1 Crore</option>
          <option value="15000000" <?php if($max_price==15000000){echo"selected";} ?> >1.5 Crore</option>
          <option value="20000000" <?php if($max_price==20000000){echo"selected";} ?> >2 Crore</option>
          <option value="30000000" <?php if($max_price==30000000){echo"selected";} ?> >3 Crore</option>
          <option value="50000000" <?php if($max_price==50000000){echo"selected";} ?> >5 Crore</option>
          <option value="100000000" <?php if($max_price==100000000){echo"selected";} ?> >10 Crore</option>
          <option value="200000000" <?php if($max_price==200000000){echo"selected";} ?> >&gt;20 Crore</option>
          </select></td>
      </tr>
      <tr>
        <td height="32">dPer Square Feet Rate.</td>
        <td><input name="txtsqft" type="text" id="txtsqft" size="25"value=" <?php echo"$txtsqft";?>"/></td>
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
        </select>  <select name="max_ddlbedrooms" id="max_ddlbedrooms">
          <option value="-1">-- Maximum Bedroom --</option>
          <option value="1" <?php if($max_ddlbedrooms==1){echo"selected";} ?>>max 1 Bedroom</option>
          <option value="2" <?php if($max_ddlbedrooms==2){echo"selected";} ?>>max 2 Bedroom</option>
          <option value="3" <?php if($max_ddlbedrooms==3){echo"selected";} ?>>max 3 Bedroom</option>
          <option value="4" <?php if($max_ddlbedrooms==4){echo"selected";} ?>>max 4 Bedroom</option>
          <option value="5" <?php if($max_ddlbedrooms==5){echo"selected";} ?>>max 5 Bedroom</option>
        </select></td>
      </tr>
    </table>
     <table width="709" height="504" align="center" cellspacing="2">
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
        <td>Total Floors in Building</td>
        <td><select name="ddltotal_floor" id="ddltotal_floor">
          <option value="">-- Total Floors in Building--</option>
          <option value = '1' <?php if($ddltotal_floor==1){echo"selected";} ?> > 1</option>
          <option value = '2' <?php if($ddltotal_floor==2){echo"selected";} ?> > 2</option>
          <option value = '3' <?php if($ddltotal_floor==3){echo"selected";} ?> > 3</option>
          <option value = '4' <?php if($ddltotal_floor==4){echo"selected";} ?> > 4</option>
          <option value = '5' <?php if($ddltotal_floor==5){echo"selected";} ?> > 5</option>
          <option value = '6' <?php if($ddltotal_floor==6){echo"selected";} ?> > 6</option>
          <option value = '7' <?php if($ddltotal_floor==7){echo"selected";} ?> > 7</option>
          <option value = '8' <?php if($ddltotal_floor==8){echo"selected";} ?> > 8</option>
          <option value = '9' <?php if($ddltotal_floor==10){echo"selected";} ?> > 9</option>
          <option value = '10' <?php if($ddltotal_floor==11){echo"selected";} ?> > 10</option>
          <option value = '11' <?php if($ddltotal_floor==12){echo"selected";} ?> > 11</option>
          <option value = '12' <?php if($ddltotal_floor==13){echo"selected";} ?> > 12</option>
          <option value = '13' <?php if($ddltotal_floor==14){echo"selected";} ?> > 13</option>
          <option value = '14' <?php if($ddltotal_floor==15){echo"selected";} ?> > 14</option>
          <option value = '15' <?php if($ddltotal_floor==16){echo"selected";} ?> > 15</option>
          <option value = '16' <?php if($ddltotal_floor==17){echo"selected";} ?> > 16</option>
          <option value = '17' <?php if($ddltotal_floor==18){echo"selected";} ?> > 17</option>
          <option value = '18' <?php if($ddltotal_floor==19){echo"selected";} ?> > 18</option>
          <option value = '19' <?php if($ddltotal_floor==20){echo"selected";} ?> > 19</option>
          <option value = '20' <?php if($ddltotal_floor==21){echo"selected";} ?> > 20</option>
          <option value = '21'  <?php if($ddltotal_floor==22){echo"selected";} ?> > 21</option>
          <option value = '22'  <?php if($ddltotal_floor==22){echo"selected";} ?> > 22</option>
          <option value = '23'  <?php if($ddltotal_floor==23){echo"selected";} ?> > 23</option>
          <option value = '24'  <?php if($ddltotal_floor==24){echo"selected";} ?> > 24</option>
          <option value = '25'  <?php if($ddltotal_floor==25){echo"selected";} ?> > 25</option>
          <option value = '26'  <?php if($ddltotal_floor==26){echo"selected";} ?> > 26</option>
          <option value = '27'  <?php if($ddltotal_floor==27){echo"selected";} ?> > 27</option>
          <option value = '28'  <?php if($ddltotal_floor==28){echo"selected";} ?> > 28</option>
          <option value = '29'  <?php if($ddltotal_floor==29){echo"selected";} ?> > 29</option>
          <option value = '30'  <?php if($ddltotal_floor==30){echo"selected";} ?> > 30</option>
          <option value = '31'  <?php if($ddltotal_floor==31){echo"selected";} ?> > 31</option>
          <option value = '32'  <?php if($ddltotal_floor==32){echo"selected";} ?> > 32</option>
          <option value = '33'  <?php if($ddltotal_floor==33){echo"selected";} ?> > 33</option>
          <option value = '34'  <?php if($ddltotal_floor==34){echo"selected";} ?> > 34</option>
          <option value = '35'  <?php if($ddltotal_floor==35){echo"selected";} ?> > 35</option>
          <option value = '36'  <?php if($ddltotal_floor==36){echo"selected";} ?> > 36</option>
          <option value = '37'  <?php if($ddltotal_floor==37){echo"selected";} ?> > 37</option>
          <option value = '38'  <?php if($ddltotal_floor==38){echo"selected";} ?> > 38</option>
          <option value = '39'  <?php if($ddltotal_floor==39){echo"selected";} ?> > 39</option>
          <option value = '40'  <?php if($ddltotal_floor==40){echo"selected";} ?> > 40</option>
          <option value='41'  <?php if($ddltotal_floor==41){echo"selected";} ?> >More than 40</option>

        </select></td>
      </tr>
      <tr>
      <td>Time to possession</td>
      
      <td><select name="ddltime_to_possession" id="ddltime_to_possession">
        <option value="">---- Time to Possession ----</option>
        <option value='3' <?php if($ddltime_to_possession==3){echo"selected";} ?> >Ready to move-in</option>
						<option value='4'  <?php if($ddltime_to_possession==4){echo"selected";} ?> >30 - 60 days</option>
						<option value='5'  <?php if($ddltime_to_possession==5){echo"selected";} ?> >More than 60 days</option>
      </select>
      </td>
      </tr>
      <tr>
        <td><span id="s15">Age of Construction</span></td>
        <td><select name="ddlage_construction" id="ddlage_construction">
          <option value="">----Age of Construction-----</option>
					<option value='0'  <?php if($ddlage_construction==0){echo"selected";} ?>  >Under Construction</option>
					<option value='1'  <?php if($ddlage_construction==1){echo"selected";} ?>>New - Ready to move-in</option>
					<option value='2' <?php if($ddlage_construction==2){echo"selected";} ?> >0 - 2 Years old</option>
					<option value='4'  <?php if($ddlage_construction==4){echo"selected";} ?>>2 - 5 Years old</option>
					<option value='5'  <?php if($ddlage_construction==5){echo"selected";} ?>>5 - 10 Years old</option>
					<option value='15'  <?php if($ddlage_construction==15){echo"selected";} ?>>10 - 15 Years old</option>
					<option value='20'  <?php if($ddlage_construction==20){echo"selected";} ?>>15 - 20 Years old</option>
					<option value='21'  <?php if($ddlage_construction==21){echo"selected";} ?>>More than 20 Years old</option>

        </select></td>
      </tr>
      <tr>
        <td><span id="s17">Furnished</span></td>
        <td><select name="ddlfurnished" id="ddlfurnished">
          <option value="">------ Select furnishing -----</option>
					<option value='Unfurnished'  <?php if($ddlfurnished=="Unfurnished"){echo"selected";} ?> >Unfurnished</option>
					<option value='Semi-furnished' <?php if($ddlfurnished=="Semi-furnished"){echo"selected";} ?> >Semi-furnished</option>
					<option value='Furnished' <?php if($ddlfurnished=="Furnished"){echo"selected";} ?>  >Furnished</option>

        </select></td>
      </tr>
      <tr>
        <td><span id="s18">Facing</span></td>
        <td><select name="ddlfacing" id="ddlfacing">
          <option value="">------ Select direction -------</option>
					<option value='East' <?php if($ddlfacing=="East"){echo"selected";} ?> >East</option>
					<option value='North East'  <?php if($ddlfacing=="North East"){echo"selected";} ?> >North East</option>
					<option value='North' <?php if($ddlfacing=="North"){echo"selected";} ?> >North</option>
					<option value='North West' <?php if($ddlfacing=="North West"){echo"selected";} ?> >North West</option>
					<option value='West' <?php if($ddlfacing=="West"){echo"selected";} ?> >West</option>
					<option value='South West' <?php if($ddlfacing=="South West"){echo"selected";} ?> >South West</option>
					<option value='South' <?php if($ddlfacing=="South"){echo"selected";} ?> >South</option>
					<option value='South East' <?php if($ddlfacing=="South East"){echo"selected";} ?> >South East</option>

        </select></td>
      </tr>
      <tr>
        <td><span id="s19">Ownership Type</span></td>
        <td><select name="ddlownership" id="ddlownership">
          <option value="">-- Select Ownership Type---</option>
          <option value="1" <?php if($ddlownership==1){echo"selected";} ?>  >Freehold</option>
          <option value="2" <?php if($ddlownership==2){echo"selected";} ?>  >Leasehold</option>
          <option value="3" <?php if($ddlownership==3){echo"selected";} ?>  >Power of Attorney</option>
          <option value="4" <?php if($ddlownership==4){echo"selected";} ?>  >Co-Operative Society</option>
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
          <input name="fileupload" type="file" id="fileupload" size="45" value="<?php echo"$fileupload";?>" /></td>
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
</div>

<?php
/*include_once("data.inc");
$reg=$_SESSION['reg'];
/*if(!isset($_SESSION['mno']))
{
	header("Location:sellproperty_1.php");
}*/
 /*if(isset($_POST['btnsubmit']))
 {
	 extract($_POST);
$sql=
"INSERT INTO propertymarket.sell 
(reg_id,list_type, prop_code, prop_type, city_code, min_area, max_area, min_price, max_price,
sqft, nego, min_bedroom, max_bedroom, bathroom, floor, possession, construction, furnished, facing, ownership_type,
 am_pb, am_rwh, am_club, am_lift, am_sp, am_rp, am_security, am_gym, am_sq, am_vc, am_park, land_sm,
 land_school, land_hos, land_atm, upload_img, desc)
 VALUES ('$reg','$rdogrplistingtype', '$prop_type', '$rdogrpnrp', '$city', '$txtminarea', '$txtmaxarea', '$min_price', '$max_price', '$txtsqft', '$rdogrpprice', '$min_ddlbedrooms', '$max_ddlbedrooms', '$ddlbathroom', '$ddltotal_floor', '$ddltime_to_possession', '$ddlage_construction', '$ddlfurnished', '$ddlfacing', '$ddlownership', '$CheckboxGroup1', '$CheckboxGroup2', '$CheckboxGroup3', '$CheckboxGroup4', '$CheckboxGroup5',
'$CheckboxGroup6', '$CheckboxGroup7', '$CheckboxGroup8', '$CheckboxGroup9', '$CheckboxGroup10', '$CheckboxGroup11', '$CheckboxGroup20', '$CheckboxGroup21', '$CheckboxGroup22', '$CheckboxGroup23', '$fileupload', '$txtdescrption')";
mysqli_query($con,$sql);
 }*/
?> 
</body>
</html>