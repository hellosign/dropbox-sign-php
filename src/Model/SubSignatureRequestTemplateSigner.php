<?php
/**
 * SubSignatureRequestTemplateSigner
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
use InvalidArgumentException;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * SubSignatureRequestTemplateSigner Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubSignatureRequestTemplateSigner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SubSignatureRequestTemplateSigner';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'role' => 'string',
        'name' => 'string',
        'email_address' => 'string',
        'pin' => 'string',
        'sms_phone_number' => 'string',
        'sms_phone_number_type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'role' => null,
        'name' => null,
        'email_address' => 'email',
        'pin' => null,
        'sms_phone_number' => null,
        'sms_phone_number_type' => null,
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
        'role' => 'role',
        'name' => 'name',
        'email_address' => 'email_address',
        'pin' => 'pin',
        'sms_phone_number' => 'sms_phone_number',
        'sms_phone_number_type' => 'sms_phone_number_type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role' => 'setRole',
        'name' => 'setName',
        'email_address' => 'setEmailAddress',
        'pin' => 'setPin',
        'sms_phone_number' => 'setSmsPhoneNumber',
        'sms_phone_number_type' => 'setSmsPhoneNumberType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role' => 'getRole',
        'name' => 'getName',
        'email_address' => 'getEmailAddress',
        'pin' => 'getPin',
        'sms_phone_number' => 'getSmsPhoneNumber',
        'sms_phone_number_type' => 'getSmsPhoneNumberType',
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

    public const SMS_PHONE_NUMBER_TYPE_AUTHENTICATION = 'authentication';
    public const SMS_PHONE_NUMBER_TYPE_DELIVERY = 'delivery';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSmsPhoneNumberTypeAllowableValues()
    {
        return [
            self::SMS_PHONE_NUMBER_TYPE_AUTHENTICATION,
            self::SMS_PHONE_NUMBER_TYPE_DELIVERY,
        ];
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
        $this->container['role'] = $data['role'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['pin'] = $data['pin'] ?? null;
        $this->container['sms_phone_number'] = $data['sms_phone_number'] ?? null;
        $this->container['sms_phone_number_type'] = $data['sms_phone_number_type'] ?? null;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): SubSignatureRequestTemplateSigner
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): SubSignatureRequestTemplateSigner
    {
        /** @var SubSignatureRequestTemplateSigner $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            SubSignatureRequestTemplateSigner::class,
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

        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['email_address'] === null) {
            $invalidProperties[] = "'email_address' can't be null";
        }
        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) > 12)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) < 4)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be bigger than or equal to 4.";
        }

        $allowedValues = $this->getSmsPhoneNumberTypeAllowableValues();
        if (!is_null($this->container['sms_phone_number_type']) && !in_array($this->container['sms_phone_number_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sms_phone_number_type', must be one of '%s'",
                $this->container['sms_phone_number_type'],
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
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role Must match an existing role in chosen Template(s). It's case-sensitive.
     *
     * @return self
     */
    public function setRole(string $role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name the name of the signer
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address the email address of the signer
     *
     * @return self
     */
    public function setEmailAddress(string $email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string|null
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string|null $pin the 4- to 12-character access code that will secure this signer's signature page
     *
     * @return self
     */
    public function setPin(?string $pin)
    {
        if (!is_null($pin) && (mb_strlen($pin) > 12)) {
            throw new InvalidArgumentException('invalid length for $pin when calling SubSignatureRequestTemplateSigner., must be smaller than or equal to 12.');
        }
        if (!is_null($pin) && (mb_strlen($pin) < 4)) {
            throw new InvalidArgumentException('invalid length for $pin when calling SubSignatureRequestTemplateSigner., must be bigger than or equal to 4.');
        }

        $this->container['pin'] = $pin;

        return $this;
    }

    /**
     * Gets sms_phone_number
     *
     * @return string|null
     */
    public function getSmsPhoneNumber()
    {
        return $this->container['sms_phone_number'];
    }

    /**
     * Sets sms_phone_number
     *
     * @param string|null $sms_phone_number An E.164 formatted phone number.  By using the feature, you agree you are responsible for obtaining a signer's consent to receive text messages from Dropbox Sign related to this signature request and confirm you have obtained such consent from all signers prior to enabling SMS delivery for this signature request. [Learn more](https://faq.hellosign.com/hc/en-us/articles/15815316468877-Dropbox-Sign-SMS-tools-add-on).  **NOTE:** Not available in test mode and requires a Standard plan or higher.
     *
     * @return self
     */
    public function setSmsPhoneNumber(?string $sms_phone_number)
    {
        $this->container['sms_phone_number'] = $sms_phone_number;

        return $this;
    }

    /**
     * Gets sms_phone_number_type
     *
     * @return string|null
     */
    public function getSmsPhoneNumberType()
    {
        return $this->container['sms_phone_number_type'];
    }

    /**
     * Sets sms_phone_number_type
     *
     * @param string|null $sms_phone_number_type Specifies the feature used with the `sms_phone_number`. Default `authentication`.  If `authentication`, signer is sent a verification code via SMS that is required to access the document.  If `delivery`, a link to complete the signature request is delivered via SMS (_and_ email).
     *
     * @return self
     */
    public function setSmsPhoneNumberType(?string $sms_phone_number_type)
    {
        $allowedValues = $this->getSmsPhoneNumberTypeAllowableValues();
        if (!is_null($sms_phone_number_type) && !in_array($sms_phone_number_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sms_phone_number_type', must be one of '%s'",
                    $sms_phone_number_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sms_phone_number_type'] = $sms_phone_number_type;

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
