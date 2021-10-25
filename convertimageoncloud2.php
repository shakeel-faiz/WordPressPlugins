<?php

require_once __DIR__ ."/vendor/autoload.php";

use \Aspose\Imaging\ImagingApi;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
use \Aspose\Imaging\Model\Requests\ConvertImageRequest;
use \Aspose\Imaging\Model\Requests\CreateConvertedImageRequest;

$config = new Configuration();
$config->setBaseUrl($config->getBaseUrl());
$config->setClientId("xxxxxx");
$config->setClientSecret("xxxxxxx");

$api = new ImagingApi($config);

$imageData = file_get_contents("sample.png");

$req = new CreateConvertedImageRequest($imageData,"png");
$res = $api->createConvertedImage($req);

$cont = $res->getContents();
file_put_contents("sample.out.png", $cont);

$i=1;
