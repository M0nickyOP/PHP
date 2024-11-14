<form method="post">
<label> entre com uma lista com números separados por virgula para serem somados
     <input type="text"  name="btn"> <br> 
     <button type="submit" value="b1"> envia </button>
</form>
<?php 
if ($_POST){
    $a= $_POST["btn"];
    $a = explode(",", $a);
    $a = array_map('intval', $a);
    $b = 0;
    foreach($a as $index => $valor){
        $b += $valor; 
        
        
    }
    echo " <div> $b </div> " ;
}



?>
