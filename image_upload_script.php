<?php
$fileName=$_FILES["uploaded_file"]["name"];
$fileTmpLoc =$_FILES["uploaded_file"]["tmp_name"];
$fileType=$_FILES["uploaded_file"]["type"];
$fileSize =$_FILES["uploaded_file"]["size"];
$fileErrorMsg=$_FILES["uploaded_file"]["error"];
$kaboom=explode(".",$fileName);
$fileExt =$kaboom[1];
if(!$fileTmpLoc){
	echo"ERROR: Please browse for a file before clicking the upload button";
	exit();
	}
	else if($fileSize>5242880){
		echo"ERROR:Your file was larger than 5 Megabytes in size";
		unlink($fileTmpLoc);
		exit();
		}else if(!preg_match("([^\s]+(\.(?i)(jpg|png|gif|bmp))$)",$fileName)){
			echo"ERROR:Your image was not gif,.jpg,or.png";
			unlink($fileTmpLoc);
			exit();
		}else if($fileErrorMsg == 1){
			echo"ERROR: An error occured while processing the file. Try again";
			exit();
		}
		$moveResult =move_uploaded_file($fileTmpLoc,"gallimages/$fileName");
		if($moveResult !=true){
			echo"ERROR: FIle not uploaded.Try again.";
			unlink($fileTmpLoc);
			exit();
		}
		/*unlink($fileTmpLoc);*/
		include_once("ak_php_img_lib_1.0.php");
		$target_file ="gallimages/$fileName";
		$resized_file ="gallimages/resized_$fileName";
		$wmax=200;
		$hmax=62;
		ak_img_resize($target_file,$resized_file,$wmax,$hmax,$fileExt);
		/*echo will in a vriableand all echo will in single echo */
		echo"The file named<strong>$fileName</strong> uploaded successfuly.<br/><br/>";
		echo"it is<strong>$fileSize</strong> bytes in size.<br/><br/>";
		echo"it is<strong>$fileType</strong> Type of file.<br/><br/>";
		echo"The file extension is<strong>$fileType/strong> type of file.<br/><br/>";
		echo"The Error Meassage output for this upload is: $fileErrorMsg";		
?>