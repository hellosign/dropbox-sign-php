<?php

namespace Dropbox\SignSandbox;

require_once __DIR__ . '/../vendor/autoload.php';

use SplFileObject;
use Dropbox;

$config = Dropbox\Sign\Configuration::getDefaultConfiguration();
$config->setUsername("YOUR_API_KEY");
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

try {
    $response = (new Dropbox\Sign\Api\TemplateApi(config: $config))->templateFiles(
        template_id: "f57db65d3f933b5316d398057a36176831451a35",
    );

    copy($response->getRealPath(), __DIR__ . '/file_response');
} catch (Dropbox\Sign\ApiException $e) {
    echo "Exception when calling TemplateApi#templateFiles: {$e->getMessage()}";
}
