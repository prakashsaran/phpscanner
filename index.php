<?php
required_once("./src/QRgenearator.php");
$imageConfig = [];
$QrClass = new QRgenearator();
echo $QrClass->genreartImage($imageConfig);