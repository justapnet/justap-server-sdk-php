# V1ExtraWechatpayScan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attach** | **string** | 元数据 | [optional] 
**auth_code** | **string** | 授权码 | 
**bank_type** | **string** | 付款银行 | 
**cash_fee** | **string** | 现金支付金额 | 
**cash_fee_type** | **string** | 现金支付币种 | 
**detail** | [**\Justapnet\Justap\Model\V1ExtraWechatpayDetail**](V1ExtraWechatpayDetail.md) |  | [optional] 
**fee_type** | **string** | 货币种类 | 
**goods_tag** | **string** | 订单优惠标记 | 
**is_subscribe** | **bool** | 是否关注公众账号 | [default to false]
**payer** | [**\Justapnet\Justap\Model\V1ExtraWechatpayPayer**](V1ExtraWechatpayPayer.md) |  | [optional] 
**scene_info** | [**\Justapnet\Justap\Model\V1ExtraWechatpaySceneInfo**](V1ExtraWechatpaySceneInfo.md) |  | [optional] 
**settle_info** | [**\Justapnet\Justap\Model\V1ExtraWechatpaySettleInfo**](V1ExtraWechatpaySettleInfo.md) |  | [optional] 
**settlement_total_fee** | **float** | 应结订单金额 | 
**spbill_create_ip** | **string** | 终端IP | 
**sub_is_subscribe** | **bool** | 子商户是否关注公众账号 | [default to false]
**sub_openid** | **string** | 子商户openid | 
**time_end** | **string** | 支付完成时间 | 
**time_expire** | **string** | 交易结束时间 | 
**time_start** | **string** | 交易起始时间 | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


