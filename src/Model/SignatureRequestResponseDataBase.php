<?php
/**
 * SignatureRequestResponseDataBase
 *
 * PHP version 7.4
 *
 * @category Class
 * @author   OpenAPI Generator team
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
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dropbox\Sign\Model;

use ArrayAccess;
use Dropbox\Sign\ObjectSerializer;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * SignatureRequestResponseDataBase Class Doc Comment
 *
 * @category Class
 * @description An array of form field objects containing the name, value, and type of each textbox or checkmark field filled in by the signers.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 * @internal This class should not be instantiated directly
 */
abstract class SignatureRequestResponseDataBase implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = 'type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SignatureRequestResponseDataBase';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'api_id' => 'string',
        'signature_id' => 'string',
        'name' => 'string',
        'required' => 'bool',
        'type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'api_id' => null,
        'signature_id' => null,
        'name' => null,
        'required' => null,
        'type' => null,
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
        'api_id' => 'api_id',
        'signature_id' => 'signature_id',
        'name' => 'name',
        'required' => 'required',
        'type' => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_id' => 'setApiId',
        'signature_id' => 'setSignatureId',
        'name' => 'setName',
        'required' => 'setRequired',
        'type' => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_id' => 'getApiId',
        'signature_id' => 'getSignatureId',
        'name' => 'getName',
        'required' => 'getRequired',
        'type' => 'getType',
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
        $this->container['api_id'] = $data['api_id'] ?? null;
        $this->container['signature_id'] = $data['signature_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['required'] = $data['required'] ?? null;
        $this->container['type'] = $data['type'] ?? null;

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
    }

    public static function discriminatorClassName(array $data): ?string
    {
        if (!array_key_exists('type', $data)) {
            return null;
        }

        if ($data['type'] === 'checkbox') {
            return SignatureRequestResponseDataValueCheckbox::class;
        }
        if ($data['type'] === 'checkbox-merge') {
            return SignatureRequestResponseDataValueCheckboxMerge::class;
        }
        if ($data['type'] === 'date_signed') {
            return SignatureRequestResponseDataValueDateSigned::class;
        }
        if ($data['type'] === 'dropdown') {
            return SignatureRequestResponseDataValueDropdown::class;
        }
        if ($data['type'] === 'initials') {
            return SignatureRequestResponseDataValueInitials::class;
        }
        if ($data['type'] === 'radio') {
            return SignatureRequestResponseDataValueRadio::class;
        }
        if ($data['type'] === 'signature') {
            return SignatureRequestResponseDataValueSignature::class;
        }
        if ($data['type'] === 'text') {
            return SignatureRequestResponseDataValueText::class;
        }
        if ($data['type'] === 'text-merge') {
            return SignatureRequestResponseDataValueTextMerge::class;
        }

        return null;
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
     * Gets api_id
     *
     * @return string|null
     */
    public function getApiId()
    {
        return $this->container['api_id'];
    }

    /**
     * Sets api_id
     *
     * @param string|null $api_id the unique ID for this field
     *
     * @return self
     */
    public function setApiId(?string $api_id)
    {
        $this->container['api_id'] = $api_id;

        return $this;
    }

    /**
     * Gets signature_id
     *
     * @return string|null
     */
    public function getSignatureId()
    {
        return $this->container['signature_id'];
    }

    /**
     * Sets signature_id
     *
     * @param string|null $signature_id the ID of the signature to which this response is linked
     *
     * @return self
     */
    public function setSignatureId(?string $signature_id)
    {
        $this->container['signature_id'] = $signature_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name the name of the form field
     *
     * @return self
     */
    public function setName(?string $name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required a boolean value denoting if this field is required
     *
     * @return self
     */
    public function setRequired(?bool $required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType(?string $type)
    {
        $this->container['type'] = $type;

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
