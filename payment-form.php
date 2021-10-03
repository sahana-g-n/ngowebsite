<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body{
            background-image:url("https://www.teahub.io/photos/full/128-1283085_purple-tumblr-backgrounds-aesthetic-pastel.jpg");
            
        }
           .box{
               width:35%;
               heigth:100%;
               font-size:100%;
               background-color:hsl(256, 39%, 78%);
               color:black;

           }
           p{
               font-size:300%;
               margin-left:40%;
           }

           .gif{
    width:250px;
   margin-left:43%;
  }
  .tab{
        font-size:150%;
        background-color:hsl(256, 39%, 78%);
        font-weight:bold;
  }
  .button{
    margin-top:0%;
    margin-left:90%;
    
    color:blac;
    font-size:150%;
}
    </style>
</head>
<body>
<a href="donate.html" class="button">Back</a>
    <p>Enter Your Details</p>
    <img src="https://media4.giphy.com/media/dGe6HSCGAdDdMj9Vj2/giphy.gif?cid=6c09b952ldg400q3ttfevmu5gyyy9ntnj2sf5rb2je0ny800&rid=giphy.gif&ct=s" class="gif">
    <br><br><br><br>
    <center>
    <form action="pay.php" method="post">
        Amount: <input type="text" name="price" class="box"><br><br>
        Name: <input type="text" name="customername" class="box"><br><br>
        Email: <input type="email" name="email" class="box"><br><br>
        PHONE: <input type="text" name="contactno" class="box"><br><br><br><br><br><br><br>
        <input type="submit" name="submit" value="Proceed To Donate" class="tab">
</form>
</center>
</body>
</html>