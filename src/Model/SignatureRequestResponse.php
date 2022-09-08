<?php
/**
 * SignatureRequestResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * HelloSign API
 *
 * HelloSign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HelloSignSDK\Model;

use ArrayAccess;
use HelloSignSDK\ObjectSerializer;
use JsonSerializable;

/**
 * SignatureRequestResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about a signature request.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 * @internal This class should not be instantiated directly
 */
class SignatureRequestResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SignatureRequestResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'test_mode' => 'bool',
        'signature_request_id' => 'string',
        'requester_email_address' => 'string',
        'title' => 'string',
        'original_title' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'metadata' => 'array',
        'created_at' => 'int',
        'is_complete' => 'bool',
        'is_declined' => 'bool',
        'has_error' => 'bool',
        'files_url' => 'string',
        'signing_url' => 'string',
        'details_url' => 'string',
        'cc_email_addresses' => 'string[]',
        'signing_redirect_url' => 'string',
        'template_ids' => 'string[]',
        'custom_fields' => '\HelloSignSDK\Model\SignatureRequestResponseCustomFieldBase[]',
        'attachments' => '\HelloSignSDK\Model\SignatureRequestResponseAttachment[]',
        'response_data' => '\HelloSignSDK\Model\SignatureRequestResponseDataBase[]',
        'signatures' => '\HelloSignSDK\Model\SignatureRequestResponseSignatures[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'test_mode' => null,
        'signature_request_id' => null,
        'requester_email_address' => null,
        'title' => null,
        'original_title' => null,
        'subject' => null,
        'message' => null,
        'metadata' => null,
        'created_at' => null,
        'is_complete' => null,
        'is_declined' => null,
        'has_error' => null,
        'files_url' => null,
        'signing_url' => null,
        'details_url' => null,
        'cc_email_addresses' => null,
        'signing_redirect_url' => null,
        'template_ids' => null,
        'custom_fields' => null,
        'attachments' => null,
        'response_data' => null,
        'signatures' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'test_mode' => 'test_mode',
        'signature_request_id' => 'signature_request_id',
        'requester_email_address' => 'requester_email_address',
        'title' => 'title',
        'original_title' => 'original_title',
        'subject' => 'subject',
        'message' => 'message',
        'metadata' => 'metadata',
        'created_at' => 'created_at',
        'is_complete' => 'is_complete',
        'is_declined' => 'is_declined',
        'has_error' => 'has_error',
        'files_url' => 'files_url',
        'signing_url' => 'signing_url',
        'details_url' => 'details_url',
        'cc_email_addresses' => 'cc_email_addresses',
        'signing_redirect_url' => 'signing_redirect_url',
        'template_ids' => 'template_ids',
        'custom_fields' => 'custom_fields',
        'attachments' => 'attachments',
        'response_data' => 'response_data',
        'signatures' => 'signatures',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'test_mode' => 'setTestMode',
        'signature_request_id' => 'setSignatureRequestId',
        'requester_email_address' => 'setRequesterEmailAddress',
        'title' => 'setTitle',
        'original_title' => 'setOriginalTitle',
        'subject' => 'setSubject',
        'message' => 'setMessage',
        'metadata' => 'setMetadata',
        'created_at' => 'setCreatedAt',
        'is_complete' => 'setIsComplete',
        'is_declined' => 'setIsDeclined',
        'has_error' => 'setHasError',
        'files_url' => 'setFilesUrl',
        'signing_url' => 'setSigningUrl',
        'details_url' => 'setDetailsUrl',
        'cc_email_addresses' => 'setCcEmailAddresses',
        'signing_redirect_url' => 'setSigningRedirectUrl',
        'template_ids' => 'setTemplateIds',
        'custom_fields' => 'setCustomFields',
        'attachments' => 'setAttachments',
        'response_data' => 'setResponseData',
        'signatures' => 'setSignatures',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'test_mode' => 'getTestMode',
        'signature_request_id' => 'getSignatureRequestId',
        'requester_email_address' => 'getRequesterEmailAddress',
        'title' => 'getTitle',
        'original_title' => 'getOriginalTitle',
        'subject' => 'getSubject',
        'message' => 'getMessage',
        'metadata' => 'getMetadata',
        'created_at' => 'getCreatedAt',
        'is_complete' => 'getIsComplete',
        'is_declined' => 'getIsDeclined',
        'has_error' => 'getHasError',
        'files_url' => 'getFilesUrl',
        'signing_url' => 'getSigningUrl',
        'details_url' => 'getDetailsUrl',
        'cc_email_addresses' => 'getCcEmailAddresses',
        'signing_redirect_url' => 'getSigningRedirectUrl',
        'template_ids' => 'getTemplateIds',
        'custom_fields' => 'getCustomFields',
        'attachments' => 'getAttachments',
        'response_data' => 'getResponseData',
        'signatures' => 'getSignatures',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['test_mode'] = $data['test_mode'] ?? false;
        $this->container['signature_request_id'] = $data['signature_request_id'] ?? null;
        $this->container['requester_email_address'] = $data['requester_email_address'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['original_title'] = $data['original_title'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['is_complete'] = $data['is_complete'] ?? null;
        $this->container['is_declined'] = $data['is_declined'] ?? null;
        $this->container['has_error'] = $data['has_error'] ?? null;
        $this->container['files_url'] = $data['files_url'] ?? null;
        $this->container['signing_url'] = $data['signing_url'] ?? null;
        $this->container['details_url'] = $data['details_url'] ?? null;
        $this->container['cc_email_addresses'] = $data['cc_email_addresses'] ?? null;
        $this->container['signing_redirect_url'] = $data['signing_redirect_url'] ?? null;
        $this->container['template_ids'] = $data['template_ids'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['response_data'] = $data['response_data'] ?? null;
        $this->container['signatures'] = $data['signatures'] ?? null;
    }

    public static function fromArray(array $data): SignatureRequestResponse
    {
        /** @var SignatureRequestResponse $obj */
        $obj = ObjectSerializer::deserialize(
            ObjectSerializer::instantiateFiles(static::class, $data),
            SignatureRequestResponse::class,
        );

        return $obj;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets test_mode
     *
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool|null $test_mode Whether this is a test signature request. Test requests have no legal value. Defaults to `false`.
     *
     * @return self
     */
    public function setTestMode(?bool $test_mode)
    {
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets signature_request_id
     *
     * @return string|null
     */
    public function getSignatureRequestId()
    {
        return $this->container['signature_request_id'];
    }

    /**
     * Sets signature_request_id
     *
     * @param string|null $signature_request_id the id of the SignatureRequest
     *
     * @return self
     */
    public function setSignatureRequestId(?string $signature_request_id)
    {
        $this->container['signature_request_id'] = $signature_request_id;

        return $this;
    }

    /**
     * Gets requester_email_address
     *
     * @return string|null
     */
    public function getRequesterEmailAddress()
    {
        return $this->container['requester_email_address'];
    }

    /**
     * Sets requester_email_address
     *
     * @param string|null $requester_email_address the email address of the initiator of the SignatureRequest
     *
     * @return self
     */
    public function setRequesterEmailAddress(?string $requester_email_address)
    {
        $this->container['requester_email_address'] = $requester_email_address;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title the title the specified Account uses for the SignatureRequest
     *
     * @return self
     */
    public function setTitle(?string $title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets original_title
     *
     * @return string|null
     */
    public function getOriginalTitle()
    {
        return $this->container['original_title'];
    }

    /**
     * Sets original_title
     *
     * @param string|null $original_title default Label for account
     *
     * @return self
     */
    public function setOriginalTitle(?string $original_title)
    {
        $this->container['original_title'] = $original_title;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject the subject in the email that was initially sent to the signers
     *
     * @return self
     */
    public function setSubject(?string $subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message the custom message in the email that was initially sent to the signers
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array|null $metadata the metadata attached to the signature request
     *
     * @return self
     */
    public function setMetadata(?array $metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at time the signature request was created
     *
     * @return self
     */
    public function setCreatedAt(?int $created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets is_complete
     *
     * @return bool|null
     */
    public function getIsComplete()
    {
        return $this->container['is_complete'];
    }

    /**
     * Sets is_complete
     *
     * @param bool|null $is_complete whether or not the SignatureRequest has been fully executed by all signers
     *
     * @return self
     */
    public function setIsComplete(?bool $is_complete)
    {
        $this->container['is_complete'] = $is_complete;

        return $this;
    }

    /**
     * Gets is_declined
     *
     * @return bool|null
     */
    public function getIsDeclined()
    {
        return $this->container['is_declined'];
    }

    /**
     * Sets is_declined
     *
     * @param bool|null $is_declined whether or not the SignatureRequest has been declined by a signer
     *
     * @return self
     */
    public function setIsDeclined(?bool $is_declined)
    {
        $this->container['is_declined'] = $is_declined;

        return $this;
    }

    /**
     * Gets has_error
     *
     * @return bool|null
     */
    public function getHasError()
    {
        return $this->container['has_error'];
    }

    /**
     * Sets has_error
     *
     * @param bool|null $has_error whether or not an error occurred (either during the creation of the SignatureRequest or during one of the signings)
     *
     * @return self
     */
    public function setHasError(?bool $has_error)
    {
        $this->container['has_error'] = $has_error;

        return $this;
    }

    /**
     * Gets files_url
     *
     * @return string|null
     */
    public function getFilesUrl()
    {
        return $this->container['files_url'];
    }

    /**
     * Sets files_url
     *
     * @param string|null $files_url the URL where a copy of the request's documents can be downloaded
     *
     * @return self
     */
    public function setFilesUrl(?string $files_url)
    {
        $this->container['files_url'] = $files_url;

        return $this;
    }

    /**
     * Gets signing_url
     *
     * @return string|null
     */
    public function getSigningUrl()
    {
        return $this->container['signing_url'];
    }

    /**
     * Sets signing_url
     *
     * @param string|null $signing_url The URL where a signer, after authenticating, can sign the documents. This should only be used by users with existing HelloSign accounts as they will be required to log in before signing.
     *
     * @return self
     */
    public function setSigningUrl(?string $signing_url)
    {
        $this->container['signing_url'] = $signing_url;

        return $this;
    }

    /**
     * Gets details_url
     *
     * @return string|null
     */
    public function getDetailsUrl()
    {
        return $this->container['details_url'];
    }

    /**
     * Sets details_url
     *
     * @param string|null $details_url the URL where the requester and the signers can view the current status of the SignatureRequest
     *
     * @return self
     */
    public function setDetailsUrl(?string $details_url)
    {
        $this->container['details_url'] = $details_url;

        return $this;
    }

    /**
     * Gets cc_email_addresses
     *
     * @return string[]|null
     */
    public function getCcEmailAddresses()
    {
        return $this->container['cc_email_addresses'];
    }

    /**
     * Sets cc_email_addresses
     *
     * @param string[]|null $cc_email_addresses A list of email addresses that were CCed on the SignatureRequest. They will receive a copy of the final PDF once all the signers have signed.
     *
     * @return self
     */
    public function setCcEmailAddresses(?array $cc_email_addresses)
    {
        $this->container['cc_email_addresses'] = $cc_email_addresses;

        return $this;
    }

    /**
     * Gets signing_redirect_url
     *
     * @return string|null
     */
    public function getSigningRedirectUrl()
    {
        return $this->container['signing_redirect_url'];
    }

    /**
     * Sets signing_redirect_url
     *
     * @param string|null $signing_redirect_url the URL you want the signer redirected to after they successfully sign
     *
     * @return self
     */
    public function setSigningRedirectUrl(?string $signing_redirect_url)
    {
        $this->container['signing_redirect_url'] = $signing_redirect_url;

        return $this;
    }

    /**
     * Gets template_ids
     *
     * @return string[]|null
     */
    public function getTemplateIds()
    {
        return $this->container['template_ids'];
    }

    /**
     * Sets template_ids
     *
     * @param string[]|null $template_ids templates IDs used in this SignatureRequest (if any)
     *
     * @return self
     */
    public function setTemplateIds(?array $template_ids)
    {
        $this->container['template_ids'] = $template_ids;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return SignatureRequestResponseCustomFieldBase[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param SignatureRequestResponseCustomFieldBase[]|null $custom_fields An array of Custom Field objects containing the name and type of each custom field.  * Text Field uses `SignatureRequestResponseCustomFieldText` * Checkbox Field uses `SignatureRequestResponseCustomFieldCheckbox`
     *
     * @return self
     */
    public function setCustomFields(?array $custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return SignatureRequestResponseAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param SignatureRequestResponseAttachment[]|null $attachments signer attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets response_data
     *
     * @return SignatureRequestResponseDataBase[]|null
     */
    public function getResponseData()
    {
        return $this->container['response_data'];
    }

    /**
     * Sets response_data
     *
     * @param SignatureRequestResponseDataBase[]|null $response_data an array of form field objects containing the name, value, and type of each textbox or checkmark field filled in by the signers
     *
     * @return self
     */
    public function setResponseData(?array $response_data)
    {
        $this->container['response_data'] = $response_data;

        return $this;
    }

    /**
     * Gets signatures
     *
     * @return SignatureRequestResponseSignatures[]|null
     */
    public function getSignatures()
    {
        return $this->container['signatures'];
    }

    /**
     * Sets signatures
     *
     * @param SignatureRequestResponseSignatures[]|null $signatures an array of signature objects, 1 for each signer
     *
     * @return self
     */
    public function setSignatures(?array $signatures)
    {
        $this->container['signatures'] = $signatures;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param mixed $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param mixed $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param mixed $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return scalar|object|array|null returns data which can be serialized by json_encode(), which is a value
     *                                  of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_UNESCAPED_SLASHES
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
