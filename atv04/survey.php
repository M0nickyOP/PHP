<h2 style="text-align:center">Prova Pratica-Enquete</h2>
<form method="post" > 
    <fieldset style="width:30%;margin-left:35%;" > 
        <legend> Enquete</legend>
        1. Qual a linguagem de programacao voce mais gosta? <br>
        <input type="radio" name= "lang" value="1"> Python <br>
        <input type="radio" name="lang" value="2"> PHP <br>
        <input type="radio" name="lang" value="3"> Java <br>
        <input type="radio" name="lang" value="4"> C++ <br>
        <button type="submit"> votar</button>

</fieldset>


</form>

<?php
session_start();

if(@$_POST["lang"] =="1") {
    @$_SESSION["py"]++;
}
if(@$_POST["lang"] =="2") {
    @$_SESSION["php"]++;
}

if(@$_POST["lang"] =="3") {
    @$_SESSION["java"]++;

}

if(@$_POST["lang"] =="4") {
    @$_SESSION["c"]++;

}

$total = @$_SESSION["c"] +  @$_SESSION["java"] +  @$_SESSION["php"] + @$_SESSION["py"]  ;
@$_SESSION["percentpy"] = (@$_SESSION [ "py"] /$total) * 100;
@$_SESSION["percentphp"] = (@$_SESSION [ "php"] /$total) * 100;
@$_SESSION["percentjv"] = (@$_SESSION [ "java"] /$total) * 100;
@$_SESSION["percentc"] = (@$_SESSION [ "c"] /$total) * 100;

?>
<hr style=" width: 50% "> 
<fieldset style="width:30%;margin-left:35%;"> 
    <legend> resultado
        </legend>
        <ul>
            <li>
        Python - <?php echo  number_format(@$_SESSION["percentpy"], 1); ?>%
        <hr  align="left" color="red" size="10px"  width=<?php echo $_SESSION["percentpy"]; ?>
        </li>
    </ul>

    <ul>
    <li>
        PHP - <?php echo number_format( @$_SESSION["percentphp"],1) ;?>%
        <hr align= "left"  color="green" size="10px"   width=<?php echo $_SESSION["percentphp"]; ?>
    </li>
</ul>
    <ul>
    <li>
        Java - <?php echo  number_format(@$_SESSION["percentjv"],1);?>%
        <hr align= "left"  color="blue" size="10px" width=<?php echo $_SESSION["percentjv"]; ?>
        </li>
    </ul>
    <ul>
    <li>
        C++ - <?php echo number_format( @$_SESSION["percentc"],1); ?>%
        <hr  align= "left" color="yellow" size="10px"  width=<?php echo $_SESSION["percentc"]; ?>
        </li>
    </ul>
</fieldset>
<h6 style="text-align:center; ">  ©️ Sistema de enquete - IFPI 2018</h6>
<hr style=" width: 50% "> 
