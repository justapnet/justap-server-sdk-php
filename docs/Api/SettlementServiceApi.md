# Justapnet\Justap\SettlementServiceApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**settlementServiceCreateSettlementAccount**](SettlementServiceApi.md#settlementServiceCreateSettlementAccount) | **POST** /v1/settlement_accounts | 创建 SettlementAccount 对象
[**settlementServiceDeleteSettlementAccount**](SettlementServiceApi.md#settlementServiceDeleteSettlementAccount) | **DELETE** /v1/settlement_accounts/{id} | 删除 SettlementAccount 对象
[**settlementServiceListAllSettlementAccounts**](SettlementServiceApi.md#settlementServiceListAllSettlementAccounts) | **GET** /v1/settlement_accounts | 查询 SettlementAccount 对象列表
[**settlementServiceRetrieveSettlementAccount**](SettlementServiceApi.md#settlementServiceRetrieveSettlementAccount) | **GET** /v1/settlement_accounts/{id} | 查询 SettlementAccount 对象
[**settlementServiceSearchSettlementAccounts**](SettlementServiceApi.md#settlementServiceSearchSettlementAccounts) | **GET** /v1/settlement_accounts/search | 搜索 SettlementAccount 对象
[**settlementServiceUpdateSettlementAccount**](SettlementServiceApi.md#settlementServiceUpdateSettlementAccount) | **POST** /v1/settlement_accounts/{id} | 更新 SettlementAccount 对象


# **settlementServiceCreateSettlementAccount**
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceCreateSettlementAccount($app_id, $user_id, $customer_id, $channel, $recipient_wechatpay_channel_recipient_account, $recipient_wechatpay_channel_recipient_name, $recipient_wechatpay_channel_recipient_force_check, $recipient_wechatpay_channel_recipient_type, $recipient_wechatpay_channel_recipient_account_type, $recipient_alipay_channel_recipient_account, $recipient_alipay_channel_recipient_name, $recipient_alipay_channel_recipient_type, $recipient_alipay_channel_recipient_account_type, $recipient_bank_channel_recipient_account, $recipient_bank_channel_recipient_name, $recipient_bank_channel_recipient_type, $recipient_bank_channel_recipient_bank_name, $recipient_bank_channel_recipient_bank_branch, $recipient_bank_channel_recipient_bank_province, $recipient_bank_channel_recipient_bank_city)

创建 SettlementAccount 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\SettlementServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 
$user_id = "user_id_example"; // string | 
$customer_id = "customer_id_example"; // string | 
$channel = "CHANNEL_UNKNOWN"; // string | - ALIPAY: 分账到支付宝  - WECHANTPAY: 分账到微信支付  - BANK: 分账到银行卡  - BALANCE: 分账到 justap 账户余额
$recipient_wechatpay_channel_recipient_account = "recipient_wechatpay_channel_recipient_account_example"; // string | openid 或者商户号，由类型决定  微信支付分账接收方账户，OPENID或者商户号
$recipient_wechatpay_channel_recipient_name = "recipient_wechatpay_channel_recipient_name_example"; // string | 微信支付分账接收方姓名或名称
$recipient_wechatpay_channel_recipient_force_check = false; // bool | 是否强制校验收款人姓名
$recipient_wechatpay_channel_recipient_type = "TYPE_UNSET"; // string | 微信支付分账接收方类型
$recipient_wechatpay_channel_recipient_account_type = "ACCOUNT_TYPE_UNSET"; // string | 微信支付分账接收方账户类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号
$recipient_alipay_channel_recipient_account = "recipient_alipay_channel_recipient_account_example"; // string | 支付宝账号，账号ID或者登录邮箱
$recipient_alipay_channel_recipient_name = "recipient_alipay_channel_recipient_name_example"; // string | 支付宝账号真实姓名
$recipient_alipay_channel_recipient_type = "TYPE_UNSET"; // string | 支付宝账号类型
$recipient_alipay_channel_recipient_account_type = "ACCOUNT_TYPE_UNSET"; // string | 支付宝账号类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号
$recipient_bank_channel_recipient_account = "recipient_bank_channel_recipient_account_example"; // string | 银行卡号
$recipient_bank_channel_recipient_name = "recipient_bank_channel_recipient_name_example"; // string | 银行卡开户名
$recipient_bank_channel_recipient_type = "recipient_bank_channel_recipient_type_example"; // string | 银行卡类型
$recipient_bank_channel_recipient_bank_name = "recipient_bank_channel_recipient_bank_name_example"; // string | 银行卡开户行编码
$recipient_bank_channel_recipient_bank_branch = "recipient_bank_channel_recipient_bank_branch_example"; // string | 银行卡开户支行
$recipient_bank_channel_recipient_bank_province = "recipient_bank_channel_recipient_bank_province_example"; // string | 银行卡开户省份
$recipient_bank_channel_recipient_bank_city = "recipient_bank_channel_recipient_bank_city_example"; // string | 银行卡开户城市

try {
    $result = $apiInstance->settlementServiceCreateSettlementAccount($app_id, $user_id, $customer_id, $channel, $recipient_wechatpay_channel_recipient_account, $recipient_wechatpay_channel_recipient_name, $recipient_wechatpay_channel_recipient_force_check, $recipient_wechatpay_channel_recipient_type, $recipient_wechatpay_channel_recipient_account_type, $recipient_alipay_channel_recipient_account, $recipient_alipay_channel_recipient_name, $recipient_alipay_channel_recipient_type, $recipient_alipay_channel_recipient_account_type, $recipient_bank_channel_recipient_account, $recipient_bank_channel_recipient_name, $recipient_bank_channel_recipient_type, $recipient_bank_channel_recipient_bank_name, $recipient_bank_channel_recipient_bank_branch, $recipient_bank_channel_recipient_bank_province, $recipient_bank_channel_recipient_bank_city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementServiceApi->settlementServiceCreateSettlementAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [optional]
 **user_id** | **string**|  | [optional]
 **customer_id** | **string**|  | [optional]
 **channel** | **string**| - ALIPAY: 分账到支付宝  - WECHANTPAY: 分账到微信支付  - BANK: 分账到银行卡  - BALANCE: 分账到 justap 账户余额 | [optional] [default to CHANNEL_UNKNOWN]
 **recipient_wechatpay_channel_recipient_account** | **string**| openid 或者商户号，由类型决定  微信支付分账接收方账户，OPENID或者商户号 | [optional]
 **recipient_wechatpay_channel_recipient_name** | **string**| 微信支付分账接收方姓名或名称 | [optional]
 **recipient_wechatpay_channel_recipient_force_check** | **bool**| 是否强制校验收款人姓名 | [optional] [default to false]
 **recipient_wechatpay_channel_recipient_type** | **string**| 微信支付分账接收方类型 | [optional] [default to TYPE_UNSET]
 **recipient_wechatpay_channel_recipient_account_type** | **string**| 微信支付分账接收方账户类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **recipient_alipay_channel_recipient_account** | **string**| 支付宝账号，账号ID或者登录邮箱 | [optional]
 **recipient_alipay_channel_recipient_name** | **string**| 支付宝账号真实姓名 | [optional]
 **recipient_alipay_channel_recipient_type** | **string**| 支付宝账号类型 | [optional] [default to TYPE_UNSET]
 **recipient_alipay_channel_recipient_account_type** | **string**| 支付宝账号类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **recipient_bank_channel_recipient_account** | **string**| 银行卡号 | [optional]
 **recipient_bank_channel_recipient_name** | **string**| 银行卡开户名 | [optional]
 **recipient_bank_channel_recipient_type** | **string**| 银行卡类型 | [optional]
 **recipient_bank_channel_recipient_bank_name** | **string**| 银行卡开户行编码 | [optional]
 **recipient_bank_channel_recipient_bank_branch** | **string**| 银行卡开户支行 | [optional]
 **recipient_bank_channel_recipient_bank_province** | **string**| 银行卡开户省份 | [optional]
 **recipient_bank_channel_recipient_bank_city** | **string**| 银行卡开户城市 | [optional]

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

删除 SettlementAccount 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\SettlementServiceApi(
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
    echo 'Exception when calling SettlementServiceApi->settlementServiceDeleteSettlementAccount: ', $e->getMessage(), PHP_EOL;
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
> \Justapnet\Justap\Model\V1SettlementAccountListResponse settlementServiceListAllSettlementAccounts($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled, $customer_id, $user_id)

查询 SettlementAccount 对象列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\SettlementServiceApi(
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
$user_id = "user_id_example"; // string | [OPTIONAL] 商户用户 ID

try {
    $result = $apiInstance->settlementServiceListAllSettlementAccounts($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled, $customer_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementServiceApi->settlementServiceListAllSettlementAccounts: ', $e->getMessage(), PHP_EOL;
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
 **user_id** | **string**| [OPTIONAL] 商户用户 ID | [optional]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountListResponse**](../Model/V1SettlementAccountListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settlementServiceRetrieveSettlementAccount**
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceRetrieveSettlementAccount($id, $app_id, $object, $data_id, $data_app_id, $data_user_id, $data_channel, $data_recipient_wechatpay_channel_recipient_account, $data_recipient_wechatpay_channel_recipient_name, $data_recipient_wechatpay_channel_recipient_force_check, $data_recipient_wechatpay_channel_recipient_type, $data_recipient_wechatpay_channel_recipient_account_type, $data_recipient_alipay_channel_recipient_account, $data_recipient_alipay_channel_recipient_name, $data_recipient_alipay_channel_recipient_type, $data_recipient_alipay_channel_recipient_account_type, $data_recipient_bank_channel_recipient_account, $data_recipient_bank_channel_recipient_name, $data_recipient_bank_channel_recipient_type, $data_recipient_bank_channel_recipient_bank_name, $data_recipient_bank_channel_recipient_bank_branch, $data_recipient_bank_channel_recipient_bank_province, $data_recipient_bank_channel_recipient_bank_city, $data_created, $data_updated, $data_object)

查询 SettlementAccount 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\SettlementServiceApi(
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
$data_user_id = "0"; // string | 分账接收方的用户 ID
$data_channel = "CHANNEL_UNKNOWN"; // string | 分账接收方的账户类型   - ALIPAY: 分账到支付宝  - WECHANTPAY: 分账到微信支付  - BANK: 分账到银行卡  - BALANCE: 分账到 justap 账户余额
$data_recipient_wechatpay_channel_recipient_account = "data_recipient_wechatpay_channel_recipient_account_example"; // string | openid 或者商户号，由类型决定  微信支付分账接收方账户，OPENID或者商户号
$data_recipient_wechatpay_channel_recipient_name = "data_recipient_wechatpay_channel_recipient_name_example"; // string | 微信支付分账接收方姓名或名称
$data_recipient_wechatpay_channel_recipient_force_check = false; // bool | 是否强制校验收款人姓名
$data_recipient_wechatpay_channel_recipient_type = "TYPE_UNSET"; // string | 微信支付分账接收方类型
$data_recipient_wechatpay_channel_recipient_account_type = "ACCOUNT_TYPE_UNSET"; // string | 微信支付分账接收方账户类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号
$data_recipient_alipay_channel_recipient_account = "data_recipient_alipay_channel_recipient_account_example"; // string | 支付宝账号，账号ID或者登录邮箱
$data_recipient_alipay_channel_recipient_name = "data_recipient_alipay_channel_recipient_name_example"; // string | 支付宝账号真实姓名
$data_recipient_alipay_channel_recipient_type = "TYPE_UNSET"; // string | 支付宝账号类型
$data_recipient_alipay_channel_recipient_account_type = "ACCOUNT_TYPE_UNSET"; // string | 支付宝账号类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号
$data_recipient_bank_channel_recipient_account = "data_recipient_bank_channel_recipient_account_example"; // string | 银行卡号
$data_recipient_bank_channel_recipient_name = "data_recipient_bank_channel_recipient_name_example"; // string | 银行卡开户名
$data_recipient_bank_channel_recipient_type = "data_recipient_bank_channel_recipient_type_example"; // string | 银行卡类型
$data_recipient_bank_channel_recipient_bank_name = "data_recipient_bank_channel_recipient_bank_name_example"; // string | 银行卡开户行编码
$data_recipient_bank_channel_recipient_bank_branch = "data_recipient_bank_channel_recipient_bank_branch_example"; // string | 银行卡开户支行
$data_recipient_bank_channel_recipient_bank_province = "data_recipient_bank_channel_recipient_bank_province_example"; // string | 银行卡开户省份
$data_recipient_bank_channel_recipient_bank_city = "data_recipient_bank_channel_recipient_bank_city_example"; // string | 银行卡开户城市
$data_created = 0; // int | 分账接收方的创建时间
$data_updated = 0; // int | 分账接收方的更新时间
$data_object = "Recipient"; // string | 对象类型

try {
    $result = $apiInstance->settlementServiceRetrieveSettlementAccount($id, $app_id, $object, $data_id, $data_app_id, $data_user_id, $data_channel, $data_recipient_wechatpay_channel_recipient_account, $data_recipient_wechatpay_channel_recipient_name, $data_recipient_wechatpay_channel_recipient_force_check, $data_recipient_wechatpay_channel_recipient_type, $data_recipient_wechatpay_channel_recipient_account_type, $data_recipient_alipay_channel_recipient_account, $data_recipient_alipay_channel_recipient_name, $data_recipient_alipay_channel_recipient_type, $data_recipient_alipay_channel_recipient_account_type, $data_recipient_bank_channel_recipient_account, $data_recipient_bank_channel_recipient_name, $data_recipient_bank_channel_recipient_type, $data_recipient_bank_channel_recipient_bank_name, $data_recipient_bank_channel_recipient_bank_branch, $data_recipient_bank_channel_recipient_bank_province, $data_recipient_bank_channel_recipient_bank_city, $data_created, $data_updated, $data_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementServiceApi->settlementServiceRetrieveSettlementAccount: ', $e->getMessage(), PHP_EOL;
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
 **data_user_id** | **string**| 分账接收方的用户 ID | [optional] [default to 0]
 **data_channel** | **string**| 分账接收方的账户类型   - ALIPAY: 分账到支付宝  - WECHANTPAY: 分账到微信支付  - BANK: 分账到银行卡  - BALANCE: 分账到 justap 账户余额 | [optional] [default to CHANNEL_UNKNOWN]
 **data_recipient_wechatpay_channel_recipient_account** | **string**| openid 或者商户号，由类型决定  微信支付分账接收方账户，OPENID或者商户号 | [optional]
 **data_recipient_wechatpay_channel_recipient_name** | **string**| 微信支付分账接收方姓名或名称 | [optional]
 **data_recipient_wechatpay_channel_recipient_force_check** | **bool**| 是否强制校验收款人姓名 | [optional] [default to false]
 **data_recipient_wechatpay_channel_recipient_type** | **string**| 微信支付分账接收方类型 | [optional] [default to TYPE_UNSET]
 **data_recipient_wechatpay_channel_recipient_account_type** | **string**| 微信支付分账接收方账户类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **data_recipient_alipay_channel_recipient_account** | **string**| 支付宝账号，账号ID或者登录邮箱 | [optional]
 **data_recipient_alipay_channel_recipient_name** | **string**| 支付宝账号真实姓名 | [optional]
 **data_recipient_alipay_channel_recipient_type** | **string**| 支付宝账号类型 | [optional] [default to TYPE_UNSET]
 **data_recipient_alipay_channel_recipient_account_type** | **string**| 支付宝账号类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **data_recipient_bank_channel_recipient_account** | **string**| 银行卡号 | [optional]
 **data_recipient_bank_channel_recipient_name** | **string**| 银行卡开户名 | [optional]
 **data_recipient_bank_channel_recipient_type** | **string**| 银行卡类型 | [optional]
 **data_recipient_bank_channel_recipient_bank_name** | **string**| 银行卡开户行编码 | [optional]
 **data_recipient_bank_channel_recipient_bank_branch** | **string**| 银行卡开户支行 | [optional]
 **data_recipient_bank_channel_recipient_bank_province** | **string**| 银行卡开户省份 | [optional]
 **data_recipient_bank_channel_recipient_bank_city** | **string**| 银行卡开户城市 | [optional]
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

搜索 SettlementAccount 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\SettlementServiceApi(
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
    echo 'Exception when calling SettlementServiceApi->settlementServiceSearchSettlementAccounts: ', $e->getMessage(), PHP_EOL;
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
> \Justapnet\Justap\Model\V1SettlementAccountResponse settlementServiceUpdateSettlementAccount($id, $customer_id, $user_id, $channel, $recipient_wechatpay_channel_recipient_account, $recipient_wechatpay_channel_recipient_name, $recipient_wechatpay_channel_recipient_force_check, $recipient_wechatpay_channel_recipient_type, $recipient_wechatpay_channel_recipient_account_type, $recipient_alipay_channel_recipient_account, $recipient_alipay_channel_recipient_name, $recipient_alipay_channel_recipient_type, $recipient_alipay_channel_recipient_account_type, $recipient_bank_channel_recipient_account, $recipient_bank_channel_recipient_name, $recipient_bank_channel_recipient_type, $recipient_bank_channel_recipient_bank_name, $recipient_bank_channel_recipient_bank_branch, $recipient_bank_channel_recipient_bank_province, $recipient_bank_channel_recipient_bank_city)

更新 SettlementAccount 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\SettlementServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$customer_id = "customer_id_example"; // string | 
$user_id = "user_id_example"; // string | 
$channel = "CHANNEL_UNKNOWN"; // string | - ALIPAY: 分账到支付宝  - WECHANTPAY: 分账到微信支付  - BANK: 分账到银行卡  - BALANCE: 分账到 justap 账户余额
$recipient_wechatpay_channel_recipient_account = "recipient_wechatpay_channel_recipient_account_example"; // string | openid 或者商户号，由类型决定  微信支付分账接收方账户，OPENID或者商户号
$recipient_wechatpay_channel_recipient_name = "recipient_wechatpay_channel_recipient_name_example"; // string | 微信支付分账接收方姓名或名称
$recipient_wechatpay_channel_recipient_force_check = false; // bool | 是否强制校验收款人姓名
$recipient_wechatpay_channel_recipient_type = "TYPE_UNSET"; // string | 微信支付分账接收方类型
$recipient_wechatpay_channel_recipient_account_type = "ACCOUNT_TYPE_UNSET"; // string | 微信支付分账接收方账户类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号
$recipient_alipay_channel_recipient_account = "recipient_alipay_channel_recipient_account_example"; // string | 支付宝账号，账号ID或者登录邮箱
$recipient_alipay_channel_recipient_name = "recipient_alipay_channel_recipient_name_example"; // string | 支付宝账号真实姓名
$recipient_alipay_channel_recipient_type = "TYPE_UNSET"; // string | 支付宝账号类型
$recipient_alipay_channel_recipient_account_type = "ACCOUNT_TYPE_UNSET"; // string | 支付宝账号类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号
$recipient_bank_channel_recipient_account = "recipient_bank_channel_recipient_account_example"; // string | 银行卡号
$recipient_bank_channel_recipient_name = "recipient_bank_channel_recipient_name_example"; // string | 银行卡开户名
$recipient_bank_channel_recipient_type = "recipient_bank_channel_recipient_type_example"; // string | 银行卡类型
$recipient_bank_channel_recipient_bank_name = "recipient_bank_channel_recipient_bank_name_example"; // string | 银行卡开户行编码
$recipient_bank_channel_recipient_bank_branch = "recipient_bank_channel_recipient_bank_branch_example"; // string | 银行卡开户支行
$recipient_bank_channel_recipient_bank_province = "recipient_bank_channel_recipient_bank_province_example"; // string | 银行卡开户省份
$recipient_bank_channel_recipient_bank_city = "recipient_bank_channel_recipient_bank_city_example"; // string | 银行卡开户城市

try {
    $result = $apiInstance->settlementServiceUpdateSettlementAccount($id, $customer_id, $user_id, $channel, $recipient_wechatpay_channel_recipient_account, $recipient_wechatpay_channel_recipient_name, $recipient_wechatpay_channel_recipient_force_check, $recipient_wechatpay_channel_recipient_type, $recipient_wechatpay_channel_recipient_account_type, $recipient_alipay_channel_recipient_account, $recipient_alipay_channel_recipient_name, $recipient_alipay_channel_recipient_type, $recipient_alipay_channel_recipient_account_type, $recipient_bank_channel_recipient_account, $recipient_bank_channel_recipient_name, $recipient_bank_channel_recipient_type, $recipient_bank_channel_recipient_bank_name, $recipient_bank_channel_recipient_bank_branch, $recipient_bank_channel_recipient_bank_province, $recipient_bank_channel_recipient_bank_city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementServiceApi->settlementServiceUpdateSettlementAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **customer_id** | **string**|  | [optional]
 **user_id** | **string**|  | [optional]
 **channel** | **string**| - ALIPAY: 分账到支付宝  - WECHANTPAY: 分账到微信支付  - BANK: 分账到银行卡  - BALANCE: 分账到 justap 账户余额 | [optional] [default to CHANNEL_UNKNOWN]
 **recipient_wechatpay_channel_recipient_account** | **string**| openid 或者商户号，由类型决定  微信支付分账接收方账户，OPENID或者商户号 | [optional]
 **recipient_wechatpay_channel_recipient_name** | **string**| 微信支付分账接收方姓名或名称 | [optional]
 **recipient_wechatpay_channel_recipient_force_check** | **bool**| 是否强制校验收款人姓名 | [optional] [default to false]
 **recipient_wechatpay_channel_recipient_type** | **string**| 微信支付分账接收方类型 | [optional] [default to TYPE_UNSET]
 **recipient_wechatpay_channel_recipient_account_type** | **string**| 微信支付分账接收方账户类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **recipient_alipay_channel_recipient_account** | **string**| 支付宝账号，账号ID或者登录邮箱 | [optional]
 **recipient_alipay_channel_recipient_name** | **string**| 支付宝账号真实姓名 | [optional]
 **recipient_alipay_channel_recipient_type** | **string**| 支付宝账号类型 | [optional] [default to TYPE_UNSET]
 **recipient_alipay_channel_recipient_account_type** | **string**| 支付宝账号类型   - ACCOUNT_TYPE_UNSET: 未设置  - MERCHANT_ID: 分账到微信商户号  - OPENID: 分账到个人微信号（父公众号的openid，或服务商的openid））  - SUB_OPENID: 分账到个人微信号，子账号的  - LOGIN_NAME: 分账到微信登录号 | [optional] [default to ACCOUNT_TYPE_UNSET]
 **recipient_bank_channel_recipient_account** | **string**| 银行卡号 | [optional]
 **recipient_bank_channel_recipient_name** | **string**| 银行卡开户名 | [optional]
 **recipient_bank_channel_recipient_type** | **string**| 银行卡类型 | [optional]
 **recipient_bank_channel_recipient_bank_name** | **string**| 银行卡开户行编码 | [optional]
 **recipient_bank_channel_recipient_bank_branch** | **string**| 银行卡开户支行 | [optional]
 **recipient_bank_channel_recipient_bank_province** | **string**| 银行卡开户省份 | [optional]
 **recipient_bank_channel_recipient_bank_city** | **string**| 银行卡开户城市 | [optional]

### Return type

[**\Justapnet\Justap\Model\V1SettlementAccountResponse**](../Model/V1SettlementAccountResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

