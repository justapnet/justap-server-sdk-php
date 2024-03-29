# V1RoyaltySettlement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | 结算金额 | 
**amount_canceled** | **float** | 结算取消金额 | 
**amount_failed** | **float** | 结算失败金额 | 
**amount_succeeded** | **float** | 结算成功金额 | 
**app_id** | **string** | 付款方 App ID | 
**count** | **int** | 分账总笔数 | [default to 0]
**count_canceled** | **int** | 分账取消笔数 | [default to 0]
**count_failed** | **int** | 分账失败笔数 | [default to 0]
**count_succeeded** | **int** | 分账成功笔数 | [default to 0]
**fee** | **float** | 手续费 | 
**id** | **string** | 分账结算单 ID | 
**livemode** | **bool** |  | [optional] 
**metadata** | **map[string,string]** | 元数据 | 
**object** | **string** | 对象类型 | [default to 'RoyaltySettlement']
**operation_url** | **string** | 操作链接 | 
**source** | [**\Justapnet\Justap\Model\V1RoyaltySettlementSource**](V1RoyaltySettlementSource.md) | 分账来源 | 
**status** | [**\Justapnet\Justap\Model\RoyaltySettlementRoyaltySettlementStatus**](RoyaltySettlementRoyaltySettlementStatus.md) | 结算状态 | 
**time_finished** | **int** | 分账完成时间 | [default to 0]
**transactions** | [**\Justapnet\Justap\Model\V1RoyaltySettlementTransaction[]**](V1RoyaltySettlementTransaction.md) | 分账处理流水列表 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


