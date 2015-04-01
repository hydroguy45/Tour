<?php
    $level = $_GET["level"];
    $fn = $_GET["fn"];
    $json = $_GET["json"];
    if($fn == "write"){
        file_put_contents("data/".$level."/data.json",$json);
    }
    echo file_get_contents("data/".$level."/data.json");
?>