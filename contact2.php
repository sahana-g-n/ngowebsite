<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="contact2.css">
  <style>
    .button{
    margin-top:0%;
    margin-left:90%;
    
    color:blac;
    font-size:150%;
} 
    </style>

</head>
<body class="body">
  <a href="index.html" class="button" >Back</a>
  <img src="https://i.pinimg.com/originals/7c/3b/63/7c3b63598dc8b65b93a9532d4228947b.gif" class="image">
  </body>
</html>

<?php
try{
  $db = new mysqli("localhost","root","","my_dummy");
}
catch(Exception $exc){
  echo $exc->getTraceAsString();
}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) ){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  $is_insert = $db ->query("INSERT INTO `data`(`name`,`email`,`msg`) VALUES ('$name','$email','$msg')");

  if($is_insert == TRUE){
    echo "<h2>Thank you!! your respond has been taken we will reach you soon </h2>";
    exit();
  }
}
?>