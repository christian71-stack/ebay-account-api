# Ebay\Sell\Account\CustomPolicyApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomPolicy**](CustomPolicyApi.md#createcustompolicy) | **POST** /custom_policy/ | 
[**getCustomPolicies**](CustomPolicyApi.md#getcustompolicies) | **GET** /custom_policy/ | 
[**getCustomPolicy**](CustomPolicyApi.md#getcustompolicy) | **GET** /custom_policy/{custom_policy_id} | 
[**updateCustomPolicy**](CustomPolicyApi.md#updatecustompolicy) | **PUT** /custom_policy/{custom_policy_id} | 

# **createCustomPolicy**
> object createCustomPolicy($body, $content_type)



This method creates a new custom policy in which a seller specifies their terms for complying with local governmental regulations. <br/><br/>Two Custom Policy types are supported: <ul><li>Product Compliance (PRODUCT_COMPLIANCE)</li> <li>Takeback (TAKE_BACK)</li></ul>Each Custom Policy targets a <b>policyType</b>. Multiple policies may be created as follows: <ul><li><b>Product Compliance</b>: a maximum of 60 policies per seller may be created</li> <li><b>Takeback</b>: a maximum of 18 policies per seller may be created</li></ul>A successful create policy call returns an HTTP status code of <b>201 Created</b> with the system-generated policy ID included in the <b>Location</b> response header.<br/><br/><b>Product Compliance Policy</b><br/><br/>Product Compliance policies disclose product information as required for regulatory compliance.<br/><br/><span class=\"tablenote\"><strong>Note:</strong> A maximum of 60 Product Compliance policies per seller may be created.</span> <br/><br/> <b>Takeback Policy</b><br/><br/>Takeback policies describe the seller's legal obligation to take back a previously purchased item when the buyer purchases a new one.<br/><br/><span class=\"tablenote\"><strong>Note:</strong> A maximum of 18 Takeback policies per seller may be created.</span><br><br><span class=\"tablenote\"><b>Note:</b> Custom policies are no longer coupled with a specific eBay marketplace, so the <b>EBAY-C-MARKETPLACE-ID</b> request header is no longer needed or relevant for any of the Custom Policy methods.</span>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\CustomPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\CustomPolicyCreateRequest(); // \Ebay\Sell\Account\Model\CustomPolicyCreateRequest | Request to create a new Custom Policy.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->createCustomPolicy($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPolicyApi->createCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\CustomPolicyCreateRequest**](../Model/CustomPolicyCreateRequest.md)| Request to create a new Custom Policy. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

**object**

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomPolicies**
> \Ebay\Sell\Account\Model\CustomPolicyResponse getCustomPolicies($policy_types)



This method retrieves the list of custom policies specified by the <b>policy_types</b> query parameter.<br><br><span class=\"tablenote\"><b>Note:</b> Custom policies are no longer coupled with a specific eBay marketplace, so the <b>EBAY-C-MARKETPLACE-ID</b> request header is no longer needed or relevant for any of the Custom Policy methods.</span>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\CustomPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policy_types = "policy_types_example"; // string | This query parameter specifies the type of custom policies to be returned.<br><br>Multiple policy types may be requested in a single call by providing a comma-delimited set of all policy types to be returned.<br><br><span class=\"tablenote\"><strong>Note:</strong> Omitting this query parameter from a request will also return policies of all policy types.</span><br> See the <a href=\"/api-docs/sell/account/types/api:CustomPolicyTypeEnum\" target=\"_blank \">CustomPolicyTypeEnum</a> type for a list of supported values.

try {
    $result = $apiInstance->getCustomPolicies($policy_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPolicyApi->getCustomPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policy_types** | **string**| This query parameter specifies the type of custom policies to be returned.&lt;br&gt;&lt;br&gt;Multiple policy types may be requested in a single call by providing a comma-delimited set of all policy types to be returned.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; Omitting this query parameter from a request will also return policies of all policy types.&lt;/span&gt;&lt;br&gt; See the &lt;a href&#x3D;\&quot;/api-docs/sell/account/types/api:CustomPolicyTypeEnum\&quot; target&#x3D;\&quot;_blank \&quot;&gt;CustomPolicyTypeEnum&lt;/a&gt; type for a list of supported values. | [optional]

### Return type

[**\Ebay\Sell\Account\Model\CustomPolicyResponse**](../Model/CustomPolicyResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomPolicy**
> \Ebay\Sell\Account\Model\CustomPolicy getCustomPolicy($custom_policy_id)



This method retrieves the custom policy specified by the <b>custom_policy_id</b> path parameter.<br><br><span class=\"tablenote\"><b>Note:</b> Custom policies are no longer coupled with a specific eBay marketplace, so the <b>EBAY-C-MARKETPLACE-ID</b> request header is no longer needed or relevant for any of the Custom Policy methods.</span>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\CustomPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_policy_id = "custom_policy_id_example"; // string | This path parameter is the unique identifier of the custom policy to retrieve.<br><br> This ID can be retrieved for a custom policy by using the <a href=\"/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies\" target=\"_blank \">getCustomPolicies</a> method.

try {
    $result = $apiInstance->getCustomPolicy($custom_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPolicyApi->getCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_policy_id** | **string**| This path parameter is the unique identifier of the custom policy to retrieve.&lt;br&gt;&lt;br&gt; This ID can be retrieved for a custom policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getCustomPolicies&lt;/a&gt; method. |

### Return type

[**\Ebay\Sell\Account\Model\CustomPolicy**](../Model/CustomPolicy.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomPolicy**
> updateCustomPolicy($body, $content_type, $custom_policy_id)



This method updates an existing custom policy specified by the <b>custom_policy_id</b> path parameter. This method overwrites the policy's <b>Name</b>, <b>Label</b>, and <b>Description</b> fields. Therefore, the complete, current text of all three policy fields must be included in the request payload even when one or two of these fields will not actually be updated.<br/> <br/>For example, the value for the <b>Label</b> field is to be updated, but the <b>Name</b> and <b>Description</b> values will remain unchanged. The existing <b>Name</b> and <b>Description</b> values, as they are defined in the current policy, must also be passed in. <br/><br/>A successful policy update call returns an HTTP status code of <b>204 No Content</b>.<br><br><span class=\"tablenote\"><b>Note:</b> Custom policies are no longer coupled with a specific eBay marketplace, so the <b>EBAY-C-MARKETPLACE-ID</b> request header is no longer needed or relevant for any of the Custom Policy methods.</span>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\CustomPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Ebay\Sell\Account\Model\CustomPolicyRequest(); // \Ebay\Sell\Account\Model\CustomPolicyRequest | Request to update a current custom policy.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br> For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$custom_policy_id = "custom_policy_id_example"; // string | This path parameter is the unique identifier of the custom policy to retrieve.<br><br> This ID can be retrieved for a custom policy by using the <a href=\"/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies\" target=\"_blank \">getCustomPolicies</a> method.

try {
    $apiInstance->updateCustomPolicy($body, $content_type, $custom_policy_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomPolicyApi->updateCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ebay\Sell\Account\Model\CustomPolicyRequest**](../Model/CustomPolicyRequest.md)| Request to update a current custom policy. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt; For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **custom_policy_id** | **string**| This path parameter is the unique identifier of the custom policy to retrieve.&lt;br&gt;&lt;br&gt; This ID can be retrieved for a custom policy by using the &lt;a href&#x3D;\&quot;/api-docs/sell/account/resources/custom_policy/methods/getCustomPolicies\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getCustomPolicies&lt;/a&gt; method. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

