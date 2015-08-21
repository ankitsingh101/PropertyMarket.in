<?php
if(isset($_POST['btnadd']))
 { 
    extract($_POST);
	if($txttitle!==""||$txtaddress!==""||$txtstartdate!==""||$txtenddate="")
	{
		extract($_POST);
		if(isset($_POST['paid']))
		{
			 $p=1;
		}
		else
		{
			$p=0;
		}
		$err="";
		$fileName=$_FILES["uploaded_file"]["name"];
		$fileTmpLoc =$_FILES["uploaded_file"]["tmp_name"];
		$fileType=$_FILES["uploaded_file"]["type"];
		$fileSize =$_FILES["uploaded_file"]["size"];
		$fileErrorMsg=$_FILES["uploaded_file"]["error"];
		$kaboom=explode(".",$fileName);
		$fileExt =$kaboom[1];
		if(!$fileTmpLoc){
			$err="ERROR: Please browse for a file before clicking the upload button";
			}
			else if($fileSize>5242880){
				echo"ERROR:Your file was larger than 5 Megabytes in size";
				unlink($fileTmpLoc);
			    }else if(!preg_match("([^\s]+(\.(?i)(jpg|png|gif|bmp))$)",$fileName)){
					$err="ERROR:Your image was not gif,.jpg,or.png";
					unlink($fileTmpLoc);
					
				}else if($fileErrorMsg == 1){
					$err="ERROR: An error occured while processing the file. Try again";
					
				}
				$moveResult =move_uploaded_file($fileTmpLoc,"gallimages/$fileName");
				if($moveResult !=true){
					$err="ERROR: FIle not uploaded.Try again.";
					unlink($fileTmpLoc);					
				}
		   if($err=="")
		   {
			include_once("ak_php_img_lib_1.0.php");
			$target_file ="gallimages/$fileName";
			$resized_file ="gallimages/resized_$fileName";
			$wmax=120;
			$hmax=45;
			ak_img_resize($target_file,$resized_file,$wmax,$hmax,$fileExt);
			/*echo will in a vriableand all echo will in single echo */
			$msg ="The Image named <strong>$fileName</strong> uploaded successfuly.<br/>".
			"It is <strong>$fileSize </strong> bytes in size.<br/".
			"The file extension is <strong>$fileType</strong> type of file.<br/>".
			"The Error Meassage output for this upload is: $fileErrorMsg";
			unlink('gallimages/'.$fileName);	
			$res=mysqli_query($con,"insert into propertygallery (img,Description,Title,Paid) values('resized_$fileName ','$txtaddress','$txttitle','$p')") or die("Unable to insert new recoed");
		   }
	}
	else
	{
		$err= "ERROR: Please Fill Fields";
	}
 }
	if(isset($_POST["btnDeleteAll"]))
		{ 
		   $query="select * from propertygallery";
		   $res = mysqli_query($con,$query);
  		   $n = mysqli_num_rows($res);
			 for($i=0;$i<=$n;$i++)
			 {
				if(isset($_POST["chkID$i"]))
				{
					$id = $_POST["chkID$i"];
					$sql = "delete from propertygallery where id=$id";
					$res = mysqli_query($con, $sql) or die("Unable to delete record");			
				}
			 }
		}
	if(isset($_POST["btnPaid"]))
		{ 
		   $query="select * from propertygallery";
		   $res = mysqli_query($con,$query);
  		   $n = mysqli_num_rows($res);
			 for($i=0;$i<=$n;$i++)
			 {
				if(isset($_POST["chkID$i"]))
				{
					$id = $_POST["chkID$i"];
					/*$row = mysqli_fetch_array($res);
					unlink($_SERVER['DOCUMENT_ROOT']."/sample/userphoto/".$row['photo']);*/
					$sql = "UPDATE propertygallery SET Paid=1 where id=$id";
					$res = mysqli_query($con, $sql) or die("Unable to delete record");			
				}
			 }
		}	
		if(isset($_POST["btnunpaid"]))
		{ 
		   $query="select * from propertygallery";
		   $res = mysqli_query($con,$query);
  		   $n = mysqli_num_rows($res);
			 for($i=0;$i<=$n;$i++)
			 {
				if(isset($_POST["chkID$i"]))
				{
					$id = $_POST["chkID$i"];
					/*$row = mysqli_fetch_array($res);
					unlink($_SERVER['DOCUMENT_ROOT']."/sample/userphoto/".$row['photo']);*/
					$sql = "UPDATE propertygallery SET Paid=0 where id=$id";
					$res = mysqli_query($con, $sql) or die("Unable to delete record");			
				}
			 }
		}	
?>