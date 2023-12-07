# Justapnet\Justap\CustomerServiceApi

All URIs are relative to *http://127.0.0.1:21011*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerServiceCreateCustomer**](CustomerServiceApi.md#customerServiceCreateCustomer) | **POST** /v1/customers | 
[**customerServiceDeleteCustomer**](CustomerServiceApi.md#customerServiceDeleteCustomer) | **DELETE** /v1/customers/{id} | 
[**customerServiceListAllCustomers**](CustomerServiceApi.md#customerServiceListAllCustomers) | **GET** /v1/customers | 
[**customerServiceRetrieveCustomer**](CustomerServiceApi.md#customerServiceRetrieveCustomer) | **GET** /v1/customers/{id} | 
[**customerServiceSearchCustomers**](CustomerServiceApi.md#customerServiceSearchCustomers) | **GET** /v1/customers/search | 
[**customerServiceUpdateCustomer**](CustomerServiceApi.md#customerServiceUpdateCustomer) | **POST** /v1/customers/{id} | 


# **customerServiceCreateCustomer**
> \Justapnet\Justap\Model\V1CustomerResponse customerServiceCreateCustomer($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateCustomerRequest(); // \Justapnet\Justap\Model\V1CreateCustomerRequest | 

try {
    $result = $apiInstance->customerServiceCreateCustomer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->customerServiceCreateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Justapnet\Justap\Model\V1CreateCustomerRequest**](../Model/V1CreateCustomerRequest.md)|  |

### Return type

[**\Justapnet\Justap\Model\V1CustomerResponse**](../Model/V1CustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerServiceDeleteCustomer**
> \Justapnet\Justap\Model\V1DeleteCustomerResponse customerServiceDeleteCustomer($id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->customerServiceDeleteCustomer($id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->customerServiceDeleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1DeleteCustomerResponse**](../Model/V1DeleteCustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerServiceListAllCustomers**
> \Justapnet\Justap\Model\V1CustomerListResponse customerServiceListAllCustomers($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CustomerServiceApi(
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
    $result = $apiInstance->customerServiceListAllCustomers($app_id, $limit, $starting_after, $ending_before, $created_lt, $created_lte, $created_gt, $created_gte, $disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->customerServiceListAllCustomers: ', $e->getMessage(), PHP_EOL;
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

[**\Justapnet\Justap\Model\V1CustomerListResponse**](../Model/V1CustomerListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerServiceRetrieveCustomer**
> \Justapnet\Justap\Model\V1CustomerResponse customerServiceRetrieveCustomer($id, $app_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$app_id = "app_id_example"; // string | 

try {
    $result = $apiInstance->customerServiceRetrieveCustomer($id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->customerServiceRetrieveCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **app_id** | **string**|  | [optional]

### Return type

[**\Justapnet\Justap\Model\V1CustomerResponse**](../Model/V1CustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerServiceSearchCustomers**
> \Justapnet\Justap\Model\V1CustomerListResponse customerServiceSearchCustomers($app_id, $limit, $created_lt, $created_lte, $created_gt, $created_gte, $email, $name, $phone)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CustomerServiceApi(
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
    $result = $apiInstance->customerServiceSearchCustomers($app_id, $limit, $created_lt, $created_lte, $created_gt, $created_gte, $email, $name, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->customerServiceSearchCustomers: ', $e->getMessage(), PHP_EOL;
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

[**\Justapnet\Justap\Model\V1CustomerListResponse**](../Model/V1CustomerListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerServiceUpdateCustomer**
> \Justapnet\Justap\Model\V1CustomerResponse customerServiceUpdateCustomer($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->customerServiceUpdateCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->customerServiceUpdateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Justapnet\Justap\Model\V1CustomerResponse**](../Model/V1CustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

