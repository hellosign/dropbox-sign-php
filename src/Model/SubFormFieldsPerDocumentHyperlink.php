<?php
/**
 * SubFormFieldsPerDocumentHyperlink
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

use Dropbox\Sign\ObjectSerializer;
use InvalidArgumentException;
use ReturnTypeWillChange;

/**
 * SubFormFieldsPerDocumentHyperlink Class Doc Comment
 *
 * @category Class
 * @description This class extends &#x60;SubFormFieldsPerDocumentBase&#x60;.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubFormFieldsPerDocumentHyperlink extends SubFormFieldsPerDocumentBase
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SubFormFieldsPerDocumentHyperlink';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'type' => 'string',
        'content' => 'string',
        'content_url' => 'string',
        'font_family' => 'string',
        'font_size' => 'int',
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
        'content' => null,
        'content_url' => null,
        'font_family' => null,
        'font_size' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'content' => 'content',
        'content_url' => 'content_url',
        'font_family' => 'font_family',
        'font_size' => 'font_size',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'content' => 'setContent',
        'content_url' => 'setContentUrl',
        'font_family' => 'setFontFamily',
        'font_size' => 'setFontSize',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'content' => 'getContent',
        'content_url' => 'getContentUrl',
        'font_family' => 'getFontFamily',
        'font_size' => 'getFontSize',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    public const FONT_FAMILY_HELVETICA = 'helvetica';
    public const FONT_FAMILY_ARIAL = 'arial';
    public const FONT_FAMILY_COURIER = 'courier';
    public const FONT_FAMILY_CALIBRI = 'calibri';
    public const FONT_FAMILY_CAMBRIA = 'cambria';
    public const FONT_FAMILY_GEORGIA = 'georgia';
    public const FONT_FAMILY_TIMES = 'times';
    public const FONT_FAMILY_TREBUCHET = 'trebuchet';
    public const FONT_FAMILY_VERDANA = 'verdana';
    public const FONT_FAMILY_ROBOTO = 'roboto';
    public const FONT_FAMILY_ROBOTO_MONO = 'robotoMono';
    public const FONT_FAMILY_NOTO_SANS = 'notoSans';
    public const FONT_FAMILY_NOTO_SERIF = 'notoSerif';
    public const FONT_FAMILY_NOTO_CJK_JP_REGULAR = 'notoCJK-JP-Regular';
    public const FONT_FAMILY_NOTO_HEBREW_REGULAR = 'notoHebrew-Regular';
    public const FONT_FAMILY_NOTO_SAN_THAI_MERGED = 'notoSanThaiMerged';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFontFamilyAllowableValues()
    {
        return [
            self::FONT_FAMILY_HELVETICA,
            self::FONT_FAMILY_ARIAL,
            self::FONT_FAMILY_COURIER,
            self::FONT_FAMILY_CALIBRI,
            self::FONT_FAMILY_CAMBRIA,
            self::FONT_FAMILY_GEORGIA,
            self::FONT_FAMILY_TIMES,
            self::FONT_FAMILY_TREBUCHET,
            self::FONT_FAMILY_VERDANA,
            self::FONT_FAMILY_ROBOTO,
            self::FONT_FAMILY_ROBOTO_MONO,
            self::FONT_FAMILY_NOTO_SANS,
            self::FONT_FAMILY_NOTO_SERIF,
            self::FONT_FAMILY_NOTO_CJK_JP_REGULAR,
            self::FONT_FAMILY_NOTO_HEBREW_REGULAR,
            self::FONT_FAMILY_NOTO_SAN_THAI_MERGED,
        ];
    }

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['type'] = $data['type'] ?? 'hyperlink';
        $this->container['content'] = $data['content'] ?? null;
        $this->container['content_url'] = $data['content_url'] ?? null;
        $this->container['font_family'] = $data['font_family'] ?? null;
        $this->container['font_size'] = $data['font_size'] ?? 12;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): SubFormFieldsPerDocumentHyperlink
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): SubFormFieldsPerDocumentHyperlink
    {
        /** @var SubFormFieldsPerDocumentHyperlink $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            SubFormFieldsPerDocumentHyperlink::class,
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
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['content_url'] === null) {
            $invalidProperties[] = "'content_url' can't be null";
        }
        $allowedValues = $this->getFontFamilyAllowableValues();
        if (!is_null($this->container['font_family']) && !in_array($this->container['font_family'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'font_family', must be one of '%s'",
                $this->container['font_family'],
                implode("', '", $allowedValues)
            );
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
     * @param string $type A hyperlink field. Use the `SubFormFieldsPerDocumentHyperlink` class.
     *
     * @return self
     */
    public function setType(string $type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content link Text
     *
     * @return self
     */
    public function setContent(string $content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_url
     *
     * @return string
     */
    public function getContentUrl()
    {
        return $this->container['content_url'];
    }

    /**
     * Sets content_url
     *
     * @param string $content_url link URL
     *
     * @return self
     */
    public function setContentUrl(string $content_url)
    {
        $this->container['content_url'] = $content_url;

        return $this;
    }

    /**
     * Gets font_family
     *
     * @return string|null
     */
    public function getFontFamily()
    {
        return $this->container['font_family'];
    }

    /**
     * Sets font_family
     *
     * @param string|null $font_family font family for the field
     *
     * @return self
     */
    public function setFontFamily(?string $font_family)
    {
        $allowedValues = $this->getFontFamilyAllowableValues();
        if (!is_null($font_family) && !in_array($font_family, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'font_family', must be one of '%s'",
                    $font_family,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['font_family'] = $font_family;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return int|null
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param int|null $font_size The initial px font size for the field contents. Can be any integer value between `7` and `49`.  **NOTE**: Font size may be reduced during processing in order to fit the contents within the dimensions of the field.
     *
     * @return self
     */
    public function setFontSize(?int $font_size)
    {
        $this->container['font_size'] = $font_size;

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
