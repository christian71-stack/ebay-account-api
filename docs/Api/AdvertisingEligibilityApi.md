# Ebay\Sell\Account\AdvertisingEligibilityApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdvertisingEligibility**](AdvertisingEligibilityApi.md#getadvertisingeligibility) | **GET** /advertising_eligibility | 

# **getAdvertisingEligibility**
> \Ebay\Sell\Account\Model\SellerEligibilityMultiProgramResponse getAdvertisingEligibility($x_ebay_c_marketplace_id, $program_types)



This method allows developers to check the seller eligibility status for eBay advertising programs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Ebay\Sell\Account\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Ebay\Sell\Account\Api\AdvertisingEligibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_ebay_c_marketplace_id = "x_ebay_c_marketplace_id_example"; // string | The unique identifier of the eBay marketplace for which the seller eligibility status shall be checked. This header is required or the call will fail.<br><br>See the <a href=\"/api-docs/sell/account/types/ba:MarketplaceIdEnum \" target=\"_blank \">MarketplaceIdEnum</a> type for the supported marketplace ID values.
$program_types = "program_types_example"; // string | A comma-separated list of eBay advertising programs for which eligibility status will be returned.<br><br> See the <a href=\"/api-docs/sell/account/types/plser:AdvertisingProgramEnum\" target=\"_blank\"> AdvertisingProgramEnum</a> type for a list of supported values.<br><br>If no programs are specified, the results will be returned for all programs.

try {
    $result = $apiInstance->getAdvertisingEligibility($x_ebay_c_marketplace_id, $program_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdvertisingEligibilityApi->getAdvertisingEligibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_ebay_c_marketplace_id** | **string**| The unique identifier of the eBay marketplace for which the seller eligibility status shall be checked. This header is required or the call will fail.&lt;br&gt;&lt;br&gt;See the &lt;a href&#x3D;\&quot;/api-docs/sell/account/types/ba:MarketplaceIdEnum \&quot; target&#x3D;\&quot;_blank \&quot;&gt;MarketplaceIdEnum&lt;/a&gt; type for the supported marketplace ID values. |
 **program_types** | **string**| A comma-separated list of eBay advertising programs for which eligibility status will be returned.&lt;br&gt;&lt;br&gt; See the &lt;a href&#x3D;\&quot;/api-docs/sell/account/types/plser:AdvertisingProgramEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt; AdvertisingProgramEnum&lt;/a&gt; type for a list of supported values.&lt;br&gt;&lt;br&gt;If no programs are specified, the results will be returned for all programs. | [optional]

### Return type

[**\Ebay\Sell\Account\Model\SellerEligibilityMultiProgramResponse**](../Model/SellerEligibilityMultiProgramResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

