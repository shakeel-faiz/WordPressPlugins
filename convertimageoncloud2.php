<?php

require_once __DIR__ . "/vendor/autoload.php";

use \Aspose\Imaging\ImagingApi;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
use \Aspose\Imaging\Model\Requests\ConvertImageRequest;
use \Aspose\Imaging\Model\Requests\CreateConvertedImageRequest;

$config = new Configuration();
$config->setBaseUrl($config->getBaseUrl());
$config->setClientId("81e42949-3dc6-4080-b1d7-1c2c30cd954c");
$config->setClientSecret("5cfcf33020020c094b481ea11e25da04");

$api = new ImagingApi($config);

$filename = "sample.jpg";

$filenamewithoutext = strtolower(pathinfo($filename, PATHINFO_FILENAME));
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
$format = $ext;
$outputfilename = $filenamewithoutext . ".out." . $ext;

$sizeBefore = filesize($filename);
$imageData = file_get_contents($filename);

$req = new CreateConvertedImageRequest($imageData, $format);
$res = $api->createConvertedImage($req);

$sizeAfter = $res->getSize();
$cont = $res->getContents();
file_put_contents($outputfilename, $cont);

$i = 1;
