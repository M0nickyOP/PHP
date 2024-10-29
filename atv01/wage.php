
    <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $w = ($_POST['wage']);
  }
     if ($w<=300 ){
    $p = $w*0.5;
    $r = $p += $w;
      echo "<h3> o salario reajustado é $r</h3>";
     }
     if ($w > 300) {
    $p =  $w*0.3;
    $r = $p += $w;
      echo "<h3> o salario reajustado é $r</h3>";
     }
    ?>
