<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$messg=$_POST["msg"];


echo "THANKS <br>";
echo "<br>NAME : ".$name;
echo "<br>EMAIL : ".$email;
echo "<br>CONTACT NO. : ".$tel;
echo "<br> MESSAGE SENT";


$subject ="Someone is trying to contact PowerTech Engineers";


$to = "nazruddin2khan@gmail.com";
    $header = "From: contact@thepowertech.in \r\n";
         
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         

  $message = "Congratulations You Get an Enquiry <br> From Contact No. : ". $tel."<br> Email Id ". $email."<br> Message : ".$messg;
  
  mail($to, $subject,$message, $header);
	
	
?>

</body>
</html>
