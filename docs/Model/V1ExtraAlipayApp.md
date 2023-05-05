# V1ExtraAlipayApp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**credit_agreement_id** | **string** | [ONLY IN RESPONSE] 信用支付协议号 | [optional] 
**credit_biz_order_id** | **string** | [ONLY IN RESPONSE] 信用支付业务订单号 | [optional] 
**credit_pay_mode** | **string** | [ONLY IN RESPONSE] 信用支付模式 | [optional] 
**disable_pay_channels** | **string** | 禁用渠道 | [optional] 
**enable_pay_channels** | **string** | 可用渠道 | [optional] 
**ext_user_info** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtUserInfo**](V1ExtraAlipayExtUserInfo.md) | 外部指定买家 | [optional] 
**extend_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtendParams**](V1ExtraAlipayExtendParams.md) | 业务扩展参数 | [optional] 
**goods_detail** | [**\Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[]**](V1ExtraAlipayGoodsDetail.md) | 商品明细列表 | [optional] 
**goods_type** | **string** | 商品类型 | [optional] 
**merchant_trade_id** | **string** | [ONLY IN RESPONSE] 商户订单号 | [optional] 
**pay_param** | **string** | [ONLY IN RESPONSE] App 用于拉起支付的请求字符串 | [optional] 
**product_code** | **string** | 销售产品码，商家和支付宝签约的产品码 | [optional] 
**seller_id** | **string** | [ONLY IN RESPONSE] 支付宝卖家支付宝用户ID | [optional] 
**store_id** | **string** | 商户门店编号 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


