# V1ExtraWechatpayScan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attach** | **string** | 元数据 | [optional] 
**auth_code** | **string** | 授权码 | [optional] 
**bank_type** | **string** | 付款银行 | [optional] 
**cash_fee** | **string** | 现金支付金额 | [optional] 
**cash_fee_type** | **string** | 现金支付币种 | [optional] 
**detail** | [**\Justapnet\Justap\Model\V1ExtraWechatpayDetail**](V1ExtraWechatpayDetail.md) | 商品详情 | [optional] 
**fee_type** | **string** | 货币种类 | [optional] 
**goods_tag** | **string** | 订单优惠标记 | [optional] 
**is_subscribe** | **bool** | 是否关注公众账号 | [optional] [default to false]
**payer** | [**\Justapnet\Justap\Model\V1ExtraWechatpayPayer**](V1ExtraWechatpayPayer.md) | 付款人信息 | [optional] 
**scene_info** | [**\Justapnet\Justap\Model\V1ExtraWechatpaySceneInfo**](V1ExtraWechatpaySceneInfo.md) | 场景信息 | [optional] 
**settle_info** | [**\Justapnet\Justap\Model\V1ExtraWechatpaySettleInfo**](V1ExtraWechatpaySettleInfo.md) | 结算信息 | [optional] 
**settlement_total_fee** | **float** | 应结订单金额 | [optional] 
**spbill_create_ip** | **string** | 终端IP | [optional] 
**sub_is_subscribe** | **bool** | 子商户是否关注公众账号 | [optional] [default to false]
**sub_openid** | **string** | 子商户openid | [optional] 
**time_end** | **string** | 支付完成时间 | [optional] 
**time_expire** | **string** | 交易结束时间 | [optional] 
**time_start** | **string** | 交易起始时间 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


