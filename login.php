<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  /* background-image: url('workout_plan.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%; */
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }

}


</style>
</head>
<body>

<h2>Login Page</h2>




<form action="/welcome.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uemail"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="uemail" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button name="button" type="submit" value="Submit">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
  </div>
</form>






<form action="/registeration_form.php" method="post">
  <div class="container">
    <button name="button" type="submit" value="Submit">Register</button>
  </div>
</form>




</body>
</html>
