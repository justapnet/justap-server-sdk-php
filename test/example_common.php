<?php

// key 必须为 X-JUSTAP-API-KEY， 区分大小写
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
$config->setPrivateKey(file_get_contents('./private_key.pem'));
$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);
