# Justapnet\Justap\DefaultApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessUserServiceCreateUser**](DefaultApi.md#businessUserServiceCreateUser) | **POST** /v1/business_users | 创建 Business User 对象
[**businessUserServiceDeleteUser**](DefaultApi.md#businessUserServiceDeleteUser) | **DELETE** /v1/business_users/{id} | 删除 Business User 对象
[**businessUserServiceListAllUsers**](DefaultApi.md#businessUserServiceListAllUsers) | **GET** /v1/business_users | 查询 Business User 对象列表
[**businessUserServiceRetrieveUser**](DefaultApi.md#businessUserServiceRetrieveUser) | **GET** /v1/business_users/{id} | 查询 Business User 对象
[**businessUserServiceSearchUsers**](DefaultApi.md#businessUserServiceSearchUsers) | **GET** /v1/business_users/search | 查询 Business User 对象列表
[**businessUserServiceUpdateUser**](DefaultApi.md#businessUserServiceUpdateUser) | **PUT** /v1/business_users/{user.id} | 更新 Business User 对象
[**businessUserServiceUpdateUser2**](DefaultApi.md#businessUserServiceUpdateUser2) | **PATCH** /v1/business_users/{user.id} | 更新 Business User 对象
[**chargeServiceCharges**](DefaultApi.md#chargeServiceCharges) | **POST** /transaction/v1/charges | 创建 Charge 对象
[**chargeServiceCharges2**](DefaultApi.md#chargeServiceCharges2) | **POST** /v1/charges | 创建 Charge 对象
[**chargeServiceQueryCharge**](DefaultApi.md#chargeServiceQueryCharge) | **GET** /transaction/v1/charges/{charge_id} | 查询 Charge 对象
[**chargeServiceQueryCharge2**](DefaultApi.md#chargeServiceQueryCharge2) | **GET** /v1/charges/{charge_id} | 查询 Charge 对象
[**chargeServiceQueryCharge3**](DefaultApi.md#chargeServiceQueryCharge3) | **GET** /v1/charges/merchant_trade_id/{merchant_trade_id} | 查询 Charge 对象
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
[**royaltyServiceCreateRoyalty**](DefaultApi.md#royaltyServiceCreateRoyalty) | **POST** /v1/royalties | 创建 Royalty 对象
[**royaltyServiceListAllRoyalties**](DefaultApi.md#royaltyServiceListAllRoyalties) | **GET** /v1/royalties | 查询 Royalty 对象列表
[**royaltyServiceRetrieveRoyalty**](DefaultApi.md#royaltyServiceRetrieveRoyalty) | **GET** /v1/royalties/{id} | 查询 Royalty 对象
[**settlementServiceCreateSettlementAccount**](DefaultApi.md#settlementServiceCreateSettlementAccount) | **POST** /v1/settlement_accounts | 创建结算账户
[**settlementServiceDeleteSettlementAccount**](DefaultApi.md#settlementServiceDeleteSettlementAccount) | **DELETE** /v1/settlement_accounts/{id} | 删除结算账户
[**settlementServiceListAllSettlementAccounts**](DefaultApi.md#settlementServiceListAllSettlementAccounts) | **GET** /v1/settlement_accounts | 查询结算账户列表
[**settlementServiceRetrieveSettlementAccount**](DefaultApi.md#settlementServiceRetrieveSettlementAccount) | **GET** /v1/settlement_accounts/{id} | 查询结算账户
[**settlementServiceSearchSettlementAccounts**](DefaultApi.md#settlementServiceSearchSettlementAccounts) | **GET** /v1/settlement_accounts/search | 查询结算账户列表
[**settlementServiceUpdateSettlementAccount**](DefaultApi.md#settlementServiceUpdateSettlementAccount) | **PUT** /v1/settlement_accounts/{settlementAccount.id} | 更新结算账户
[**settlementServiceUpdateSettlementAccount2**](DefaultApi.md#settlementServiceUpdateSettlementAccount2) | **PATCH** /v1/settlement_accounts/{settlementAccount.id} | 更新结算账户


# **businessUserServiceCreateUser**
> \Justapnet\Justap\Model\V1UserResponse businessUserServiceCreateUser($body)

创建 Business User 对象

创建 Business User 对象。商业用户是本系统中的一种账户类型，在交易完成之后可以对该类型的账户进行分账等操作。

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
$body = new \Justapnet\Justap\Model\V1CreateUserRequest(); // \Justapnet\Justap\Model\V1CreateUserRequest | 

try {
    $result = $apiInstance->businessUserServiceCreateUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceCreateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateUserRequest**](../Model/V1CreateUserRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1UserResponse**](../Model/V1UserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessUserServiceDeleteUser**
> \Justapnet\Justap\Model\V1DeleteUserResponse businessUserServiceDeleteUser($id, $app_id)

删除 Business User 对象

删除 Business User 对象

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
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->businessUserServiceDeleteUser($id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceDeleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1DeleteUserResponse**](../Model/V1DeleteUserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessUserServiceListAllUsers**
> \Justapnet\Justap\Model\V1UserListResponse businessUserServiceListAllUsers($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled)

查询 Business User 对象列表

查询 Business User 对象列表

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
$app_id = "app_id_example"; // string | 
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页
$created_lt = 0; // int | 大于 charge 对象的创建时间，用 Unix 时间戳表示
$created_lte = 0; // int | 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gt = 0; // int | 小于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gte = 0; // int | 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$disabled = true; // bool | [OPTIONAL] 是否禁用，默认为 false

try {
    $result = $apiInstance->businessUserServiceListAllUsers($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceListAllUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]
 **created_lt** | **int**| 大于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_lte** | **int**| 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gt** | **int**| 小于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gte** | **int**| 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **disabled** | **bool**| [OPTIONAL] 是否禁用，默认为 false | [optional]

### Return type

[**\Justapnet\Justap\Model\V1UserListResponse**](../Model/V1UserListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessUserServiceRetrieveUser**
> \Justapnet\Justap\Model\V1UserResponse businessUserServiceRetrieveUser($id, $app_id)

查询 Business User 对象

查询 Business User 对象

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
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->businessUserServiceRetrieveUser($id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceRetrieveUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1UserResponse**](../Model/V1UserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessUserServiceSearchUsers**
> \Justapnet\Justap\Model\V1UserListResponse businessUserServiceSearchUsers($app_id, $limit, $created_lt, $created_lte, $created_gt, $created_gte, $email, $name, $phone)

查询 Business User 对象列表

查询 Business User 对象列表

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
$app_id = "app_id_example"; // string | 
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$created_lt = 0; // int | 大于 BusinessUser 对象的创建时间，用 Unix 时间戳表示
$created_lte = 0; // int | 大于或等于 BusinessUser 对象的创建时间，用 Unix 时间戳表示
$created_gt = 0; // int | 小于 BusinessUser 对象的创建时间，用 Unix 时间戳表示
$created_gte = 0; // int | 小于或等于 BusinessUser 对象的创建时间，用 Unix 时间戳表示
$email = "email_example"; // string | [OPTIONAL] BusinessUser 对象的邮箱地址。支持模糊匹配
$name = "name_example"; // string | [OPTIONAL] BusinessUser 对象的用户名。支持模糊匹配
$phone = "phone_example"; // string | [OPTIONAL] BusinessUser 对象的手机号码

try {
    $result = $apiInstance->businessUserServiceSearchUsers($app_id, $limit, $created_lt, $created_lte, $created_gt, $created_gte, $email, $name, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceSearchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **created_lt** | **int**| 大于 BusinessUser 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_lte** | **int**| 大于或等于 BusinessUser 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gt** | **int**| 小于 BusinessUser 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gte** | **int**| 小于或等于 BusinessUser 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **email** | **string**| [OPTIONAL] BusinessUser 对象的邮箱地址。支持模糊匹配 | [optional]
 **name** | **string**| [OPTIONAL] BusinessUser 对象的用户名。支持模糊匹配 | [optional]
 **phone** | **string**| [OPTIONAL] BusinessUser 对象的手机号码 | [optional]

### Return type

[**\Justapnet\Justap\Model\V1UserListResponse**](../Model/V1UserListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessUserServiceUpdateUser**
> \Justapnet\Justap\Model\V1UserResponse businessUserServiceUpdateUser($user_id, $body, $update_mask)

更新 Business User 对象

更新 Business User 对象

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
$user_id = "user_id_example"; // string | 
$body = new \Justapnet\Justap\Model\V1BusinessUser(); // \Justapnet\Justap\Model\V1BusinessUser | 
$update_mask = "update_mask_example"; // string | 

try {
    $result = $apiInstance->businessUserServiceUpdateUser($user_id, $body, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceUpdateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Justapnet\Justap\Model\V1BusinessUser**](../Model/V1BusinessUser.md)|  |
 **update_mask** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1UserResponse**](../Model/V1UserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessUserServiceUpdateUser2**
> \Justapnet\Justap\Model\V1UserResponse businessUserServiceUpdateUser2($user_id, $body, $update_mask)

更新 Business User 对象

更新 Business User 对象

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
$user_id = "user_id_example"; // string | 
$body = new \Justapnet\Justap\Model\V1BusinessUser(); // \Justapnet\Justap\Model\V1BusinessUser | 
$update_mask = "update_mask_example"; // string | 

try {
    $result = $apiInstance->businessUserServiceUpdateUser2($user_id, $body, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->businessUserServiceUpdateUser2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Justapnet\Justap\Model\V1BusinessUser**](../Model/V1BusinessUser.md)|  |
 **update_mask** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1UserResponse**](../Model/V1UserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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
$body = new \Justapnet\Justap\Model\V1CreateChargeRequest(); // \Justapnet\Justap\Model\V1CreateChargeRequest | 

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
 **body** | [**\Justapnet\Justap\Model\V1CreateChargeRequest**](../Model/V1CreateChargeRequest.md)|  |

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
$body = new \Justapnet\Justap\Model\V1CreateChargeRequest(); // \Justapnet\Justap\Model\V1CreateChargeRequest | 

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
 **body** | [**\Justapnet\Justap\Model\V1CreateChargeRequest**](../Model/V1CreateChargeRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryCharge**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceQueryCharge($charge_id, $app_id, $merchant_trade_id)

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
$merchant_trade_id = "merchant_trade_id_example"; // string | [OPTIONAL] 商户订单号

try {
    $result = $apiInstance->chargeServiceQueryCharge($charge_id, $app_id, $merchant_trade_id);
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
 **merchant_trade_id** | **string**| [OPTIONAL] 商户订单号 | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryCharge2**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceQueryCharge2($charge_id, $app_id, $merchant_trade_id)

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
$merchant_trade_id = "merchant_trade_id_example"; // string | [OPTIONAL] 商户订单号

try {
    $result = $apiInstance->chargeServiceQueryCharge2($charge_id, $app_id, $merchant_trade_id);
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
 **merchant_trade_id** | **string**| [OPTIONAL] 商户订单号 | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceQueryCharge3**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceQueryCharge3($merchant_trade_id, $charge_id, $app_id)

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
$merchant_trade_id = "merchant_trade_id_example"; // string | [OPTIONAL] 商户订单号
$charge_id = "charge_id_example"; // string | [REQUIRED] Charge 对象 id
$app_id = "app_id_example"; // string | [REQUIRED] 应用 id

try {
    $result = $apiInstance->chargeServiceQueryCharge3($merchant_trade_id, $charge_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceQueryCharge3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_trade_id** | **string**| [OPTIONAL] 商户订单号 |
 **charge_id** | **string**| [REQUIRED] Charge 对象 id | [optional]
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
$channel = "CHANNEL_INVALID_UNSPECIFIED"; // string | [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - AlipayJSAPI: 支付宝 JSAPI 支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付  - UnionPayQr: 银联二维码支付（云闪付扫码）
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
 **channel** | **string**| [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - AlipayJSAPI: 支付宝 JSAPI 支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付  - UnionPayQr: 银联二维码支付（云闪付扫码） | [optional] [default to CHANNEL_INVALID_UNSPECIFIED]
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
$channel = "CHANNEL_INVALID_UNSPECIFIED"; // string | [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - AlipayJSAPI: 支付宝 JSAPI 支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付  - UnionPayQr: 银联二维码支付（云闪付扫码）
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
 **channel** | **string**| [OPTIONAL] 渠道名称   - BALANCE: 余额支付  - AlipayQR: 支付宝扫码支付  - AlipayScan: 支付宝条码支付  - AlipayApp: 支付宝 App 支付  - AlipayWap: 支付宝手机网站支付  - AlipayPage: 支付宝电脑网站支付  - AlipayFace: 支付宝刷脸支付  - AlipayLite: 支付宝小程序支付  - AlipayJSAPI: 支付宝 JSAPI 支付  - WechatpayApp: 微信 App 支付  - WechatpayJSAPI: 微信 JSAPI 支付  - WechatpayH5: 微信 H5 支付  - WechatpayNative: 微信 Native 支付  - WechatpayLite: 微信小程序支付  - WechatpayFace: 刷脸支付  - WechatpayScan: 微信付款码支付  - UnionPayQr: 银联二维码支付（云闪付扫码） | [optional] [default to CHANNEL_INVALID_UNSPECIFIED]
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
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceReverseCharge($charge_id)

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

try {
    $result = $apiInstance->chargeServiceReverseCharge($charge_id);
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

### Return type

[**\Justapnet\Justap\Model\V1ChargeResponse**](../Model/V1ChargeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chargeServiceReverseCharge2**
> \Justapnet\Justap\Model\V1ChargeResponse chargeServiceReverseCharge2($charge_id)

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

try {
    $result = $apiInstance->chargeServiceReverseCharge2($charge_id);
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
$body = new \Justapnet\Justap\Model\V1CreateRefundRequest(); // \Justapnet\Justap\Model\V1CreateRefundRequest | 

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
 **body** | [**\Justapnet\Justap\Model\V1CreateRefundRequest**](../Model/V1CreateRefundRequest.md)|  |

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
$body = new \Justapnet\Justap\Model\V1CreateRefundRequest(); // \Justapnet\Justap\Model\V1CreateRefundRequest | 

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
 **body** | [**\Justapnet\Justap\Model\V1CreateRefundRequest**](../Model/V1CreateRefundRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1RefundResponse**](../Model/V1RefundResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **royaltyServiceCreateRoyalty**
> \Justapnet\Justap\Model\V1RoyaltyResponse royaltyServiceCreateRoyalty($body)

创建 Royalty 对象

对一个 Charge 对象进行分账，分账的金额和分账接收方由 Royalty 对象指定。Royalty 创建仅代表本系统成功接收分账申请，尚未提交到支付机构清分，更不代表分账立即成功，相关结果信息请调用查询接口确认

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
$body = new \Justapnet\Justap\Model\V1CreateRoyaltyRequest(); // \Justapnet\Justap\Model\V1CreateRoyaltyRequest | 

try {
    $result = $apiInstance->royaltyServiceCreateRoyalty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->royaltyServiceCreateRoyalty: ', $e->getMessage(), PHP_EOL;
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

# **royaltyServiceListAllRoyalties**
> \Justapnet\Justap\Model\V1ListAllRoyaltiesResponse royaltyServiceListAllRoyalties($limit, $starting_after, $ending_before, $merchant_trade_id, $created_lt, $created_lte, $created_gt, $created_gte, $app_id, $settle_account_id, $royalty_settlement_id)

查询 Royalty 对象列表

查询 Royalty 对象的列表信息

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
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页
$merchant_trade_id = "merchant_trade_id_example"; // string | [OPTIONAL] 客户系统订单号
$created_lt = 0; // int | 大于 charge 对象的创建时间，用 Unix 时间戳表示
$created_lte = 0; // int | 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gt = 0; // int | 小于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gte = 0; // int | 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$app_id = "app_id_example"; // string | 
$settle_account_id = "settle_account_id_example"; // string | 
$royalty_settlement_id = "royalty_settlement_id_example"; // string | 

try {
    $result = $apiInstance->royaltyServiceListAllRoyalties($limit, $starting_after, $ending_before, $merchant_trade_id, $created_lt, $created_lte, $created_gt, $created_gte, $app_id, $settle_account_id, $royalty_settlement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->royaltyServiceListAllRoyalties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]
 **merchant_trade_id** | **string**| [OPTIONAL] 客户系统订单号 | [optional]
 **created_lt** | **int**| 大于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_lte** | **int**| 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gt** | **int**| 小于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gte** | **int**| 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **app_id** | **string**|  | [optional]
 **settle_account_id** | **string**|  | [optional]
 **royalty_settlement_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1ListAllRoyaltiesResponse**](../Model/V1ListAllRoyaltiesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **royaltyServiceRetrieveRoyalty**
> \Justapnet\Justap\Model\V1RoyaltyResponse royaltyServiceRetrieveRoyalty($id)

查询 Royalty 对象

查询 Royalty 对象的信息

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
$id = "id_example"; // string | 

try {
    $result = $apiInstance->royaltyServiceRetrieveRoyalty($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->royaltyServiceRetrieveRoyalty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Justapnet\Justap\Model\V1RoyaltyResponse**](../Model/V1RoyaltyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceCreateSettlementAccount**
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceCreateSettlementAccount($body)

创建结算账户

为用户创建一个结算账户。添加结算账户信息后方可对该用进行分账、余额充值、转账等操作。

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
$body = new \Justapnet\Justap\Model\V1CreateSettlementAccountRequest(); // \Justapnet\Justap\Model\V1CreateSettlementAccountRequest | 

try {
    $result = $apiInstance->settlementServiceCreateSettlementAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceCreateSettlementAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateSettlementAccountRequest**](../Model/V1CreateSettlementAccountRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountResponse**](../Model/V1SettlementAccountResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceDeleteSettlementAccount**
> \Justapnet\Justap\Model\V1DeleteSettlementAccountResponse settlementServiceDeleteSettlementAccount($id, $app_id)

删除结算账户

删除结算账户

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
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->settlementServiceDeleteSettlementAccount($id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceDeleteSettlementAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1DeleteSettlementAccountResponse**](../Model/V1DeleteSettlementAccountResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceListAllSettlementAccounts**
> \Justapnet\Justap\Model\V1SettlementAccountListResponse settlementServiceListAllSettlementAccounts($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled, $customer_id, $business_user_id)

查询结算账户列表

查询结算账户列表

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
$app_id = "app_id_example"; // string | 
$limit = 10; // int | [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项
$starting_after = "starting_after_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after = obj_end 去获取下一页
$ending_before = "ending_before_example"; // string | [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before = obj_start 去获取上一页
$created_lt = 0; // int | 大于 charge 对象的创建时间，用 Unix 时间戳表示
$created_lte = 0; // int | 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gt = 0; // int | 小于 charge 对象的创建时间，用 Unix 时间戳表示
$created_gte = 0; // int | 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示
$disabled = true; // bool | [OPTIONAL] 是否禁用，默认为 false
$customer_id = "customer_id_example"; // string | [OPTIONAL] 客户 ID
$business_user_id = "business_user_id_example"; // string | [OPTIONAL] 商户用户 ID

try {
    $result = $apiInstance->settlementServiceListAllSettlementAccounts($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled, $customer_id, $business_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceListAllSettlementAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [optional]
 **limit** | **int**| [OPTIONAL] 限制有多少对象可以被返回，限制范围是从 1~100 项，默认是 10 项 | [optional] [default to 10]
 **starting_after** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的第一项从何处开始。假设你的一次请求返回列表的最后一项的 id 是 obj_end，你可以使用 starting_after &#x3D; obj_end 去获取下一页 | [optional]
 **ending_before** | **string**| [OPTIONAL] 在分页时使用的指针，决定了列表的最末项在何处结束。假设你的一次请求返回列表的第一项的 id 是 obj_start，你可以使用 ending_before &#x3D; obj_start 去获取上一页 | [optional]
 **created_lt** | **int**| 大于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_lte** | **int**| 大于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gt** | **int**| 小于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **created_gte** | **int**| 小于或等于 charge 对象的创建时间，用 Unix 时间戳表示 | [optional] [default to 0]
 **disabled** | **bool**| [OPTIONAL] 是否禁用，默认为 false | [optional]
 **customer_id** | **string**| [OPTIONAL] 客户 ID | [optional]
 **business_user_id** | **string**| [OPTIONAL] 商户用户 ID | [optional]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountListResponse**](../Model/V1SettlementAccountListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceRetrieveSettlementAccount**
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceRetrieveSettlementAccount($id, $app_id, $object, $data_id, $data_app_id, $data_business_user_id, $data_customer_id, $data_channel, $data_recipient_wechatpay_account, $data_recipient_wechatpay_name, $data_recipient_wechatpay_force_check, $data_recipient_wechatpay_type, $data_recipient_wechatpay_account_type, $data_recipient_wechatpay_app_id, $data_recipient_wechatpay_sub_app_id, $data_recipient_payment_alipay_account, $data_recipient_payment_alipay_name, $data_recipient_payment_alipay_type, $data_recipient_payment_alipay_account_type, $data_recipient_bank_account, $data_recipient_bank_name, $data_recipient_bank_type, $data_recipient_bank_bank_name, $data_recipient_bank_bank_branch, $data_recipient_bank_bank_province, $data_recipient_bank_bank_city, $data_recipient_ysepay_merchant_division_mer_usercode, $data_created, $data_updated, $data_object)

查询结算账户

查询结算账户

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
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 
$object = "SettlementAccount"; // string | 对象类型
$data_id = "0"; // string | 分账接收方的唯一标识
$data_app_id = "0"; // string | 分账接收方所在的应用 ID
$data_business_user_id = "0"; // string | 分账接收方的用户 ID
$data_customer_id = "0"; // string | 分账接收方的用户 ID
$data_channel = "CHANNEL_UNKNOWN"; // string | 分账接收方的账户类型
$data_recipient_wechatpay_account = "data_recipient_wechatpay_account_example"; // string | openid 或者商户号，由类型决定. 微信支付分账接收方账户，OPENID或者商户号
$data_recipient_wechatpay_name = "data_recipient_wechatpay_name_example"; // string | 微信支付分账接收方姓名或名称
$data_recipient_wechatpay_force_check = false; // bool | 是否强制校验收款人姓名
$data_recipient_wechatpay_type = "TYPE_UNSET"; // string | 微信支付分账接收方类型
$data_recipient_wechatpay_account_type = "ACCOUNT_TYPE_UNSET"; // string | 微信支付分账接收方账户类型
$data_recipient_wechatpay_app_id = "data_recipient_wechatpay_app_id_example"; // string | 微信支付分账接收方 openid 所对应的服务商公众号 ID
$data_recipient_wechatpay_sub_app_id = "data_recipient_wechatpay_sub_app_id_example"; // string | 微信支付分账接收方 openid 所对应的商户公众号 ID
$data_recipient_payment_alipay_account = "data_recipient_payment_alipay_account_example"; // string | 支付宝账号，账号ID或者登录邮箱
$data_recipient_payment_alipay_name = "data_recipient_payment_alipay_name_example"; // string | 支付宝账号真实姓名
$data_recipient_payment_alipay_type = "TYPE_UNSET"; // string | 支付宝账号类型
$data_recipient_payment_alipay_account_type = "ACCOUNT_TYPE_UNSET"; // string | 支付宝账号类型
$data_recipient_bank_account = "data_recipient_bank_account_example"; // string | 银行卡号
$data_recipient_bank_name = "data_recipient_bank_name_example"; // string | 银行卡开户名
$data_recipient_bank_type = "data_recipient_bank_type_example"; // string | 银行卡类型
$data_recipient_bank_bank_name = "data_recipient_bank_bank_name_example"; // string | 银行卡开户行编码
$data_recipient_bank_bank_branch = "data_recipient_bank_bank_branch_example"; // string | 银行卡开户支行
$data_recipient_bank_bank_province = "data_recipient_bank_bank_province_example"; // string | 银行卡开户省份
$data_recipient_bank_bank_city = "data_recipient_bank_bank_city_example"; // string | 银行卡开户城市
$data_recipient_ysepay_merchant_division_mer_usercode = "data_recipient_ysepay_merchant_division_mer_usercode_example"; // string | 银盛商户号
$data_created = 0; // int | 分账接收方的创建时间
$data_updated = 0; // int | 分账接收方的更新时间
$data_object = "Recipient"; // string | 对象类型

try {
    $result = $apiInstance->settlementServiceRetrieveSettlementAccount($id, $app_id, $object, $data_id, $data_app_id, $data_business_user_id, $data_customer_id, $data_channel, $data_recipient_wechatpay_account, $data_recipient_wechatpay_name, $data_recipient_wechatpay_force_check, $data_recipient_wechatpay_type, $data_recipient_wechatpay_account_type, $data_recipient_wechatpay_app_id, $data_recipient_wechatpay_sub_app_id, $data_recipient_payment_alipay_account, $data_recipient_payment_alipay_name, $data_recipient_payment_alipay_type, $data_recipient_payment_alipay_account_type, $data_recipient_bank_account, $data_recipient_bank_name, $data_recipient_bank_type, $data_recipient_bank_bank_name, $data_recipient_bank_bank_branch, $data_recipient_bank_bank_province, $data_recipient_bank_bank_city, $data_recipient_ysepay_merchant_division_mer_usercode, $data_created, $data_updated, $data_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceRetrieveSettlementAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]
 **object** | **string**| 对象类型 | [optional] [default to SettlementAccount]
 **data_id** | **string**| 分账接收方的唯一标识 | [optional] [default to 0]
 **data_app_id** | **string**| 分账接收方所在的应用 ID | [optional] [default to 0]
 **data_business_user_id** | **string**| 分账接收方的用户 ID | [optional] [default to 0]
 **data_customer_id** | **string**| 分账接收方的用户 ID | [optional] [default to 0]
 **data_channel** | **string**| 分账接收方的账户类型 | [optional] [default to CHANNEL_UNKNOWN]
 **data_recipient_wechatpay_account** | **string**| openid 或者商户号，由类型决定. 微信支付分账接收方账户，OPENID或者商户号 | [optional]
 **data_recipient_wechatpay_name** | **string**| 微信支付分账接收方姓名或名称 | [optional]
 **data_recipient_wechatpay_force_check** | **bool**| 是否强制校验收款人姓名 | [optional] [default to false]
 **data_recipient_wechatpay_type** | **string**| 微信支付分账接收方类型 | [optional] [default to TYPE_UNSET]
 **data_recipient_wechatpay_account_type** | **string**| 微信支付分账接收方账户类型 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **data_recipient_wechatpay_app_id** | **string**| 微信支付分账接收方 openid 所对应的服务商公众号 ID | [optional]
 **data_recipient_wechatpay_sub_app_id** | **string**| 微信支付分账接收方 openid 所对应的商户公众号 ID | [optional]
 **data_recipient_payment_alipay_account** | **string**| 支付宝账号，账号ID或者登录邮箱 | [optional]
 **data_recipient_payment_alipay_name** | **string**| 支付宝账号真实姓名 | [optional]
 **data_recipient_payment_alipay_type** | **string**| 支付宝账号类型 | [optional] [default to TYPE_UNSET]
 **data_recipient_payment_alipay_account_type** | **string**| 支付宝账号类型 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **data_recipient_bank_account** | **string**| 银行卡号 | [optional]
 **data_recipient_bank_name** | **string**| 银行卡开户名 | [optional]
 **data_recipient_bank_type** | **string**| 银行卡类型 | [optional]
 **data_recipient_bank_bank_name** | **string**| 银行卡开户行编码 | [optional]
 **data_recipient_bank_bank_branch** | **string**| 银行卡开户支行 | [optional]
 **data_recipient_bank_bank_province** | **string**| 银行卡开户省份 | [optional]
 **data_recipient_bank_bank_city** | **string**| 银行卡开户城市 | [optional]
 **data_recipient_ysepay_merchant_division_mer_usercode** | **string**| 银盛商户号 | [optional]
 **data_created** | **int**| 分账接收方的创建时间 | [optional] [default to 0]
 **data_updated** | **int**| 分账接收方的更新时间 | [optional] [default to 0]
 **data_object** | **string**| 对象类型 | [optional] [default to Recipient]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountResponse**](../Model/V1SettlementAccountResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceSearchSettlementAccounts**
> \Justapnet\Justap\Model\V1SettlementAccountListResponse settlementServiceSearchSettlementAccounts($user_id, $app_id)

查询结算账户列表

查询结算账户列表

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
$user_id = "user_id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->settlementServiceSearchSettlementAccounts($user_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceSearchSettlementAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  | [optional]
 **app_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountListResponse**](../Model/V1SettlementAccountListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceUpdateSettlementAccount**
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceUpdateSettlementAccount($settlement_account_id, $body, $update_mask)

更新结算账户

更新结算账户

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
$settlement_account_id = "settlement_account_id_example"; // string | 
$body = new \Justapnet\Justap\Model\V1UpdateAndPatchRequestBody(); // \Justapnet\Justap\Model\V1UpdateAndPatchRequestBody | 
$update_mask = "update_mask_example"; // string | 

try {
    $result = $apiInstance->settlementServiceUpdateSettlementAccount($settlement_account_id, $body, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceUpdateSettlementAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settlement_account_id** | **string**|  |
 **body** | [**\Justapnet\Justap\Model\V1UpdateAndPatchRequestBody**](../Model/V1UpdateAndPatchRequestBody.md)|  |
 **update_mask** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountResponse**](../Model/V1SettlementAccountResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceUpdateSettlementAccount2**
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceUpdateSettlementAccount2($settlement_account_id, $body, $update_mask)

更新结算账户

更新结算账户

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
$settlement_account_id = "settlement_account_id_example"; // string | 
$body = new \Justapnet\Justap\Model\V1UpdateAndPatchRequestBody(); // \Justapnet\Justap\Model\V1UpdateAndPatchRequestBody | 
$update_mask = "update_mask_example"; // string | 

try {
    $result = $apiInstance->settlementServiceUpdateSettlementAccount2($settlement_account_id, $body, $update_mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->settlementServiceUpdateSettlementAccount2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settlement_account_id** | **string**|  |
 **body** | [**\Justapnet\Justap\Model\V1UpdateAndPatchRequestBody**](../Model/V1UpdateAndPatchRequestBody.md)|  |
 **update_mask** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountResponse**](../Model/V1SettlementAccountResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

