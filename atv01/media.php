
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $nota1 = ($_POST['n1']);
  $nota2 = ($_POST['n2']);
    $media = ($nota1 + $nota2) / 2;
}
    echo "<h3> sua media é $media ";
    
    ?> 

