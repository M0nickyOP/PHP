<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    
    <div>
        <h1 >LOGIN</h1>
        <form  method="post" class="form">
            user:<br>
            <input type="text" name="user" ><br><br>
            password:<br>
            <input type="password" name="pass"><br><br>
            <span>
                <button type="submit" >Enter</button> 
                <button type="reset" >Clear</button>
            </span>
        </form>
    </div>
    
</body>
</html>

<?php 
session_start();
if($_POST){
  $superuser= (@$_POST["user"]);
  $password= (@$_POST["pass"]);
  $user= "admin";
  $pass="1234";
  if ($superuser == $user){
  if ($password == $pass){
    print_r($user);
     @$_SESSION['superuser'] = $superuser;
    header("location:homepage.php");
    
  }
}

}


?> 
