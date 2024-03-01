<?php
/**
 * PricelistSetPriceListItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Pricelist
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
 * PricelistSetPriceListItem Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Pricelist
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PricelistSetPriceListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pricelistSetPriceListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_grn' => 'string',
        'base_price' => '\GeminiCommerce\Pricelist\Model\PricelistMoney',
        'price_items' => '\GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemPrice[]',
        'has_tier_prices' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_grn' => null,
        'base_price' => null,
        'price_items' => null,
        'has_tier_prices' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'item_grn' => false,
        'base_price' => false,
        'price_items' => false,
        'has_tier_prices' => false
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
        'item_grn' => 'itemGrn',
        'base_price' => 'basePrice',
        'price_items' => 'priceItems',
        'has_tier_prices' => 'hasTierPrices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_grn' => 'setItemGrn',
        'base_price' => 'setBasePrice',
        'price_items' => 'setPriceItems',
        'has_tier_prices' => 'setHasTierPrices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_grn' => 'getItemGrn',
        'base_price' => 'getBasePrice',
        'price_items' => 'getPriceItems',
        'has_tier_prices' => 'getHasTierPrices'
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
        $this->setIfExists('item_grn', $data ?? [], null);
        $this->setIfExists('base_price', $data ?? [], null);
        $this->setIfExists('price_items', $data ?? [], null);
        $this->setIfExists('has_tier_prices', $data ?? [], null);
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
     * Gets price_items
     *
     * @return \GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemPrice[]|null
     */
    public function getPriceItems()
    {
        return $this->container['price_items'];
    }

    /**
     * Sets price_items
     *
     * @param \GeminiCommerce\Pricelist\Model\PricelistSetPriceListItemPrice[]|null $price_items price_items
     *
     * @return self
     */
    public function setPriceItems($price_items)
    {
        if (is_null($price_items)) {
            throw new \InvalidArgumentException('non-nullable price_items cannot be null');
        }
        $this->container['price_items'] = $price_items;

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


