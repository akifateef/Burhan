<?php
include('config.php');
?>


<?php   
$a=$_POST['Name'];
$b=$_POST['Nic'];
$c=$_POST['Email'];
$d=$_POST['Phone'];
$e=$_POST['Fax'];
$f=$_POST['Address'];
$g=$_POST['City'];
$h=$_POST['Class'];
$i =$_POST['Members'];
$j=$_POST['Code'];
$k=$_POST['day'];
$l=$_POST['price'];



    if( $a!=null&&
	$b!=null&&
	$c!=null&&
	$d!=null&&
	$e!=null&&$f!=null&&$g!=null&&$h!=null&&$i!=null&&$j!=null&&$k!=null&&$l!=null&&$i!='undefined')
{


	$query = "INSERT INTO bookingform(Name,Nic,Email, Phone , Fax, Address, City, Room_Class, No_of_Members, Room_Code, No_of_days, Total_Price) values ('".$a."', ' ".$b." ',   '".$c." ',' " . $d. "', '". $e. "', '" . $f."' , ' ". $g."' , ' ". $h."', ' ". $i."' , ' ". $j."',  '". $k."' , '".$l."')";
	mysql_query($query) or die(mysql_error());
	
}

else{
echo "Some information is still empty/undefined in the form go back and fill all";
mysql_query($query) or die(mysql_error());

}

?>

<!DOCTYEPE html>
<html>

<title></title>


<body style="background-color:#C2C2A3"><br><br><br><br>
<center><h1><u>CONFIRMATION</u></h1>
<br><br><br><br><br><br><br><br>
<p style="font-size:50px">Mr/Miss <span><strong><u><?php echo $a ?></strong></span></u> room code <span><u><strong><?php echo $j ?></strong></u></span> of <span><strong><u><?php echo $h ?></strong></u></span> has been booked for you report in 24 hours for payment other wise booking will be cancelled Thankyou! </p>

<a href="bookingform.php"><input type="button" value="GO BACK" />
</center>

</body>
</html>

