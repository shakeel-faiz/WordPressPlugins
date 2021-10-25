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
$config->setClientId("81e42949-3dc6-4080-b1d7-1c2c30cd954c");
$config->setClientSecret("5cfcf33020020c094b481ea11e25da04");

$api = new ImagingApi($config);

$request = new ConvertImageRequest("sample.jpg", "png", "tempFolder");
$result = $api->convertImage($request);

$i=1;
