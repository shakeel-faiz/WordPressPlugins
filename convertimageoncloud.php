//First upload the sample.jpg in cloud storage folder tempFolder

<?php

require_once __DIR__ ."/vendor/autoload.php";

use \Aspose\Imaging\ImagingApi;
use \Aspose\Imaging\Configuration;
use \Aspose\Imaging\Model;
use \Aspose\Imaging\Model\Requests;
use \Aspose\Imaging\Model\Requests\ConvertImageRequest;

$config = new Configuration();
$config->setBaseUrl($config->getBaseUrl());
$config->setClientId("xxxxx");
$config->setClientSecret("xxxxx");

$api = new ImagingApi($config);

$request = new ConvertImageRequest("sample.jpg", "png", "tempFolder");
$result = $api->convertImage($request);

$i=1;
