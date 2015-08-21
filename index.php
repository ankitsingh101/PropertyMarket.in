<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>slices</title>
<style>
  .clearfix {
	clear:both;
	display:block;
}
.text {
	color:#555555;
}
.clearfix1 {	clear:both;

	display:block;
}

</style>
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
    <!-- InstanceBeginEditable name="EditRegion1" -->
    <?php 
	//include_once("data.inc");
	  if(isset($_POST['btnsearch']))
	 {
	   extract($_POST);
       //echo $rdotype;
	   if($rdotype=="Buy")
	   {
		  $min=$txt_min*100000;
		  $max=$txt_max*100000;
		  
		  echo "$min";
		  echo "</br>";
		  echo "$max";
		  
		  $sql="select * from sell s where s.city_code=$city and s.prop_code=$prop and s.min_price>=$min and s.max_price<=$max and (s.min_bedroom>=$txt_min1 or s.max_bedroom <=$txt_max1)";
	   $res=mysqli_query($con,$sql);
	   $n=mysqli_num_rows($res);
	   if($n==0)
	   {
		 echo "no data"; 
		/* echo "</br>";
		 echo "$txt_min";
		 echo "</br>";
		 echo "$txt_max";
		 echo "</br>";
		 echo "$txt_min1";
		 echo "</br>";
		 echo "$txt_max1";
		 */
	   }
	   else
	   {
		  for($i=0;$i<$n;$i++)
		  {
			$row=mysqli_fetch_array($res);
			extract($row);
			echo "</br>";
			echo "$sell_id";
		  }
	   }
	   }
	   
	   else if($rdotype=="Rent")
	   {
		
		  $min=$txt_min*1000;
		  $max=$txt_max*1000;
		  
		  echo "$min";
		  echo "</br>";
		  echo "$max";
		  
		  $sql="select * from rent r where r.city_code=$city and r.prop_code=$prop and  r.rent_price between $min and $max and (r.min_bedroom>=$txt_min1 or r.max_bedroom <=$txt_max1)";
	   $res=mysqli_query($con,$sql);
	   $n=mysqli_num_rows($res);
	   if($n==0)
	   {
		 echo "no data"; 
		/* echo "</br>";
		 echo "$txt_min";
		 echo "</br>";
		 echo "$txt_max";
		 echo "</br>";
		 echo "$txt_min1";
		 echo "</br>";
		 echo "$txt_max1";
		 */
	   }
	   else
	   {
		  for($i=0;$i<$n;$i++)
		  {
			$row=mysqli_fetch_array($res);
			extract($row);
			echo "</br>";
			echo "$rent_id";
		  }
	   }
	   }   
		   
	   
	 }
	 /*  $sql="select * from sell s where s.city_code=$city and s.prop_code=$prop and s.min_price>=$txt_min and s.max_price<=$txt_max and s.min_bedroom>=$txt_min1 and s.max_bedroom =$txt_max1";
	   $res=mysqli_query($con,$sql);
	   $n=mysqli_num_rows($res);
	   if($n==0)
	   {
		 echo "no data"; 
		 echo "</br>";
		 echo "$txt_min";
		 echo "</br>";
		 echo "$txt_max";
		 echo "</br>";
		 echo "$txt_min1";
		 echo "</br>";
		 echo "$txt_max1";
		 
	   }
	   else
	   {
		  for($i=0;$i<$n;$i++)
		  {
			$row=mysqli_fetch_array($res);
			extract($row);
			echo "$sell_id";
		  }
	   }*/
	 
	
	?>
   <div id="flash_container">
      <div id="part1">
            <div id="flash_sideline"></div>
            <div id="mid_flash_container">
                <div id="top_flash_line"></div>
                <div id="flash_header">
                    <div class="flash_header_left"></div>
                    <div class="mid_flash_header">
                         <div class="flash_content">
                              <a href="header/LODHAGROUP.html" class="a1" target="flashframe">Lodha Group</a>
                              <a href="header/savvygroup.html" target="flashframe" class="a1" >Savvy Group </a>
                              <a href="header/UNIQUEINFRASPACE.html" target="flashframe" class="a1" >Unique Infra Space</a>
                              <a href="header/indian_eco_parks.html" target="flashframe" class="a1">Indian Eco Park</a>
                              <a href="header/paradisegroup.html" class="a1" target="flashframe">Paradise Group</a>
                              <a href="header/shikaraconstruction.html" class="a2" target="flashframe" >Shikara construction</a>
                         </div>
                    </div>
                    <div class="flash_header_right"></div>
                </div>
                <iframe src="header/LODHAGROUP.html" frameborder="0" scrolling="no" id="flashframe" name="flashframe"></iframe>
            </div>
          <div id="flash_container_right"></div>
      </div>
    <div id="flash_down"></div>
    </div>
    <div id="ankit_container">
   	  <div id="leftdiv">
    <div id="mid_adcontainer">
        <div id="ad_left">
          <div id="add_left_three">
            <img src="images/Untitled-2_43.png" width="391" height="134" /> 
          </div>
          <div id="add_right_big">
          	<img src="images/Untitled-2_41.png" width="268" height="167" />
          </div>
        </div>
    </div>
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
    <div id="search_box_conatainer">
        <div id="search_box_bg">
          <div id="search_menu_container">
               <div id="search_menu_commercial"></div>            
               <div id="search_menu_residentional"></div>
               <div id="search_menu_latestnews"></div> 
            </div>
         <div id="Search_blank_div"></div>
         <div id="search_down_menu">
            <div id="search_down_menu_buy"><label for="rdotype1">Buy<br/><br/><input name="rdotype1" id="rdotype1" type="radio" value="" /></label></div>
            <div id="search_down_menu_rent"><label for="rdotype2">Rent-Lease<br/><br/><input name="rdotype2"  id="rdotype2"type="radio" value="Rent" checked="checked" onclick="v2()" /></label></div>
            <?php 
	 $prop=mysqli_query($con,"select prop_code,prop_name from property_master");
	 $nprop=mysqli_num_rows($prop);
	?>
    <?php 
	
	 $city=mysqli_query($con,"select city_code,city_name from city_master");
	 $ncity=mysqli_num_rows($city);
	?>
         </div>
         
         <form action="practice_search.php" method="post">
         <div id="serach_textbox">
         <div id="serach_inputbox_div" style="width:197px; float:left; overflow:hidden; margin:0 10px 0 0;">
        <select name="prop" id="prop" class="location" >
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
  </div>
  <div id="trick" style="width:197px; float:left; overflow:hidden; margin:0 10px 0 0;">
  <select name="city" id="city" class="location">
    
    <?php 
	
	  for($i=1;$i<$ncity;$i++)
      {
	    $rcity=mysqli_fetch_array($city);
	
	    extract($rcity);
        echo "<option value='$i'>";
        echo "$city_name";
        echo"</option>";
      }
	  
	?>
    </select>
    </div>
    <div id="serach_inputbox_div" style="width:197px; float:left; overflow:hidden; margin:0 10px 0 0;">
    <select name="Location" type="text" class="location" onfocus="if(this.value == 'Location'){this.value = '';}" onblur="if (this.value == ''){this.value = 'Location'};" value="Location" style="float:left;padding:0 0 0 30px;"></select>   </div>    
         </div>
         <div class="float_left_clear_right"><hr/></div>
         <div id="search_slider_title">     
             <div id="search_slider_bedrooms">Bedrooms</div>        
             <div id="search_slider_budget">Budget</div>               
         </div>
         <div id="search_slider_container">
           <div id="search_slider_container_insider">
  <div class="slider_outer">
  <div class="slide_container">
   <div id="slider_minmax_min"  class="floatl fontblue"></div> 
    <div class="slider_gutter" id="minmax_slider" >
      <div id="slider_minmax_gutter_l" class="slider_gutter_item iconsprite_controls"></div>
        <div id="slider_minmax_gutter_m" class="slider_gutter_item gutter iconsprite_controls">   
            <img id="slider_bkg_img" src="images/value/bkg_slider.gif"/>
            <div id="slider_minmax_minKnobA" class="knob"></div>
            <div id="slider_minmax_maxKnobA" class="knob"></div> 
      	</div>
      <div id="slider_minmax_gutter_r" class="slider_gutter_item iconsprite_controls"> </div>
    </div>
    <div id="slider_minmax_max" class="floatl fontblue"></div>
    <div class="clearfix"></div>
  </div>
  </div>
          </div>
         <div id="search_slider_container_insider">
          <div class="slider_outer2">
  <div class="slide_container2">
   <div id="slider_minmax_min2"  class="floatl2 fontblue2"> </div> 
    <div class="slider_gutter2" id="minmax_slider2" >
      <div id="slider_minmax_gutter_l2" class="slider_gutter_item2 iconsprite_controls2"></div>
        <div id="slider_minmax_gutter_m2" class="slider_gutter_item2 gutter2 iconsprite_controls2">   
        <img id="slider_bkg_img2" src="images/value/bkg_slider.gif"/>
        <div id="slider_minmax_minKnobA2" class="knob2"></div>
        <div id="slider_minmax_maxKnobA2" class="knob2"></div> 
        </div>
      <div id="slider_minmax_gutter_r2" class="slider_gutter_item2 iconsprite_controls2"> </div>
    </div>
   <div id="slider_minmax_max2" class="floatl2 fontblue2"> </div>
   <div class="clearfix2"></div>
  </div>
        </div>
        </div>
         </div>
         <div id="search_slider_price_range">
              <div id="search_price_range" >
              <!--[if IE]>
                <input type="text" class="range_margin_min_for_ie" maxlength="8" name="txt_min" id="txt_min"/><![endif]-->
                 <!--[if !IE]><!-->
                <input type="text" class="range_margin_min" maxlength="3" name="txt_min" id="txt_min"/> <!--<![endif]-->
              </div>
              <div id="search_price_range" >
              <!--[if IE]> <input type="text" class="range_margin_max_for_ie" maxlength="10" name="txt_max" id="txt_max"/><![endif]-->
              <!--[if !IE]><!-->
                <input type="text" class="range_margin_max" maxlength="3" name="txt_max" id="txt_max"/><!--<![endif]-->
              </div>
              <!--[if IE]><input name="txt_min1"" type="text" class="bedroommin_for_ie" id="txt_min1"" value="" maxlength="1" /><![endif]--><!--[if !IE]><!-->
              <input name="txt_min1"" type="text" class="bedroommin" id="txt_min1"" value="" maxlength="1" /><!--<![endif]-->
              <!--[if IE]> <input type="text" class="bedroommax_for_ie" maxlength="2"  id="txt_max1" name="txt_max1"/><![endif]-->
              <!--[if !IE]><!-->
              <input type="text" class="bedroommax" maxlength="2"  id="txt_max1" name="txt_max1"/><!--<![endif]-->
         </div>
         <div class="float_left_clear_right"><hr/></div>
         <div id="checkbox_container">
            <div id="postedby">
            Posted By
            </div>
              <div id="checkbox_arrow_container">
                    <div id="checkbox_container_inside">
                        <div id="individual">
                            <div class="checkbox_label">
                                <label for="ind">Individual</label>
                            </div>
                            <input name="individual" type="checkbox" value="" class="styled" id="ind"/>
                        </div>
                        <div id="builder">
                            <div class="checkbox_label">
                                <label for="build">Builder</label>
                            </div>
                            <input name="build" id="build" type="checkbox" class="styled" value="" />
                        </div>
                        <div id="agent_checkbox">
                            <div class="checkbox_label">
                                <label for="Agent">Agent </label>
                            </div>
                            <input name="Agent" id="Agent" type="checkbox" class="styled" value="" />
                        </div>
                        <div id="all_checkbox">
                            <div class="checkbox_label">
                                <label for="All">All </label>
                            </div>
                        <input name="All" id="All" type="checkbox" class="styled" value="" />
                        </div>
                    </div>
                    <input type="submit" class="search_button"  value=""/>                    
                </div>                
         </div>
         </form>
        </div>
    </div>
    <div id="add_skyscaper"></div>
    <div id="featured_project"></div>
    <div id="featured_project_content">    
<div id="main_featured_content">
<div id="maanja" style="float: left; width: 220px;">
  <div id="main_feature">
   <?php
 //include_once('data.inc');
$scity=mysqli_query($con,"select distinct(c.city_name),f.city_code from city_master c,featureproject f where c.city_code=f.city_code and c.city_code=1");
$ncity=mysqli_num_rows($scity);

for($j=0;$j<$ncity;$j++)
{
  $rcity=mysqli_fetch_array($scity);

  extract($rcity);
?><?php
  echo "<div class='city'>"."$city_name"."</div>"; 
  //$prop=mysqli_query($con,"select distinct(p.Prop_name),f.prop_code from property_master p,featureproject f where f.prop_code=p.prop_code");  
  $prop=mysqli_query($con,"SELECT DISTINCT (f.city_code), Prop_name,f.prop_code FROM property_master p, featureproject f, city_master c WHERE f.city_code = $city_code AND p.prop_code = f.prop_code");
  $nprop=mysqli_num_rows($prop);
  for($k=0;$k<$nprop;$k++)
  {
	$rprop=mysqli_fetch_array($prop);
	extract($rprop);
	echo "</br>";
	echo "<div class='show_property'>"."$Prop_name"."</div>";
	echo "</br>";
	$comp1=mysqli_query($con,"select distinct comp,fp_id,saddress,address,min_price,max_price,bedroom,min_area,max_price_sq from featureproject f,property_master p,city_master c where f.city_code=$city_code and f.prop_code=$prop_code");
	$ncomp=mysqli_num_rows($comp1);
	for($l=0;$l<$ncomp;$l++)
	{
	  $rcomp=mysqli_fetch_array($comp1);
	  extract($rcomp);
       	echo "<div style='height:39px;'>
				<div class='Featured_project_title'>
					$comp
				</div>";
	    echo "
				<div class='address'>
					$saddress
				</div>";
        echo "<a href='detail.php?fp=$fp_id&city=$city_code&prop=$prop_code' class='details'>"."Detail"."</a>
			  </div>";
        echo "<br />";
	  /* echo "<div class='show_detail'>";
	  echo "$address"."$min_price"."$max_price"."$bedroom"."$min_area"."$max_price_sq";
	  echo "<br/>";
	  echo "</div>";*/
	}
  }
  
}
?>A
  </div>
</div>
<div id="maanja" style="float: left; width: 230px;">
  <div id="main_feature1"><?php
$scity=mysqli_query($con,"select distinct(c.city_name),f.city_code from city_master c,featureproject f where c.city_code=f.city_code and c.city_code=2");
$ncity=mysqli_num_rows($scity);

for($j=0;$j<$ncity;$j++)
{
  $rcity=mysqli_fetch_array($scity);
  extract($rcity);?><?php
  echo "<div class='city'>"."$city_name"."</div>"; 
  //$prop=mysqli_query($con,"select distinct(p.Prop_name),f.prop_code from property_master p,featureproject f where f.prop_code=p.prop_code");  
  $prop=mysqli_query($con,"SELECT DISTINCT (f.city_code), Prop_name,f.prop_code FROM property_master p, featureproject f, city_master c WHERE f.city_code = $city_code AND p.prop_code = f.prop_code");
  $nprop=mysqli_num_rows($prop);
  for($k=0;$k<$nprop;$k++)
  {
	$rprop=mysqli_fetch_array($prop);
	extract($rprop);
	echo "<br/>";
	echo "<div class='show_property'>"."$Prop_name"."</div>";
	echo "<br/>";
	$comp1=mysqli_query($con,"select distinct comp,fp_id,saddress,address,min_price,max_price,bedroom,min_area,max_price_sq from featureproject f,property_master p,city_master c where f.city_code=$city_code and f.prop_code=$prop_code");
	$ncomp=mysqli_num_rows($comp1);
	for($l=0;$l<$ncomp;$l++)
	{
	  $rcomp=mysqli_fetch_array($comp1);
	  extract($rcomp);
       	echo "<div style='height:39px;'>
				<div class='Featured_project_title'>
					$comp
				</div>";
	    echo "
				<div class='address'>
					$saddress
				</div>";
        echo "<a href='detail.php?fp=$fp_id&city=$city_code&prop=$prop_code' class='details'>"."Detail"."</a>
			  </div>";
       
	  /* echo "<div class='show_detail'>";
	  echo "$address"."$min_price"."$max_price"."$bedroom"."$min_area"."$max_price_sq";
	  echo "<br/>";
	  echo "</div>";*/
	}
  }
  
}
?>B</div>
</div>
<div id="maanja" style="float: left;">
  <div id="main_feature2"><?php
$scity=mysqli_query($con,"select distinct(c.city_name),f.city_code from city_master c,featureproject f where c.city_code=f.city_code and c.city_code=3");
$ncity=mysqli_num_rows($scity);

for($j=0;$j<$ncity;$j++)
{
  $rcity=mysqli_fetch_array($scity);
  extract($rcity);?><?php
  echo "<div class='city'>"."$city_name"."</div>"; 
  echo "</br>";
  //$prop=mysqli_query($con,"select distinct(p.Prop_name),f.prop_code from property_master p,featureproject f where f.prop_code=p.prop_code");  
  $prop=mysqli_query($con,"SELECT DISTINCT (f.city_code), Prop_name,f.prop_code FROM property_master p, featureproject f, city_master c WHERE f.city_code = $city_code AND p.prop_code = f.prop_code");
  $nprop=mysqli_num_rows($prop);
  for($k=0;$k<$nprop;$k++)
  {
	$rprop=mysqli_fetch_array($prop);
	extract($rprop);
	echo "<div class='show_property'>"."$Prop_name"."</div>";
	echo "</br>";
	$comp1=mysqli_query($con,"select distinct comp,fp_id,saddress,address,min_price,max_price,bedroom,min_area,max_price_sq from featureproject f,property_master p,city_master c where f.city_code=$city_code and f.prop_code=$prop_code");
	$ncomp=mysqli_num_rows($comp1);
	for($l=0;$l<$ncomp;$l++)
	{
	  $rcomp=mysqli_fetch_array($comp1);
	  extract($rcomp);
       	echo "<div style='height:39px;'>
				<div class='Featured_project_title'>
					$comp
				</div>";
	    echo "
				<div class='address'>
					$saddress
				</div>";
        echo "<a href='detail.php?fp=$fp_id&city=$city_code&prop=$prop_code' class=' details'>"."Detail"."</a>
			  </div>";
        echo "<br />";
	  /* echo "<div class='show_detail'>";
	  echo "$address"."$min_price"."$max_price"."$bedroom"."$min_area"."$max_price_sq";
	  echo "<br/>";
	  echo "</div>";*/
	}
  }
  
}
?>C</div>
</div>
</div>
    </div>
    <div id="featured_project_bottom"></div>
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