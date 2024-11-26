<?php
session_start();
echo "<h2> bem vindo $_SESSION[superuser] ";
 if (@$_POST){

     header("location:login.php");
    }
?>


    <form action="login.php" method="POST">
        <input type="hidden" name="a" value="7">
        <button type="submit"> voltar</button>
    </form>



    
