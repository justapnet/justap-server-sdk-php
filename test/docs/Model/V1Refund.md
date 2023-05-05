# V1Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\Justapnet\Justap\Model\V1RefundExtra**](V1RefundExtra.md) | 支付渠道退款元参数 | [optional] 
**amount** | **float** | 退款金额 | [optional] 
**charge_id** | **string** | Charge 对象 id | [optional] 
**charge_merchant_trade_id** | **string** | 商户系统订单号 | [optional] 
**created** | **float** | 退款创建时间 | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | 退款创建时间 | [optional] 
**description** | **string** | 退款说明 | [optional] 
**failure_code** | **string** | 支付渠道失败错误码 | [optional] 
**failure_msg** | **string** | 支付渠道失败原因描述 | [optional] 
**is_success** | **bool** | 退款是否成功 | [optional] [default to false]
**metadata** | **map[string,string]** | 元数据，原样返回 | [optional] 
**refund_id** | **string** | Refund 对象 ID | [optional] 
**refund_no** | **string** | 退款单号 | [optional] 
**status** | **string** | 退款状态 | [optional] 
**succeed_ts** | **float** | 退款成功时间 | [optional] 
**success_at** | [**\DateTime**](\DateTime.md) | 退款成功时间 | [optional] 
**transaction_no** | **string** | 交易号 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


