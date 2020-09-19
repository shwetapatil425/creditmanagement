<html>
  <head>
    <meta http-equiv="Refresh" content="2.5;
    url=users.php"/>
<style>
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-size: cover; 
}
<body>
<center>
<?php
$conn = mysqli_connect("localhost","root","","management");
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$credits=$_POST['credit'];
$record="SELECT credit from user_details WHERE username='$sender'";
$result=mysqli_query($conn,$record);
$row=mysqli_fetch_assoc($result);
$num=(int)implode('',$row);
if($credits>$num){
echo "INSUFFICIENT CREDIT BALANCE!!!!";
}
elseif($sender==$receiver)
{
echo "YOU HAVE ENTERED SAME SENDER AND RECEIVER.....TRY AGAIN!!";

}
elseif($credits==0){
echo "CREDITS ENTERED AS ZERO...TRY AGAIN!";
}
else{
$sl="INSERT INTO transaction_data(sender,receiver,credits) VALUES('$sender','$receiver','$credits')";
mysqli_query($conn,$sl);
mysqli_query($conn,"UPDATE user_details SET credit = credit - '$credits' WHERE username='$sender'");
mysqli_query($conn,"UPDATE user_details SET credit = credit + '$credits' WHERE username='$receiver'");
echo "INSERTED";
}
?>
</center>
</body>
</html>