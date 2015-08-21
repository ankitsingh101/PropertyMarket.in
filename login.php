<?php
include_once("data.inc");
?>
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
		//session_start();
		$_SESSION['reg']=$reg_id;
		$_SESSION['username']=$full_name;
		if(isset($_POST['show_password']))
		{
      		//$_SESSION['reg']=$reg_id;
			//$_SESSION['username']=$username;
			setcookie("regco",$reg_id,time()*30*24*60*60);
			setcookie("userco",$full_name,time()*30*24*60*60);
			
			
		}
		//header("location:farzy.php");
			echo "<script>window.location.href='farzy.php'</script>";			  
		//header("Location: sell.php");
		//header("Location: index.php");
		//echo "$reg_id";
		//window.location.href*/
	}
}
?>
<div id="Login_wrapper">
<div style="width:100%;float:left; text-align:center;">
<div id="left_contianer">
<form action="" method="post">
<div id="textbox">
    <div id="textbox_label_user">
    	<label for="login_user">Login as</label>
    </div>
    <div id="textbox_wrapper">
    	<select name="login_user" id="login_user" >
          <option value="-1" >Select</option>
    	  <option value="0">Individual</option>
    	  <option value="1">Agent</option>
    	  <option value="2">Builder</option>
        </select>
    </div>
</div>

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
 <div> 
 <!-- <input name="show_password" type="checkbox" value="" class="styled" id="show_password"/> -->

<!--<a href="fotgate.php">Forgate Password</a>  -->
  <label id="labfor">
    <input type="checkbox" name="chkforgate" value="" id="chkforgate" onclick="forgate()" />
    Forgate Password</label>
   

<input type="text"  id="email" name="email" style="display:none"/>
 <button type="submit" name="btnemail" id="btnemail" style="display:none">Send mail</button>
<script language="javascript">
 function forgate()
 {
   //alert("rohit")
   var chkforgate=document.getElementById("chkforgate");
   var labfor=document.getElementById("labfor");
   var textemail=document.getElementById("email");
   var btnemail=document.getElementById("btnemail");
   chkforgate.style.display="none";
   labfor.style.display="none";
   textemail.style.display="inline";
   btnemail.style.display="inline";
 }

</script>
<?php 
 if(isset($_POST['btnemail']))
 {
   extract($_POST);
   $sql="select username,password from registration r where r.email='$email'";
   $res=mysqli_query($con,$sql);
   //$n=mysqli_num_rows($res)
   //for()
   $row=mysqli_fetch_array($res);
   extract($row);
   //echo $username;
   //echo $password;
   $_SESSION["username"]=$username;
   $_SESSION["password"]=$password;
   $_SESSION["email"]=$email; 
   echo "<script>window.location.href='email.php'</script>";
  }
?>
</div>
</div>
<div id="login_btn">

<input name="btnsignup" id="btnsignup" type="submit"  value="" class="login_btn" />

</div>
</form>
</div>
</div>
<div style="float:left;width:100%;text-align:center; ">
  <p>If you Don't have a A/c
   Create a New Account Here</p>
<form action="registration.php" target="_parent">   
<input  type="submit" value="" class="signup_btn" onclick="window.location("href="registration.php") style="margin:-10px 0 0 0;"/>
</form>
</div>

<?php echo @$err;?>
</div>

</body>
</html>
 