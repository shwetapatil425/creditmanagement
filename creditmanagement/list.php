<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
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
}
tr{
color:black;
}
}

</style>
</head>
<body><form>
<center>
<br><br><br><br><br>
<h2>LIST OF USERS</h2>
<br>
<table>
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

<a href="transfer.html"><button type="button" class="btn btn-primary">SELECT USER</button></a>
<a href="home.html"><button type="button" class="btn btn-primary">BACK</button></a>
</center>
</form>
</body>
</html>