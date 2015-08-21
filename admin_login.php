<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="style/login.css" rel="stylesheet" type="text/css" />
<script src="js/custom-form-elements.js"></script>
</head>
<body>
<?php
include_once("data.inc");
if(isset($_POST['btnsignup']))
{
	extract($_POST);
	$sql="select * from registration where username='$txtusername' and password='$txtpassword'";
	$res=mysqli_query($con,$sql);
	$n=mysqli_num_rows($res);
	if($n==0)
		$err="Please Re-enter username and password";
	else
	{
		$row=mysqli_fetch_array($res);
		extract($row);
		session_start();
		if($username==admin)
		{
		  //header("Location:admin/admin.php");	
		  echo "<script>window.location.href='admin.php'</script>";
		}
		else
		{
			//header("Location:index.php");
			echo "<script>window.location.href='index.php'</script>";
		}
		//$_SESSION['reg']=$reg_id;
		//$_SESSION['username']=$full_name;
		//header("location:farzy.php");
						  
		//header("Location: sell.php");
		//header("Location: index.php");
		//echo "$reg_id";
		//window.location.href*/
	}
}
?>
<div id="Login_wrapper_admin">
<div style="width:100%;float:left; text-align:center;">
<div id="left_contianer">
<form action="" enctype="multipart/form-data" method="post">
  <div id="textbox">
    <div id="textbox_label_username">
      <label for="txtusername">Enter Username</label>
      </div>
    <div id="textbox_wrapper">
      <input name="txtusername"  id="txtusername" type="text" value="Username" onfocus="if(this.value == 'Username'){this.value = '';}" onblur="if (this.value == ''){this.value = 'Username'};"  />
      </div>
</div>
<div id="textbox">
    <div id="textbox_label_password">
    	<label for="txtpassword">Enter Password</label>
    </div>
    <div id="textbox_wrapper">
    	<input name="txtpassword" id="txtpassword" type="text" value="Password" onfocus="if(this.value == 'Password'){this.value = '';}" onblur="if (this.value == ''){this.value = 'Password'};"   />
    </div>
</div>
<div id="text">
  <div id="Rember_me"> 
  <input name="show_password" type="checkbox" value="" class="styled" id="show_password"/>
<div id="txtrember">
<label for="radio">Remember Me</label> 
</div>
</div>
</div>
<div id="login_btn">

<input name="btnsignup" id="btnsignup" type="submit"  value="" class="login_btn" />

</div>
</form>
</div>
</div>
<div style="float:left;width:100%;text-align:center; ">
  <p>&nbsp;</p>
</div>

<?php echo @$err;?>
</div>

</body>
</html>
 