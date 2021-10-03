<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <style type="text/css">
  body{
    background-image:url("https://www.welovesolo.com/wp-content/uploads/2014/10/p1809gk76d1ggm1mll17tm1nl0e835-details.jpg");
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
    font-size:350%
  }
  .gif{
    width:400px;
   margin-left:37%;
 
  }
  .button{
    margin-top:0%;
    margin-left:90%;
   
    color:black;
    font-size:150%;
} 
  
</style>

</head>
<body>
<a href="admin1.html" class="button">Back</a> 
  <p> Feedback Details</p>
  <img src="https://kerala.gov.in/documents/10180/0d903de3-40ea-42b0-be69-e3461ae30056" class="gif">
<?php
$connection = mysqli_connect("localhost","root","","my_dummy");

$sql = "SELECT * FROM `data` ORDER BY id DESC";

$results = mysqli_query($connection,$sql);
echo"<table>";
echo"<tr><th>Name</th><th>Email</th><th>Feedback</th></tr>";

if(mysqli_num_rows($results)>0){

  while($row = mysqli_fetch_array($results)){
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['msg'];
    echo "</td></tr>";

    echo "<br>";
  }
}
mysqli_close($connection);
?>
</body>
</html>


