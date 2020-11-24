<?php
/**
 * PickupSlot
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Logistics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Logistics API
 *
 * The <b>Logistics API</b> resources offer the following capabilities: <ul><li><b>shipping_quote</b> &ndash; Consolidates into a list a set of live shipping rates, or quotes, from which you can select a rate to ship a package.</li> <li><b>shipment</b> &ndash; Creates a \"shipment\" for the selected shipping rate.</li></ul> Call <b>createShippingQuote</b> to get a list of live shipping rates. The rates returned are all valid for a specific time window and all quoted prices are at eBay-negotiated rates. <br><br>Select one of the live rates and using its associated <b>rateId</b>, create a \"shipment\" for the package by calling <b>createFromShippingQuote</b>. Creating a shipment completes an agreement, and the base service and addition shipping options are totaled into the <b>totalShippingCost</b>. This action also generates a shipping label that you can use to ship the package.<p class=\"tablenote\"><b>Important!</b> Sellers must set up a payment method via their eBay account before they can use the methods in this API to create a shipment and the associated shipping label.</p>
 *
 * The version of the OpenAPI document: v1_beta.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Logistics\Model;

use \ArrayAccess;
use \eBay\Sell\Logistics\ObjectSerializer;

/**
 * PickupSlot Class Doc Comment
 *
 * @category Class
 * @description This complex type defines a time window for the pickup of a package.
 * @package  eBay\Sell\Logistics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PickupSlot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupSlot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pickup_slot_end_time' => 'string',
        'pickup_slot_id' => 'string',
        'pickup_slot_start_time' => 'string',
        'pickup_slot_time_zone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'pickup_slot_end_time' => null,
        'pickup_slot_id' => null,
        'pickup_slot_start_time' => null,
        'pickup_slot_time_zone' => null
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
        'pickup_slot_end_time' => 'pickupSlotEndTime',
        'pickup_slot_id' => 'pickupSlotId',
        'pickup_slot_start_time' => 'pickupSlotStartTime',
        'pickup_slot_time_zone' => 'pickupSlotTimeZone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pickup_slot_end_time' => 'setPickupSlotEndTime',
        'pickup_slot_id' => 'setPickupSlotId',
        'pickup_slot_start_time' => 'setPickupSlotStartTime',
        'pickup_slot_time_zone' => 'setPickupSlotTimeZone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pickup_slot_end_time' => 'getPickupSlotEndTime',
        'pickup_slot_id' => 'getPickupSlotId',
        'pickup_slot_start_time' => 'getPickupSlotStartTime',
        'pickup_slot_time_zone' => 'getPickupSlotTimeZone'
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
        $this->container['pickup_slot_end_time'] = $data['pickup_slot_end_time'] ?? null;
        $this->container['pickup_slot_id'] = $data['pickup_slot_id'] ?? null;
        $this->container['pickup_slot_start_time'] = $data['pickup_slot_start_time'] ?? null;
        $this->container['pickup_slot_time_zone'] = $data['pickup_slot_time_zone'] ?? null;
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
     * Gets pickup_slot_end_time
     *
     * @return string|null
     */
    public function getPickupSlotEndTime()
    {
        return $this->container['pickup_slot_end_time'];
    }

    /**
     * Sets pickup_slot_end_time
     *
     * @param string|null $pickup_slot_end_time The date and time the pickup slot ends, formatted as an ISO 8601 UTC string.
     *
     * @return self
     */
    public function setPickupSlotEndTime($pickup_slot_end_time)
    {
        $this->container['pickup_slot_end_time'] = $pickup_slot_end_time;

        return $this;
    }

    /**
     * Gets pickup_slot_id
     *
     * @return string|null
     */
    public function getPickupSlotId()
    {
        return $this->container['pickup_slot_id'];
    }

    /**
     * Sets pickup_slot_id
     *
     * @param string|null $pickup_slot_id Seller-defined name for the pickup slot.
     *
     * @return self
     */
    public function setPickupSlotId($pickup_slot_id)
    {
        $this->container['pickup_slot_id'] = $pickup_slot_id;

        return $this;
    }

    /**
     * Gets pickup_slot_start_time
     *
     * @return string|null
     */
    public function getPickupSlotStartTime()
    {
        return $this->container['pickup_slot_start_time'];
    }

    /**
     * Sets pickup_slot_start_time
     *
     * @param string|null $pickup_slot_start_time The date and time the pickup slot begins, formatted as an ISO 8601 UTC string.
     *
     * @return self
     */
    public function setPickupSlotStartTime($pickup_slot_start_time)
    {
        $this->container['pickup_slot_start_time'] = $pickup_slot_start_time;

        return $this;
    }

    /**
     * Gets pickup_slot_time_zone
     *
     * @return string|null
     */
    public function getPickupSlotTimeZone()
    {
        return $this->container['pickup_slot_time_zone'];
    }

    /**
     * Sets pickup_slot_time_zone
     *
     * @param string|null $pickup_slot_time_zone The time zone of the pickup location, returned as Time Zone Database ID (also know as an Olson time zone ID).
     *
     * @return self
     */
    public function setPickupSlotTimeZone($pickup_slot_time_zone)
    {
        $this->container['pickup_slot_time_zone'] = $pickup_slot_time_zone;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
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


