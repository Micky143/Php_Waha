



<?php
$subject = 'Test email'; 
$message = "Hello World!\n\nThis is my first mail."; 
$headers = "From: sahil.rampal@gmail.com\r\nReply-To: sahil.rampal@gmail.com";
include('connectivity.php');
$sql="select * from cutomers";
$result=mysqli_query($con,$sql); 
while($row = mysqli_fetch_array($result))
 {
$to = $row['cust_email'];
$mail_sent = @mail( $to, $subject, $message, $headers );
if($mail_sent)
echo "Mail sent succesfully to ".$row['cust_name']."<br>" ;
else
echo "Mail failed to ".$row['cust_name']."<br>";
}
?>