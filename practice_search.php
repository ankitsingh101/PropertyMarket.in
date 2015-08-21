<?php
include_once("data.inc");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style/searchresult.css" rel="stylesheet" type="text/css" />
<link href="style/value/slider3.css" rel="stylesheet" />
<link href="style/value/slider4.css" rel="stylesheet" />
<link href="style/value/slider5.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="js/value/mootools12_all_p.js"></script>
<script language="javascript" type="text/javascript" src="js/value/slider.js"></script>
<script language="javascript" type="text/javascript" src="js/search_sliderui.js"></script>
</head>

<body>
<?php
/*$n=10;
$count=1;
for($i=1;$i<=$n;$i++)
{
  echo "rohit           ";
  $c=$count%3;
  if($c==0)
  {
	 echo "<br/>";  
  }
  $count++;
}*/
?>
<div id="wrapper">
    <div id="header_line">
        <div id="header_inline"></div>
    </div>
  	<div id="mid_container">
    	<div id="left_sidebar">
        	<div id="left_sidebar_inside">
        	  <div id="search_result_found"></div>
              <div id="search_left_sidebar_top"></div>
              <div id="search_background">
                <div id="search_logo"><img src="images/about_us_prop_logo.png" width="207" height="114" /></div>
                
                <div id="sr_menu">
                	<div id="sr_resi_btn">
                    <input name="" type="submit" value="Residential" />
                 	</div>
                    <div id="sr_comm_btn">
                     <input name="" type="submit"  value="Commercial"/>    
                 	</div>
                </div>
                <div style="height:26px; width:218px;background:url(images/search_logo.png);float:left"><br/>
                </div>
                <div id="search_mid_menu">
                	<div id="search_mid_buy"><input name="" type="submit" value="Buy"/></div>
                    <div id="search_mid_rent">
                       <input name="" type="submit" value="Rent-Lease" />
                    </div>
                </div>
                <form action="" method="post" target="_parent">
                <div id="back_ground">
                 <br/>
                </div>
                
              	<div id="location_div">
                <input name="" type="text" />
                </div>
                <div id="search_slider_budget_div">
                Budget
                </div>
                <div id="search_slider_container_insider">
 <div class="slider_outer3">
  <div class="slide_container3">
   <div id="slider_minmax_min3" class="floatl3 fontblue3"></div> 
    <div class="slider_gutter3" id="minmax_slider3" >
      <div id="slider_minmax_gutter_l3" class="slider_gutter_item3 iconsprite_controls3"></div>
        <div id="slider_minmax_gutter_m3" class="slider_gutter_item gutter3 iconsprite_controls3">   
            <img id="slider_bkg_img3" src="images/value/bkg_slider.gif"/>
            <div id="slider_minmax_minKnobA3" class="knob3"></div>
            <div id="slider_minmax_maxKnobA3" class="knob3"></div> 
      	</div>
      <div id="slider_minmax_gutter_r3" class="slider_gutter_item3 iconsprite_controls3"> </div>
    </div>
    <div id="slider_minmax_max3" class="floatl3 fontblue3"></div>
    <div class="clearfix3"></div>
  </div>
  </div> 

          </div>
          <div id="budget_input_div">
                <input name="txt_min1"" type="text" class="bedroommin" id="txt_min1"" value="" maxlength="1" />
                <input type="text" class="bedroommax" maxlength="2"  id="txt_max1" name="txt_max1"/>
          </div>
          <div id="search_slider_surface_div">
                Surface m<sup>2</sup>
                </div>
                    <div id="search_slider_container_insider">
 <div class="slider_outer4">
  <div class="slide_container4">
   <div id="slider_minmax_min4"  class="floatl4 fontblue4"></div> 
    <div class="slider_gutter4" id="minmax_slider4" >
      <div id="slider_minmax_gutter_l4" class="slider_gutter_item4 iconsprite_controls4"></div>
        <div id="slider_minmax_gutter_m4" class="slider_gutter_item gutter4 iconsprite_controls4">   
            <img id="slider_bkg_img4" src="images/value/bkg_slider.gif"/>
            <div id="slider_minmax_minKnobA4" class="knob4"></div>
            <div id="slider_minmax_maxKnobA4" class="knob4"></div> 
      	</div>
      <div id="slider_minmax_gutter_r4" class="slider_gutter_item4 iconsprite_controls4"> </div>
    </div>
    <div id="slider_minmax_max4" class="floatl4 fontblue4"></div>
    <div class="clearfix4"></div>
  </div>
  </div>

          </div>
          <div id="budget_input_div">
                <input name="txt_min1"" type="text" class="bedroommin" id="txt_min1"" value="" maxlength="1" />
                <input type="text" class="bedroommax" maxlength="2"  id="txt_max1" name="txt_max1"/>
          </div>
          <div id="search_slider_budget_div">
                Bedrooms
                </div>
                <div id="search_slider_container_insider">
  <div class="slider_outer5">
  <div class="slide_container5">
   <div id="slider_minmax_min5"  class="floatl5 fontblue5"></div> 
    <div class="slider_gutter5" id="minmax_slider5" >
      <div id="slider_minmax_gutter_l5" class="slider_gutter_item5 iconsprite_controls5"></div>
        <div id="slider_minmax_gutter_m5" class="slider_gutter_item gutter5 iconsprite_controls5">   
            <img id="slider_bkg_img5" src="images/value/bkg_slider.gif"/>
            <div id="slider_minmax_minKnobA5" class="knob5"></div>
            <div id="slider_minmax_maxKnobA5" class="knob5"></div> 
      	</div>
      <div id="slider_minmax_gutter_r5" class="slider_gutter_item5 iconsprite_controls5"> </div>
    </div>
    <div id="slider_minmax_max5" class="floatl5 fontblue5"></div>
    <div class="clearfix5"></div>
  </div>
  </div>
          </div>
          <div id="budget_input_div">
                <input name="txt_min1"" type="text" class="bedroommin" id="txt_min1"" value="" maxlength="1" />
                <input type="text" class="bedroommax" maxlength="2"  id="txt_max1" name="txt_max1"/>
          </div>
          <div id="search_btn">
          	<input name="" type="submit" value="Search" />
          </div>
          <div id="map_gallery">
            <div id="down_toggle_text">
				Map
            </div> 
            <div id="down_toggle_text_right">
				Gallery
            </div> 
          </div>
              </form> 
              <div id="down_siderbar">
              </div>  
              </div> 
                 	
        </div>
       
  </div>
   <div id="search_result_container">
   <?php    
	  if(isset($_POST['btnsearch']))
	 {
	   extract($_POST);
	   if($rdotype1=="Buy")
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
	   }
	   else
	   {
          $count=1; 
          for($i=0;$i<$n;$i++)
		  {
			$row=mysqli_fetch_array($res);
			extract($row);
			 echo "     <div id='result_right'>
           <div id='result_box'>
             <div id='result_box_top'></div>
             <div id='result_box_mid'><img name='' src='' width='195' height='134' alt='' /></div>
             <div id='result_box_mid_bottom'></div>
             <div id='result_content'>
             <div>Budget</div>
             <div>Surface m<sup>2</sup></div>
             <div>Bedrooms</div>
             </div>
             <div id='result_box_bottom'></div>
           </div>    
      </div>
         ";
  $c=$count%3;
  if($c==0)
  {
	 echo "<br/>";  
  }
  $count++;
}
		  }
	  }
	   //}
//$n=10;

//for($i=1;$i<=$n;$i++)
//{
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
	   }
	   else
	   {
		  $count=1; 
          for($i=0;$i<$n;$i++)
		  {
			$row=mysqli_fetch_array($res);
			extract($row);
			 echo "     <div id='result_right'>
           <div id='result_box'>
             <div id='result_box_top'></div>
             <div id='result_box_mid'><img name='' src='' width='195' height='134' alt='' /></div>
             <div id='result_box_mid_bottom'></div>
             <div id='result_content'>
             <div>Budget</div>
             <div>Surface m<sup>2</sup></div>
             <div>Bedrooms</div>
             </div>
             <div id='result_box_bottom'></div>
           </div>    
      </div>
         ";
  $c=$count%3;
  if($c==0)
  {
	 echo "<br/>";  
  }
  $count++;
}
	   }
	   }   
		   
	   
	 }
	
?>
             </div>
      </div>
  <div style="clear:both"></div>
</div>

</body>
</html>