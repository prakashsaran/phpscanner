<?php
required_once("./src/QRgenearator.php");
$imageConfig = ['media_path'=>'./media/or',"secret_prefix"=>"TEST_PHP_SC"];
$QrClass = new QRgenearator();
echo $QrClass->genreartImage($imageConfig);
