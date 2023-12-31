<?php
/**
 * ShippingService
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ebay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Account API
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (eBay business policies and seller-defined custom policies), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br><br>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.
 *
 * OpenAPI spec version: v1.9.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Account\Model;

use \ArrayAccess;
use \Ebay\Sell\Account\ObjectSerializer;

/**
 * ShippingService Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;b&gt;shippingServices&lt;/b&gt; array, an array that provides details about every domestic and international shipping service option that is defined for the policy.
 * @package  Ebay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_shipping_cost' => '\Ebay\Sell\Account\Model\Amount',
        'buyer_responsible_for_pickup' => 'bool',
        'buyer_responsible_for_shipping' => 'bool',
        'cash_on_delivery_fee' => '\Ebay\Sell\Account\Model\Amount',
        'free_shipping' => 'bool',
        'shipping_carrier_code' => 'string',
        'shipping_cost' => '\Ebay\Sell\Account\Model\Amount',
        'shipping_service_code' => 'string',
        'ship_to_locations' => '\Ebay\Sell\Account\Model\RegionSet',
        'sort_order' => 'int',
        'surcharge' => '\Ebay\Sell\Account\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_shipping_cost' => null,
        'buyer_responsible_for_pickup' => null,
        'buyer_responsible_for_shipping' => null,
        'cash_on_delivery_fee' => null,
        'free_shipping' => null,
        'shipping_carrier_code' => null,
        'shipping_cost' => null,
        'shipping_service_code' => null,
        'ship_to_locations' => null,
        'sort_order' => 'int32',
        'surcharge' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_shipping_cost' => 'additionalShippingCost',
        'buyer_responsible_for_pickup' => 'buyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'buyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'cashOnDeliveryFee',
        'free_shipping' => 'freeShipping',
        'shipping_carrier_code' => 'shippingCarrierCode',
        'shipping_cost' => 'shippingCost',
        'shipping_service_code' => 'shippingServiceCode',
        'ship_to_locations' => 'shipToLocations',
        'sort_order' => 'sortOrder',
        'surcharge' => 'surcharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_shipping_cost' => 'setAdditionalShippingCost',
        'buyer_responsible_for_pickup' => 'setBuyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'setBuyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'setCashOnDeliveryFee',
        'free_shipping' => 'setFreeShipping',
        'shipping_carrier_code' => 'setShippingCarrierCode',
        'shipping_cost' => 'setShippingCost',
        'shipping_service_code' => 'setShippingServiceCode',
        'ship_to_locations' => 'setShipToLocations',
        'sort_order' => 'setSortOrder',
        'surcharge' => 'setSurcharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_shipping_cost' => 'getAdditionalShippingCost',
        'buyer_responsible_for_pickup' => 'getBuyerResponsibleForPickup',
        'buyer_responsible_for_shipping' => 'getBuyerResponsibleForShipping',
        'cash_on_delivery_fee' => 'getCashOnDeliveryFee',
        'free_shipping' => 'getFreeShipping',
        'shipping_carrier_code' => 'getShippingCarrierCode',
        'shipping_cost' => 'getShippingCost',
        'shipping_service_code' => 'getShippingServiceCode',
        'ship_to_locations' => 'getShipToLocations',
        'sort_order' => 'getSortOrder',
        'surcharge' => 'getSurcharge'
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
        return self::$swaggerModelName;
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
        $this->container['additional_shipping_cost'] = isset($data['additional_shipping_cost']) ? $data['additional_shipping_cost'] : null;
        $this->container['buyer_responsible_for_pickup'] = isset($data['buyer_responsible_for_pickup']) ? $data['buyer_responsible_for_pickup'] : null;
        $this->container['buyer_responsible_for_shipping'] = isset($data['buyer_responsible_for_shipping']) ? $data['buyer_responsible_for_shipping'] : null;
        $this->container['cash_on_delivery_fee'] = isset($data['cash_on_delivery_fee']) ? $data['cash_on_delivery_fee'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['shipping_carrier_code'] = isset($data['shipping_carrier_code']) ? $data['shipping_carrier_code'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['shipping_service_code'] = isset($data['shipping_service_code']) ? $data['shipping_service_code'] : null;
        $this->container['ship_to_locations'] = isset($data['ship_to_locations']) ? $data['ship_to_locations'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
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
     * Gets additional_shipping_cost
     *
     * @return \Ebay\Sell\Account\Model\Amount
     */
    public function getAdditionalShippingCost()
    {
        return $this->container['additional_shipping_cost'];
    }

    /**
     * Sets additional_shipping_cost
     *
     * @param \Ebay\Sell\Account\Model\Amount $additional_shipping_cost additional_shipping_cost
     *
     * @return $this
     */
    public function setAdditionalShippingCost($additional_shipping_cost)
    {
        $this->container['additional_shipping_cost'] = $additional_shipping_cost;

        return $this;
    }

    /**
     * Gets buyer_responsible_for_pickup
     *
     * @return bool
     */
    public function getBuyerResponsibleForPickup()
    {
        return $this->container['buyer_responsible_for_pickup'];
    }

    /**
     * Sets buyer_responsible_for_pickup
     *
     * @param bool $buyer_responsible_for_pickup This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to pick up the purchased motor vehicle after full payment is made. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
     *
     * @return $this
     */
    public function setBuyerResponsibleForPickup($buyer_responsible_for_pickup)
    {
        $this->container['buyer_responsible_for_pickup'] = $buyer_responsible_for_pickup;

        return $this;
    }

    /**
     * Gets buyer_responsible_for_shipping
     *
     * @return bool
     */
    public function getBuyerResponsibleForShipping()
    {
        return $this->container['buyer_responsible_for_shipping'];
    }

    /**
     * Sets buyer_responsible_for_shipping
     *
     * @param bool $buyer_responsible_for_shipping This field should be included and set to <code>true</code> for a motor vehicle listing if it will be the buyer's responsibility to arrange for shipment of a purchased motor vehicle after full payment is made. <br><br>This field is only applicable to motor vehicle listings. In the majority of motor vehicle listings, the seller does make the buyer responsible for pickup or shipment of the vehicle. <br><br>This field is returned if set.<br><br><b>Default</b>: false
     *
     * @return $this
     */
    public function setBuyerResponsibleForShipping($buyer_responsible_for_shipping)
    {
        $this->container['buyer_responsible_for_shipping'] = $buyer_responsible_for_shipping;

        return $this;
    }

    /**
     * Gets cash_on_delivery_fee
     *
     * @return \Ebay\Sell\Account\Model\Amount
     */
    public function getCashOnDeliveryFee()
    {
        return $this->container['cash_on_delivery_fee'];
    }

    /**
     * Sets cash_on_delivery_fee
     *
     * @param \Ebay\Sell\Account\Model\Amount $cash_on_delivery_fee cash_on_delivery_fee
     *
     * @return $this
     */
    public function setCashOnDeliveryFee($cash_on_delivery_fee)
    {
        $this->container['cash_on_delivery_fee'] = $cash_on_delivery_fee;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping This field is included and set to <code>true</code> if the seller offers a free shipping option to the buyer. <br><br>This field can only be included and set to <code>true</code> for the first domestic shipping service option specified in the <b>shippingServices</b> container (it is ignored if set for subsequent shipping services or for any international shipping service option). <br><br>The first specified shipping service option has a <b>sortOrder</b> value of <code>1</code> or if the <b>sortOrderId</b> field is not used, it is the shipping service option that's specified first in the <b>shippingServices</b> container.<br><br>This container is returned if set.
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets shipping_carrier_code
     *
     * @return string
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shipping_carrier_code'];
    }

    /**
     * Sets shipping_carrier_code
     *
     * @param string $shipping_carrier_code This field sets/indicates the shipping carrier, such as <code>USPS</code>, <code>FedEx</code>, or <code>UPS</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping carrier enum values for a specified eBay marketplace, the <a href=\"/devzone/xml/docs/reference/ebay/GeteBayDetails.html\">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingCarrierDetails</code>. The enum values for each shipping carriers can be found in each <b>ShippingCarrierDetails.ShippingCarrier</b> field in the response payload.<br><br> This field is actually optional, as the shipping carrier is also tied into the <b>shippingServiceCode</b> enum value, and that field is required for every specified shipping service option.<br><br>This field is returned if set.
     *
     * @return $this
     */
    public function setShippingCarrierCode($shipping_carrier_code)
    {
        $this->container['shipping_carrier_code'] = $shipping_carrier_code;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \Ebay\Sell\Account\Model\Amount
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \Ebay\Sell\Account\Model\Amount $shipping_cost shipping_cost
     *
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_service_code
     *
     * @return string
     */
    public function getShippingServiceCode()
    {
        return $this->container['shipping_service_code'];
    }

    /**
     * Sets shipping_service_code
     *
     * @param string $shipping_service_code This field sets/indicates the domestic or international shipping service option, such as <code>USPSPriority</code>, <code>FedEx2Day</code>, or <code>UPS3rdDay</code>. Although this field uses the <b>string</b> type, the seller must pass in a pre-defined enumeration value here. <br><br>For a full list of shipping service option enum values for a specified eBay marketplace, the <a href=\"/devzone/xml/docs/reference/ebay/GeteBayDetails.html\">GeteBayDetails</a> call of the <b>Trading API</b> can be used, and the <b>DetailName</b> field's value should be set to <code>ShippingServiceDetails</code>. <br><br>The enum values for each shipping service option can be found in each <b>ShippingServiceDetails.ShippingService</b> field in the response payload. The seller must make sure that the shipping service option is still valid, which is indicated by a <code>true</code> value in the corresponding <b>ValidForSellingFlow</b> boolean field. International shipping service options are typically returned at the top of the response payload, and are indicated by an <b>InternationalService</b> boolean field that reads <code>true</code>. <br><br>The <b>InternationalService</b> boolean field is not returned at all for domestic shipping service options. <br><br> This field is required for every specified shipping service option.<br><br>This field is returned if set.
     *
     * @return $this
     */
    public function setShippingServiceCode($shipping_service_code)
    {
        $this->container['shipping_service_code'] = $shipping_service_code;

        return $this;
    }

    /**
     * Gets ship_to_locations
     *
     * @return \Ebay\Sell\Account\Model\RegionSet
     */
    public function getShipToLocations()
    {
        return $this->container['ship_to_locations'];
    }

    /**
     * Sets ship_to_locations
     *
     * @param \Ebay\Sell\Account\Model\RegionSet $ship_to_locations ship_to_locations
     *
     * @return $this
     */
    public function setShipToLocations($ship_to_locations)
    {
        $this->container['ship_to_locations'] = $ship_to_locations;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order The integer value set in this field controls the order of the corresponding domestic or international shipping service option in the View Item and Checkout pages. <br><br>Sellers can specify up to four domestic shipping services (in four separate <b>shippingService</b> containers), so valid values are 1, 2, 3, and 4. A shipping service option with a <b>sortOrder</b> value of <code>1</code> appears at the top of View Item and Checkout pages. Conversely, a shipping service option with a <b>sortOrder</b> value of <code>1</code> appears at the bottom of the list. <br><br>Sellers can specify up to five international shipping services (in five separate <b>shippingService</b> containers), so valid values for international shipping services are 1, 2, 3, 4, and 5. Similarly to domestic shipping service options, the <b>sortOrder</b> value of a international shipping service option controls the placement of that shipping service option in the View Item and Checkout pages. <br><br>If the <b>sortOrder</b> field is not supplied, the order of domestic and international shipping service options is determined by the order in which they are listed in the API call. <br><br><b>Min</b>: 1. <b>Max</b>: 4 (for domestic shipping service) or 5 (for international shipping service).
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return \Ebay\Sell\Account\Model\Amount
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param \Ebay\Sell\Account\Model\Amount $surcharge surcharge
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
