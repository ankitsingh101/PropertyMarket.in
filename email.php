<?php
include_once('data.inc');
require("email/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();    // set mailer to use SMTP
$mail->Host = "mail.dharmrajtourandtravels.com";    // specify main and backup server
$mail->SMTPAuth = true;    // turn on SMTP authentication
$mail->Username = "info@dharmrajtourandtravels.com";    // SMTP username -- CHANGE --
$mail->Password = "samsoft123";    // SMTP password -- CHANGE --
$mail->Port = "25";    // SMTP Port
//$email = $_POST["email"];
//$mail->From = $_POST["email"];    //From Address -- CHANGE --

$username=$_SESSION["username"];
$password=$_SESSION["password"];
$email=$_SESSION["email"];

$mail->From = $email;
$mail->FromName = "Dharmraj";    //From Name -- CHANGE --
$mail->AddAddress("info@dharmrajtourandtravels.com", "samsoft123");    //To Address -- CHANGE --
$mail->AddReplyTo($email, "samsoft123"); //Reply-To Address -- CHANGE --

$mail->WordWrap = 50;    // set word wrap to 50 characters
$mail->IsHTML(true);    // set email format to HTML

$mail->Subject = "AuthSMTP Test";
$mail->Body    .= "<table>
                      <tr><td>
	                       <tr><td width=120> Your UserName is: </td><td>".$username."</td></tr>
						   <tr> <td width=120> Your Password is:</td> <td> ".$password."</td></tr>	
						   
   					  </td></tr> 
                 </table>";

/*if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}*/

//echo "Message has been sent";
//header("Location: index.php");
//echo "<script>window.open('http://localhost/PropertyMarket/pm_right/index.php','_parent');
echo "<script>window.location.href='index.php'</script>"
?>