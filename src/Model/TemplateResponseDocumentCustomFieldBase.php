<?php
/**
 * TemplateResponseDocumentCustomFieldBase
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
 * TemplateResponseDocumentCustomFieldBase Class Doc Comment
 *
 * @category Class
 * @description An array of Form Field objects containing the name and type of each named field.
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TemplateResponseDocumentCustomFieldBase implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = 'type';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TemplateResponseDocumentCustomFieldBase';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'type' => 'string',
        'api_id' => 'string',
        'name' => 'string',
        'signer' => 'string',
        'x' => 'int',
        'y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'required' => 'bool',
        'group' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'type' => null,
        'api_id' => null,
        'name' => null,
        'signer' => null,
        'x' => null,
        'y' => null,
        'width' => null,
        'height' => null,
        'required' => null,
        'group' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'type' => false,
        'api_id' => false,
        'name' => false,
        'signer' => true,
        'x' => false,
        'y' => false,
        'width' => false,
        'height' => false,
        'required' => false,
        'group' => true,
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
        'type' => 'type',
        'api_id' => 'api_id',
        'name' => 'name',
        'signer' => 'signer',
        'x' => 'x',
        'y' => 'y',
        'width' => 'width',
        'height' => 'height',
        'required' => 'required',
        'group' => 'group',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'api_id' => 'setApiId',
        'name' => 'setName',
        'signer' => 'setSigner',
        'x' => 'setX',
        'y' => 'setY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'required' => 'setRequired',
        'group' => 'setGroup',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'api_id' => 'getApiId',
        'name' => 'getName',
        'signer' => 'getSigner',
        'x' => 'getX',
        'y' => 'getY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'required' => 'getRequired',
        'group' => 'getGroup',
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('api_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('signer', $data ?? [], null);
        $this->setIfExists('x', $data ?? [], null);
        $this->setIfExists('y', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
    }

    public static function discriminatorClassName(array $data): ?string
    {
        if (!array_key_exists('type', $data)) {
            return null;
        }

        if ($data['type'] === 'checkbox') {
            return TemplateResponseDocumentCustomFieldCheckbox::class;
        }
        if ($data['type'] === 'text') {
            return TemplateResponseDocumentCustomFieldText::class;
        }

        return null;
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
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType(string $type)
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
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
        if (is_null($api_id)) {
            throw new InvalidArgumentException('non-nullable api_id cannot be null');
        }
        $this->container['api_id'] = $api_id;

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
     * @param string|null $name the name of the Custom Field
     *
     * @return self
     */
    public function setName(?string $name)
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string|null
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string|null $signer The signer of the Custom Field. Can be `null` if field is a merge field (assigned to Sender).
     *
     * @return self
     */
    public function setSigner(?string $signer)
    {
        if (is_null($signer)) {
            array_push($this->openAPINullablesSetToNull, 'signer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signer', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signer'] = $signer;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int|null $x the horizontal offset in pixels for this form field
     *
     * @return self
     */
    public function setX(?int $x)
    {
        if (is_null($x)) {
            throw new InvalidArgumentException('non-nullable x cannot be null');
        }
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int|null $y the vertical offset in pixels for this form field
     *
     * @return self
     */
    public function setY(?int $y)
    {
        if (is_null($y)) {
            throw new InvalidArgumentException('non-nullable y cannot be null');
        }
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width the width in pixels of this form field
     *
     * @return self
     */
    public function setWidth(?int $width)
    {
        if (is_null($width)) {
            throw new InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height the height in pixels of this form field
     *
     * @return self
     */
    public function setHeight(?int $height)
    {
        if (is_null($height)) {
            throw new InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

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
     * @param bool|null $required boolean showing whether or not this field is required
     *
     * @return self
     */
    public function setRequired(?bool $required)
    {
        if (is_null($required)) {
            throw new InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group The name of the group this field is in. If this field is not a group, this defaults to `null`.
     *
     * @return self
     */
    public function setGroup(?string $group)
    {
        if (is_null($group)) {
            array_push($this->openAPINullablesSetToNull, 'group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['group'] = $group;

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
