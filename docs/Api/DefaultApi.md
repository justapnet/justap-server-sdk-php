# Justapnet\Justap\DefaultApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chargeServiceCharges**](DefaultApi.md#chargeServiceCharges) | **POST** /transaction/v1/charges | 创建 Charge 对象
[**chargeServiceCharges2**](DefaultApi.md#chargeServiceCharges2) | **POST** /v1/charges | 创建 Charge 对象
[**chargeServiceQueryCharge**](DefaultApi.md#chargeServiceQueryCharge) | **GET** /transaction/v1/charges/{charge_id} | 查询 Charge 对象
[**chargeServiceQueryCharge2**](DefaultApi.md#chargeServiceQueryCharge2) | **GET** /v1/charges/{charge_id} | 查询 Charge 对象
[**chargeServiceQueryChargeList**](DefaultApi.md#chargeServiceQueryChargeList) | **GET** /transaction/v1/charges | 查询 Charge 对象列表
[**chargeServiceQueryChargeList2**](DefaultApi.md#chargeServiceQueryChargeList2) | **GET** /v1/charges | 查询 Charge 对象列表
[**chargeServiceReverseCharge**](DefaultApi.md#chargeServiceReverseCharge) | **POST** /transaction/v1/charges/{charge_id}/reverse | 撤销 Charge 对象
[**chargeServiceReverseCharge2**](DefaultApi.md#chargeServiceReverseCharge2) | **POST** /v1/charges/{charge_id}/reverse | 撤销 Charge 对象
[**refundServiceQueryRefund**](DefaultApi.md#refundServiceQueryRefund) | **GET** /transaction/v1/charges/{charge_id}/refunds/{refund_id} | 查询 Refund 对象
[**refundServiceQueryRefund2**](DefaultApi.md#refundServiceQueryRefund2) | **GET** /v1/refunds/{refund_id} | 查询 Refund 对象
[**refundServiceQueryRefundList**](DefaultApi.md#refundServiceQueryRefundList) | **GET** /transaction/v1/charges/{charge_id}/refunds | 查询 Refund 对象列表
[**refundServiceQueryRefundList2**](DefaultApi.md#refundServiceQueryRefundList2) | **GET** /v1/refunds | 查询 Refund 对象列表
[**refundServiceRefunds**](DefaultApi.md#refundServiceRefunds) | **POST** /transaction/v1/refunds | 创建 Refund 对象
[**refundServiceRefunds2**](DefaultApi.md#refundServiceRefunds2) | **POST** /v1/refunds | 创建 Refund 对象


# **chargeServiceCharges**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceCharges($body)

创建 Charge 对象

发起一次支付请求时需要创建一个新的 charge 对象，获取一个可用的支付凭据用于客户端向第三方渠道发起支付请求。如果使用测试模式的 API Key，则不会发生真实交易。当支付成功后，会发送 Webhooks 通知。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateChargeRequest(); // \Justapnet\Justap\Model\V1CreateChargeRequest | 你可以创建一个 charge 对象向用户收款。charge 是一个支付凭据对象，所有和支付相关的要素信息都存储在这个对象中，你的服务端可以通过发起支付请求来创建一个新的 charge 对象，也可以随时查询一个或者多个 charge 对象的状态。每个 charge 对象都拥有一个标识 id，该 id 在系统内唯一。

try {
    $result = $apiInstance->chargeServiceCharges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceCharges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateChargeRequest**](../Model/V1CreateChargeRequest.md)| 你可以创建一个 charge 对象向用户收款。charge 是一个支付凭据对象，所有和支付相关的要素信息都存储在这个对象中，你的服务端可以通过发起支付请求来创建一个新的 charge 对象，也可以随时查询一个或者多个 charge 对象的状态。每个 charge 对象都拥有一个标识 id，该 id 在系统内唯一。 |

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceCharges2**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceCharges2($body)

创建 Charge 对象

发起一次支付请求时需要创建一个新的 charge 对象，获取一个可用的支付凭据用于客户端向第三方渠道发起支付请求。如果使用测试模式的 API Key，则不会发生真实交易。当支付成功后，会发送 Webhooks 通知。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateChargeRequest(); // \Justapnet\Justap\Model\V1CreateChargeRequest | 你可以创建一个 charge 对象向用户收款。charge 是一个支付凭据对象，所有和支付相关的要素信息都存储在这个对象中，你的服务端可以通过发起支付请求来创建一个新的 charge 对象，也可以随时查询一个或者多个 charge 对象的状态。每个 charge 对象都拥有一个标识 id，该 id 在系统内唯一。

try {
    $result = $apiInstance->chargeServiceCharges2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceCharges2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateChargeRequest**](../Model/V1CreateChargeRequest.md)| 你可以创建一个 charge 对象向用户收款。charge 是一个支付凭据对象，所有和支付相关的要素信息都存储在这个对象中，你的服务端可以通过发起支付请求来创建一个新的 charge 对象，也可以随时查询一个或者多个 charge 对象的状态。每个 charge 对象都拥有一个标识 id，该 id 在系统内唯一。 |

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryCharge**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceQueryCharge($charge_id, $app_id)

查询 Charge 对象

你可以在后台异步通知之前，通过查询接口确认支付状态。通过charge对象的id查询一个已创建的charge对象。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | [REQUIRED] Charge 对象 id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->chargeServiceQueryCharge($charge_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceQueryCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| [REQUIRED] Charge 对象 id |
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryCharge2**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceQueryCharge2($charge_id, $app_id)

查询 Charge 对象

你可以在后台异步通知之前，通过查询接口确认支付状态。通过charge对象的id查询一个已创建的charge对象。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | [REQUIRED] Charge 对象 id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->chargeServiceQueryCharge2($charge_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceQueryCharge2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| [REQUIRED] Charge 对象 id |
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryChargeList**
> \Justapnet\Justap\Model\V1ChargeListResponse chargeServiceQueryChargeList($app_id, $limit, $starting_after, $ending_before, $merchant_trade_id, $created_lt, $created_lte, $created_gt, $created_gte, $channel, $paid, $refunded, $reversed, $closed, $expired)

查询 Charge 对象列表

返回之前创建过 charge 对象的一个列表。列表是按创建时间进行排序，总是将最新的 charge 对象显示在最前。如果不设置 created 参数，默认查询近一个月的数据；设置了 created 参数，会按照对应的时间段查询。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页
$merchant_trade_id = "merchant_trade_id_example"; // string | [OPTIONAL] 客户系统订单号
$created_lt = 0; // int | 大于 charge 对象的创建时间，用 Unix 时间戳表示
$created_lte = 0; // int | 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gt = 0; // int | 小于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gte = 0; // int | 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$channel = "CHANNEL_INVALID_UNSPECIFIED"; // string | [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付
$paid = false; // bool | [OPTIONAL] 是否已付款
$refunded = false; // bool | [OPTIONAL] 是否存在退款信息，无论退款是否成功。
$reversed = false; // bool | [OPTIONAL] 是否已撤销
$closed = false; // bool | [OPTIONAL] 是否已关闭
$expired = false; // bool | [OPTIONAL] 是否已过期

try {
    $result = $apiInstance->chargeServiceQueryChargeList($app_id, $limit, $starting_after, $ending_before, $merchant_trade_id, $created_lt, $created_lte, $created_gt, $created_gte, $channel, $paid, $refunded, $reversed, $closed, $expired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceQueryChargeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]
 **merchant_trade_id** | **string**| [OPTIONAL] 客户系统订单号 | [optional]
 **created_lt** | **int**| 大于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_lte** | **int**| 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gt** | **int**| 小于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gte** | **int**| 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **channel** | **string**| [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付 | [optional] [default to CHANNEL_INVALID_UNSPECIFIED]
 **paid** | **bool**| [OPTIONAL] 是否已付款 | [optional] [default to false]
 **refunded** | **bool**| [OPTIONAL] 是否存在退款信息，无论退款是否成功。 | [optional] [default to false]
 **reversed** | **bool**| [OPTIONAL] 是否已撤销 | [optional] [default to false]
 **closed** | **bool**| [OPTIONAL] 是否已关闭 | [optional] [default to false]
 **expired** | **bool**| [OPTIONAL] 是否已过期 | [optional] [default to false]

### Return type

[**\Justapnet\Justap\Model\V1ChargeListResponse**](../Model/V1ChargeListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryChargeList2**
> \Justapnet\Justap\Model\V1ChargeListResponse chargeServiceQueryChargeList2($app_id, $limit, $starting_after, $ending_before, $merchant_trade_id, $created_lt, $created_lte, $created_gt, $created_gte, $channel, $paid, $refunded, $reversed, $closed, $expired)

查询 Charge 对象列表

返回之前创建过 charge 对象的一个列表。列表是按创建时间进行排序，总是将最新的 charge 对象显示在最前。如果不设置 created 参数，默认查询近一个月的数据；设置了 created 参数，会按照对应的时间段查询。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页
$merchant_trade_id = "merchant_trade_id_example"; // string | [OPTIONAL] 客户系统订单号
$created_lt = 0; // int | 大于 charge 对象的创建时间，用 Unix 时间戳表示
$created_lte = 0; // int | 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gt = 0; // int | 小于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gte = 0; // int | 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$channel = "CHANNEL_INVALID_UNSPECIFIED"; // string | [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付
$paid = false; // bool | [OPTIONAL] 是否已付款
$refunded = false; // bool | [OPTIONAL] 是否存在退款信息，无论退款是否成功。
$reversed = false; // bool | [OPTIONAL] 是否已撤销
$closed = false; // bool | [OPTIONAL] 是否已关闭
$expired = false; // bool | [OPTIONAL] 是否已过期

try {
    $result = $apiInstance->chargeServiceQueryChargeList2($app_id, $limit, $starting_after, $ending_before, $merchant_trade_id, $created_lt, $created_lte, $created_gt, $created_gte, $channel, $paid, $refunded, $reversed, $closed, $expired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceQueryChargeList2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]
 **merchant_trade_id** | **string**| [OPTIONAL] 客户系统订单号 | [optional]
 **created_lt** | **int**| 大于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_lte** | **int**| 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gt** | **int**| 小于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gte** | **int**| 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **channel** | **string**| [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付 | [optional] [default to CHANNEL_INVALID_UNSPECIFIED]
 **paid** | **bool**| [OPTIONAL] 是否已付款 | [optional] [default to false]
 **refunded** | **bool**| [OPTIONAL] 是否存在退款信息，无论退款是否成功。 | [optional] [default to false]
 **reversed** | **bool**| [OPTIONAL] 是否已撤销 | [optional] [default to false]
 **closed** | **bool**| [OPTIONAL] 是否已关闭 | [optional] [default to false]
 **expired** | **bool**| [OPTIONAL] 是否已过期 | [optional] [default to false]

### Return type

[**\Justapnet\Justap\Model\V1ChargeListResponse**](../Model/V1ChargeListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceReverseCharge**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceReverseCharge($charge_id, $app_id)

撤销 Charge 对象

针对已经创建的 Charge，你可以调用撤销接口进行交易的关闭。接口支持对于未成功付款的订单进行撤销，则关闭交易。调用此接口后用户后期不能支付成功。  注：撤销订单在不同收单机构会有不同的行为。对于成功付款的订单请使用 退款 接口进行退款处理。只有针对未支付的订单，我们建议你调用撤销接口。  - 微信支付：如果此订单用户支付失败，微信支付系统会将此订单关闭；如果用户支付成功，微信支付系统会将此订单资金退还给用户。(7天以内的交易单可调用撤销) - 支付宝：如果此订单用户支付失败，支付宝系统会将此订单关闭；如果用户支付成功，支付宝系统会将此订单资金退还给用户。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | Charge 对象 id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->chargeServiceReverseCharge($charge_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceReverseCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| Charge 对象 id |
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceReverseCharge2**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceReverseCharge2($charge_id, $app_id)

撤销 Charge 对象

针对已经创建的 Charge，你可以调用撤销接口进行交易的关闭。接口支持对于未成功付款的订单进行撤销，则关闭交易。调用此接口后用户后期不能支付成功。  注：撤销订单在不同收单机构会有不同的行为。对于成功付款的订单请使用 退款 接口进行退款处理。只有针对未支付的订单，我们建议你调用撤销接口。  - 微信支付：如果此订单用户支付失败，微信支付系统会将此订单关闭；如果用户支付成功，微信支付系统会将此订单资金退还给用户。(7天以内的交易单可调用撤销) - 支付宝：如果此订单用户支付失败，支付宝系统会将此订单关闭；如果用户支付成功，支付宝系统会将此订单资金退还给用户。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | Charge 对象 id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->chargeServiceReverseCharge2($charge_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceReverseCharge2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| Charge 对象 id |
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundServiceQueryRefund**
> \Justapnet\Justap\Model\V1RefundResponse refundServiceQueryRefund($charge_id, $refund_id, $app_id)

查询 Refund 对象

可以通过 charge 对象的查询接口查询某一个 charge 对象的退款列表，也可以通过 refund 对象的 id 查询一个已创建的 refund 对象。可以在 Webhooks 通知之前，通过查询接口确认退款状态。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | [REQUIRED] 支付 Charge Id
$refund_id = "refund_id_example"; // string | [REQUIRED] Refund 对象 id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->refundServiceQueryRefund($charge_id, $refund_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundServiceQueryRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| [REQUIRED] 支付 Charge Id |
 **refund_id** | **string**| [REQUIRED] Refund 对象 id |
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]

### Return type

[**\Justapnet\Justap\Model\V1RefundResponse**](../Model/V1RefundResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundServiceQueryRefund2**
> \Justapnet\Justap\Model\V1RefundResponse refundServiceQueryRefund2($refund_id, $charge_id, $app_id)

查询 Refund 对象

可以通过 charge 对象的查询接口查询某一个 charge 对象的退款列表，也可以通过 refund 对象的 id 查询一个已创建的 refund 对象。可以在 Webhooks 通知之前，通过查询接口确认退款状态。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = "refund_id_example"; // string | [REQUIRED] Refund 对象 id
$charge_id = "charge_id_example"; // string | [REQUIRED] 支付 Charge Id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->refundServiceQueryRefund2($refund_id, $charge_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundServiceQueryRefund2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| [REQUIRED] Refund 对象 id |
 **charge_id** | **string**| [REQUIRED] 支付 Charge Id | [optional]
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]

### Return type

[**\Justapnet\Justap\Model\V1RefundResponse**](../Model/V1RefundResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundServiceQueryRefundList**
> \Justapnet\Justap\Model\V1RefundListResponse refundServiceQueryRefundList($charge_id, $app_id, $limit, $starting_after, $ending_before)

查询 Refund 对象列表

返回之前创建 charge 对象的一个 refund 对象列表。列表是按创建时间进行排序，总是将最新的 refund 对象显示在最前。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | [REQUIRED] 支付 Charge Id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页

try {
    $result = $apiInstance->refundServiceQueryRefundList($charge_id, $app_id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundServiceQueryRefundList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| [REQUIRED] 支付 Charge Id |
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]

### Return type

[**\Justapnet\Justap\Model\V1RefundListResponse**](../Model/V1RefundListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundServiceQueryRefundList2**
> \Justapnet\Justap\Model\V1RefundListResponse refundServiceQueryRefundList2($charge_id, $app_id, $limit, $starting_after, $ending_before)

查询 Refund 对象列表

返回之前创建 charge 对象的一个 refund 对象列表。列表是按创建时间进行排序，总是将最新的 refund 对象显示在最前。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | [REQUIRED] 支付 Charge Id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页

try {
    $result = $apiInstance->refundServiceQueryRefundList2($charge_id, $app_id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundServiceQueryRefundList2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| [REQUIRED] 支付 Charge Id | [optional]
 **app_id** | **string**| [REQUIRED] 应用 id | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]

### Return type

[**\Justapnet\Justap\Model\V1RefundListResponse**](../Model/V1RefundListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundServiceRefunds**
> \Justapnet\Justap\Model\V1RefundResponse refundServiceRefunds($body)

创建 Refund 对象

通过发起一次退款请求创建一个新的 refund 对象，只能对已经发生交易并且没有全额退款的 charge 对象发起退款。当进行全额退款之前，可以进行多次退款，直至全额退款。当一次退款成功后，会发送 Webhooks 通知。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateRefundRequest(); // \Justapnet\Justap\Model\V1CreateRefundRequest | 通过发起一次退款请求创建一个新的 refund 对象，只能对已经发生交易并且没有全额退款的 charge 对象发起退款。当进行全额退款之前，可以进行多次退款，直至全额退款。当一次退款成功后，会发送 Webhooks 通知。

try {
    $result = $apiInstance->refundServiceRefunds($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundServiceRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateRefundRequest**](../Model/V1CreateRefundRequest.md)| 通过发起一次退款请求创建一个新的 refund 对象，只能对已经发生交易并且没有全额退款的 charge 对象发起退款。当进行全额退款之前，可以进行多次退款，直至全额退款。当一次退款成功后，会发送 Webhooks 通知。 |

### Return type

[**\Justapnet\Justap\Model\V1RefundResponse**](../Model/V1RefundResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundServiceRefunds2**
> \Justapnet\Justap\Model\V1RefundResponse refundServiceRefunds2($body)

创建 Refund 对象

通过发起一次退款请求创建一个新的 refund 对象，只能对已经发生交易并且没有全额退款的 charge 对象发起退款。当进行全额退款之前，可以进行多次退款，直至全额退款。当一次退款成功后，会发送 Webhooks 通知。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateRefundRequest(); // \Justapnet\Justap\Model\V1CreateRefundRequest | 通过发起一次退款请求创建一个新的 refund 对象，只能对已经发生交易并且没有全额退款的 charge 对象发起退款。当进行全额退款之前，可以进行多次退款，直至全额退款。当一次退款成功后，会发送 Webhooks 通知。

try {
    $result = $apiInstance->refundServiceRefunds2($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundServiceRefunds2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateRefundRequest**](../Model/V1CreateRefundRequest.md)| 通过发起一次退款请求创建一个新的 refund 对象，只能对已经发生交易并且没有全额退款的 charge 对象发起退款。当进行全额退款之前，可以进行多次退款，直至全额退款。当一次退款成功后，会发送 Webhooks 通知。 |

### Return type

[**\Justapnet\Justap\Model\V1RefundResponse**](../Model/V1RefundResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

