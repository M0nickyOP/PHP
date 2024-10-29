
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $g = ($_POST['g']);
    $h = ($_POST['h']);
}

    
 if( $g == 0){
 $weight = 62.1*$h-44.7;
 echo "<h3> seu peso ideal é $weight</h3>";
} else {
 $weight = 72.2*$h-58 ;
 echo "<h3> seu peso ideal é $weight</h3>";
 }
    ?>
