<?php error_reporting(0);
include_once("../data.inc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- TemplateBeginEditable name="doctitle" -->
<title>slices</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" type="text/css" href="http://cdn.webrupee.com/font">

    <script src=http://cdn.webrupee.com/js type=”text/javascript”></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../js/custom-form-elements.js"></script>

<script type="text/javascript" src="../lib/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.3"></script>
<script src="js/value/mootools12_all_p.js" type="text/javascript"></script>
<script src="js/value/slider.js" type="text/javascript"></script>
<script src="../js/fancyui.js" type="text/javascript"></script>
<script src="../js/sliderui.js" type="text/javascript"></script>
<link href="style/value/slider.css" rel="stylesheet" type="text/css" />
<link href="style/value/slider2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.2" media="screen" />
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<link href="../style/stylesheet.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->

<!-- TemplateEndEditable -->
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
<script src="../js/script.js"></script>
<link href="../style/menu.css" rel="stylesheet" type="text/css" />
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
  <img src="../images/home.png" width="26" height="22" style="margin:0 15px 0 0;"/>
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
        <img id="Logo" src="../images/Logo.png" width="336" height="210" alt="" />
      </div>
  		<div id="add_right"><!--Div id add_right start here -->
          <div id="add" class="add_margin">
              <a href="http://www.maninfraprojects.com" target="_blank">
           	  <img id="Header_add_01" src="../images/Header_add_01.png" width="202" height="151" alt="" />
              </a>
          </div>
          <div id="add" class="add_margin">
              <a href="http://www.veenadevelopers.com" target="_blank">
           	  <img id="Header_add_02" src="../images/Header_add_02.png" width="201" height="151" alt="" />
              </a>
          </div>
          <div id="add">
              <a href="http://www.rustomjee.com" target="_blank">
              <img src="../images/Header_add_03.png" width="201" height="151" /></a>
           </div>   
              <div id="apDiv12" style="position:absolute; left:781px; top:127px; width:196px; height:65px; z-index: 12; vertical-align: middle;">
           	<a class="iframe fancybox" href="../login.php" target="_self">
            <?php 
                 //include_once('../data.inc');
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
                <a href="../index.php" target="_self"><div id="menu_btn_home" ></div>
                </a>
                <div class="menu_spacer"></div>
                <a href="../aboutus.html"><div id="menu_btn_aboutus" ></div></a>
                <div class="menu_spacer"></div>
                <div id="menu_btn_postproperty" ></div>
                <div class="menu_spacer"></div>
                <div id="menu_btn_contactus"></div>
                <div class="menu_spacer_right"></div>
    	   </div>
           <div id="Down_space_menu"></div>
    </div><!--Div id menu_space_wrapper End here --><!--start of editable reggion-->
    <!-- TemplateBeginEditable name="EditRegion1" -->
    	rohit
    <!-- TemplateEndEditable -->
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
          <div style="float:right;width:auto;height:auto;"><img src="../images/paypal.png" width="145" height="60" /></div>
      </div>
    </div><!--Div ID Footer End-->
</div><!--Div ID Wrapper End-->
</body>
</html>