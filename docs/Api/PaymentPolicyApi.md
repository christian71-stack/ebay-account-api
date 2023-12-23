# Ebay\Sell\Account\PaymentPolicyApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentPolicy**](PaymentPolicyApi.md#createpaymentpolicy) | **POST** /payment_policy | 
[**deletePaymentPolicy**](PaymentPolicyApi.md#deletepaymentpolicy) | **DELETE** /payment_policy/{payment_policy_id} | 
[**getPaymentPolicies**](PaymentPolicyApi.md#getpaymentpolicies) | **GET** /payment_policy | 
[**getPaymentPolicy**](PaymentPolicyApi.md#getpaymentpolicy) | **GET** /payment_policy/{payment_policy_id} | 
[**getPaymentPolicyByName**](PaymentPolicyApi.md#getpaymentpolicybyname) | **GET** /payment_policy/get_by_policy_name | 
[**updatePaymentPolicy**](PaymentPolicyApi.md#updatepaymentpolicy) | **PUT** /payment_policy/{payment_policy_id} | 

# **createPaymentPolicy**
> \Ebay\Sell\Account\Model\SetPaymentPolicyResponse createPaymentPolicy($body, $content_type)



This method creates a new payment policy where the policy encapsulates seller's terms for order payments.  <br><br>Each policy targets a specific eBay marketplace and category group, and you can create multiple policies for each combination.  <br><br>A successful request returns the <b>getPaymentPolicy</b> URI to the new policy in the <b>Location</b> response header and the ID for the new policy is returned in the response payload.  <p class=\"tablenote\"><b>Tip:</b> For details on creating and using the business policies supported by the Account API, see <a href=\"/api-docs/sell/static/seller-accounts/business-policies.html\">eBay business policies</a>.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\PaymentPolicyRequest(); // \Ebay\Sell\Account\Model\PaymentPolicyRequest | Payment policy request
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->createPaymentPolicy($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->createPaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\PaymentPolicyRequest**](../Model/PaymentPolicyRequest.md)| Payment policy request |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Ebay\Sell\Account\Model\SetPaymentPolicyResponse**](../Model/SetPaymentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentPolicy**
> deletePaymentPolicy($payment_policy_id)



This method deletes a payment policy. Supply the ID of the policy you want to delete in the <b>paymentPolicyId</b> path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_policy_id = "payment_policy_id_example"; // string | This path parameter specifies the unique identifier of the payment policy you want to delete.<br><br> This ID can be retrieved for a payment policy by using the <a href=\"/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\" target=\"_blank \">getPaymentPolices</a> method.

try {
    $apiInstance->deletePaymentPolicy($payment_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->deletePaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_policy_id** | **string**| This path parameter specifies the unique identifier of the payment policy you want to delete.&lt;br&gt;&lt;br&gt; This ID can be retrieved for a payment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentPolices&lt;/a&gt; method. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentPolicies**
> \Ebay\Sell\Account\Model\PaymentPolicyResponse getPaymentPolicies($marketplace_id)



This method retrieves all the payment policies configured for the marketplace you specify using the <code>marketplace_id</code> query parameter.  <br><br><b>Marketplaces and locales</b>  <br><br>Get the correct policies for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get the policies for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank\">HTTP request headers</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum

try {
    $result = $apiInstance->getPaymentPolicies($marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->getPaymentPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policies you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |

### Return type

[**\Ebay\Sell\Account\Model\PaymentPolicyResponse**](../Model/PaymentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentPolicy**
> \Ebay\Sell\Account\Model\PaymentPolicy getPaymentPolicy($payment_policy_id)



This method retrieves the complete details of a payment policy. Supply the ID of the policy you want to retrieve using the <b>paymentPolicyId</b> path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_policy_id = "payment_policy_id_example"; // string | This path parameter specifies the ID of the payment policy you want to retrieve. <br><br> This ID can be retrieved for a payment policy by using the <a href=\"/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\" target=\"_blank \">getPaymentPolices</a> method.

try {
    $result = $apiInstance->getPaymentPolicy($payment_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->getPaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_policy_id** | **string**| This path parameter specifies the ID of the payment policy you want to retrieve. &lt;br&gt;&lt;br&gt; This ID can be retrieved for a payment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentPolices&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\PaymentPolicy**](../Model/PaymentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentPolicyByName**
> \Ebay\Sell\Account\Model\PaymentPolicy getPaymentPolicyByName($marketplace_id, $name)



This method retrieves the details of a specific payment policy. Supply both the policy <code>name</code> and its associated <code>marketplace_id</code> in the request query parameters.   <br><br><b>Marketplaces and locales</b>  <br><br>Get the correct policy for a marketplace that supports multiple locales using the <code>Content-Language</code> request header. For example, get a policy for the French locale of the Canadian marketplace by specifying <code>fr-CA</code> for the <code>Content-Language</code> header. Likewise, target the Dutch locale of the Belgium marketplace by setting <code>Content-Language: nl-BE</code>. For details on header values, see <a href=\"/api-docs/static/rest-request-components.html#HTTP\">HTTP request headers</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketplace_id = "marketplace_id_example"; // string | This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum
$name = "name_example"; // string | This query parameter specifies the seller-defined name of the payment policy you want to retrieve.<br><br> This value can be retrieved for a payment policy by using the <a href=\"/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\" target=\"_blank \">getPaymentPolicies</a> method.

try {
    $result = $apiInstance->getPaymentPolicyByName($marketplace_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->getPaymentPolicyByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| This query parameter specifies the eBay marketplace of the policy you want to retrieve. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum |
 **name** | **string**| This query parameter specifies the seller-defined name of the payment policy you want to retrieve.&lt;br&gt;&lt;br&gt; This value can be retrieved for a payment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\PaymentPolicy**](../Model/PaymentPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentPolicy**
> \Ebay\Sell\Account\Model\SetPaymentPolicyResponse updatePaymentPolicy($body, $content_type, $payment_policy_id)



This method updates an existing payment policy. Specify the policy you want to update using the <b>payment_policy_id</b> path parameter. Supply a complete policy payload with the updates you want to make; this call overwrites the existing policy with the new details specified in the payload.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\PaymentPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\PaymentPolicyRequest(); // \Ebay\Sell\Account\Model\PaymentPolicyRequest | Payment policy request
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$payment_policy_id = "payment_policy_id_example"; // string | This path parameter specifies the ID of the payment policy you want to update. <br><br> This ID can be retrieved for a payment policy by using the <a href=\"/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\" target=\"_blank \">getPaymentPolices</a> method.

try {
    $result = $apiInstance->updatePaymentPolicy($body, $content_type, $payment_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPolicyApi->updatePaymentPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\PaymentPolicyRequest**](../Model/PaymentPolicyRequest.md)| Payment policy request |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **payment_policy_id** | **string**| This path parameter specifies the ID of the payment policy you want to update. &lt;br&gt;&lt;br&gt; This ID can be retrieved for a payment policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/payment_policy/methods/getPaymentPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getPaymentPolices&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\SetPaymentPolicyResponse**](../Model/SetPaymentPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

