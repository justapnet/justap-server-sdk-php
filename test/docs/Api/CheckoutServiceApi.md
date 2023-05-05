# Justapnet\Justap\CheckoutServiceApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutServiceCreateUnionQrCheckout**](CheckoutServiceApi.md#checkoutServiceCreateUnionQrCheckout) | **POST** /v1/checkout/union_qr | 通过聚合收款码创建订单


# **checkoutServiceCreateUnionQrCheckout**
> \Justapnet\Justap\Model\V1UnionQrRequest checkoutServiceCreateUnionQrCheckout($body)

通过聚合收款码创建订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CheckoutServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1UnionQrRequest(); // \Justapnet\Justap\Model\V1UnionQrRequest | 

try {
    $result = $apiInstance->checkoutServiceCreateUnionQrCheckout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutServiceApi->checkoutServiceCreateUnionQrCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1UnionQrRequest**](../Model/V1UnionQrRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1UnionQrRequest**](../Model/V1UnionQrRequest.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

