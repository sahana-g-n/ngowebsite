<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation</title>
  <style type="text/css">
  body{
    background-image:url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg");
    background-repeat:repeat;
    height:150%;
    background-position:center;
    background-size:cover;
  }
  table,td,th{
    border:2px solid black;
    background-color:hsl(199, 77%, 86%);
    margin-left: auto; 
    margin-right: auto;
    margin-top:auto;
    padding:10px;
    width:650px;
    height:50px;
    border-collapse:collapse;
    padding-top:20px;
}
  p{
    text-align:center;
    font-family:serif;
    font-size:350%;
  }
  .gif{
    width:700px;
   margin-left:28%;
   padding-bottom:0%;
  }
.button{
   
    margin-left:90%;
    color:blac;
    font-size:150%;
} 
</style>

</head>
<body>
<a href="admin1.html" class="button">Back</a> 
  <p > Donation Details</p><br>
    <img src="https://media4.giphy.com/headers/britishredcross/V10ZEwdZdFns.gif" class="gif">
    <p>All the details of the dotions are here</p>
<?php
$connection = mysqli_connect("localhost","root","","gothamshop");

$sql = "SELECT * FROM `orders` ORDER BY id DESC";

$results = mysqli_query($connection,$sql);
echo"<table>";
echo"<tr><th>ID</th><th>ORDER ID</th><th>RAZORPAYMENT ID</th><th>STATUS</th><th>EMAIL</th><th>PRICE</th></tr>";

if(mysqli_num_rows($results)>0){

  while($row = mysqli_fetch_array($results)){
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['order_id'];
    echo "</td><td>";
    echo $row['razorpay_payment_id'];
    echo "</td><td>";
    echo $row['status'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['price'];
    echo "</td></tr>";

    echo "<br>";
  }
}
mysqli_close($connection);
?>




    
</body>
</html>


