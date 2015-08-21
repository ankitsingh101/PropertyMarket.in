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
  $sql="select * from registration r,postrequirment po ,city_master c,property_master p where po.post_id='$post' and r.reg_id='$reg' and c.city_code=$city and p.prop_code=$prop";
//  reg=$reg_id&post=$post_id&city=$city_code&prop=$prop_code
  $res=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($res);
  extract($row);
  $rdogrptt=$type;
 // echo "$rdogrptt";
  $prop1=$prop_code;
 // echo "$prop1";
  $city1=$city_name;
  //echo "$city1";
  //echo $reg_id;
 // echo "$post";
}
?>
<div id="main">
  <form id="form1" name="form1" method="post" action="">
    <table width="692" align="center">
      <tr>
        <td height="48" colspan="2" align="left"><h2>Post Requirement <span class="aa">and get contacted by relevant sellers</span></h2></td>
      </tr>
      <tr>
        <td width="269">&nbsp;</td>
        <td width="411">&nbsp;</td>
      </tr>
      <tr>
        <td>Transaction Type</td>
        
        <td><p>
          <label>
            <input type="radio" name="rdogrptt" value="Buy" id="rdogrptt" <?php if($rdogrptt=="Buy"){echo"checked";}?> />
            Buy</label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input name="rdogrptt" type="radio" id="rdogrptt" value="Rent" <?php if($rdogrptt=="Rent"){echo "checked";}?> />
            Rent</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td>Property type</td>
        <td>
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
	   if(@$prop_code==@$prop1) echo " selected ";
       echo ">$Prop_name";
       echo"</option>";
    }?>
  
  </select> 
        <br /></td>
      </tr>
      <tr>
        <td><label>City</label></td>
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
		if($city_name==$city1){ echo "selected" ;}
        echo ">$city_name";
        echo"</option>";
      }
	  //echo "</select>";
	?></select>
</td>
      </tr>
      <tr>
        <td>Budget</td>
        <td>
        <select name='budget_from' id="budget_from">
          <option value=''>Minimum Budget</option>
          <option value="1000000" <?php if($min_budget==1000000){echo"selected";} ?>>10 Lacs</option>
          <option value="1500000" <?php if($min_budget==1500000){echo"selected";} ?> >15 Lacs</option>
          <option value="2000000" <?php if($min_budget==2000000){echo"selected";} ?>>20 Lacs</option>
          <option value="3000000" <?php if($min_budget==3000000){echo"selected";} ?> >30 Lacs</option>
          <option value="4000000" <?php if($min_budget==4000000){echo"selected";} ?> >40 Lacs</option>
          <option value="5000000" <?php if($min_budget==5000000){echo"selected";} ?> >50 Lacs</option>
          <option value="6000000"  <?php if($min_budget==6000000){echo"selected";} ?>>60 Lacs</option>
          <option value="7500000" <?php if($min_budget==7500000){echo"selected";} ?> >75 Lacs</option>
          <option value="10000000" <?php if($min_budget==10000000){echo"selected";} ?> >1 Crore</option>
          <option value="15000000" <?php if($min_budget==15000000){echo"selected";} ?> >1.5 Crore</option>
          <option value="20000000" <?php if($min_budget==20000000){echo"selected";} ?> >2 Crore</option>
          <option value="30000000" <?php if($min_budget==30000000){echo"selected";} ?> >3 Crore</option>
          <option value="50000000" <?php if($min_budget==50000000){echo"selected";} ?> >5 Crore</option>
          <option value="100000000" <?php if($min_budget==100000000){echo"selected";} ?> >10 Crore</option>
          <option value="200000000" <?php if($min_budget==200000000){echo"selected";} ?> >&gt;20 Crore</option>
        </select>
        <!--<select name='budget_from' id='budget_from' onchange = "setBudgetFinal('1','1', 'requiremant_frm','3999999','19999','5999','1');" onBlur = "" onFocus = "" class='budget' style="height:px;font-size:px;width:89px"><option value=''>Min Price</option><option value="1000000"  >10 Lacs</option><option value="1500000"  >15 Lacs</option><option value="2000000"  >20 Lacs</option><option value="3000000"  >30 Lacs</option><option value="4000000"  >40 Lacs</option><option value="5000000"  >50 Lacs</option><option value="6000000"  >60 Lacs</option><option value="7500000"  >75 Lacs</option><option value="10000000"  >1 Crore</option><option value="15000000"  >1.5 Crore</option><option value="20000000"  >2 Crore</option><option value="30000000"  >3 Crore</option><option value="50000000"  >5 Crore</option><option value="100000000"  >10 Crore</option><option value="200000000" selected="selected"  >20 Crore</option></select> -->
          <span id="sc">&nbsp; to&nbsp;&nbsp;</span>
<select name="budget_to" id="budget_to">
            <option value=''>Max Budget</option>
             <option value="1000000" <?php if($max_budget==1000000){echo"selected";} ?>>10 Lacs</option>
          <option value="1500000" <?php if($max_budget==1500000){echo"selected";} ?> >15 Lacs</option>
          <option value="2000000" <?php if($max_budget==2000000){echo"selected";} ?>>20 Lacs</option>
          <option value="3000000" <?php if($max_budget==3000000){echo"selected";} ?> >30 Lacs</option>
          <option value="4000000" <?php if($max_budget==4000000){echo"selected";} ?> >40 Lacs</option>
          <option value="5000000" <?php if($max_budget==5000000){echo"selected";} ?> >50 Lacs</option>
          <option value="6000000"  <?php if($max_budget==6000000){echo"selected";} ?>>60 Lacs</option>
          <option value="7500000" <?php if($max_budget==7500000){echo"selected";} ?> >75 Lacs</option>
          <option value="10000000" <?php if($max_budget==10000000){echo"selected";} ?> >1 Crore</option>
          <option value="15000000" <?php if($max_budget==15000000){echo"selected";} ?> >1.5 Crore</option>
          <option value="20000000" <?php if($max_budget==20000000){echo"selected";} ?> >2 Crore</option>
          <option value="30000000" <?php if($max_budget==30000000){echo"selected";} ?> >3 Crore</option>
          <option value="50000000" <?php if($max_budget==50000000){echo"selected";} ?> >5 Crore</option>
          <option value="100000000" <?php if($max_budget==100000000){echo"selected";} ?> >10 Crore</option>
          <option value="200000000" <?php if($max_budget==200000000){echo"selected";} ?> >&gt;20 Crore</option>
          </select>
							<!--<select id="budget_to" name="budget_to" class="budget">
							  <option value=''>Max Price</option><option value="1000000"  >10 Lacs</option><option value="1500000"  >15 Lacs</option><option value="2000000"  >20 Lacs</option><option value="3000000"  >30 Lacs</option><option value="4000000"  >40 Lacs</option><option value="5000000"  >50 Lacs</option><option value="6000000"  >60 Lacs</option><option value="7500000"  >75 Lacs</option><option value="10000000"  >1 Crore</option><option value="15000000"  >1.5 Crore</option><option value="20000000"  >2 Crore</option><option value="30000000"  >3 Crore</option><option value="50000000"  >5 Crore</option><option value="100000000"  >10 Crore</option><option value="200000000" selected="selected"  >20 Crore</option>
		</select> --></td>
      </tr>
      <tr>
        <td height='34' colspan="2" align="center"><strong>User Detail</strong></td>
      </tr>
      <tr>
        <td colspan="2"><table width="691" align="center" id="tab1">
          <tr>
            <td><span id='s23'>Username </span></td>
            <td><input name='txtusername1' type='text' id='txtusername1' size="30"  value="<?php echo"$username";?>"/></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name='txtpassword1' type='text' id='txtpassword1'  size="30" value="<?php echo"$password";?>" /></td>
          </tr>
          <tr>
            <td><span id='s'> </span></td>
            <td>
              </td>
          </tr>
          <tr>
            <td><span id='s26'>Mobile Numbers</span></td>
            <td><span >Country Code &amp; Mobile</span><br />
              <input name='txtmobile1' type='text' id='txtmobile1' size="30" maxlength='10' value=" <?php echo"$mobile_no";?>" /></td>
          </tr>
          <tr>
            <td><span id='s'>Email </span></td>
            <td><input name='txtemail' type='text' id='txtemail' size="30"  maxlength='50' value=" <?php echo"$email";?>"  /></td>
          </tr>
          <tr>
            <td height='33' colspan='2' align="center"><input type='submit' name='btnproceed' id='btnproceed' value='Proceed' /></td>
          </tr>
        </table>
        <table width="691" align="center" id="tab2" style="display:none">
          <tr>
            <td height='34'>&nbsp;</td>
            <td align='center' valign='bottom' style=' color:#FF0000'>&nbsp;</td>
          </tr>
          <tr>
            <td><span id='s23'>Username </span></td>
            <td><input name='txtusername' type='text' id='txtusername' size="30" /></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name='txtpassword' type='password' id='txtpassword'  size="30"  /></td>
          </tr>
          <tr>
            <td height='33' colspan='2' align="center"><input type='submit' name='btnproceed1' id='btnproceed1' value='Proceed' /></td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
      <td colspan="2">&nbsp;</td>
      </tr>
       	</table>
  </form>
</div>

</body>
</html>