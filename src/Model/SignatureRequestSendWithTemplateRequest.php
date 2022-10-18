<?php
/**
 * SignatureRequestSendWithTemplateRequest
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
use InvalidArgumentException;
use JsonSerializable;
use ReturnTypeWillChange;
use SplFileObject;

/**
 * SignatureRequestSendWithTemplateRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SignatureRequestSendWithTemplateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SignatureRequestSendWithTemplateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'template_ids' => 'string[]',
        'signers' => '\HelloSignSDK\Model\SubSignatureRequestTemplateSigner[]',
        'allow_decline' => 'bool',
        'ccs' => '\HelloSignSDK\Model\SubCC[]',
        'client_id' => 'string',
        'custom_fields' => '\HelloSignSDK\Model\SubCustomField[]',
        'file' => '\SplFileObject[]',
        'file_url' => 'string[]',
        'is_qualified_signature' => 'bool',
        'message' => 'string',
        'metadata' => 'array<string,mixed>',
        'signing_options' => '\HelloSignSDK\Model\SubSigningOptions',
        'signing_redirect_url' => 'string',
        'subject' => 'string',
        'test_mode' => 'bool',
        'title' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'template_ids' => null,
        'signers' => null,
        'allow_decline' => null,
        'ccs' => null,
        'client_id' => null,
        'custom_fields' => null,
        'file' => 'binary',
        'file_url' => null,
        'is_qualified_signature' => null,
        'message' => null,
        'metadata' => null,
        'signing_options' => null,
        'signing_redirect_url' => null,
        'subject' => null,
        'test_mode' => null,
        'title' => null,
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
        'template_ids' => 'template_ids',
        'signers' => 'signers',
        'allow_decline' => 'allow_decline',
        'ccs' => 'ccs',
        'client_id' => 'client_id',
        'custom_fields' => 'custom_fields',
        'file' => 'file',
        'file_url' => 'file_url',
        'is_qualified_signature' => 'is_qualified_signature',
        'message' => 'message',
        'metadata' => 'metadata',
        'signing_options' => 'signing_options',
        'signing_redirect_url' => 'signing_redirect_url',
        'subject' => 'subject',
        'test_mode' => 'test_mode',
        'title' => 'title',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_ids' => 'setTemplateIds',
        'signers' => 'setSigners',
        'allow_decline' => 'setAllowDecline',
        'ccs' => 'setCcs',
        'client_id' => 'setClientId',
        'custom_fields' => 'setCustomFields',
        'file' => 'setFile',
        'file_url' => 'setFileUrl',
        'is_qualified_signature' => 'setIsQualifiedSignature',
        'message' => 'setMessage',
        'metadata' => 'setMetadata',
        'signing_options' => 'setSigningOptions',
        'signing_redirect_url' => 'setSigningRedirectUrl',
        'subject' => 'setSubject',
        'test_mode' => 'setTestMode',
        'title' => 'setTitle',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_ids' => 'getTemplateIds',
        'signers' => 'getSigners',
        'allow_decline' => 'getAllowDecline',
        'ccs' => 'getCcs',
        'client_id' => 'getClientId',
        'custom_fields' => 'getCustomFields',
        'file' => 'getFile',
        'file_url' => 'getFileUrl',
        'is_qualified_signature' => 'getIsQualifiedSignature',
        'message' => 'getMessage',
        'metadata' => 'getMetadata',
        'signing_options' => 'getSigningOptions',
        'signing_redirect_url' => 'getSigningRedirectUrl',
        'subject' => 'getSubject',
        'test_mode' => 'getTestMode',
        'title' => 'getTitle',
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
        $this->container['template_ids'] = $data['template_ids'] ?? null;
        $this->container['signers'] = $data['signers'] ?? null;
        $this->container['allow_decline'] = $data['allow_decline'] ?? false;
        $this->container['ccs'] = $data['ccs'] ?? null;
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['file'] = $data['file'] ?? null;
        $this->container['file_url'] = $data['file_url'] ?? null;
        $this->container['is_qualified_signature'] = $data['is_qualified_signature'] ?? false;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['signing_options'] = $data['signing_options'] ?? null;
        $this->container['signing_redirect_url'] = $data['signing_redirect_url'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? false;
        $this->container['title'] = $data['title'] ?? null;
    }

    public static function fromArray(array $data): SignatureRequestSendWithTemplateRequest
    {
        /** @var SignatureRequestSendWithTemplateRequest $obj */
        $obj = ObjectSerializer::deserialize(
            ObjectSerializer::instantiateFiles(static::class, $data),
            SignatureRequestSendWithTemplateRequest::class,
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

        if ($this->container['template_ids'] === null) {
            $invalidProperties[] = "'template_ids' can't be null";
        }
        if ($this->container['signers'] === null) {
            $invalidProperties[] = "'signers' can't be null";
        }
        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 5000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 255)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 255)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }

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
     * Gets template_ids
     *
     * @return string[]
     */
    public function getTemplateIds()
    {
        return $this->container['template_ids'];
    }

    /**
     * Sets template_ids
     *
     * @param string[] $template_ids use `template_ids` to create a SignatureRequest from one or more templates, in the order in which the template will be used
     *
     * @return self
     */
    public function setTemplateIds(array $template_ids)
    {
        $this->container['template_ids'] = $template_ids;

        return $this;
    }

    /**
     * Gets signers
     *
     * @return SubSignatureRequestTemplateSigner[]
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param SubSignatureRequestTemplateSigner[] $signers add Signers to your Templated-based Signature Request
     *
     * @return self
     */
    public function setSigners(array $signers)
    {
        $this->container['signers'] = $signers;

        return $this;
    }

    /**
     * Gets allow_decline
     *
     * @return bool|null
     */
    public function getAllowDecline()
    {
        return $this->container['allow_decline'];
    }

    /**
     * Sets allow_decline
     *
     * @param bool|null $allow_decline Allows signers to decline to sign a document if `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setAllowDecline(?bool $allow_decline)
    {
        $this->container['allow_decline'] = $allow_decline;

        return $this;
    }

    /**
     * Gets ccs
     *
     * @return SubCC[]|null
     */
    public function getCcs()
    {
        return $this->container['ccs'];
    }

    /**
     * Sets ccs
     *
     * @param SubCC[]|null $ccs Add CC email recipients. Required when a CC role exists for the Template.
     *
     * @return self
     */
    public function setCcs(?array $ccs)
    {
        $this->container['ccs'] = $ccs;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id Client id of the app to associate with the signature request. Used to apply the branding and callback url defined for the app.
     *
     * @return self
     */
    public function setClientId(?string $client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return SubCustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param SubCustomField[]|null $custom_fields An array defining values and options for custom fields. Required when a custom field exists in the Template.
     *
     * @return self
     */
    public function setCustomFields(?array $custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets file
     *
     * @return SplFileObject[]|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param SplFileObject[]|null $file Use `file[]` to indicate the uploaded file(s) to send for signature.  This endpoint requires either **file** or **file_url[]**, but not both.
     *
     * @return self
     */
    public function setFile(?array $file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_url
     *
     * @return string[]|null
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param string[]|null $file_url Use `file_url[]` to have HelloSign download the file(s) to send for signature.  This endpoint requires either **file** or **file_url[]**, but not both.
     *
     * @return self
     */
    public function setFileUrl(?array $file_url)
    {
        $this->container['file_url'] = $file_url;

        return $this;
    }

    /**
     * Gets is_qualified_signature
     *
     * @return bool|null
     */
    public function getIsQualifiedSignature()
    {
        return $this->container['is_qualified_signature'];
    }

    /**
     * Sets is_qualified_signature
     *
     * @param bool|null $is_qualified_signature Send with a value of `true` if you wish to enable [Qualified Electronic Signatures](https://www.hellosign.com/features/qualified-electronic-signatures) (QES), which requires a face-to-face call to verify the signer's identity.<br> **Note**: QES is only available on the Premium API plan as an add-on purchase. Cannot be used in `test_mode`. Only works on requests with one signer.
     *
     * @return self
     */
    public function setIsQualifiedSignature(?bool $is_qualified_signature)
    {
        $this->container['is_qualified_signature'] = $is_qualified_signature;

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
     * @param string|null $message the custom message in the email that will be sent to the signers
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        if (!is_null($message) && (mb_strlen($message) > 5000)) {
            throw new InvalidArgumentException('invalid length for $message when calling SignatureRequestSendWithTemplateRequest., must be smaller than or equal to 5000.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer's order number for look up when receiving events for the signature request.  Each request can include up to 10 metadata keys (or 50 nested metadata keys), with key names up to 40 characters long and values up to 1000 characters long.
     *
     * @return self
     */
    public function setMetadata(?array $metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets signing_options
     *
     * @return SubSigningOptions|null
     */
    public function getSigningOptions()
    {
        return $this->container['signing_options'];
    }

    /**
     * Sets signing_options
     *
     * @param SubSigningOptions|null $signing_options signing_options
     *
     * @return self
     */
    public function setSigningOptions(?SubSigningOptions $signing_options)
    {
        $this->container['signing_options'] = $signing_options;

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
     * @param string|null $signing_redirect_url the URL you want signers redirected to after they successfully sign
     *
     * @return self
     */
    public function setSigningRedirectUrl(?string $signing_redirect_url)
    {
        $this->container['signing_redirect_url'] = $signing_redirect_url;

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
     * @param string|null $subject the subject in the email that will be sent to the signers
     *
     * @return self
     */
    public function setSubject(?string $subject)
    {
        if (!is_null($subject) && (mb_strlen($subject) > 255)) {
            throw new InvalidArgumentException('invalid length for $subject when calling SignatureRequestSendWithTemplateRequest., must be smaller than or equal to 255.');
        }

        $this->container['subject'] = $subject;

        return $this;
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
     * @param bool|null $test_mode Whether this is a test, the signature request will not be legally binding if set to `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setTestMode(?bool $test_mode)
    {
        $this->container['test_mode'] = $test_mode;

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
     * @param string|null $title the title you want to assign to the SignatureRequest
     *
     * @return self
     */
    public function setTitle(?string $title)
    {
        if (!is_null($title) && (mb_strlen($title) > 255)) {
            throw new InvalidArgumentException('invalid length for $title when calling SignatureRequestSendWithTemplateRequest., must be smaller than or equal to 255.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return bool
     */
    #[ReturnTypeWillChange]
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
    #[ReturnTypeWillChange]
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
    #[ReturnTypeWillChange]
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
    #[ReturnTypeWillChange]
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
    #[ReturnTypeWillChange]
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
