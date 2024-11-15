<?php
/**
 * ListPriceListsRequestFilter
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PriceList Service
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: info@gemini-commerce.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ListPriceListsRequestFilter Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListPriceListsRequestFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListPriceListsRequestFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'name' => 'string',
        'description' => 'string',
        'is_active' => 'bool',
        'is_default' => 'bool',
        'currency_filter' => '\OpenAPI\Client\Model\PricelistCurrencyFilter',
        'vat_included' => 'bool',
        'delivered_duty_paid' => 'bool',
        'segments_filter' => '\OpenAPI\Client\Model\PricelistSegmentFilter',
        'markets_filter' => '\OpenAPI\Client\Model\PricelistMarketFilter',
        'channels_filter' => '\OpenAPI\Client\Model\PricelistChannelFilter',
        'type_filter' => '\OpenAPI\Client\Model\PricelistPriceListTypeFilter',
        'is_system' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'description' => null,
        'is_active' => null,
        'is_default' => null,
        'currency_filter' => null,
        'vat_included' => null,
        'delivered_duty_paid' => null,
        'segments_filter' => null,
        'markets_filter' => null,
        'channels_filter' => null,
        'type_filter' => null,
        'is_system' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'name' => false,
        'description' => false,
        'is_active' => false,
        'is_default' => false,
        'currency_filter' => false,
        'vat_included' => false,
        'delivered_duty_paid' => false,
        'segments_filter' => false,
        'markets_filter' => false,
        'channels_filter' => false,
        'type_filter' => false,
        'is_system' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
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
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
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
        'code' => 'code',
        'name' => 'name',
        'description' => 'description',
        'is_active' => 'isActive',
        'is_default' => 'isDefault',
        'currency_filter' => 'currencyFilter',
        'vat_included' => 'vatIncluded',
        'delivered_duty_paid' => 'deliveredDutyPaid',
        'segments_filter' => 'segmentsFilter',
        'markets_filter' => 'marketsFilter',
        'channels_filter' => 'channelsFilter',
        'type_filter' => 'typeFilter',
        'is_system' => 'isSystem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'description' => 'setDescription',
        'is_active' => 'setIsActive',
        'is_default' => 'setIsDefault',
        'currency_filter' => 'setCurrencyFilter',
        'vat_included' => 'setVatIncluded',
        'delivered_duty_paid' => 'setDeliveredDutyPaid',
        'segments_filter' => 'setSegmentsFilter',
        'markets_filter' => 'setMarketsFilter',
        'channels_filter' => 'setChannelsFilter',
        'type_filter' => 'setTypeFilter',
        'is_system' => 'setIsSystem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'description' => 'getDescription',
        'is_active' => 'getIsActive',
        'is_default' => 'getIsDefault',
        'currency_filter' => 'getCurrencyFilter',
        'vat_included' => 'getVatIncluded',
        'delivered_duty_paid' => 'getDeliveredDutyPaid',
        'segments_filter' => 'getSegmentsFilter',
        'markets_filter' => 'getMarketsFilter',
        'channels_filter' => 'getChannelsFilter',
        'type_filter' => 'getTypeFilter',
        'is_system' => 'getIsSystem'
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
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('currency_filter', $data ?? [], null);
        $this->setIfExists('vat_included', $data ?? [], null);
        $this->setIfExists('delivered_duty_paid', $data ?? [], null);
        $this->setIfExists('segments_filter', $data ?? [], null);
        $this->setIfExists('markets_filter', $data ?? [], null);
        $this->setIfExists('channels_filter', $data ?? [], null);
        $this->setIfExists('type_filter', $data ?? [], null);
        $this->setIfExists('is_system', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default is_default
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets currency_filter
     *
     * @return \OpenAPI\Client\Model\PricelistCurrencyFilter|null
     */
    public function getCurrencyFilter()
    {
        return $this->container['currency_filter'];
    }

    /**
     * Sets currency_filter
     *
     * @param \OpenAPI\Client\Model\PricelistCurrencyFilter|null $currency_filter currency_filter
     *
     * @return self
     */
    public function setCurrencyFilter($currency_filter)
    {
        if (is_null($currency_filter)) {
            throw new \InvalidArgumentException('non-nullable currency_filter cannot be null');
        }
        $this->container['currency_filter'] = $currency_filter;

        return $this;
    }

    /**
     * Gets vat_included
     *
     * @return bool|null
     */
    public function getVatIncluded()
    {
        return $this->container['vat_included'];
    }

    /**
     * Sets vat_included
     *
     * @param bool|null $vat_included vat_included
     *
     * @return self
     */
    public function setVatIncluded($vat_included)
    {
        if (is_null($vat_included)) {
            throw new \InvalidArgumentException('non-nullable vat_included cannot be null');
        }
        $this->container['vat_included'] = $vat_included;

        return $this;
    }

    /**
     * Gets delivered_duty_paid
     *
     * @return bool|null
     */
    public function getDeliveredDutyPaid()
    {
        return $this->container['delivered_duty_paid'];
    }

    /**
     * Sets delivered_duty_paid
     *
     * @param bool|null $delivered_duty_paid delivered_duty_paid
     *
     * @return self
     */
    public function setDeliveredDutyPaid($delivered_duty_paid)
    {
        if (is_null($delivered_duty_paid)) {
            throw new \InvalidArgumentException('non-nullable delivered_duty_paid cannot be null');
        }
        $this->container['delivered_duty_paid'] = $delivered_duty_paid;

        return $this;
    }

    /**
     * Gets segments_filter
     *
     * @return \OpenAPI\Client\Model\PricelistSegmentFilter|null
     */
    public function getSegmentsFilter()
    {
        return $this->container['segments_filter'];
    }

    /**
     * Sets segments_filter
     *
     * @param \OpenAPI\Client\Model\PricelistSegmentFilter|null $segments_filter segments_filter
     *
     * @return self
     */
    public function setSegmentsFilter($segments_filter)
    {
        if (is_null($segments_filter)) {
            throw new \InvalidArgumentException('non-nullable segments_filter cannot be null');
        }
        $this->container['segments_filter'] = $segments_filter;

        return $this;
    }

    /**
     * Gets markets_filter
     *
     * @return \OpenAPI\Client\Model\PricelistMarketFilter|null
     */
    public function getMarketsFilter()
    {
        return $this->container['markets_filter'];
    }

    /**
     * Sets markets_filter
     *
     * @param \OpenAPI\Client\Model\PricelistMarketFilter|null $markets_filter markets_filter
     *
     * @return self
     */
    public function setMarketsFilter($markets_filter)
    {
        if (is_null($markets_filter)) {
            throw new \InvalidArgumentException('non-nullable markets_filter cannot be null');
        }
        $this->container['markets_filter'] = $markets_filter;

        return $this;
    }

    /**
     * Gets channels_filter
     *
     * @return \OpenAPI\Client\Model\PricelistChannelFilter|null
     */
    public function getChannelsFilter()
    {
        return $this->container['channels_filter'];
    }

    /**
     * Sets channels_filter
     *
     * @param \OpenAPI\Client\Model\PricelistChannelFilter|null $channels_filter channels_filter
     *
     * @return self
     */
    public function setChannelsFilter($channels_filter)
    {
        if (is_null($channels_filter)) {
            throw new \InvalidArgumentException('non-nullable channels_filter cannot be null');
        }
        $this->container['channels_filter'] = $channels_filter;

        return $this;
    }

    /**
     * Gets type_filter
     *
     * @return \OpenAPI\Client\Model\PricelistPriceListTypeFilter|null
     */
    public function getTypeFilter()
    {
        return $this->container['type_filter'];
    }

    /**
     * Sets type_filter
     *
     * @param \OpenAPI\Client\Model\PricelistPriceListTypeFilter|null $type_filter type_filter
     *
     * @return self
     */
    public function setTypeFilter($type_filter)
    {
        if (is_null($type_filter)) {
            throw new \InvalidArgumentException('non-nullable type_filter cannot be null');
        }
        $this->container['type_filter'] = $type_filter;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool|null
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool|null $is_system is_system
     *
     * @return self
     */
    public function setIsSystem($is_system)
    {
        if (is_null($is_system)) {
            throw new \InvalidArgumentException('non-nullable is_system cannot be null');
        }
        $this->container['is_system'] = $is_system;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
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
            JSON_PRETTY_PRINT
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

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


