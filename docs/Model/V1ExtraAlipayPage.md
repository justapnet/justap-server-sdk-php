# V1ExtraAlipayPage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement_sign_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayAgreementSignParams**](V1ExtraAlipayAgreementSignParams.md) | 签约参数。如果希望在sdk中支付并签约，需要在这里传入签约信息。周期扣款场景 product_code 为 CYCLE_PAY_AUTH 时必填。 | [optional] 
**business_params** | **float** | 业务扩展参数 | 
**disable_pay_channels** | **string** | 禁用渠道 | 
**enable_pay_channels** | **string** | 可用渠道 | 
**ext_user_info** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtUserInfo**](V1ExtraAlipayExtUserInfo.md) | 支付宝用户信息 | [optional] 
**extend_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtendParams**](V1ExtraAlipayExtendParams.md) | 业务扩展参数 | [optional] 
**goods_detail** | [**\Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[]**](V1ExtraAlipayGoodsDetail.md) | 商品明细列表 | [optional] 
**goods_type** | **string** | 商品类型 | 
**integration_type** | **float** | 支付宝用户ID | 
**invoice_info** | [**\Justapnet\Justap\Model\V1ExtraAlipayInvoiceInfo**](V1ExtraAlipayInvoiceInfo.md) | 发票信息 | [optional] 
**merchant_trade_id** | **string** | [ONLY IN RESPONSE] 商户订单号 | 
**pay_url** | **string** | [ONLY IN RESPONSE] 支付链接 | 
**promo_params** | **string** | 优惠参数 | 
**qr_pay_mode** | **string** | 扫码支付模式 | 
**qrcode_width** | **float** | 二维码宽度 | 
**request_from_url** | **float** | 请求来源地址 | 
**royalty_info** | [**\Justapnet\Justap\Model\V1ExtraAlipayRoyaltyInfo**](V1ExtraAlipayRoyaltyInfo.md) | 分账类型卖家的分账类型，目前只支持传入ROYALTY（普通分账类型）。 | [optional] 
**seller_id** | **string** | [ONLY IN RESPONSE] 收款支付宝用户ID | 
**settle_info** | [**\Justapnet\Justap\Model\V1ExtraAlipaySettleInfo**](V1ExtraAlipaySettleInfo.md) | 结算信息 | [optional] 
**store_id** | **string** | 商户门店编号 | 
**sub_merchant** | [**\Justapnet\Justap\Model\V1ExtraAlipaySubMerchant**](V1ExtraAlipaySubMerchant.md) | 二级商户信息 | [optional] 
**time_expire** | **int** | 订单失效时间 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


