<?php
/**
 * PricelistGetPriceListItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Pricelist
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * pricelist/service.proto
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: version not set
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Pricelist\Model;

use \ArrayAccess;
use \GeminiCommerce\Pricelist\ObjectSerializer;

/**
 * PricelistGetPriceListItem Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Pricelist
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PricelistGetPriceListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pricelistGetPriceListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'grn' => 'string',
        'item_grn' => 'string',
        'price' => '\GeminiCommerce\Pricelist\Model\PricelistMoney',
        'double_format_price' => 'float',
        'end_date_price' => '\DateTime',
        'base_price' => '\GeminiCommerce\Pricelist\Model\PricelistMoney',
        'double_format_base_price' => 'float',
        'currency' => '\GeminiCommerce\Pricelist\Model\PricelistCurrency',
        'has_tier_prices' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'grn' => null,
        'item_grn' => null,
        'price' => null,
        'double_format_price' => 'double',
        'end_date_price' => 'date-time',
        'base_price' => null,
        'double_format_base_price' => 'double',
        'currency' => null,
        'has_tier_prices' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'grn' => false,
        'item_grn' => false,
        'price' => false,
        'double_format_price' => false,
        'end_date_price' => false,
        'base_price' => false,
        'double_format_base_price' => false,
        'currency' => false,
        'has_tier_prices' => false,
        'created_at' => false,
        'updated_at' => false
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
        'id' => 'id',
        'grn' => 'grn',
        'item_grn' => 'itemGrn',
        'price' => 'price',
        'double_format_price' => 'doubleFormatPrice',
        'end_date_price' => 'endDatePrice',
        'base_price' => 'basePrice',
        'double_format_base_price' => 'doubleFormatBasePrice',
        'currency' => 'currency',
        'has_tier_prices' => 'hasTierPrices',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'grn' => 'setGrn',
        'item_grn' => 'setItemGrn',
        'price' => 'setPrice',
        'double_format_price' => 'setDoubleFormatPrice',
        'end_date_price' => 'setEndDatePrice',
        'base_price' => 'setBasePrice',
        'double_format_base_price' => 'setDoubleFormatBasePrice',
        'currency' => 'setCurrency',
        'has_tier_prices' => 'setHasTierPrices',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'grn' => 'getGrn',
        'item_grn' => 'getItemGrn',
        'price' => 'getPrice',
        'double_format_price' => 'getDoubleFormatPrice',
        'end_date_price' => 'getEndDatePrice',
        'base_price' => 'getBasePrice',
        'double_format_base_price' => 'getDoubleFormatBasePrice',
        'currency' => 'getCurrency',
        'has_tier_prices' => 'getHasTierPrices',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('grn', $data ?? [], null);
        $this->setIfExists('item_grn', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('double_format_price', $data ?? [], null);
        $this->setIfExists('end_date_price', $data ?? [], null);
        $this->setIfExists('base_price', $data ?? [], null);
        $this->setIfExists('double_format_base_price', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('has_tier_prices', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets grn
     *
     * @return string|null
     */
    public function getGrn()
    {
        return $this->container['grn'];
    }

    /**
     * Sets grn
     *
     * @param string|null $grn grn
     *
     * @return self
     */
    public function setGrn($grn)
    {
        if (is_null($grn)) {
            throw new \InvalidArgumentException('non-nullable grn cannot be null');
        }
        $this->container['grn'] = $grn;

        return $this;
    }

    /**
     * Gets item_grn
     *
     * @return string|null
     */
    public function getItemGrn()
    {
        return $this->container['item_grn'];
    }

    /**
     * Sets item_grn
     *
     * @param string|null $item_grn item_grn
     *
     * @return self
     */
    public function setItemGrn($item_grn)
    {
        if (is_null($item_grn)) {
            throw new \InvalidArgumentException('non-nullable item_grn cannot be null');
        }
        $this->container['item_grn'] = $item_grn;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \GeminiCommerce\Pricelist\Model\PricelistMoney|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \GeminiCommerce\Pricelist\Model\PricelistMoney|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets double_format_price
     *
     * @return float|null
     */
    public function getDoubleFormatPrice()
    {
        return $this->container['double_format_price'];
    }

    /**
     * Sets double_format_price
     *
     * @param float|null $double_format_price double_format_price
     *
     * @return self
     */
    public function setDoubleFormatPrice($double_format_price)
    {
        if (is_null($double_format_price)) {
            throw new \InvalidArgumentException('non-nullable double_format_price cannot be null');
        }
        $this->container['double_format_price'] = $double_format_price;

        return $this;
    }

    /**
     * Gets end_date_price
     *
     * @return \DateTime|null
     */
    public function getEndDatePrice()
    {
        return $this->container['end_date_price'];
    }

    /**
     * Sets end_date_price
     *
     * @param \DateTime|null $end_date_price end_date_price
     *
     * @return self
     */
    public function setEndDatePrice($end_date_price)
    {
        if (is_null($end_date_price)) {
            throw new \InvalidArgumentException('non-nullable end_date_price cannot be null');
        }
        $this->container['end_date_price'] = $end_date_price;

        return $this;
    }

    /**
     * Gets base_price
     *
     * @return \GeminiCommerce\Pricelist\Model\PricelistMoney|null
     */
    public function getBasePrice()
    {
        return $this->container['base_price'];
    }

    /**
     * Sets base_price
     *
     * @param \GeminiCommerce\Pricelist\Model\PricelistMoney|null $base_price base_price
     *
     * @return self
     */
    public function setBasePrice($base_price)
    {
        if (is_null($base_price)) {
            throw new \InvalidArgumentException('non-nullable base_price cannot be null');
        }
        $this->container['base_price'] = $base_price;

        return $this;
    }

    /**
     * Gets double_format_base_price
     *
     * @return float|null
     */
    public function getDoubleFormatBasePrice()
    {
        return $this->container['double_format_base_price'];
    }

    /**
     * Sets double_format_base_price
     *
     * @param float|null $double_format_base_price double_format_base_price
     *
     * @return self
     */
    public function setDoubleFormatBasePrice($double_format_base_price)
    {
        if (is_null($double_format_base_price)) {
            throw new \InvalidArgumentException('non-nullable double_format_base_price cannot be null');
        }
        $this->container['double_format_base_price'] = $double_format_base_price;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \GeminiCommerce\Pricelist\Model\PricelistCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \GeminiCommerce\Pricelist\Model\PricelistCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets has_tier_prices
     *
     * @return bool|null
     */
    public function getHasTierPrices()
    {
        return $this->container['has_tier_prices'];
    }

    /**
     * Sets has_tier_prices
     *
     * @param bool|null $has_tier_prices has_tier_prices
     *
     * @return self
     */
    public function setHasTierPrices($has_tier_prices)
    {
        if (is_null($has_tier_prices)) {
            throw new \InvalidArgumentException('non-nullable has_tier_prices cannot be null');
        }
        $this->container['has_tier_prices'] = $has_tier_prices;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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
}


