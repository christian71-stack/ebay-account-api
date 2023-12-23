# Ebay\Sell\Account\SubscriptionApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscription**](SubscriptionApi.md#getsubscription) | **GET** /subscription | 

# **getSubscription**
> \Ebay\Sell\Account\Model\SubscriptionResponse getSubscription($limit, $continuation_token)



This method retrieves a list of subscriptions associated with the seller account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = "limit_example"; // string | This field is for future use.
$continuation_token = "continuation_token_example"; // string | This field is for future use.

try {
    $result = $apiInstance->getSubscription($limit, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **string**| This field is for future use. | [optional]
 **continuation_token** | **string**| This field is for future use. | [optional]

### Return type

[**\Ebay\Sell\Account\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

