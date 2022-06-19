<?php 
function debuguear($variable) : string{
    echo "<pre";
    var_dump($variable);
    echo "</pre>";
    exit;
}

//escapa sanitizar el html
function s($html) : string{
    $s = htmlspecialchars($html);
    return $s;
}
?>