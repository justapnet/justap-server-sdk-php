# Justapnet\Justap\RoyaltyServiceApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**royaltyServiceCreateRoyalty**](RoyaltyServiceApi.md#royaltyServiceCreateRoyalty) | **POST** /v1/royalties | 创建 Royalty 对象


# **royaltyServiceCreateRoyalty**
> \Justapnet\Justap\Model\V1RoyaltyResponse royaltyServiceCreateRoyalty($body)

创建 Royalty 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\RoyaltyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateRoyaltyRequest(); // \Justapnet\Justap\Model\V1CreateRoyaltyRequest | 

try {
    $result = $apiInstance->royaltyServiceCreateRoyalty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoyaltyServiceApi->royaltyServiceCreateRoyalty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateRoyaltyRequest**](../Model/V1CreateRoyaltyRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1RoyaltyResponse**](../Model/V1RoyaltyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

