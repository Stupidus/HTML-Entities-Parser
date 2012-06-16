<?php
if(isset($_POST["texte"]) && !empty($_POST["texte"]))
        $texte = $_POST["texte"];
else
        $texte = "";
echo stripslashes(htmlentities($texte, ENT_QUOTES, "UTF-8"));
?>
