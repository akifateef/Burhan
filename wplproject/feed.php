<?php
include('conf.php');
?>






<?php   
$name=$_GET['Name'];
$phone=$_GET['Phn'];
$email=$_GET['Email'];
$company=$_GET['Comp'];
$fax=$_GET['Fax'];
$subject=$_GET['Sub'];
$message=$_GET['Mess'];


if ($name!=null&&$phone!=null&&$email!=null&&$company!=null&&$fax!=null&&$subject!=null&&$message!=null){

$query = "INSERT INTO feedback(Name,Phone,Email,Your_Company, Fax, Subject,your_message) values(' $name',  '".$phone." ' ,   '".$email. " ','". $company. " ' ,'". $fax. " ','". $subject. " ', ' $message '  )";
}

mysql_query($query) or die(mysql_error());

?>




<!DOCTYEPE html>
<html>

<title></title>


<body style="background-color:#C2C2A3">
<center>
<br><br><br><br><br><br><br><br>
<p style="font-size:50px">Thanks  <span><strong><?php echo $name ?></strong></span> for your feedback have a nice day........</p>

<a href="feedback.php"><input type="button" value="GO BACK" />
</center>

</body>
</html>