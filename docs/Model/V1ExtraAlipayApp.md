# V1ExtraAlipayApp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement_sign_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayAgreementSignParams**](V1ExtraAlipayAgreementSignParams.md) | 签约参数。如果希望在sdk中支付并签约，需要在这里传入签约信息。周期扣款场景 product_code 为 CYCLE_PAY_AUTH 时必填。 | [optional] 
**credit_agreement_id** | **string** | [ONLY IN RESPONSE] 信用支付协议号 | 
**credit_biz_order_id** | **string** | [ONLY IN RESPONSE] 信用支付业务订单号 | 
**credit_pay_mode** | **string** | [ONLY IN RESPONSE] 信用支付模式 | 
**disable_pay_channels** | **string** | 禁用渠道 | 
**enable_pay_channels** | **string** | 可用渠道 | 
**ext_user_info** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtUserInfo**](V1ExtraAlipayExtUserInfo.md) | 外部指定买家 | [optional] 
**extend_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtendParams**](V1ExtraAlipayExtendParams.md) | 业务扩展参数 | [optional] 
**goods_detail** | [**\Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[]**](V1ExtraAlipayGoodsDetail.md) | 商品明细列表 | [optional] 
**goods_type** | **string** | 商品类型 | 
**merchant_trade_id** | **string** | [ONLY IN RESPONSE] 商户订单号 | 
**pay_param** | **string** | [ONLY IN RESPONSE] App 用于拉起支付的请求字符串 | 
**product_code** | **string** | 销售产品码，商家和支付宝签约的产品码 | 
**seller_id** | **string** | [ONLY IN RESPONSE] 支付宝卖家支付宝用户ID | 
**store_id** | **string** | 商户门店编号 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


