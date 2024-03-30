# V1Royalty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charge_id** | **string** | Charge ID | 
**created** | **int** | 创建时间 | [default to 0]
**description** | **string** | 分账的原因描述，分账账单中需要体现，不超过 80 个字符 | 
**id** | **string** | 分账 ID | 
**livemode** | **bool** |  | [optional] 
**metadata** | **map[string,string]** | 元数据 | 
**method** | [**\Justapnet\Justap\Model\Tradev1RoyaltyMethod**](Tradev1RoyaltyMethod.md) | 分账方式 | 
**object** | **string** | 对象类型 | [default to 'Royalty']
**order_id** | **string** | 订单 ID | 
**payer_app_id** | **string** | 付款方 App ID | 
**payer_settle_account_id** | **string** | 付款方结算账户 ID | 
**payer_user_id** | **string** | 付款方用户 ID | 
**royalty_settlement_id** | **string** | 分账结算单 ID | 
**status** | [**\Justapnet\Justap\Model\V1RoyaltyStatus**](V1RoyaltyStatus.md) | 分账状态 | 
**time_settled** | **int** | 分账完成时间 | [default to 0]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


