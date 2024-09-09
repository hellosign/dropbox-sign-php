<?php
/**
 * UnclaimedDraftResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @see     https://openapi-generator.tech
 */

/**
 * Dropbox Sign API
 *
 * Dropbox Sign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dropbox\Sign\Model;

use ArrayAccess;
use Dropbox\Sign\ObjectSerializer;
use InvalidArgumentException;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * UnclaimedDraftResponse Class Doc Comment
 *
 * @category Class
 * @description A group of documents that a user can take ownership of via the claim URL.
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UnclaimedDraftResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UnclaimedDraftResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'signature_request_id' => 'string',
        'claim_url' => 'string',
        'signing_redirect_url' => 'string',
        'requesting_redirect_url' => 'string',
        'expires_at' => 'int',
        'test_mode' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'signature_request_id' => null,
        'claim_url' => null,
        'signing_redirect_url' => null,
        'requesting_redirect_url' => null,
        'expires_at' => null,
        'test_mode' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'signature_request_id' => true,
        'claim_url' => false,
        'signing_redirect_url' => true,
        'requesting_redirect_url' => true,
        'expires_at' => true,
        'test_mode' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'signature_request_id' => 'signature_request_id',
        'claim_url' => 'claim_url',
        'signing_redirect_url' => 'signing_redirect_url',
        'requesting_redirect_url' => 'requesting_redirect_url',
        'expires_at' => 'expires_at',
        'test_mode' => 'test_mode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signature_request_id' => 'setSignatureRequestId',
        'claim_url' => 'setClaimUrl',
        'signing_redirect_url' => 'setSigningRedirectUrl',
        'requesting_redirect_url' => 'setRequestingRedirectUrl',
        'expires_at' => 'setExpiresAt',
        'test_mode' => 'setTestMode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signature_request_id' => 'getSignatureRequestId',
        'claim_url' => 'getClaimUrl',
        'signing_redirect_url' => 'getSigningRedirectUrl',
        'requesting_redirect_url' => 'getRequestingRedirectUrl',
        'expires_at' => 'getExpiresAt',
        'test_mode' => 'getTestMode',
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
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('signature_request_id', $data ?? [], null);
        $this->setIfExists('claim_url', $data ?? [], null);
        $this->setIfExists('signing_redirect_url', $data ?? [], null);
        $this->setIfExists('requesting_redirect_url', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('test_mode', $data ?? [], null);
    }

    /**
     * @deprecated use ::init()
     */
    public static function fromArray(array $data): UnclaimedDraftResponse
    {
        return self::init($data);
    }

    /**
     * Attempt to instantiate and hydrate a new instance of this class
     */
    public static function init(array $data): UnclaimedDraftResponse
    {
        /** @var UnclaimedDraftResponse */
        return ObjectSerializer::deserialize(
            $data,
            UnclaimedDraftResponse::class,
        );
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string|int|object|array|mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * @param string|null $signature_request_id the ID of the signature request that is represented by this UnclaimedDraft
     *
     * @return self
     */
    public function setSignatureRequestId(?string $signature_request_id)
    {
        if (is_null($signature_request_id)) {
            array_push($this->openAPINullablesSetToNull, 'signature_request_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature_request_id', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signature_request_id'] = $signature_request_id;

        return $this;
    }

    /**
     * Gets claim_url
     *
     * @return string|null
     */
    public function getClaimUrl()
    {
        return $this->container['claim_url'];
    }

    /**
     * Sets claim_url
     *
     * @param string|null $claim_url the URL to be used to claim this UnclaimedDraft
     *
     * @return self
     */
    public function setClaimUrl(?string $claim_url)
    {
        if (is_null($claim_url)) {
            throw new InvalidArgumentException('non-nullable claim_url cannot be null');
        }
        $this->container['claim_url'] = $claim_url;

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
        if (is_null($signing_redirect_url)) {
            array_push($this->openAPINullablesSetToNull, 'signing_redirect_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signing_redirect_url', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signing_redirect_url'] = $signing_redirect_url;

        return $this;
    }

    /**
     * Gets requesting_redirect_url
     *
     * @return string|null
     */
    public function getRequestingRedirectUrl()
    {
        return $this->container['requesting_redirect_url'];
    }

    /**
     * Sets requesting_redirect_url
     *
     * @param string|null $requesting_redirect_url The URL you want signers redirected to after they successfully request a signature (Will only be returned in the response if it is applicable to the request.).
     *
     * @return self
     */
    public function setRequestingRedirectUrl(?string $requesting_redirect_url)
    {
        if (is_null($requesting_redirect_url)) {
            array_push($this->openAPINullablesSetToNull, 'requesting_redirect_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('requesting_redirect_url', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['requesting_redirect_url'] = $requesting_redirect_url;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int|null $expires_at when the link expires
     *
     * @return self
     */
    public function setExpiresAt(?int $expires_at)
    {
        if (is_null($expires_at)) {
            array_push($this->openAPINullablesSetToNull, 'expires_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expires_at', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expires_at'] = $expires_at;

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
     * @param bool|null $test_mode Whether this is a test draft. Signature requests made from test drafts have no legal value.
     *
     * @return self
     */
    public function setTestMode(?bool $test_mode)
    {
        if (is_null($test_mode)) {
            throw new InvalidArgumentException('non-nullable test_mode cannot be null');
        }
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value): void
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
     * @param int $offset Offset
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
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
