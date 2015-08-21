<?php
include_once("data.inc");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php 
session_destroy();
//$_SESSION['reg'];
//$_SESSION['username'];
setcookie("regco","",time()*-2);
setcookie("userco","",time()*-2);
unset($_COOKIE["regco"]);
unset($_COOKIE["userco"]);

//header("Location:index.php");
echo "<script>window.location.href='index.php'</script>";
?>
</body>
</html>