<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       body{
           padding-top: 3rem;
       }
       .container {
           width: 400px;
       }
   </style>
   </head>
</html>


<?php
session_start();
if($_SESSION != NULL && $_SESSION['auth']===true)
 {
	echo '
<body>
<div class="container">
<h3>Ви вже увійшли.</h3>
<br>
<a class="btn" href="adduser.php">continue</a>
<a class="btn" href="logout.php">log out</a>
</div>
</body>';
} else {
echo '
<body>
<div class="container">
   <h3>Login</h3>
   <form action="auth.php" method="post" enctype="multipart/form-data">
       <div class="row">
           <div class="field">
               <label>Email: <input type="email" name="email"><br></label>
           </div>
       </div>
	    <div class="row">
           <div class="field">
               <label>Password: <input type="password" name="password"></label>
           </div>
       </div>
       <input type="submit" class="btn" value="LOGIN" name="submit">
   </form>
</div>
</body>';
}
?>