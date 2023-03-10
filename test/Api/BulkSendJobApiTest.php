<?php

declare(strict_types=1);

namespace Dropbox\Sign\Test\Api;

use Dropbox\Sign\Api;
use Dropbox\Sign\Configuration;
use Dropbox\Sign\Model;
use Dropbox\Sign\Test\SignTestCase;
use Dropbox\Sign\Test\TestUtils;
use GuzzleHttp;

class BulkSendJobApiTest extends SignTestCase
{
    /** @var Api\BulkSendJobApi */
    protected $api;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = new GuzzleHttp\Client([
            'handler' => GuzzleHttp\HandlerStack::create($this->handler),
        ]);

        $this->api = new Api\BulkSendJobApi(
            Configuration::getDefaultConfiguration(),
            $this->client,
        );
    }

    public function testBulkSendJobGet()
    {
        $id = '6e683bc0369ba3d5b6f43c2c22a8031dbf6bd174';

        $responseClass = Model\BulkSendJobGetResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $response = $this->api->bulkSendJobGet($id);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }

    public function testBulkSendJobList()
    {
        $page = 1;
        $pageSize = 20;

        $responseClass = Model\BulkSendJobListResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $response = $this->api->bulkSendJobList($page, $pageSize);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }
}
