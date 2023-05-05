# Justapnet\Justap\BusinessUserServiceApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessUserServiceCreateUser**](BusinessUserServiceApi.md#businessUserServiceCreateUser) | **POST** /v1/business_users | 创建 BusinessUser 对象
[**businessUserServiceDeleteUser**](BusinessUserServiceApi.md#businessUserServiceDeleteUser) | **DELETE** /v1/business_users/{id} | 删除 BusinessUser 对象
[**businessUserServiceListAllUsers**](BusinessUserServiceApi.md#businessUserServiceListAllUsers) | **GET** /v1/business_users | 查询 BusinessUser 对象列表
[**businessUserServiceRetrieveUser**](BusinessUserServiceApi.md#businessUserServiceRetrieveUser) | **GET** /v1/business_users/{id} | 查询 BusinessUser 对象
[**businessUserServiceSearchUsers**](BusinessUserServiceApi.md#businessUserServiceSearchUsers) | **GET** /v1/business_users/search | 搜索 BusinessUser 对象
[**businessUserServiceUpdateUser**](BusinessUserServiceApi.md#businessUserServiceUpdateUser) | **POST** /v1/business_users/{id} | 更新 BusinessUser 对象


# **businessUserServiceCreateUser**
> \Justapnet\Justap\Model\V1UserResponse businessUserServiceCreateUser($body)

创建 BusinessUser 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\BusinessUserServiceApi(
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
    echo 'Exception when calling BusinessUserServiceApi->businessUserServiceCreateUser: ', $e->getMessage(), PHP_EOL;
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

删除 BusinessUser 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\BusinessUserServiceApi(
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
    echo 'Exception when calling BusinessUserServiceApi->businessUserServiceDeleteUser: ', $e->getMessage(), PHP_EOL;
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

查询 BusinessUser 对象列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\BusinessUserServiceApi(
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
    echo 'Exception when calling BusinessUserServiceApi->businessUserServiceListAllUsers: ', $e->getMessage(), PHP_EOL;
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

查询 BusinessUser 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\BusinessUserServiceApi(
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
    echo 'Exception when calling BusinessUserServiceApi->businessUserServiceRetrieveUser: ', $e->getMessage(), PHP_EOL;
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

搜索 BusinessUser 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\BusinessUserServiceApi(
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
    echo 'Exception when calling BusinessUserServiceApi->businessUserServiceSearchUsers: ', $e->getMessage(), PHP_EOL;
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
> \Justapnet\Justap\Model\V1UserResponse businessUserServiceUpdateUser($id, $app_id, $address, $currency, $description, $email, $name, $phone, $avatar, $disabled, $gender, $parent_user_id)

更新 BusinessUser 对象

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\BusinessUserServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 
$address = "address_example"; // string | 
$currency = "currency_example"; // string | 
$description = "description_example"; // string | 
$email = "email_example"; // string | 
$name = "name_example"; // string | 
$phone = "phone_example"; // string | 
$avatar = "avatar_example"; // string | 
$disabled = true; // bool | 
$gender = "GENDER_UNKNOWN"; // string | - GENDER_UNKNOWN: 未设置  - MALE: 男  - FE_MALE: 女  - PRIVACY: 保密  - ThirdGender: 第三性别
$parent_user_id = "parent_user_id_example"; // string | 

try {
    $result = $apiInstance->businessUserServiceUpdateUser($id, $app_id, $address, $currency, $description, $email, $name, $phone, $avatar, $disabled, $gender, $parent_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessUserServiceApi->businessUserServiceUpdateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]
 **address** | **string**|  | [optional]
 **currency** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **email** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **avatar** | **string**|  | [optional]
 **disabled** | **bool**|  | [optional]
 **gender** | **string**| - GENDER_UNKNOWN: 未设置  - MALE: 男  - FE_MALE: 女  - PRIVACY: 保密  - ThirdGender: 第三性别 | [optional] [default to GENDER_UNKNOWN]
 **parent_user_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1UserResponse**](../Model/V1UserResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

