# V1ExtraAlipayScan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advance_payment_type** | **string** | 预授权类型 | 
**agreement_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayAgreementParams**](V1ExtraAlipayAgreementParams.md) | 协议参数 | [optional] 
**auth_code** | **string** | 用户的条码 | 
**auth_confirm_mode** | **string** | 授权确认方式 | 
**auth_no** | **string** | 授权号 | 
**buyer_id** | **string** | 买家的支付宝用户id | 
**buyer_logon_id** | **string** | [ONLY IN RESPONSE] 买家支付宝账号 | 
**buyer_pay_amount** | **double** | [ONLY IN RESPONSE] 付款金额 | 
**buyer_user_id** | **string** | [ONLY IN RESPONSE] 买家在支付宝的用户id | 
**discount_amount** | **double** | [ONLY IN RESPONSE] 商家优惠金额 | 
**discount_goods_detail** | **string** | [ONLY IN RESPONSE] 商家优惠商品明细 | 
**discountable_amount** | **double** | 可打折金额 | 
**extend_params** | [**\Justapnet\Justap\Model\V1ExtraAlipayExtendParams**](V1ExtraAlipayExtendParams.md) | 业务扩展参数 | [optional] 
**fund_bill_list** | [**\Justapnet\Justap\Model\V1ExtraAlipayFundBillList**](V1ExtraAlipayFundBillList.md) | [ONLY IN RESPONSE] 支付金额信息 | [optional] 
**gmt_payment** | **string** | [ONLY IN RESPONSE] 支付时间 | 
**goods_detail** | [**\Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[]**](V1ExtraAlipayGoodsDetail.md) | 商品明细列表 | [optional] 
**invoice_amount** | **double** | [ONLY IN RESPONSE] 开票金额 | 
**is_async_pay** | [**\Justapnet\Justap\Model\V1ExtraAlipayPayParams**](V1ExtraAlipayPayParams.md) | 是否异步支付 | [optional] 
**mdiscount_amount** | **double** | [ONLY IN RESPONSE] 平台优惠金额 | 
**operator_id** | **string** | 商户操作员编号 | 
**pay_params** | **string** | [ONLY IN RESPONSE] 支付宝返回的支付参数 | 
**point_amount** | **double** | [ONLY IN RESPONSE] 集分宝金额 | 
**product_code** | **string** | 销售产品码 | 
**query_options** | **string** | 商户授权查询类型 | 
**receipt_amount** | **double** | [ONLY IN RESPONSE] 实收金额 | 
**request_org_pid** | **string** | 请求方机构id | 
**scene** | **string** | 支付场景 | 
**settle_info** | [**\Justapnet\Justap\Model\V1ExtraAlipaySettleInfo**](V1ExtraAlipaySettleInfo.md) | 结算信息 | [optional] 
**store_id** | **string** | 商户门店编号 | 
**store_name** | **string** | [ONLY IN RESPONSE] 商户门店名称 | 
**sub_merchant** | [**\Justapnet\Justap\Model\V1ExtraAlipaySubMerchant**](V1ExtraAlipaySubMerchant.md) | 子商户信息 | [optional] 
**terminal_id** | **string** | 商户机具终端编号 | 
**total_amount** | **double** | [ONLY IN RESPONSE] 订单金额 | 
**undiscountable_amount** | **double** | 不可打折金额 | 
**voucher_detail_list** | [**\Justapnet\Justap\Model\V1ExtraAlipayVoucherDetailList**](V1ExtraAlipayVoucherDetailList.md) | [ONLY IN RESPONSE] 商家优惠明细列表 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


