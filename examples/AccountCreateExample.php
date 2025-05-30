<?php

namespace Dropbox\SignSandbox;

require_once __DIR__ . '/../vendor/autoload.php';

use SplFileObject;
use Dropbox;

$config = Dropbox\Sign\Configuration::getDefaultConfiguration();
$config->setUsername("YOUR_API_KEY");
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$account_create_request = (new Dropbox\Sign\Model\AccountCreateRequest())
    ->setEmailAddress("newuser@dropboxsign.com");

try {
    $response = (new Dropbox\Sign\Api\AccountApi(config: $config))->accountCreate(
        account_create_request: $account_create_request,
    );

    print_r($response);
} catch (Dropbox\Sign\ApiException $e) {
    echo "Exception when calling AccountApi#accountCreate: {$e->getMessage()}";
}
