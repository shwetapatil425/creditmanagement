<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding:10px;
}
body{
 margin:0;
 padding: 0;
 font-family:sans-serif;
 background-size: cover; 
 background-color:#999999;
 
}
form{
width: 300px;
position : absolute;
top:50%;
left:50%;
transform: translate(-80%,-50%);
color:gold;
}
h2{
 font-weight:bold;
 color: yellow;
}
table{
font-weight:bold;
color: #d96459;

}
th{
color:green;
padding:15px;
}
tr{
color:black;
padding:15px;
}
h2{
  color:gold;
}

</style>
</head>
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
<center><h2>LIST OF USERS</h2></center>
<br>
<table style="width:100%">
<tr>
<th>USERNAME</th>
<th>E-MAIL</th>
<th>CREDITS</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","management");
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$sl="SELECT username,email,credit FROM user_details";
$result=$conn->query($sl);
if($result->num_rows>0)
{
while($row=$result-> fetch_assoc()){

echo "<tr><td>". $row["username"] ."</td><td>". $row["email"] ."</td><td>". $row["credit"] ."</td></tr>";
}
echo "</table>";
}
else{
echo "0 results";
}
$conn->close();
?>
</table>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



</body>
</html>
