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
}
.aa {
	font-size: 18px;
}
</style>
</head>

<body>

<?php
$sql="select * from postrequirment p,registration r where p.reg_id=r.reg_id";
$result=mysqli_query($con,$sql);

$n=mysqli_num_rows($result);
/*for($i=0;$i<$n;$i++)
{
$row=mysqli_fetch_array($res);	
extract($row);
echo "$post_id";
echo "<br/>";
}*/

?>
<form method="post" action=""><br />
<table width="1204" align="center" border="1">

<thead>
<tr>
<th width="24">Sr. no.</th>
<th width="41">User Name</th>
<th width="42">City Name</th>
<th width="52">Mobile No</th>
<th width="63">Landline No</th>
<th width="39">Email</th>
<th width="53"> Type</th>
<th width="65">Property Type</th>
<th width="68">Minimum Budget</th>
<th width="72">Maximum Budget</th>
<th width="69">Edit</th>

</tr>
</thead>
<?php
for($i=0;$i<$n;$i++)
{
  $row=mysqli_fetch_array($result);
  extract($row);
?>
  <tr bgcolor="#FF6600" class="td_txt">
     <td height="22">
	  <?php echo "$post_id"; ?>
     </td>
    
     <td>
	  <?php echo "$username"; ?>
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
	  <?php echo "$mobile_no"; ?>
     </td>
          <td>
	  <?php echo "$landline"; ?>
     </td>
     
     <td>
	  <?php echo "$email"; ?>
     </td>
     
     <td>
	  <?php echo "$type"; ?>
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
	  <?php echo "$min_budget"; ?>
     </td>
     <td>
	  <?php echo "$max_budget"; ?>
     </td>
           <td>
	 <button> <?php echo "<a href='admin_post.php?reg=$reg_id&post=$post_id&city=$city_code&prop=$prop_code'>edit</a>"; ?></button>
     </td>
<?php }?>
</table>
<br />
<br />
</form>
<?php 
/*if(isset($_POST['btnproceed']))
{
  //echo "rohit";
  extract($_POST);
  
  $sql_insert="INSERT INTO registration(username, password, city_code, mobile_no, email) VALUES ( '$txtusername1', '$txtpassword1', '$city', '$txtmobile1',  '$txtemail')";
  $res=mysqli_query($con,$sql_insert);
 
  $sql_select="select * from registration where username='$txtusername1' and password='$txtpassword1' and city_code='$city' and mobile_no='$txtmobile1' and email='$txtemail'";
  $res1=mysqli_query($con,$sql_select);
  $row=mysqli_fetch_array($res1);
  extract($row);
  $sql_insert_pos="insert into postrequirment(reg_id,type,city_code,min_budget,max_budget)values('$reg_id','$rdogrptt','$city','$budget_from','$budget_to')";
  $res_insert=mysqli_query($con,$sql_insert_pos);
  //
  //echo "$reg_id";
  /*$sql_select="select * from registration where username='$txtusername1', password='$txtpassword1', city_code='$city', mobile_no='$txtmobile1', email='$txtemail'";
  $res1=mysqli_query($con,$sql_select);
 $row=mysqli_fetch_array($res1);
  extract($row);
  echo "$reg_id";*/
/*}
if(isset($_POST['btnproceed1']))
{
  //echo "rohit";
  extract($_POST);
  
  //$sql_insert="INSERT INTO registration(username, password, city_code, mobile_no, email) VALUES ( '$txtusername1', '$txtpassword1', '$city', '$txtmobile1',  '$txtemail')";
  //$res=mysqli_query($con,$sql_insert);
 
  $sql_select="select * from registration where username='$txtusername' and password='$txtpassword'";
  $res1=mysqli_query($con,$sql_select);
  $row=mysqli_fetch_array($res1);
  extract($row);
  $sql_insert_pos="insert into postrequirment(reg_id,type,city_code,min_budget,max_budget)values('$reg_id','$rdogrptt','$city','$budget_from','$budget_to')";
  $res_insert=mysqli_query($con,$sql_insert_pos);
}*/
?>
<script type="text/javascript">
              function s1()
			  {
				 var a2=document.getElementById("tab2");
				 var a1=document.getElementById("tab1");
				 a1.style.display="inline";
				 a2.style.display="none";
				 //alert("rohit")  
			  }
			  function s2()
			  {
				 
				 var a1=document.getElementById("tab1");
				 var a2=document.getElementById("tab2");
				 a1.style.display="none";
                 a2.style.display="inline";
				 //alert("Jain")  
			  }
  
</script>

</body>

</html>