<?php
/**
 * SalesTax
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
 * SalesTax Class Doc Comment
 *
 * @category Class
 * @description This type is used to provide sales tax settings for a specific tax jurisdiction.
 * @package  Ebay\Sell\Account
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesTax implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesTax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_code' => 'string',
        'sales_tax_jurisdiction_id' => 'string',
        'sales_tax_percentage' => 'string',
        'shipping_and_handling_taxed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country_code' => null,
        'sales_tax_jurisdiction_id' => null,
        'sales_tax_percentage' => null,
        'shipping_and_handling_taxed' => null
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
        'country_code' => 'countryCode',
        'sales_tax_jurisdiction_id' => 'salesTaxJurisdictionId',
        'sales_tax_percentage' => 'salesTaxPercentage',
        'shipping_and_handling_taxed' => 'shippingAndHandlingTaxed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_code' => 'setCountryCode',
        'sales_tax_jurisdiction_id' => 'setSalesTaxJurisdictionId',
        'sales_tax_percentage' => 'setSalesTaxPercentage',
        'shipping_and_handling_taxed' => 'setShippingAndHandlingTaxed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_code' => 'getCountryCode',
        'sales_tax_jurisdiction_id' => 'getSalesTaxJurisdictionId',
        'sales_tax_percentage' => 'getSalesTaxPercentage',
        'shipping_and_handling_taxed' => 'getShippingAndHandlingTaxed'
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
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['sales_tax_jurisdiction_id'] = isset($data['sales_tax_jurisdiction_id']) ? $data['sales_tax_jurisdiction_id'] : null;
        $this->container['sales_tax_percentage'] = isset($data['sales_tax_percentage']) ? $data['sales_tax_percentage'] : null;
        $this->container['shipping_and_handling_taxed'] = isset($data['shipping_and_handling_taxed']) ? $data['shipping_and_handling_taxed'] : null;
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
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code enumeration value identifies the country to which this sales tax rate applies. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:CountryCodeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets sales_tax_jurisdiction_id
     *
     * @return string
     */
    public function getSalesTaxJurisdictionId()
    {
        return $this->container['sales_tax_jurisdiction_id'];
    }

    /**
     * Sets sales_tax_jurisdiction_id
     *
     * @param string $sales_tax_jurisdiction_id A unique ID that identifies the sales tax jurisdiction to which the sales tax rate applies (for example, a state within the United States).
     *
     * @return $this
     */
    public function setSalesTaxJurisdictionId($sales_tax_jurisdiction_id)
    {
        $this->container['sales_tax_jurisdiction_id'] = $sales_tax_jurisdiction_id;

        return $this;
    }

    /**
     * Gets sales_tax_percentage
     *
     * @return string
     */
    public function getSalesTaxPercentage()
    {
        return $this->container['sales_tax_percentage'];
    }

    /**
     * Sets sales_tax_percentage
     *
     * @param string $sales_tax_percentage The sales tax rate that will be applied to sales price. The <b>shippingAndHandlingTaxed</b> value will indicate whether or not sales tax is also applied to shipping and handling charges<br><br>Although it is a string, a percentage value is returned here, such as <code>7.75</code>
     *
     * @return $this
     */
    public function setSalesTaxPercentage($sales_tax_percentage)
    {
        $this->container['sales_tax_percentage'] = $sales_tax_percentage;

        return $this;
    }

    /**
     * Gets shipping_and_handling_taxed
     *
     * @return bool
     */
    public function getShippingAndHandlingTaxed()
    {
        return $this->container['shipping_and_handling_taxed'];
    }

    /**
     * Sets shipping_and_handling_taxed
     *
     * @param bool $shipping_and_handling_taxed If returned as <code>true</code>, sales tax is also applied to shipping and handling charges, and not just the total sales price of the order.
     *
     * @return $this
     */
    public function setShippingAndHandlingTaxed($shipping_and_handling_taxed)
    {
        $this->container['shipping_and_handling_taxed'] = $shipping_and_handling_taxed;

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