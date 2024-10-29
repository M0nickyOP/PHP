<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = ($_POST['n1']);
  
}
 for ($i=1; $i <= $n; $i++) { 
    if ($n% $i == 0){
    echo "<h3> $i  divisivel por $n </h3>";
 }
}
