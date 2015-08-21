<?php
include_once("data.inc");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include_once('code.inc');?>
<div id="wrapper">

<table width="1024" border="1" align="center" cellpadding="10" cellspacing="10">
    <td width="500"  align="left" valign="top" bgcolor="#00FF00">
<h1>Add Property Gallery</h1>
<form action="" method="post" enctype="multipart/form-data" name="formwhere"><table width="480" border="1" style="float:left;clear:right;">
  <tr>
    <td align="left" valign="top"><label for="Title">Enter Company Name</label></td>
    <td align="left" valign="top"><input name="txttitle" id="Title" type="text" size="25" maxlength="20"/></td>
  </tr>
  <tr>
    <td align="left" valign="top"><label for="Description">Enter Address</label></td>
    <td align="left" valign="top"><input name="txtaddress" id="Description" type="text" size="25" maxlength="20"/></td>
  </tr>
  <tr>
    <td align="left" valign="top"><label for="dates">Enter Start Subscription Date</label></td>
    <td align="left" valign="top"><input name="txtstartdate" id="dates" type="text" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><label for="datee">Enter End Subscription Date</label></td>
    <td align="left" valign="top"><input name="txtenddate"  id="datee" type="text" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><label for="image">Upload Image</label></td>
    <td align="left" valign="top"><input name="uploaded_file"  type="file" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><label for="paid">Paid</label></td>
    <td align="left" valign="top"><input name="paid" type="checkbox" value="" /></td>
  </tr>
    <td align="center" valign="middle"><input name="btnadd" type="submit" value="Add" /></td>
    <td align="center" valign="middle"><input name="btnclear" type="reset" value="Clear" /></td>
  </tr>
   </tr>
    <td align="left" valign="top" colspan="2"><?php echo $msg; ?><?php echo $err; ?></td>
      </tr>
  </table>
  </form></td>
    <td width="450" align="left" valign="top" bgcolor="#FFFF00">
  
<table width="500" border="1" style="float:right;">
<tr>
<td align="left" valign="top"><b>Make Choice</b></td>
<td align="left" valign="top"><b>Compaines</b></td>
<td  align="center" valign="top"><b>Image</b></td>
<td align="center" valign="top"><b>Paid</b></td>
</tr>
<?php
 if(!isset($_POST['btnupdate']))
  {
	  $x="disabled='disabled'";
  }
  else
  {
	  $x=" ";
  }
  //include_once('data.inc');
  if(isset($_POST['btnok']))
  {
	  extract($_POST);
	  $sql1="UPDATE propertygallery set Title='$txttitle', Description='$txtdescription' where id='chkID$i"; 
	  $res = mysqli_query($con,$sql1);
  }?>
<form action="" method="post">
<h1>Delete Property Gallery</h1>
 <?php
  //include_once('data.inc');
  if(!isset($_POST['btnupdate']))
  {
	  $x="disabled='disabled'";
  }
  else
  {
	  $x=" ";
  }
  //include_once('data.inc');
  if(isset($_POST['btnok']))
  {
	  extract($_POST);
	  $sql1="UPDATE propertygallery set $Title=$txttitle $Description=$txtdescription where $id=chkID$i"; 
	  $res = mysqli_query($con,$sql1);
  }
  $sql="SELECT * FROM propertygallery order by Paid";
  $res = mysqli_query($con,$sql);
  $n = mysqli_num_rows($res);
   for($i=1;$i<=$n;$i++)
   {
	   $row = mysqli_fetch_array($res);
	   extract($row);
   	   echo" 
  <tr>
    <td width='100' align='center'  valign='middle'><input name='chkID$i' id='chkID$i' type='checkbox' value='$id' /></td>
    <td> <table width='140' border='0'>
      <tr>
        <td><input type ='text' value='$Title' name='txttitle' id='txttitle' $x/></td>
      </tr>
      <tr>
        <td><input type ='text' value='$Description' name='txtdescription' id='txtdescription' $x/></td>
      </tr>
    </table></td>
    <td align='center' valign='middle' >$img</td>
	<td align='center' valign='middle'>";
	if($Paid == 1) echo 'Yes';
	else 
	echo 'No';
	"</td>
  </tr>";}
  ?> <tr>
  <td align="center" valign="top">
  <input name="res" type="reset" value="Uncheck"  />
  </td>
  <td colspan="3" align="center">
  <input type='submit' name='btnDeleteAll' id='btnDeleteAll' value='Delete' />
  
  <input name="btnPaid" type="submit" value="Paid" />
  <input name="btnunpaid" type="submit" value="Unpaid" />
  <input name="btnupdate" id="btnupdate"type="submit" value="update" />
   <input name="btnok" id="btnok"type="submit" value="ok" />
  </td>
  </tr>
  </form> 
  
  </table></td>
  
</table>
</div>
</body>
</html>