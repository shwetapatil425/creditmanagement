<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-size: cover; 
 background-color:#999999;

}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="users.php">Transaction History<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list.php">View All Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transfer.html">Transfer Money</a>
      </li>
    </ul>
  </div>
</nav>
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
elseif($sender==$receiver){
  echo "<div class='alert alert-danger alert-dismissible'>
  <a href='transfer.html'class='close'>&times;</a>
  <strong>Warning!</strong> Entered same sender and receiver OR Empty fields..
  </div>";
}
elseif(empty($sender)) {
  echo "<div class='alert alert-danger alert-dismissible'>
  <a href='transfer.html'class='close'>&times;</a>
  <strong>Warning!</strong> Empty sender name.
  </div>";
  }
elseif(empty($receiver)) {
  echo "<div class='alert alert-danger alert-dismissible'>
  <a href='transfer.html'class='close'>&times;</a>
  <strong>Warning!</strong> Empty Receiver name.
  </div>";
  }
  elseif(empty($credits)) {
    echo "<div class='alert alert-danger alert-dismissible'>
    <a href='transfer.html'class='close'>&times;</a>
    <strong>Warning!</strong> Empty Credit.
    </div>";
    }
elseif($credits==0){
echo "CREDITS ENTERED AS ZERO...TRY AGAIN!";
}
else{
$sl="INSERT INTO transaction_data(sender,receiver,credits) VALUES('$sender','$receiver','$credits')";
mysqli_query($conn,$sl);
mysqli_query($conn,"UPDATE user_details SET credit = credit - '$credits' WHERE username='$sender'");
mysqli_query($conn,"UPDATE user_details SET credit = credit + '$credits' WHERE username='$receiver'");
echo "<div class='alert alert-success'>
<a href='transfer.html' class='close'>&times;</a>
<strong>Success!</strong> Successfully Money transfered.
</div>";
}
//header('location:transfer.html');


?>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
