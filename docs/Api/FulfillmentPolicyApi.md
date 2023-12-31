# Ebay\Sell\Account\FulfillmentPolicyApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFulfillmentPolicy**](FulfillmentPolicyApi.md#createfulfillmentpolicy) | **POST** /fulfillment_policy/ | 
[**deleteFulfillmentPolicy**](FulfillmentPolicyApi.md#deletefulfillmentpolicy) | **DELETE** /fulfillment_policy/{fulfillmentPolicyId} | 
[**getFulfillmentPolicies**](FulfillmentPolicyApi.md#getfulfillmentpolicies) | **GET** /fulfillment_policy | 
[**getFulfillmentPolicy**](FulfillmentPolicyApi.md#getfulfillmentpolicy) | **GET** /fulfillment_policy/{fulfillmentPolicyId} | 
[**getFulfillmentPolicyByName**](FulfillmentPolicyApi.md#getfulfillmentpolicybyname) | **GET** /fulfillment_policy/get_by_policy_name | 
[**updateFulfillmentPolicy**](FulfillmentPolicyApi.md#updatefulfillmentpolicy) | **PUT** /fulfillment_policy/{fulfillmentPolicyId} | 

# **createFulfillmentPolicy**
> \Ebay\Sell\Account\Model\SetFulfillmentPolicyResponse createFulfillmentPolicy($body, $content_type)



This method creates a new fulfillment policy where the policy encapsulates seller's terms for fulfilling item purchases. Fulfillment policies include the shipment options that the seller offers to buyers.  <br><br>Each policy targets a specific eBay marketplace and a category group type, and you can create multiple policies for each combination. <br><br>A successful request returns the <b>getFulfillmentPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class=\"tablenote\"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href=\"/api-docs/sell/static/seller-accounts/business-policies.html\">eBay business policies</a>.</p>  <p><b>Using the eBay standard envelope service (eSE)</b></p><p>The eBay standard envelope service (eSE) is a domestic envelope service with tracking through eBay. This service applies to specific sub-categories of <b>Trading Cards</b>, and to coins & paper money, postcards, stamps, patches, and similar <a href=\"https://www.ebay.com/sellercenter/shipping/choosing-a-carrier-and-service/ebay-standard-envelope#eligible-categories\" target=\"_blank \">eligible categories</a>, and is only available on the US marketplace. To use this service, send envelopes using the USPS mail and set the <b>shippingServiceCode</b> field to <code>US_eBayStandardEnvelope</code>. See <a href=\"/api-docs/sell/static/seller-accounts/using-the-ebay-standard-envelope-service.html\" target=\"_blank\">Using eBay standard envelope (eSE) service</a> for details. See <a href=\"https://pages.ebay.com/seller-center/shipping/ebay-standard-envelope.html#lower-cost-way\" target=\"_blank \">eBay standard envelope</a> for additional details, restrictions, and an <a href=\"https://ir.ebaystatic.com/pictures/sc/Shipping/ebay_standard_envelope_template.pdf\" target=\"_blank \">envelope size template</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\FulfillmentPolicyRequest(); // \Ebay\Sell\Account\Model\FulfillmentPolicyRequest | Request to create a seller account fulfillment policy.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->createFulfillmentPolicy($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->createFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\FulfillmentPolicyRequest**](../Model/FulfillmentPolicyRequest.md)| Request to create a seller account fulfillment policy. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Ebay\Sell\Account\Model\SetFulfillmentPolicyResponse**](../Model/SetFulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFulfillmentPolicy**
> deleteFulfillmentPolicy($fulfillment_policy_id)



This method deletes a fulfillment policy. Supply the ID of the policy you want to delete in the <b>fulfillmentPolicyId</b> path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_policy_id = "fulfillment_policy_id_example"; // string | This path parameter specifies the ID of the fulfillment policy to delete.<br><br> This ID can be retrieved for a fulfillment policy by using the <a href=\"/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\" target=\"_blank \">getFulfillmentPolicies</a> method.

try {
    $apiInstance->deleteFulfillmentPolicy($fulfillment_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->deleteFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_policy_id** | **string**| This path parameter specifies the ID of the fulfillment policy to delete.&lt;br&gt;&lt;br&gt; This ID can be retrieved for a fulfillment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getFulfillmentPolicies&lt;/a&gt; method. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPolicies**
> \Ebay\Sell\Account\Model\FulfillmentPolicyResponse getFulfillmentPolicies($marketplace_id)



This method retrieves all the fulfillment policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.  <br><br><b>Marketplaces and locales</b>  <br><br>Get the correct policies for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get the policies for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank\">HTTP request headers</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum

try {
    $result = $apiInstance->getFulfillmentPolicies($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |

### Return type

[**\Ebay\Sell\Account\Model\FulfillmentPolicyResponse**](../Model/FulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPolicy**
> \Ebay\Sell\Account\Model\FulfillmentPolicy getFulfillmentPolicy($fulfillment_policy_id)



This method retrieves the complete details of a fulfillment policy. Supply the ID of the policy you want to retrieve using the <b>fulfillmentPolicyId</b> path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_policy_id = "fulfillment_policy_id_example"; // string | This path parameter specifies the ID of the fulfillment policy you want to retrieve.<br><br> This ID can be retrieved for a fulfillment policy by using the <a href=\"/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\" target=\"_blank \">getFulfillmentPolicies</a> method.

try {
    $result = $apiInstance->getFulfillmentPolicy($fulfillment_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fulfillment_policy_id** | **string**| This path parameter specifies the ID of the fulfillment policy you want to retrieve.&lt;br&gt;&lt;br&gt; This ID can be retrieved for a fulfillment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getFulfillmentPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPolicyByName**
> \Ebay\Sell\Account\Model\FulfillmentPolicy getFulfillmentPolicyByName($marketplace_id, $name)



This method retrieves the details for a specific fulfillment policy. In the request, supply both the policy <code>name</code> and its associated <code>marketplace_id</code> as query parameters.   <br><br><b>Marketplaces and locales</b>  <br><br>Get the correct policy for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get a policy for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
$name = "name_example"; // string | This query parameter specifies the seller-defined name of the fulfillment policy you want to retrieve.<br><br>This value can be retrieved for a fulfillment policy by using the <a href=\"/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\" target=\"_blank \">getFulfillmentPolicies</a> method.

try {
    $result = $apiInstance->getFulfillmentPolicyByName($marketplace_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->getFulfillmentPolicyByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |
 **name** | **string**| This query parameter specifies the seller-defined name of the fulfillment policy you want to retrieve.&lt;br&gt;&lt;br&gt;This value can be retrieved for a fulfillment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getFulfillmentPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\FulfillmentPolicy**](../Model/FulfillmentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentPolicy**
> \Ebay\Sell\Account\Model\SetFulfillmentPolicyResponse updateFulfillmentPolicy($body, $content_type, $fulfillment_policy_id)



This method updates an existing fulfillment policy. Specify the policy you want to update using the <b>fulfillment_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\FulfillmentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\FulfillmentPolicyRequest(); // \Ebay\Sell\Account\Model\FulfillmentPolicyRequest | Fulfillment policy request
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$fulfillment_policy_id = "fulfillment_policy_id_example"; // string | This path parameter specifies the ID of the fulfillment policy you want to update.<br><br>This ID can be retrieved for a specific fulfillment policy by using the <a href=\"/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\" target=\"_blank \">getFulfillmentPolicies</a> method.

try {
    $result = $apiInstance->updateFulfillmentPolicy($body, $content_type, $fulfillment_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentPolicyApi->updateFulfillmentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\FulfillmentPolicyRequest**](../Model/FulfillmentPolicyRequest.md)| Fulfillment policy request |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **fulfillment_policy_id** | **string**| This path parameter specifies the ID of the fulfillment policy you want to update.&lt;br&gt;&lt;br&gt;This ID can be retrieved for a specific fulfillment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/fulfillment_policy/methods/getFulfillmentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getFulfillmentPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\SetFulfillmentPolicyResponse**](../Model/SetFulfillmentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

