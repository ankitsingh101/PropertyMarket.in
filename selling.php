<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/aboutus.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->

<title>slices</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">

    <script src=http://cdn.webrupee.com/js type=”text/javascript”></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/custom-form-elements.js"></script>

<script type="text/javascript" src="lib/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.3"></script>
<script src="js/value/mootools12_all_p.js" type="text/javascript"></script>
<script src="js/value/slider.js" type="text/javascript"></script>
<script src="js/fancyui.js" type="text/javascript"></script>
<script src="js/sliderui.js" type="text/javascript"></script>
<link href="style/value/slider.css" rel="stylesheet" type="text/css" />
<link href="style/value/slider2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.2" media="screen" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href="style/stylesheet.css" rel="stylesheet" type="text/css" />

<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<link href="style/login.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
jQuery(function() {
if(jQuery("a.fancybox.iframe").length){
	jQuery("a.fancybox.iframe").fancybox({
	'autoScale'		:'false',
	'type'			:'iframe',
	'overflow'    : 'hidden',
	'transitionIn'	:	'elastic'
	});
}});
  jQuery("a.details").fancybox({
    'zoomSpeedIn': 300,
    'zoomSpeedOut': 300,
    'overlayShow': false,
	'type'			:'iframe',
	'transitionIn'	:	'fade'
});
</script>
<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	
</style>
<script src="js/script.js"></script>
<link href="style/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php

//echo @$_COOKIE["regco"];
if(isset($_COOKIE["regco"]))
{
  echo "devesh";
  $_SESSION["reg"]=$_COOKIE["regco"];
  $_SESSION["username"]=$_COOKIE["userco"];
  echo $_SESSION["reg"];
 //header("location:farzy.php");
}

?>
<div class="full_header_background">
  <div id="header">
  <div id="home_img">
  <img src="images/home.png" width="26" height="22" style="margin:0 15px 0 0;"/>
  </div>
  <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
   	  <ul class="art-menu">
                		<li>
                			<a href="#" class="active"><span class="l"></span><span class="r"></span><span class="t">Maharashtra </span></a>
                            <ul>
                            <li><a href="#">Pune</a></li>
                            <li><a href="#">Mumbai</a></li>
                            <li><a href="#">Nagpur</a></li>
                            </ul>
                		</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Gujrat</span></a>
                			<ul>
                				<li><a href="#">Ahmedabad </a></li>
                				<li><a href="#">Surat</a></li>
                				<li><a href="#">Vadodara</a></li>
                                <li><a href="#">Gandhinagar</a></li>
                			</ul>
                		</li>		
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Rajasthan</span></a>
                            <ul>
                            <li><a href="#">Jaipur</a></li>
                            <li><a href="#">Udaipur</a></li>
                            </ul>
                		</li>
                	</ul>
    </div>
  </div> 
</div>      
<div id="wrapper"><!--Div ID Wrapper Start -->
      <div id="logo">
        <img id="Logo" src="images/Logo.png" width="336" height="210" alt="" />
      </div>
  		<div id="add_right"><!--Div id add_right start here -->
          <div id="add" class="add_margin">
              <a href="http://www.maninfraprojects.com" target="_blank">
           	  <img id="Header_add_01" src="images/Header_add_01.png" width="202" height="151" alt="" />
              </a>
          </div>
          <div id="add" class="add_margin">
              <a href="http://www.veenadevelopers.com" target="_blank">
           	  <img id="Header_add_02" src="images/Header_add_02.png" width="201" height="151" alt="" />
              </a>
          </div>
          <div id="add">
              <a href="http://www.rustomjee.com" target="_blank">
              <img src="images/Header_add_03.png" width="201" height="151" /></a>
           </div>   
              <div id="apDiv12" style="position:absolute; left:781px; top:127px; width:196px; height:65px; z-index: 12; vertical-align: middle;">
           	<a class="iframe fancybox" href="login.php" target="_self">
            <?php 
                 //include_once('data.inc');
                 if(!isset($_SESSION['reg']))
				 {
					
					echo "<img src='images/Login_regi_menu.png' width='196' height='65' />";   
				   
				   
			     }
				 //if(isset($_SESSION['reg']))
				 else
				 {
                     echo "</br>";
					 echo "</br>";
                     echo "HI.....". $_SESSION['username'];
					 echo "</br>";
					 echo "<a href='logout.php'>LogOut</a>";
					 echo "<a href='profile.php'>My Account</a>";
				   
				 }
				?>
</a></div>          	  
    	 </div>
  		<!--Div id add_right end here -->
    <div id="menu_space_wrapper"><!--Div id menu_space_wrapper Start here -->
          <div id="menu">
                <div id="menu_in_space"></div>
                <a href="index.php" target="_self"><div id="menu_btn_home" ></div>
                </a>
                <div class="menu_spacer"></div>
                <a href="aboutus.html"><div id="menu_btn_aboutus" ></div></a>
                <div class="menu_spacer"></div>
                <div id="menu_btn_postproperty" ></div>
                <div class="menu_spacer"></div>
                <div id="menu_btn_contactus"></div>
                <div class="menu_spacer_right"></div>
    	   </div>
           <div id="Down_space_menu"></div>
    </div><!--Div id menu_space_wrapper End here --><!--start of editable reggion-->
    
    <div id="ankit_container">
   	  <div id="leftdiv">
    
    <div id="menu_down">
        <?php 
	if(!isset($_SESSION['reg']))
	{
	  echo "<a href='loginone.php?p=1'><div class='menu_down_sell'></div></a>";	
	  echo "<a href='loginone.php?p=2'><div class='menu_down_rent'></div></a>";
      echo "<a href='loginone.php?p=3'><div class='menu_down_post'></div></a>";
	 
	}
	if(isset($_SESSION['reg']))
	{
	  echo "<a href='selling.php'><div class='menu_down_sell'></div></a>";
	  echo "<a href='renting.php'><div class='menu_down_rent'></div></a>";
	  echo"<a href='post_requirement.php' target='_self'><div class='menu_down_post'></div></a>";
	  
	}
	?>
        <div class="menu_down_askanswer"></div>
        <div class="menu_down_hotdeals"></div>
        <div class="menu_down_advertise"></div>
    </div>
    <div style="clear:both">
    <!-- InstanceBeginEditable name="about" -->
     <?php
//include_once("data.inc");
if(!isset($_SESSION['reg']))
{
	header("Location:index.php");
}
 if(isset($_POST['btnsubmit']))
 {
	 extract($_POST);
	 $reg=$_SESSION["reg"];
//$sql="insert into sell(list_type, prop_code, prop_type, city_code, min_area, max_area, min_price, max_price, sqft, nego, min_bedroom, max_bedroom, bathroom, floor, possession, construction, furnished, facing, ownership_type, am_pb, am_rwh, am_club, am_lift, am_sp, am_rp, am_security, am_gym, am_sq, am_vc, am_park, land_sm, land_school, land_hos, land_atm, upload_img, desc)
//values('$rdogrplistingtype', '$prop_type',''$rdogrpnrp', '$city', '$txtminarea', '$txtmaxarea', '$min_price', '$max_area', '$txtsqft', '$rdogrpprice' ,'$min_ddlbedrooms', '$max_ddlbedrooms', '$ddlbathroom', '$ddltotal_floor', '$ddltime_to_possession' ,'$ddlage_construction' ,'$ddlfurnished' ,'$ddlfacing', '$ddlownership', '$CheckboxGroup1',	   '$CheckboxGroup2','$CheckboxGroup3','$CheckboxGroup4','$CheckboxGroup5','$CheckboxGroup6','$CheckboxGroup7','$CheckboxGroup8','$CheckboxGroup9','$CheckboxGroup10','$CheckboxGroup11','$CheckboxGroup20','$CheckboxGroup21','$CheckboxGroup22','$CheckboxGroup23','$fileupload' ,'$txtdescrption')";
$sql=
"INSERT INTO `propertymarket`.`sell` 
(reg_id,`list_type`, `prop_code`, `prop_type`, `city_code`, `min_area`, `max_area`, `min_price`, `max_price`,
`sqft`, `nego`, `min_bedroom`, `max_bedroom`, `bathroom`, `floor`, `possession`, `construction`, `furnished`, `facing`, `ownership_type`,
 `am_pb`, `am_rwh`, `am_club`, `am_lift`, `am_sp`, `am_rp`, `am_security`, `am_gym`, `am_sq`, `am_vc`, `am_park`, `land_sm`,
 `land_school`, `land_hos`, `land_atm`, `upload_img`, `desc`)
 VALUES ('$reg','$rdogrplistingtype', '$prop_type', '$rdogrpnrp', '$city', '$txtminarea', '$txtmaxarea', '$min_price', '$max_price', '$txtsqft', '$rdogrpprice', '$min_ddlbedrooms', '$max_ddlbedrooms', '$ddlbathroom', '$ddltotal_floor', '$ddltime_to_possession', '$ddlage_construction', '$ddlfurnished', '$ddlfacing', '$ddlownership', '$CheckboxGroup1', '$CheckboxGroup2', '$CheckboxGroup3', '$CheckboxGroup4', '$CheckboxGroup5',
'$CheckboxGroup6', '$CheckboxGroup7', '$CheckboxGroup8', '$CheckboxGroup9', '$CheckboxGroup10', '$CheckboxGroup11', '$CheckboxGroup20', '$CheckboxGroup21', '$CheckboxGroup22', '$CheckboxGroup23', '$fileupload', '$txtdescrption')";
mysqli_query($con,$sql);
 }
?> 
    	<div id="featured_project2">Sell your property</div>
    <div style="clear:both; color: #555555;" id="featured_project_content2">    
      <form id="form1" name="form1" method="post" action="">
        
        <table width="100%" height="586" align="center" cellspacing="0" border="0">
          <tr>
            <td width="40%" height="21"></td>
            <td width="60%" >&nbsp;</td>
            </tr>
          <tr>
            <td>Listing Type</td>
            <td><p>
              <label>
                <input type="radio" name="rdogrplistingtype" value="Fast Response" id="rdogrplistingtype" checked="checked" />
                Fast Response ( 1099) </label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="rdogrplistingtype" value="Basic" id="rdogrplistingtype" />
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
              <select name="prop_type" id="prop_type" style="width:200px;">
                <?php 
	 for($i=1;$i<$nprop;$i++)
     {
	   $rprop=mysqli_fetch_array($prop);
	
     	extract($rprop);
       echo "<option value='$i'>";
       echo "$prop_name";
      echo"</option>";
    }?>
              </select>
              <span class="selectRequiredMsg">Please select an item.</span><br />
              </p></td>
            </tr>
          <tr>
            <td><span id="s4">New/Resale Property</span></td>
            <td><label>
              <input type="radio" name="rdogrpnrp" value="New Property" id="rdogrpnrp" />
              New Property </label>
              &nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="rdogrpnrp" value="  Resale Property" id="rdogrpnrp" />
                Resale Property</label></td>
            </tr>
          <tr>
            <td><span id="s6">City </span></td>
            <td><?php 
	
	 $city=mysqli_query($con,"select city_code,city_name from city_master");
	 $ncity=mysqli_num_rows($city);
	?>
              <select name='city' style="width:200px;">
                <?php 
	//echo "<select name='city'>";
	  for($i=1;$i<$ncity;$i++)
      {
	    $rcity=mysqli_fetch_array($city);
	
	    extract($rcity);
        echo "<option value='$i'>";
        echo "$city_name";
        echo"</option>";
      }
	  //echo "</select>";
	?>
                </select></td>
            </tr>
          <tr>
            <td height="40"><span id="s8">Area <br />
              (As in property document) </span></td>
            <td><p>
              <input name="txtminarea" type="text" id="txtminarea" size="25" />
              (Minimum Area)</p>
              <p>
                <input name="txtmaxarea" type="text" id="txtmaxarea" size="25" />
                (Maximum Area)</p></td>
            </tr>
          <tr>
            <td height="32"><span id="s">Total Price (<span class="WebRupee">Rs.</span> )   (Approx.)</span></td>
            <td><select name='min_price' id="min_price">
              <option value=''>Min Price</option>
              <option value="1000000"  >10 Lacs</option>
              <option value="1500000"  >15 Lacs</option>
              <option value="2000000"  >20 Lacs</option>
              <option value="3000000"  >30 Lacs</option>
              <option value="4000000"  >40 Lacs</option>
              <option value="5000000"  >50 Lacs</option>
              <option value="6000000"  >60 Lacs</option>
              <option value="7500000"  >75 Lacs</option>
              <option value="10000000"  >1 Crore</option>
              <option value="15000000"  >1.5 Crore</option>
              <option value="20000000"  >2 Crore</option>
              <option value="30000000"  >3 Crore</option>
              <option value="50000000"  >5 Crore</option>
              <option value="100000000"  >10 Crore</option>
              <option value="200000000"  >&gt;20 Crore</option>
              </select>
              <select name="max_price" id="max_price" >
                <option value=''>Max Price</option>
                <option value="1000000"  >10 Lacs</option>
                <option value="1500000"  >15 Lacs</option>
                <option value="2000000"  >20 Lacs</option>
                <option value="3000000"  >30 Lacs</option>
                <option value="4000000"  >40 Lacs</option>
                <option value="5000000"  >50 Lacs</option>
                <option value="6000000"  >60 Lacs</option>
                <option value="7500000"  >75 Lacs</option>
                <option value="10000000"  >1 Crore</option>
                <option value="15000000"  >1.5 Crore</option>
                <option value="20000000"  >2 Crore</option>
                <option value="30000000"  >3 Crore</option>
                <option value="50000000"  >5 Crore</option>
                <option value="100000000"  >10 Crore</option>
                <option value="200000000"  >&gt;20 Crore</option>
                </select></td>
            </tr>
          <tr>
            <td height="32">Per Square Feet Rate.</td>
            <td><input name="txtsqft" type="text" id="txtsqft" size="25" /></td>
            </tr>
          <tr>
            <td><p>Is price negotiable ? </p></td>
            <td><p>
              <label>
                <input type="radio" name="rdogrpprice" value="yes" id="rdogrpprice_0" />
                Yes</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                <input type="radio" name="rdogrpprice" value="no" id="rdogrpprice_1" />
                No</label>
              <br />
              </p></td>
            </tr>
          <tr>
            <td colspan="2" align="center"><div id="div_show_price"><strong>Rate (Price / Area)</strong> for your property is <strong><span class="WebRupee">Rs.</span> 0 / Unit   Area</strong></div></td>
            </tr>
          <tr>
            <td>Bedrooms <span id="sbd">(Optional)</span></td>
            <td><select name="min_ddlbedrooms" id="min_ddlbedrooms" style="width:200px;">
              <option value="-1" selected="selected">-- Minimum Bedroom -- </option>
              <option value="1" >min 1 Bedroom</option>
              <option value="2">min 2 Bedroom</option>
              <option value="3">min 3 Bedroom</option>
              <option value="4">min 4 Bedroom</option>
              <option value="5">min 5 Bedroom</option>
              </select>
              <select name="max_ddlbedrooms" id="max_ddlbedrooms" style="width:200px;">
                <option value="-1">-- Maximum Bedroom --</option>
                <option value="1">max 1 Bedroom</option>
                <option value="2">max 2 Bedroom</option>
                <option value="3">max 3 Bedroom</option>
                <option value="4">max 4 Bedroom</option>
                <option value="5">max 5 Bedroom</option>
                </select></td>
            </tr>
          </table>
        <table width="100%" height="504" align="center" cellspacing="0" border="0">
          <tr>
            <td width="40%"><span id="s13">Bathrooms</span></td>
            <td width="60%">
              <select name="ddlbathroom" id="ddlbathroom" style="width:200px;">
                <option selected="selected" value=''>-- Number of Bathrooms --</option>
                <option value="1"  >1</option>
                <option value="2"  >2</option>
                <option value="3"  >3</option>
                <option value="4"  >4</option>
                <option value="5"  >5</option>
                <option value="6"  >6</option>
                <option value="7"  >7</option>
                <option value="8"  >8</option>
                <option value="9"  >9</option>
                <option value="10"  >10</option>
                <option value="11"  >10+</option>
                </select></td>
            </tr>
          <tr>
            <td>Total Floors in Building</td>
            <td><select name="ddltotal_floor" id="ddltotal_floor" style="width:200px;">
              <option value="">-- Total Floors in Building--</option>
              <option value = '1'> 1</option>
              <option value = '2'> 2</option>
              <option value = '3'> 3</option>
              <option value = '4'> 4</option>
              <option value = '5'> 5</option>
              <option value = '6'> 6</option>
              <option value = '7'> 7</option>
              <option value = '8'> 8</option>
              <option value = '9'> 9</option>
              <option value = '10'> 10</option>
              <option value = '11'> 11</option>
              <option value = '12'> 12</option>
              <option value = '13'> 13</option>
              <option value = '14'> 14</option>
              <option value = '15'> 15</option>
              <option value = '16'> 16</option>
              <option value = '17'> 17</option>
              <option value = '18'> 18</option>
              <option value = '19'> 19</option>
              <option value = '20'> 20</option>
              <option value = '21'> 21</option>
              <option value = '22'> 22</option>
              <option value = '23'> 23</option>
              <option value = '24'> 24</option>
              <option value = '25'> 25</option>
              <option value = '26'> 26</option>
              <option value = '27'> 27</option>
              <option value = '28'> 28</option>
              <option value = '29'> 29</option>
              <option value = '30'> 30</option>
              <option value = '31'> 31</option>
              <option value = '32'> 32</option>
              <option value = '33'> 33</option>
              <option value = '34'> 34</option>
              <option value = '35'> 35</option>
              <option value = '36'> 36</option>
              <option value = '37'> 37</option>
              <option value = '38'> 38</option>
              <option value = '39'> 39</option>
              <option value = '40'> 40</option>
              <option value='41' >More than 40</option>
              </select></td>
            </tr>
          <tr>
            <td>Time to possession</td>
            <td><select name="ddltime_to_possession" id="ddltime_to_possession" style="width:200px;">
              <option value="">---- Time to Possession ----</option>
              <option value='3' >Ready to move-in</option>
              <option value='4' >30 - 60 days</option>
              <option value='5' >More than 60 days</option>
              </select></td>
            </tr>
          <tr>
            <td><span id="s15">Age of Construction</span></td>
            <td><select name="ddlage_construction" id="ddlage_construction" style="width:200px;">
              <option value="">----Age of Construction-----</option>
              <option value='0' >Under Construction</option>
              <option value='1' >New - Ready to move-in</option>
              <option value='2' >0 - 2 Years old</option>
              <option value='5' >2 - 5 Years old</option>
              <option value='10' >5 - 10 Years old</option>
              <option value='15' >10 - 15 Years old</option>
              <option value='20' >15 - 20 Years old</option>
              <option value='21' >More than 20 Years old</option>
              </select></td>
            </tr>
          <tr>
            <td><span id="s17">Furnished</span></td>
            <td><select name="ddlfurnished" id="ddlfurnished" style="width:200px;">
              <option value="">------ Select furnishing -----</option>
              <option value='Unfurnished' >Unfurnished</option>
              <option value='Semi-furnished' >Semi-furnished</option>
              <option value='Furnished' >Furnished</option>
              </select></td>
            </tr>
          <tr>
            <td><span id="s18">Facing</span></td>
            <td><select name="ddlfacing" id="ddlfacing" style="width:200px;">
              <option value="">------ Select direction -------</option>
              <option value='East' >East</option>
              <option value='North East' >North East</option>
              <option value='North' >North</option>
              <option value='North West' >North West</option>
              <option value='West' >West</option>
              <option value='South West' >South West</option>
              <option value='South' >South</option>
              <option value='South East' >South East</option>
              </select></td>
            </tr>
          <tr>
            <td><span id="s19">Ownership Type</span></td>
            <td><select name="ddlownership" id="ddlownership" style="width:200px;">
              <option value="">-- Select Ownership Type---</option>
              <option value="1"  >Freehold</option>
              <option value="2"  >Leasehold</option>
              <option value="3"  >Power of Attorney</option>
              <option value="4"  >Co-Operative Society</option>
              </select></td>
            </tr>
          <tr>
            <td height="46" colspan="2" align="left" valign="top"><table width="700" cellspacing="0">
              <tr>
                <td width="177"><span id="s20"><strong>Additional Features:</strong></span> <br />
                  <span id="s20a"><strong>Amenities</strong></span></td>
                <td width="184">&nbsp;</td>
                <td width="164">&nbsp;</td>
                <td width="165">&nbsp;</td>
                </tr>
              <tr>
                <td width="177"><label>
                  <input type="checkbox" name="CheckboxGroup1" value="Power Backup" id="CheckboxGroup1" />
                  Power Backup</label>
                  &nbsp;</td>
                <td width="184"><label>
                  <input type="checkbox" name="CheckboxGroup2" value="Rain Water Harvesting" id="CheckboxGroup2" />
                  Rain Water &nbsp;&nbsp;&nbsp;&nbsp;Harvesting</label></td>
                <td width="164"><label>
                  <input type="checkbox" name="CheckboxGroup3" value="Club" id="CheckboxGroup3" />
                  Club</label>
                  &nbsp;</td>
                <td width="165"><label>
                  <input type="checkbox" name="CheckboxGroup4" value="Lift" id="CheckboxGroup1_4" />
                  Lift</label>
                  <label> &nbsp;&nbsp;</label></td>
                </tr>
              <tr>
                <td width="177" align="left"><label>
                  <input type="checkbox" name="CheckboxGroup5" value="Swimming Pool" id="CheckboxGroup5" />
                  Swimming Pool</label>
                  &nbsp;</td>
                <td width="184"><label>
                  <input type="checkbox" name="CheckboxGroup6" value="Reserved Parking" id="CheckboxGroup6" />
                  Reserved Parking</label></td>
                <td width="164"><label>
                  <input type="checkbox" name="CheckboxGroup7" value="Security" id="CheckboxGroup7" />
                  Security</label>
                  <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                <td width="165"><input type="checkbox" name="CheckboxGroup8" value="Gym" id="CheckboxGroup8" />
                  Gym </td>
                </tr>
              <tr>
                <td width="177"><label>
                  <input type="checkbox" name="CheckboxGroup9" value="Servant Quarters" id="CheckboxGroup9" />
                  Servant Quarters</label></td>
                <td width="184"><label>
                  <input type="checkbox" name="CheckboxGroup10" value="Vaastu Compliant " id="CheckboxGroup10" />
                  Vaastu Compliant </label></td>
                <td width="164"><label>
                  <input type="checkbox" name="CheckboxGroup11" value="Park" id="CheckboxGroup11" />
                  Park</label>
                  <label> &nbsp;</label></td>
                <td width="165">&nbsp;</td>
                </tr>
              </table></td>
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
                    <input type="checkbox" name="CheckboxGroup20" value="Shopping Mall" id="CheckboxGroup20" />
                    Shopping Mall</label></td>
                <td width='23%'><label>
                  <input type="checkbox" name="CheckboxGroup21" value="School" id="CheckboxGroup21" />
                  School</label></td>
                <td width='25%'><label>
                  <input type="checkbox" name="CheckboxGroup22" value="Hospital" id="CheckboxGroup22" />
                  Hospital</label></td>
                <td width='22%' ><label>
                  <input type="checkbox" name="CheckboxGroup23" value="ATM" id="CheckboxGroup23" />
                  ATM</label></td>
                </tr>
              </table></td>
            </tr>
          <tr>
            <td><span id="s2">Property Description <br />(Min 100 chars)  </span></td>
            <td><textarea name="txtdescrption" id="txtdescrption" cols="45" rows="5" style="width:300px;"></textarea></td>
            </tr>
          <tr>
            <td height="35" colspan="2">&nbsp;&nbsp;Note: Landmarks will only be considered if they are 10kms or less.</td>
            </tr>
          <tr>
            <td height="35" colspan="2">&nbsp;Upload property image &nbsp;&nbsp;&nbsp;&nbsp;
              <input name="fileupload" type="file" id="fileupload" size="45" style="width:200px;" /></td>
            </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
            </tr>
          </table>
        </form>
    </div>
    

    <!-- InstanceEndEditable -->
    </div>
    <div id="featured_project_bottom"></div>
    <div id="mid_adcontainer">
        <div id="ad_left">
          <div id="add_left_three"><img src="images/Untitled-2_43.png" width="391" height="134" /> 
          </div>
          <div id="add_right_big">
          	<img src="images/Untitled-2_41.png" width="268" height="167" />
          </div>
        </div>
    </div>
    </div>
    	<div id="right_div" class="float_right">
    	<div id="right_sidebar_add">
      <div id="right_sidebar_add_content">
          <div id="right_sidebar_add_image_top">
            <div id="right_sidebar_add_thumbnail" style="margin:0 12px 0 0;">
            <a href="http://www.jayceehomes.com" target="_blank"><img src="images/Untitled-2_36.png" width="125" height="128" /></a> </div>
            <div id="right_sidebar_add_thumbnail">
                <a href="http://www.satraproperties.in" target="_blank"><img id="Untitled_2_38" src="images/Untitled-2_38.png" width="125" height="128" alt="" /></a>
            </div>
          </div>
          <div id="right_sidebar_add_image_down">
            <div id="right_sidebar_add_thumbnail" style="margin:0 12px 0 0;">
                <a href="http://www.hnsafal.com"><img id="Untitled_2_46" src="images/Untitled-2_46.png" width="125" height="128" alt="" /></a>
            </div>
            <div id="right_sidebar_add_thumbnail" style="background-color:#c4c4c4;">
            <a href="http://www.acmehousing.com" target="_blank">
            <img src="images/acemeadd.png" width="125" height="128" /></a></div>
          </div>
        </div>
        <div id="right_sidebar_down"></div>
        <div id="Property_gall" ></div>
        <div id="property_gall_list">
        	  <?php 
      //include_once('data.inc');
      $sql="SELECT * FROM `propertygallery` WHERE Paid = 1";
      $res = mysqli_query($con,$sql);
      $n = mysqli_num_rows($res);
       for($i=1;$i<=$n;$i++)
       {
           $row = mysqli_fetch_array($res);
           extract($row);
           echo "<div id='property_gallery_width'>
					<div id='property_gallery_img'>
						<a href='$Url?id=$id' ><img src='gallimages/$img' width='134' height='51' border='0'/></a>
					</div>
					<div id='property_gallery_content' >
						<div id='property_gallery_title' class='title1'>
							<a href='$Url?id=$id' >$Title</a>
						</div>
						<div class='description'>
									<a>$Description</a>
						</div>     
					</div>
            	</div>
				<hr/>";
      } 
      ?>

        </div>
        <div id="property_down_bg"><a href="http://www.neumec.com" target="_blank"><img name="" src="images/neumacadd.png" width="250" height="250" alt=""  /></a><a href="http://www.spacerealtors.in" target="_blank"><img name="" src="images/addspace_retailers.png" width="250" height="250" alt="" /></a></div>
        <div id="show_more_button">
            <form action="" method="post" >          
                <input name="" type="submit"class="show_more_button_bg" value=""/>          
            </form>
        </div>
        </div>
    </div>
  </div>
    
    
  <div id="adsense_add"><!--Div ID adsense_add start it is a conatiner which contains the background of three big add bottom of the page-->
        <div id="adsense_left"></div>
        <div id="adsense_mid_container">
          <div id="adsense_top_content">
             <a href="http://www.shamiks.com" target="_blank"><img src="images/shamik's.png" width="290" height="247" /></a>
             <a href="http://www.edenhills.in" target="_blank"><img src="images/eden_hills.png" width="290" height="247" style="margin:0 10px 0 0;" /></a>
             <img src="images/down_add1.png" width="294" height="250" />
          </div>
        </div>
        <div id="adsense_right"></div>
   </div>
    
    <!--Div ID adsense_add end-->
    <!--End of editable region-->
    <div id="footer"><!--Div ID Footer start-->
        <div id="footer_container">
        <div style="float:left;width:auto;height:auto;">
            <ul>
                <div style="margin-bottom:14px;width:800px;">Our Services</div>
                <li>Search Property</li>
                <li>List Property</li>
                <li>Post free Requirement</li>
                <li>Advertise with us</li>
                <li>Ask & Answer</li>
                <li>Hot Deals</li>
                <li>Daily Real estate News</li>
            </ul>
            <ul>
                <div style="margin-bottom:14px;width:130px;">Real Estate in India</div>
                <li>Gujrat</li>
                <li>Maharastra</li>
                <li>Rajasthan</li>
            </ul>
            <ul>
                <div style="margin-bottom:14px;">Company</div>
                <li>Contact Us</li>
                <li>About Us</li>
                <li>List your Site</li>
            </ul>
            <ul>
                <div style="margin-bottom:14px;width:150px;float:left;">Privacy & Legal Terms</div>
                <li>Privacy Polices</li>
                <li>Terms of use</li>
            </ul>
          </div>
          <div style="float:right;width:auto;height:auto;"><img src="images/paypal.png" width="145" height="60" /></div>
      </div>
    </div><!--Div ID Footer End-->
</div><!--Div ID Wrapper End-->
</body>
<!-- InstanceEnd --></html>