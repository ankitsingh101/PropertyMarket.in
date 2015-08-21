<?php
include_once("data.inc");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
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

<link href="style/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="ajaxcode.js"></script>
<!-- InstanceEndEditable -->
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
</head>
<body>
<div class="full_header_background">
<div id="header"><div style="width:1024px;padding:0 0 0 20px;font-size:14px;color:#FFF;"><a href="index.php" target="_self"><img src="images/home.png" width="26" height="22" style="padding:10px 0 0 0;" /></a> Gujrat Maharastra Rajasthan</div></div> 
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
           	<a class="iframe fancybox" href="login.php" target="_self"><img src="images/Login_regi_menu.png" width="196" height="65" /></a></div>          	  
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
    <!-- InstanceBeginEditable name="EditRegion1" -->
    <div id="featured_project2">New Registration</div>
    <div id="featured_project_content2">
    <?php
//include_once("dbinfo.inc");
if(isset($_POST['btnsubmit']))
{  //$trans_type="Individual";
	extract($_POST);
	//$sql="INSERT INTO propertymarket.registration(sr_no, full_name, username, password, city_code,mob_country_code, mobile_no, area_code, landline, email,address) VALUES (NULL, '$txtname','$txtusername', '$txtpassword', '$city', '$txtmob_country_code','$txtmobile1', '$ph_area_code', '$txtphone1', '$txtemail', '$txtaddress')";
	$sql="INSERT INTO registration(trans_type,full_name, username, password, city_code,mob_country_code, mobile_no, area_code, landline, email,address) VALUES ('$rdogrpprofile', '$txtname','$txtusername', '$txtpassword', '$city', '$txtmob_country_code','$txtmobile1', '$ph_area_code', '$txtphone1', '$txtemail', '$txtaddress')";
	$res=mysqli_query($con,$sql);
	echo "<script>alert('Registration Successfully Completed');</script>";
	//$n=mysqli_num_rows($res);
	//header("Location: post_requirement.php");
}
?>
<div id="main2" style="width:710px;float:left">
  <div id="main" style="width: 710px; float: left; height: auto;">
  
 <div id="a" style="height:auto; width:710px; float:left; color: #555555;"">
 <form id="form2" name="form2" method="post" action="">
<table width="635" height="44" align="center">
      <tr>
        <td width="218" height="38"><span id="s22"><strong>Select Profile :</strong>  </span></td>
        <td width="440"><p>
          <label>
            <input name="rdogrpprofile" type="radio" id="rdogrpprofile" onclick="valid();" value="Individual" checked="checked"/>
            Individual</label>
          &nbsp;&nbsp;
          <label>
            <input type="radio" name="rdogrpprofile" value=" Agent" id="rdogrpprofile" onclick="valid1();"/></label>
          Agent  
          <label>
            &nbsp;
            <input type="radio" name="rdogrpprofile" value="Builder" id="rdogrpprofile" onclick="valid2();" /></label>
          Builder    <br />
          </p></td>
      </tr>
</table>

 <table width="691" align="center"><tr><td height='34'>&nbsp;</td>
        <td align='center' valign='bottom' style=' color:#FF0000'>All fields mandatory unless specified</td>
      </tr>
      <tr>
        <td><span id='s23'>Name </span></td>
        <td><input type='text' name='txtname' id='txtname' /></td>
      </tr>
       <tr>
        <td><span id='s23'>Username </span></td>
        <td><input name='txtusername' type='text' id='txtusername' size="30"  onkeydown="makerequest('getdetails.php?reg='+txtusername.value,'hw')" /> <div id="hw">
        
        </div></td>
       
      </tr>
      <tr>
        <td>Password</td>
        <td><input name='txtpassword' type='password' id='txtpassword'  size="30"  /></td>
      </tr>
      
      <tr>
        <td><span id='s25'>City </span></td>
        <td>
           <?php 
	
	 $city=mysqli_query($con,"select city_code,city_name from city_master order by 1");
	 $ncity=mysqli_num_rows($city);
	?>
    <select name='city'>
    
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
	?></select></td>
      </tr>
            <tr>
        <td><span id='s26'>Mobile Numbers</span></td>
        <td><span >Country Code & Mobile</span><br><input type='text' id='txtmob_country_code' name='txtmob_country_code'  style='width:30px;' value='91' maxlength='5' />
					<input type='text' id='txtmobile1' style='width:170px;' name='txtmobile1' maxlength='10' />
</td>
      </tr>
      <tr>
        <td><span id='s27'>Landline Numbers<br />
        (Optional)</span></td>
        <td><span class='smalltext'>Area Code & Landline</span><br><input type='text' name='ph_area_code' style='width:30px;'  maxlength='5' />
					<input type='text' id='txtphone1' style='width:170px;' name='txtphone1' maxlength='10' />
</td>
      </tr>
      <tr>
        <td><span id='s'>Email </span></td>
        <td><input type='text' id='txtemail' name='txtemail'  maxlength='70'  style='width:220px;'  /></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type='text' id='txtaddress' name='txtaddress'  maxlength='70'  style='width:220px;'  /></td>
      </tr>
      <tr>
        <td height='33' colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='checkbox' name='chkprivacy' id='chkprivacy' />
          &nbsp;I confirm that I have read <a href='privacy-policy.php' target='_blank'><u>Privacy Policy</u></a>&nbsp;and&nbsp;<a href='terms.php'  target='_blank'><u>Terms of Use</u></a> of Makaan.com
  </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type='submit' name='btnsubmit' id='btnsubmit' value='Submit' /></td>
      </tr></table>
    </form></div>
      
   <div id="a1"  style="visibility:hidden; height:1px ;width:710px;float:left;"></div>
   
 <div id="a2"  style="visibility:hidden; height:1px;width:710px;float:left;"></div>
  </div>

</div>
    </div>	
    <!-- InstanceEndEditable -->
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