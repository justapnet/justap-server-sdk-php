# justap-server-sdk-php

- API version: 1.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Document

[https://www.justap.cn/docs](https://www.justap.cn/docs)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/justapnet/justap-server-sdk-php.git"
    }
  ],
  "require": {
    "justapnet/justap-server-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/justap-server-sdk-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKey('X-JUSTAP-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Justapnet\Justap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-JUSTAP-API-KEY', 'Bearer');

$apiInstance = new Justapnet\Justap\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Justapnet\Justap\Model\V1CreateChargeRequest(); // \Justapnet\Justap\Model\V1CreateChargeRequest | 你可以创建一个 charge 对象向用户收款。charge 是一个支付凭据对象，所有和支付相关的要素信息都存储在这个对象中，你的服务端可以通过发起支付请求来创建一个新的 charge 对象，也可以随时查询一个或者多个 charge 对象的状态。每个 charge 对象都拥有一个标识 id，该 id 在系统内唯一。

try {
    $result = $apiInstance->chargeServiceCharges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chargeServiceCharges: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://127.0.0.1:21011*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**chargeServiceCharges**](docs/Api/DefaultApi.md#chargeservicecharges) | **POST** /transaction/v1/charges | 创建 Charge 对象
*DefaultApi* | [**chargeServiceCharges2**](docs/Api/DefaultApi.md#chargeservicecharges2) | **POST** /v1/charges | 创建 Charge 对象
*DefaultApi* | [**chargeServiceQueryCharge**](docs/Api/DefaultApi.md#chargeservicequerycharge) | **GET** /transaction/v1/charges/{charge_id} | 查询 Charge 对象
*DefaultApi* | [**chargeServiceQueryCharge2**](docs/Api/DefaultApi.md#chargeservicequerycharge2) | **GET** /v1/charges/{charge_id} | 查询 Charge 对象
*DefaultApi* | [**chargeServiceQueryChargeList**](docs/Api/DefaultApi.md#chargeservicequerychargelist) | **GET** /transaction/v1/charges | 查询 Charge 对象列表
*DefaultApi* | [**chargeServiceQueryChargeList2**](docs/Api/DefaultApi.md#chargeservicequerychargelist2) | **GET** /v1/charges | 查询 Charge 对象列表
*DefaultApi* | [**chargeServiceReverseCharge**](docs/Api/DefaultApi.md#chargeservicereversecharge) | **POST** /transaction/v1/charges/{charge_id}/reverse | 撤销 Charge 对象
*DefaultApi* | [**chargeServiceReverseCharge2**](docs/Api/DefaultApi.md#chargeservicereversecharge2) | **POST** /v1/charges/{charge_id}/reverse | 撤销 Charge 对象
*DefaultApi* | [**refundServiceQueryRefund**](docs/Api/DefaultApi.md#refundservicequeryrefund) | **GET** /transaction/v1/charges/{charge_id}/refunds/{refund_id} | 查询 Refund 对象
*DefaultApi* | [**refundServiceQueryRefund2**](docs/Api/DefaultApi.md#refundservicequeryrefund2) | **GET** /v1/refunds/{refund_id} | 查询 Refund 对象
*DefaultApi* | [**refundServiceQueryRefundList**](docs/Api/DefaultApi.md#refundservicequeryrefundlist) | **GET** /transaction/v1/charges/{charge_id}/refunds | 查询 Refund 对象列表
*DefaultApi* | [**refundServiceQueryRefundList2**](docs/Api/DefaultApi.md#refundservicequeryrefundlist2) | **GET** /v1/refunds | 查询 Refund 对象列表
*DefaultApi* | [**refundServiceRefunds**](docs/Api/DefaultApi.md#refundservicerefunds) | **POST** /transaction/v1/refunds | 创建 Refund 对象
*DefaultApi* | [**refundServiceRefunds2**](docs/Api/DefaultApi.md#refundservicerefunds2) | **POST** /v1/refunds | 创建 Refund 对象
*BusinessUserServiceApi* | [**businessUserServiceCreateUser**](docs/Api/BusinessUserServiceApi.md#businessuserservicecreateuser) | **POST** /v1/business_users | 创建 BusinessUser 对象
*BusinessUserServiceApi* | [**businessUserServiceDeleteUser**](docs/Api/BusinessUserServiceApi.md#businessuserservicedeleteuser) | **DELETE** /v1/business_users/{id} | 删除 BusinessUser 对象
*BusinessUserServiceApi* | [**businessUserServiceListAllUsers**](docs/Api/BusinessUserServiceApi.md#businessuserservicelistallusers) | **GET** /v1/business_users | 查询 BusinessUser 对象列表
*BusinessUserServiceApi* | [**businessUserServiceRetrieveUser**](docs/Api/BusinessUserServiceApi.md#businessuserserviceretrieveuser) | **GET** /v1/business_users/{id} | 查询 BusinessUser 对象
*BusinessUserServiceApi* | [**businessUserServiceSearchUsers**](docs/Api/BusinessUserServiceApi.md#businessuserservicesearchusers) | **GET** /v1/business_users/search | 搜索 BusinessUser 对象
*BusinessUserServiceApi* | [**businessUserServiceUpdateUser**](docs/Api/BusinessUserServiceApi.md#businessuserserviceupdateuser) | **POST** /v1/business_users/{id} | 更新 BusinessUser 对象
*CheckoutServiceApi* | [**checkoutServiceCreateUnionQrCheckout**](docs/Api/CheckoutServiceApi.md#checkoutservicecreateunionqrcheckout) | **POST** /v1/checkout/union_qr | 通过聚合收款码创建订单
*CustomerServiceApi* | [**customerServiceCreateCustomer**](docs/Api/CustomerServiceApi.md#customerservicecreatecustomer) | **POST** /v1/customers | 
*CustomerServiceApi* | [**customerServiceDeleteCustomer**](docs/Api/CustomerServiceApi.md#customerservicedeletecustomer) | **DELETE** /v1/customers/{id} | 
*CustomerServiceApi* | [**customerServiceListAllCustomers**](docs/Api/CustomerServiceApi.md#customerservicelistallcustomers) | **GET** /v1/customers | 
*CustomerServiceApi* | [**customerServiceRetrieveCustomer**](docs/Api/CustomerServiceApi.md#customerserviceretrievecustomer) | **GET** /v1/customers/{id} | 
*CustomerServiceApi* | [**customerServiceSearchCustomers**](docs/Api/CustomerServiceApi.md#customerservicesearchcustomers) | **GET** /v1/customers/search | 
*CustomerServiceApi* | [**customerServiceUpdateCustomer**](docs/Api/CustomerServiceApi.md#customerserviceupdatecustomer) | **POST** /v1/customers/{id} | 
*RoyaltyServiceApi* | [**royaltyServiceCreateRoyalty**](docs/Api/RoyaltyServiceApi.md#royaltyservicecreateroyalty) | **POST** /v1/royalties | 创建 Royalty 对象
*SettlementServiceApi* | [**settlementServiceCreateSettlementAccount**](docs/Api/SettlementServiceApi.md#settlementservicecreatesettlementaccount) | **POST** /v1/settlement_accounts | 创建 SettlementAccount 对象
*SettlementServiceApi* | [**settlementServiceDeleteSettlementAccount**](docs/Api/SettlementServiceApi.md#settlementservicedeletesettlementaccount) | **DELETE** /v1/settlement_accounts/{id} | 删除 SettlementAccount 对象
*SettlementServiceApi* | [**settlementServiceListAllSettlementAccounts**](docs/Api/SettlementServiceApi.md#settlementservicelistallsettlementaccounts) | **GET** /v1/settlement_accounts | 查询 SettlementAccount 对象列表
*SettlementServiceApi* | [**settlementServiceRetrieveSettlementAccount**](docs/Api/SettlementServiceApi.md#settlementserviceretrievesettlementaccount) | **GET** /v1/settlement_accounts/{id} | 查询 SettlementAccount 对象
*SettlementServiceApi* | [**settlementServiceSearchSettlementAccounts**](docs/Api/SettlementServiceApi.md#settlementservicesearchsettlementaccounts) | **GET** /v1/settlement_accounts/search | 搜索 SettlementAccount 对象
*SettlementServiceApi* | [**settlementServiceUpdateSettlementAccount**](docs/Api/SettlementServiceApi.md#settlementserviceupdatesettlementaccount) | **POST** /v1/settlement_accounts/{id} | 更新 SettlementAccount 对象


## Documentation For Models

 - [CreateRoyaltyRequestRoyaltyFeeMode](docs/Model/CreateRoyaltyRequestRoyaltyFeeMode.md)
 - [CreateRoyaltyRequestRoyaltyReceiver](docs/Model/CreateRoyaltyRequestRoyaltyReceiver.md)
 - [ExtraAlipayInvoiceInfoKeyInfo](docs/Model/ExtraAlipayInvoiceInfoKeyInfo.md)
 - [ExtraAlipaySettleInfoSettleDetailInfos](docs/Model/ExtraAlipaySettleInfoSettleDetailInfos.md)
 - [ExtraWechatpayDetailGoodsDetail](docs/Model/ExtraWechatpayDetailGoodsDetail.md)
 - [ExtraWechatpaySceneInfoH5Info](docs/Model/ExtraWechatpaySceneInfoH5Info.md)
 - [ExtraWechatpaySceneInfoStoreInfo](docs/Model/ExtraWechatpaySceneInfoStoreInfo.md)
 - [OpenApiRoyaltyDetailInfoPojoTradeFundBillItem](docs/Model/OpenApiRoyaltyDetailInfoPojoTradeFundBillItem.md)
 - [ProtobufAny](docs/Model/ProtobufAny.md)
 - [RefundExtraAlipayOpenApiRoyaltyDetailInfoPojo](docs/Model/RefundExtraAlipayOpenApiRoyaltyDetailInfoPojo.md)
 - [RefundExtraWechatPayAccount](docs/Model/RefundExtraWechatPayAccount.md)
 - [RefundExtraWechatPayGoodsDetailItem](docs/Model/RefundExtraWechatPayGoodsDetailItem.md)
 - [RpcStatus](docs/Model/RpcStatus.md)
 - [SettlementAccountRecipientAccountType](docs/Model/SettlementAccountRecipientAccountType.md)
 - [SettlementAccountRecipientAlipayChannelRecipient](docs/Model/SettlementAccountRecipientAlipayChannelRecipient.md)
 - [SettlementAccountRecipientBankChannelRecipient](docs/Model/SettlementAccountRecipientBankChannelRecipient.md)
 - [SettlementAccountRecipientRecipientType](docs/Model/SettlementAccountRecipientRecipientType.md)
 - [SettlementAccountRecipientWechatpayChannelRecipient](docs/Model/SettlementAccountRecipientWechatpayChannelRecipient.md)
 - [Tradev1Channel](docs/Model/Tradev1Channel.md)
 - [Tradev1RoyaltyMethod](docs/Model/Tradev1RoyaltyMethod.md)
 - [V1AcquirerCreateRoyaltyResponse](docs/Model/V1AcquirerCreateRoyaltyResponse.md)
 - [V1AcquirerQueryRoyaltyResponse](docs/Model/V1AcquirerQueryRoyaltyResponse.md)
 - [V1AcquirerRoyaltyNotifyResponse](docs/Model/V1AcquirerRoyaltyNotifyResponse.md)
 - [V1AlipayCallbackResponse](docs/Model/V1AlipayCallbackResponse.md)
 - [V1AlipayNotifyResponse](docs/Model/V1AlipayNotifyResponse.md)
 - [V1CallbackRoutingResponse](docs/Model/V1CallbackRoutingResponse.md)
 - [V1Charge](docs/Model/V1Charge.md)
 - [V1ChargeExtra](docs/Model/V1ChargeExtra.md)
 - [V1ChargeListResponse](docs/Model/V1ChargeListResponse.md)
 - [V1ChargeResponse](docs/Model/V1ChargeResponse.md)
 - [V1ChargeRoutingResponse](docs/Model/V1ChargeRoutingResponse.md)
 - [V1CreateChargeRequest](docs/Model/V1CreateChargeRequest.md)
 - [V1CreateChargeRequestExtra](docs/Model/V1CreateChargeRequestExtra.md)
 - [V1CreateCustomerRequest](docs/Model/V1CreateCustomerRequest.md)
 - [V1CreateRefundRequest](docs/Model/V1CreateRefundRequest.md)
 - [V1CreateRoyaltyRequest](docs/Model/V1CreateRoyaltyRequest.md)
 - [V1CreateUserRequest](docs/Model/V1CreateUserRequest.md)
 - [V1Customer](docs/Model/V1Customer.md)
 - [V1CustomerListResponse](docs/Model/V1CustomerListResponse.md)
 - [V1CustomerResponse](docs/Model/V1CustomerResponse.md)
 - [V1DeleteCustomerResponse](docs/Model/V1DeleteCustomerResponse.md)
 - [V1DeleteProductResponse](docs/Model/V1DeleteProductResponse.md)
 - [V1DeleteSettlementAccountResponse](docs/Model/V1DeleteSettlementAccountResponse.md)
 - [V1DeleteUserResponse](docs/Model/V1DeleteUserResponse.md)
 - [V1ExtraAlipayApp](docs/Model/V1ExtraAlipayApp.md)
 - [V1ExtraAlipayBusinessParams](docs/Model/V1ExtraAlipayBusinessParams.md)
 - [V1ExtraAlipayExtUserInfo](docs/Model/V1ExtraAlipayExtUserInfo.md)
 - [V1ExtraAlipayExtendParams](docs/Model/V1ExtraAlipayExtendParams.md)
 - [V1ExtraAlipayFace](docs/Model/V1ExtraAlipayFace.md)
 - [V1ExtraAlipayFundBillList](docs/Model/V1ExtraAlipayFundBillList.md)
 - [V1ExtraAlipayGoodsDetail](docs/Model/V1ExtraAlipayGoodsDetail.md)
 - [V1ExtraAlipayInvoiceInfo](docs/Model/V1ExtraAlipayInvoiceInfo.md)
 - [V1ExtraAlipayLite](docs/Model/V1ExtraAlipayLite.md)
 - [V1ExtraAlipayLogisticsDetail](docs/Model/V1ExtraAlipayLogisticsDetail.md)
 - [V1ExtraAlipayPage](docs/Model/V1ExtraAlipayPage.md)
 - [V1ExtraAlipayPayParams](docs/Model/V1ExtraAlipayPayParams.md)
 - [V1ExtraAlipayQr](docs/Model/V1ExtraAlipayQr.md)
 - [V1ExtraAlipayReceiverAddressInfo](docs/Model/V1ExtraAlipayReceiverAddressInfo.md)
 - [V1ExtraAlipayScan](docs/Model/V1ExtraAlipayScan.md)
 - [V1ExtraAlipaySettleInfo](docs/Model/V1ExtraAlipaySettleInfo.md)
 - [V1ExtraAlipaySubMerchant](docs/Model/V1ExtraAlipaySubMerchant.md)
 - [V1ExtraAlipayVoucherDetailList](docs/Model/V1ExtraAlipayVoucherDetailList.md)
 - [V1ExtraAlipayWap](docs/Model/V1ExtraAlipayWap.md)
 - [V1ExtraWechatpayApp](docs/Model/V1ExtraWechatpayApp.md)
 - [V1ExtraWechatpayAppConfig](docs/Model/V1ExtraWechatpayAppConfig.md)
 - [V1ExtraWechatpayAppletConfig](docs/Model/V1ExtraWechatpayAppletConfig.md)
 - [V1ExtraWechatpayDetail](docs/Model/V1ExtraWechatpayDetail.md)
 - [V1ExtraWechatpayH5](docs/Model/V1ExtraWechatpayH5.md)
 - [V1ExtraWechatpayJsapi](docs/Model/V1ExtraWechatpayJsapi.md)
 - [V1ExtraWechatpayJsapiConfig](docs/Model/V1ExtraWechatpayJsapiConfig.md)
 - [V1ExtraWechatpayLite](docs/Model/V1ExtraWechatpayLite.md)
 - [V1ExtraWechatpayNative](docs/Model/V1ExtraWechatpayNative.md)
 - [V1ExtraWechatpayPayer](docs/Model/V1ExtraWechatpayPayer.md)
 - [V1ExtraWechatpayScan](docs/Model/V1ExtraWechatpayScan.md)
 - [V1ExtraWechatpaySceneInfo](docs/Model/V1ExtraWechatpaySceneInfo.md)
 - [V1ExtraWechatpaySettleInfo](docs/Model/V1ExtraWechatpaySettleInfo.md)
 - [V1FinishRoyaltyResponse](docs/Model/V1FinishRoyaltyResponse.md)
 - [V1Gender](docs/Model/V1Gender.md)
 - [V1ListAllCustomersRequestCreated](docs/Model/V1ListAllCustomersRequestCreated.md)
 - [V1ListAllRoyaltiesRequestCreated](docs/Model/V1ListAllRoyaltiesRequestCreated.md)
 - [V1ListAllSettlementAccountsRequestCreated](docs/Model/V1ListAllSettlementAccountsRequestCreated.md)
 - [V1ListAllUsersRequestCreated](docs/Model/V1ListAllUsersRequestCreated.md)
 - [V1NotifyRoutingResponse](docs/Model/V1NotifyRoutingResponse.md)
 - [V1ProductListResponse](docs/Model/V1ProductListResponse.md)
 - [V1ProductResponse](docs/Model/V1ProductResponse.md)
 - [V1QueryChargeListRequestCreated](docs/Model/V1QueryChargeListRequestCreated.md)
 - [V1Refund](docs/Model/V1Refund.md)
 - [V1RefundExtra](docs/Model/V1RefundExtra.md)
 - [V1RefundExtraAlipay](docs/Model/V1RefundExtraAlipay.md)
 - [V1RefundExtraWechatPay](docs/Model/V1RefundExtraWechatPay.md)
 - [V1RefundListResponse](docs/Model/V1RefundListResponse.md)
 - [V1RefundResponse](docs/Model/V1RefundResponse.md)
 - [V1RefundRoutingResponse](docs/Model/V1RefundRoutingResponse.md)
 - [V1Royalty](docs/Model/V1Royalty.md)
 - [V1RoyaltyListResponse](docs/Model/V1RoyaltyListResponse.md)
 - [V1RoyaltyMode](docs/Model/V1RoyaltyMode.md)
 - [V1RoyaltyResponse](docs/Model/V1RoyaltyResponse.md)
 - [V1RoyaltyRoutingRequestRoyaltyMethod](docs/Model/V1RoyaltyRoutingRequestRoyaltyMethod.md)
 - [V1RoyaltyRoutingResponse](docs/Model/V1RoyaltyRoutingResponse.md)
 - [V1RoyaltySettlement](docs/Model/V1RoyaltySettlement.md)
 - [V1RoyaltySettlementListResponse](docs/Model/V1RoyaltySettlementListResponse.md)
 - [V1RoyaltySettlementResponse](docs/Model/V1RoyaltySettlementResponse.md)
 - [V1RoyaltySettlementSource](docs/Model/V1RoyaltySettlementSource.md)
 - [V1RoyaltySettlementSourceType](docs/Model/V1RoyaltySettlementSourceType.md)
 - [V1RoyaltySettlementTransaction](docs/Model/V1RoyaltySettlementTransaction.md)
 - [V1RoyaltySettlementTransactionListResponse](docs/Model/V1RoyaltySettlementTransactionListResponse.md)
 - [V1RoyaltySettlementTransactionResponse](docs/Model/V1RoyaltySettlementTransactionResponse.md)
 - [V1SearchCustomersRequestCreated](docs/Model/V1SearchCustomersRequestCreated.md)
 - [V1SearchUsersRequestCreated](docs/Model/V1SearchUsersRequestCreated.md)
 - [V1SettlementAccount](docs/Model/V1SettlementAccount.md)
 - [V1SettlementAccountChannel](docs/Model/V1SettlementAccountChannel.md)
 - [V1SettlementAccountListResponse](docs/Model/V1SettlementAccountListResponse.md)
 - [V1SettlementAccountRecipient](docs/Model/V1SettlementAccountRecipient.md)
 - [V1SettlementAccountResponse](docs/Model/V1SettlementAccountResponse.md)
 - [V1TransferRoutingResponse](docs/Model/V1TransferRoutingResponse.md)
 - [V1UnionQrRequest](docs/Model/V1UnionQrRequest.md)
 - [V1User](docs/Model/V1User.md)
 - [V1UserListResponse](docs/Model/V1UserListResponse.md)
 - [V1UserResponse](docs/Model/V1UserResponse.md)
 - [V1WechatpayCallbackResponse](docs/Model/V1WechatpayCallbackResponse.md)
 - [V1WechatpayNotifyResponse](docs/Model/V1WechatpayNotifyResponse.md)


## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-JUSTAP-API-KEY
- **Location**: HTTP header


## Author

support@justap.net


