# Ebay\Sell\Account\ReturnPolicyApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReturnPolicy**](ReturnPolicyApi.md#createreturnpolicy) | **POST** /return_policy | 
[**deleteReturnPolicy**](ReturnPolicyApi.md#deletereturnpolicy) | **DELETE** /return_policy/{return_policy_id} | 
[**getReturnPolicies**](ReturnPolicyApi.md#getreturnpolicies) | **GET** /return_policy | 
[**getReturnPolicy**](ReturnPolicyApi.md#getreturnpolicy) | **GET** /return_policy/{return_policy_id} | 
[**getReturnPolicyByName**](ReturnPolicyApi.md#getreturnpolicybyname) | **GET** /return_policy/get_by_policy_name | 
[**updateReturnPolicy**](ReturnPolicyApi.md#updatereturnpolicy) | **PUT** /return_policy/{return_policy_id} | 

# **createReturnPolicy**
> \Ebay\Sell\Account\Model\SetReturnPolicyResponse createReturnPolicy($body, $content_type)



This method creates a new return policy where the policy encapsulates seller's terms for returning items.  <br><br>Each policy targets a specific marketplace, and you can create multiple policies for each marketplace. Return policies are not applicable to motor-vehicle listings.<br><br>A successful request returns the <b>getReturnPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class=\"tablenote\"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href=\"/api-docs/sell/static/seller-accounts/business-policies.html\">eBay business policies</a>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\ReturnPolicyRequest(); // \Ebay\Sell\Account\Model\ReturnPolicyRequest | Return policy request
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->createReturnPolicy($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->createReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return policy request |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Ebay\Sell\Account\Model\SetReturnPolicyResponse**](../Model/SetReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReturnPolicy**
> deleteReturnPolicy($return_policy_id)



This method deletes a return policy. Supply the ID of the policy you want to delete in the <b>returnPolicyId</b> path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = "return_policy_id_example"; // string | This path parameter specifies the unique identifier of the return policy you want to delete.<br><br> This ID can be retrieved for a return policy by using the <a href=\"/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\" target=\"_blank \">getReturnPolicies</a> method.

try {
    $apiInstance->deleteReturnPolicy($return_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->deleteReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **string**| This path parameter specifies the unique identifier of the return policy you want to delete.&lt;br&gt;&lt;br&gt; This ID can be retrieved for a return policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getReturnPolicies&lt;/a&gt; method. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnPolicies**
> \Ebay\Sell\Account\Model\ReturnPolicyResponse getReturnPolicies($marketplace_id)



This method retrieves all the return policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.  <br><br><b>Marketplaces and locales</b>  <br><br>Get the correct policies for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get the policies for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank\">HTTP request headers</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum

try {
    $result = $apiInstance->getReturnPolicies($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |

### Return type

[**\Ebay\Sell\Account\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnPolicy**
> \Ebay\Sell\Account\Model\ReturnPolicy getReturnPolicy($return_policy_id)



This method retrieves the complete details of the return policy specified by the <b>returnPolicyId</b> path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = "return_policy_id_example"; // string | This path parameter specifies the unique identifier of the return policy you want to retrieve. <br><br> This ID can be retrieved for a return policy by using the <a href=\"/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\" target=\"_blank \">getReturnPolicies</a> method.

try {
    $result = $apiInstance->getReturnPolicy($return_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **string**| This path parameter specifies the unique identifier of the return policy you want to retrieve. &lt;br&gt;&lt;br&gt; This ID can be retrieved for a return policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getReturnPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReturnPolicyByName**
> \Ebay\Sell\Account\Model\ReturnPolicy getReturnPolicyByName($marketplace_id, $name)



This method retrieves the details of a specific return policy. Supply both the policy <code>name</code> and its associated <code>marketplace_id</code> in the request query parameters.   <br><br><b>Marketplaces and locales</b>  <br><br>Get the correct policy for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get a policy for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
$name = "name_example"; // string | This query parameter specifies the seller-defined name of the return policy you want to retrieve.<br><br> This value can be retrieved for a return policy by using the <a href=\"/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\" target=\"_blank \">getReturnPolicies</a> method.

try {
    $result = $apiInstance->getReturnPolicyByName($marketplace_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->getReturnPolicyByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the ID of the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |
 **name** | **string**| This query parameter specifies the seller-defined name of the return policy you want to retrieve.&lt;br&gt;&lt;br&gt; This value can be retrieved for a return policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getReturnPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\ReturnPolicy**](../Model/ReturnPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReturnPolicy**
> \Ebay\Sell\Account\Model\SetReturnPolicyResponse updateReturnPolicy($body, $content_type, $return_policy_id)



This method updates an existing return policy. Specify the policy you want to update using the <b>return_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\ReturnPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\ReturnPolicyRequest(); // \Ebay\Sell\Account\Model\ReturnPolicyRequest | Container for a return policy request.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$return_policy_id = "return_policy_id_example"; // string | This path parameter specifies the ID of the return policy you want to update. <br><br> This ID can be retrieved for a return policy by using the <a href=\"/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\" target=\"_blank \">getReturnPolicies</a> method.

try {
    $result = $apiInstance->updateReturnPolicy($body, $content_type, $return_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnPolicyApi->updateReturnPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Container for a return policy request. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **return_policy_id** | **string**| This path parameter specifies the ID of the return policy you want to update. &lt;br&gt;&lt;br&gt; This ID can be retrieved for a return policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/return_policy/methods/getReturnPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getReturnPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\SetReturnPolicyResponse**](../Model/SetReturnPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

