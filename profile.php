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
$reg=$_SESSION['reg'];
//echo "$reg";
$sql="select * from registration where reg_id='$reg'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
extract($row);
$city_code_profile=$city_code;
if(isset($_POST['btnupdate']))
 {
    extract($_POST);
	//echo "btnupdate";
	$sql_update="update registration r set r.trans_type='$rdogrpprofile',r.full_name='$txtusername',r.password='$txtpassword3',r.city_code='$city',r.mob_country_code='$txtmob_country_code',r.mobile_no='$txtmobile1',r.area_code='ph_area_code',r.landline='$txtphone1',r.email='$txtemail',r.address='$txtaddress' where r.reg_id=$reg";
	mysqli_query($con,$sql_update);
	extract($_POST);
	
 }
?>
     <div id="a" style="height:auto; width:710px; float:left; color: #555555;"">
 <form id="form2" name="form2" method="post" action="">
<table width="635" height="44" align="center">
      <tr>
        <td width="218" height="38"><span id="s22"><strong>Select Profile :</strong>  </span></td>
        <td width="440"><p>
          <label>
            <input name="rdogrpprofile" type="radio" id="rdogrpprofile" onclick="valid();" <?php if($trans_type=="Individual") echo"checked";?> value="Individual" />
            Individual</label>
          &nbsp;&nbsp;
          <label>
            <input type="radio" name="rdogrpprofile" <?php if($trans_type=="Agent") echo"checked";?> id="rdogrpprofile" onclick="valid1();" value="Agent"/></label>
          Agent  
          <label>
            &nbsp;
            <input type="radio" name="rdogrpprofile" <?php if($trans_type=="Builder") echo"checked";?> id="rdogrpprofile" onclick="valid2();" value="Builder"/></label>
          Builder    <br />
          </p></td>
      </tr>
</table>

 <table width="691" align="center"><tr><td height='34'>&nbsp;</td>
        <td align='center' valign='bottom' style=' color:#FF0000'>All fields mandatory unless specified</td>
      </tr>
      <tr>
        <td><span id='s23'>Name </span></td>
        <td><input name='txtname' type='text' id='txtname' value="<?php echo "$full_name"; ?>"/></td>
      </tr>
       <tr>
        <td><span id='s23'>Username </span></td>
        <td><input name='txtusername' type='text' id='txtusername' value="<?php echo "$username"; ?>" size='30' readonly="readonly" /> </td>
       
      </tr>
       <tr>
         <td>Old Password</td>
         <td><input name='txtpassword' type='text' id='txtpassword'  size="30" readonly="readonly"  value="<?php echo "$password"; ?>" /></td>
       </tr>
       <tr>
         <td>New  Password</td>
         <td><input name='txtpassword2' type='password' id='txtpassword3'  size="30"  /></td>
       </tr>
       <tr>
         <td>Confirm Password</td>
         <td><input name='txtpassword3' type='password' id='txtpassword3'  size="30"  /></td>
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
        echo "<option value='$i'";
		if($city_code==$city_code_profile) echo "selected";
        echo ">$city_name";
        echo"</option>";
      }
	  //echo "</select>";
	?></select></td>
      </tr>
            <tr>
        <td><span id='s26'>Mobile Numbers</span></td>
        <td><span >Country Code & Mobile</span><br><input type='text' id='txtmob_country_code' name='txtmob_country_code'  style='width:30px;' maxlength='5' value="<?php echo "$mob_country_code";?>" />
					<input name='txtmobile1' type='text' id='txtmobile1' style='width:170px;' maxlength='10' value="<?php echo "$mobile_no";?>"  />
</td>
      </tr>
      <tr>
        <td><span id='s27'>Landline Numbers<br />
        (Optional)</span></td>
        <td><span class='smalltext'>Area Code & Landline</span><br><input type='text' name='ph_area_code' style='width:30px;'  maxlength='5' value="<?php echo "$area_code";?>" />
					<input name='txtphone1' type='text' id='txtphone1' style='width:170px;' maxlength='10' value="<?php echo "$landline";?>" />
</td>
      </tr>
      <tr>
        <td><span id='s'>Email </span></td>
        <td><input name='txtemail' type='text' id='txtemail'  style='width:220px;'  maxlength='70'  value="<?php echo "$email";?>"  /></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input name='txtaddress' type='text' id='txtaddress'  style='width:220px;'  maxlength='70' value="<?php echo "$address";?>"   /></td>
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
        <td><input type='submit' name='btnupdate' id='btnupdate' value='Update' /></td>
      </tr></table>
    </form></div>

	 
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