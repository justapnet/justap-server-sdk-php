# V1Charge

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **double** | 订单金额 | [default to 0.0]
**amount_fee** | **float** | 下单金额 | 
**amount_refund** | **float** | 订单退款总金额 | 
**amount_royalty** | **float** | 分账金额 | 
**amount_settle** | **double** | 结算金额，不一定有，视支付通道情况返回 | 
**app_id** | **string** | 应用ID | 
**body** | **string** | 订单描述信息 | 
**channel** | [**\Justapnet\Justap\Model\V1Channel**](V1Channel.md) |  | 
**charge_id** | **string** | Charge 对象 id | 
**client_ip** | **string** | 顾客IP | 
**closed** | **bool** | 是否关闭 | [default to false]
**closed_at** | [**\DateTime**](\DateTime.md) | 关闭时间 | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Charge 对象创建时间 | [optional] 
**credential** | [**\Justapnet\Justap\Model\ProtobufAny**](ProtobufAny.md) |  | [optional] 
**currency** | **string** | 货币单位，当前仅支持 CNY | 
**description** | **string** | 描述信息 | 
**extra** | [**\Justapnet\Justap\Model\V1ChargeExtra**](V1ChargeExtra.md) |  | [optional] 
**failure_code** | **string** | 收单机构错误码 | 
**failure_msg** | **string** | 收单机构错误描述信息 | 
**live_mode** | **bool** | 表明是否是沙箱环境 | [default to false]
**merchant_trade_id** | **string** | 商户系统订单号，APP下需唯一 | 
**metadata** | **map[string,string]** | 订单元数据，原样返回 | [optional] 
**paid** | **bool** | 表明是否已支付 | [default to false]
**paid_at** | [**\DateTime**](\DateTime.md) | 支付时间 | [optional] 
**refunded** | **bool** | 表明是否包含退款，含退款失败的 | [default to false]
**refunds** | [**\Justapnet\Justap\Model\V1Refund[]**](V1Refund.md) | Refund 对象列表 | [optional] 
**reversed** | **bool** | 表明是否已经撤销 | [default to false]
**reversed_at** | [**\DateTime**](\DateTime.md) | 冲正时间 | [optional] 
**subject** | **string** | 订单描述主题 | 
**time_expire** | [**\DateTime**](\DateTime.md) | 订单过期时间 | [optional] 
**transaction_no** | **string** | Charge 的支付单号 | 
**ttl** | **int** | 订单生存时间，单位秒 | [default to 0]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


