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
$username=$_POST['username'];
$email=$_POST['email'];
$credit=$_POST['credit'];
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
else if(empty($username)) {
  echo "<div class='alert alert-danger alert-dismissible'>
  <a href='create.html'class='close'>&times;</a>
  <strong>Warning!</strong> Empty Username.
  </div>";
  
  }
  else if(empty($email)) {
    echo "<div class='alert alert-danger alert-dismissible'>
    <a href='create.html'class='close'>&times;</a>
    <strong>Warning!</strong> Empty Email.
    </div>";
    }
else if(empty($credit)) {
      echo "<div class='alert alert-danger alert-dismissible'>
      <a href='create.html'class='close'>&times;</a>
      <strong>Warning!</strong> Empty Credit Value.
      </div>";
      }
else{
$sl="INSERT INTO user_details(username,email,credit) VALUES('$username','$email','$credit')";
mysqli_query($conn,$sl);
echo "INSERTED";
}
//header('location:create.html');

?>
</center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>