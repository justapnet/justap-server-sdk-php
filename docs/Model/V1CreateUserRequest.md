# V1CreateUserRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | [OPTIONAL] 用户地址 | 
**app_id** | **string** | App ID | 
**available_balance** | **float** | [OPTIONAL] 用户可用余额 | 
**avatar** | **string** | [OPTIONAL] 用户头像 | 
**created** | **int** | [OPTIONAL] 用户创建时间 | [default to 0]
**currency** | **string** | [OPTIONAL] 用户货币 | 
**description** | **string** | [OPTIONAL] 用户描述 | 
**disabled** | **bool** | [OPTIONAL] 是否禁用，默认为 false | [default to false]
**email** | **string** | [OPTIONAL] 用户邮箱 | 
**gender** | [**\Justapnet\Justap\Model\V1Gender**](V1Gender.md) | [OPTIONAL] 用户性别 | 
**metadata** | **map[string,string]** | [OPTIONAL] 用户元数据 | 
**name** | **string** | [OPTIONAL] 用户名 | 
**nickname** | **string** | [OPTIONAL] 用户昵称 | 
**out_user_id** | **string** | [REQUIRED] 商户系统用户 ID | 
**parent_user_id** | **string** | [OPTIONAL] 父用户 ID | 
**phone** | **string** | [OPTIONAL] 用户手机号 | 
**withdrawable_balance** | **float** | [OPTIONAL] 用户可提现余额 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


