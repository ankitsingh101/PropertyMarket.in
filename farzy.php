<?php
 include_once('data.inc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function ss()
{
  window.open('index.php','_parent');
 // window.location.href="index.php";
}
</script>
</head>

<body onload="ss()">
<?php 

 //echo $_SESSION['reg'];
 //echo "<script>window.location.href='index.php'</script>";
?>
</body>

<!--<a href="index.php" target="_parent" id="fa">index Page</a> -->

 </body>
</html>