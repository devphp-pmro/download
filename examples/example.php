<?php


    require_once $_SERVER['DOCUMENT_ROOT']."/download/vendor/autoload.php";
    use Source\Helpers\Download;

    $download = new Download();

    $homeDirectory = $_SERVER['DOCUMENT_ROOT']."/download/files/";
    $file = "finalFile.pdf";
    $download->downloadFile($homeDirectory,$file,"teste");

?>


