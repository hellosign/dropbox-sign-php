<?php

declare(strict_types=1);

namespace Dropbox\Sign\Test\Api;

use Dropbox\Sign\Api;
use Dropbox\Sign\Configuration;
use Dropbox\Sign\Model;
use Dropbox\Sign\Test\SignTestCase;
use Dropbox\Sign\Test\TestUtils;
use GuzzleHttp;
use SplFileObject;

class TemplateApiTest extends SignTestCase
{
    /** @var Api\TemplateApi */
    protected $api;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = new GuzzleHttp\Client([
            'handler' => GuzzleHttp\HandlerStack::create($this->handler),
        ]);

        $this->api = new Api\TemplateApi(
            Configuration::getDefaultConfiguration(),
            $this->client,
        );
    }

    public function testTemplateAddUser()
    {
        $templateId = 'f57db65d3f933b5316d398057a36176831451a35';
        $requestClass = Model\TemplateAddUserRequest::class;
        $requestData = TestUtils::getFixtureData($requestClass)['default'];

        $responseClass = Model\TemplateGetResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $obj = Model\TemplateAddUserRequest::init($requestData);

        $response = $this->api->templateAddUser($templateId, $obj);
        $serialized = TestUtils::toArray($response);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, $serialized);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }

    public function testTemplateCreateEmbeddedDraft()
    {
        $requestClass = Model\TemplateCreateEmbeddedDraftRequest::class;
        $requestData = TestUtils::getFixtureData($requestClass)['default'];

        $responseClass = Model\TemplateCreateEmbeddedDraftResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $obj = Model\TemplateCreateEmbeddedDraftRequest::init($requestData);
        $obj->setFiles([
            new SplFileObject(self::ROOT_FILE_PATH . '/pdf-sample.pdf'),
        ]);

        $response = $this->api->templateCreateEmbeddedDraft($obj);
        $serialized = TestUtils::toArray($response);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, $serialized);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }

    public function testTemplateDelete()
    {
        $this->markTestSkipped('POST /template/delete/{template_id} skipped');
    }

    public function testTemplateFiles()
    {
        $this->markTestSkipped('GET /template/files/{signature_request_id}');
    }

    public function testTemplateGet()
    {
        $templateId = 'f57db65d3f933b5316d398057a36176831451a35';

        $responseClass = Model\TemplateGetResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $response = $this->api->templateGet($templateId);
        $serialized = TestUtils::toArray($response);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, $serialized);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }

    public function testTemplateList()
    {
        $accountId = 'all';

        $responseClass = Model\TemplateListResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $response = $this->api->templateList($accountId);
        $serialized = TestUtils::toArray($response);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, $serialized);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }

    public function testTemplateRemoveUser()
    {
        $templateId = '21f920ec2b7f4b6bb64d3ed79f26303843046536';
        $requestClass = Model\TemplateRemoveUserRequest::class;
        $requestData = TestUtils::getFixtureData($requestClass)['default'];

        $responseClass = Model\TemplateGetResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $obj = Model\TemplateRemoveUserRequest::init($requestData);

        $response = $this->api->templateRemoveUser($templateId, $obj);
        $serialized = TestUtils::toArray($response);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, $serialized);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }

    public function testTemplateUpdateFiles()
    {
        $templateId = '21f920ec2b7f4b6bb64d3ed79f26303843046536';
        $requestClass = Model\TemplateUpdateFilesRequest::class;
        $requestData = TestUtils::getFixtureData($requestClass)['default'];

        $responseClass = Model\TemplateUpdateFilesResponse::class;
        $responseData = TestUtils::getFixtureData($responseClass)['default'];

        $this->setExpectedResponse($responseData);

        $obj = Model\TemplateUpdateFilesRequest::init($requestData);
        $obj->setFiles([
            new SplFileObject(self::ROOT_FILE_PATH . '/pdf-sample.pdf'),
        ]);

        $response = $this->api->templateUpdateFiles($templateId, $obj);
        $serialized = TestUtils::toArray($response);

        $this->assertInstanceOf($responseClass, $response);
        $this->assertEquals($responseData, $serialized);
        $this->assertEquals($responseData, TestUtils::toArray($response));
    }
}
