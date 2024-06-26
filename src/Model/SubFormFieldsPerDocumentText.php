<?php
/**
 * SubFormFieldsPerDocumentText
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
 * SubFormFieldsPerDocumentText Class Doc Comment
 *
 * @category Class
 * @description This class extends &#x60;SubFormFieldsPerDocumentBase&#x60;.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubFormFieldsPerDocumentText extends SubFormFieldsPerDocumentBase
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SubFormFieldsPerDocumentText';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'type' => 'string',
        'placeholder' => 'string',
        'auto_fill_type' => 'string',
        'link_id' => 'string',
        'masked' => 'bool',
        'validation_type' => 'string',
        'validation_custom_regex' => 'string',
        'validation_custom_regex_format_label' => 'string',
        'content' => 'string',
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
        'placeholder' => null,
        'auto_fill_type' => null,
        'link_id' => null,
        'masked' => null,
        'validation_type' => null,
        'validation_custom_regex' => null,
        'validation_custom_regex_format_label' => null,
        'content' => null,
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
        'placeholder' => 'placeholder',
        'auto_fill_type' => 'auto_fill_type',
        'link_id' => 'link_id',
        'masked' => 'masked',
        'validation_type' => 'validation_type',
        'validation_custom_regex' => 'validation_custom_regex',
        'validation_custom_regex_format_label' => 'validation_custom_regex_format_label',
        'content' => 'content',
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
        'placeholder' => 'setPlaceholder',
        'auto_fill_type' => 'setAutoFillType',
        'link_id' => 'setLinkId',
        'masked' => 'setMasked',
        'validation_type' => 'setValidationType',
        'validation_custom_regex' => 'setValidationCustomRegex',
        'validation_custom_regex_format_label' => 'setValidationCustomRegexFormatLabel',
        'content' => 'setContent',
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
        'placeholder' => 'getPlaceholder',
        'auto_fill_type' => 'getAutoFillType',
        'link_id' => 'getLinkId',
        'masked' => 'getMasked',
        'validation_type' => 'getValidationType',
        'validation_custom_regex' => 'getValidationCustomRegex',
        'validation_custom_regex_format_label' => 'getValidationCustomRegexFormatLabel',
        'content' => 'getContent',
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

    public const VALIDATION_TYPE_NUMBERS_ONLY = 'numbers_only';
    public const VALIDATION_TYPE_LETTERS_ONLY = 'letters_only';
    public const VALIDATION_TYPE_PHONE_NUMBER = 'phone_number';
    public const VALIDATION_TYPE_BANK_ROUTING_NUMBER = 'bank_routing_number';
    public const VALIDATION_TYPE_BANK_ACCOUNT_NUMBER = 'bank_account_number';
    public const VALIDATION_TYPE_EMAIL_ADDRESS = 'email_address';
    public const VALIDATION_TYPE_ZIP_CODE = 'zip_code';
    public const VALIDATION_TYPE_SOCIAL_SECURITY_NUMBER = 'social_security_number';
    public const VALIDATION_TYPE_EMPLOYER_IDENTIFICATION_NUMBER = 'employer_identification_number';
    public const VALIDATION_TYPE_CUSTOM_REGEX = 'custom_regex';
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
    public function getValidationTypeAllowableValues()
    {
        return [
            self::VALIDATION_TYPE_NUMBERS_ONLY,
            self::VALIDATION_TYPE_LETTERS_ONLY,
            self::VALIDATION_TYPE_PHONE_NUMBER,
            self::VALIDATION_TYPE_BANK_ROUTING_NUMBER,
            self::VALIDATION_TYPE_BANK_ACCOUNT_NUMBER,
            self::VALIDATION_TYPE_EMAIL_ADDRESS,
            self::VALIDATION_TYPE_ZIP_CODE,
            self::VALIDATION_TYPE_SOCIAL_SECURITY_NUMBER,
            self::VALIDATION_TYPE_EMPLOYER_IDENTIFICATION_NUMBER,
            self::VALIDATION_TYPE_CUSTOM_REGEX,
        ];
    }

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

        $this->container['type'] = $data['type'] ?? 'text';
        $this->container['placeholder'] = $data['placeholder'] ?? null;
        $this->container['auto_fill_type'] = $data['auto_fill_type'] ?? null;
        $this->container['link_id'] = $data['link_id'] ?? null;
        $this->container['masked'] = $data['masked'] ?? null;
        $this->container['validation_type'] = $data['validation_type'] ?? null;
        $this->container['validation_custom_regex'] = $data['validation_custom_regex'] ?? null;
        $this->container['validation_custom_regex_format_label'] = $data['validation_custom_regex_format_label'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['font_family'] = $data['font_family'] ?? null;
        $this->container['font_size'] = $data['font_size'] ?? 12;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): SubFormFieldsPerDocumentText
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): SubFormFieldsPerDocumentText
    {
        /** @var SubFormFieldsPerDocumentText $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            SubFormFieldsPerDocumentText::class,
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
        $allowedValues = $this->getValidationTypeAllowableValues();
        if (!is_null($this->container['validation_type']) && !in_array($this->container['validation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'validation_type', must be one of '%s'",
                $this->container['validation_type'],
                implode("', '", $allowedValues)
            );
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
     * @param string $type A text input field. Use the `SubFormFieldsPerDocumentText` class.
     *
     * @return self
     */
    public function setType(string $type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return string|null
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param string|null $placeholder placeholder value for text field
     *
     * @return self
     */
    public function setPlaceholder(?string $placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets auto_fill_type
     *
     * @return string|null
     */
    public function getAutoFillType()
    {
        return $this->container['auto_fill_type'];
    }

    /**
     * Sets auto_fill_type
     *
     * @param string|null $auto_fill_type Auto fill type for populating fields automatically. Check out the list of [auto fill types](/api/reference/constants/#auto-fill-types) to learn more about the possible values.
     *
     * @return self
     */
    public function setAutoFillType(?string $auto_fill_type)
    {
        $this->container['auto_fill_type'] = $auto_fill_type;

        return $this;
    }

    /**
     * Gets link_id
     *
     * @return string|null
     */
    public function getLinkId()
    {
        return $this->container['link_id'];
    }

    /**
     * Sets link_id
     *
     * @param string|null $link_id Link two or more text fields. Enter data into one linked text field, which automatically fill all other linked text fields.
     *
     * @return self
     */
    public function setLinkId(?string $link_id)
    {
        $this->container['link_id'] = $link_id;

        return $this;
    }

    /**
     * Gets masked
     *
     * @return bool|null
     */
    public function getMasked()
    {
        return $this->container['masked'];
    }

    /**
     * Sets masked
     *
     * @param bool|null $masked Masks entered data. For more information see [Masking sensitive information](https://faq.hellosign.com/hc/en-us/articles/360040742811-Masking-sensitive-information). `true` for masking the data in a text field, otherwise `false`.
     *
     * @return self
     */
    public function setMasked(?bool $masked)
    {
        $this->container['masked'] = $masked;

        return $this;
    }

    /**
     * Gets validation_type
     *
     * @return string|null
     */
    public function getValidationType()
    {
        return $this->container['validation_type'];
    }

    /**
     * Sets validation_type
     *
     * @param string|null $validation_type Each text field may contain a `validation_type` parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.  **NOTE:** When using `custom_regex` you are required to pass a second parameter `validation_custom_regex` and you can optionally provide `validation_custom_regex_format_label` for the error message the user will see in case of an invalid value.
     *
     * @return self
     */
    public function setValidationType(?string $validation_type)
    {
        $allowedValues = $this->getValidationTypeAllowableValues();
        if (!is_null($validation_type) && !in_array($validation_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'validation_type', must be one of '%s'",
                    $validation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validation_type'] = $validation_type;

        return $this;
    }

    /**
     * Gets validation_custom_regex
     *
     * @return string|null
     */
    public function getValidationCustomRegex()
    {
        return $this->container['validation_custom_regex'];
    }

    /**
     * Sets validation_custom_regex
     *
     * @param string|null $validation_custom_regex validation_custom_regex
     *
     * @return self
     */
    public function setValidationCustomRegex(?string $validation_custom_regex)
    {
        $this->container['validation_custom_regex'] = $validation_custom_regex;

        return $this;
    }

    /**
     * Gets validation_custom_regex_format_label
     *
     * @return string|null
     */
    public function getValidationCustomRegexFormatLabel()
    {
        return $this->container['validation_custom_regex_format_label'];
    }

    /**
     * Sets validation_custom_regex_format_label
     *
     * @param string|null $validation_custom_regex_format_label validation_custom_regex_format_label
     *
     * @return self
     */
    public function setValidationCustomRegexFormatLabel(?string $validation_custom_regex_format_label)
    {
        $this->container['validation_custom_regex_format_label'] = $validation_custom_regex_format_label;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content Content of a `me_now` text field
     *
     * @return self
     */
    public function setContent(?string $content)
    {
        $this->container['content'] = $content;

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
     * @param int|null $font_size The initial px font size for the field contents. Can be any integer value between `7` and `49`.  **NOTE:** Font size may be reduced during processing in order to fit the contents within the dimensions of the field.
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
