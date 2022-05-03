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
$body = new \Justapnet\Justap\Model\V1CreateChargeRequest(); // \Justapnet\Justap\Model\V1CreateChargeRequest | 

try {
    $result = $apiInstance->tradeServiceCharges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tradeServiceCharges: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://127.0.0.1:21011*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**tradeServiceCharges**](docs/Api/DefaultApi.md#tradeservicecharges) | **POST** /transaction/v1/charges | 创建 Charge 对象
*DefaultApi* | [**tradeServiceQueryCharge**](docs/Api/DefaultApi.md#tradeservicequerycharge) | **GET** /transaction/v1/charges/{charge_id} | 查询 Charge 对象
*DefaultApi* | [**tradeServiceQueryChargeList**](docs/Api/DefaultApi.md#tradeservicequerychargelist) | **GET** /transaction/v1/charges | 查询 Charge 对象列表
*DefaultApi* | [**tradeServiceQueryRefund**](docs/Api/DefaultApi.md#tradeservicequeryrefund) | **GET** /transaction/v1/charges/{charge_id}/refunds/{refund_id} | 查询 Refund 对象
*DefaultApi* | [**tradeServiceQueryRefundList**](docs/Api/DefaultApi.md#tradeservicequeryrefundlist) | **GET** /transaction/v1/charges/{charge_id}/refunds | 查询 Refund 对象列表
*DefaultApi* | [**tradeServiceRefunds**](docs/Api/DefaultApi.md#tradeservicerefunds) | **POST** /transaction/v1/refunds | 创建 Refund 对象
*DefaultApi* | [**tradeServiceReverseCharge**](docs/Api/DefaultApi.md#tradeservicereversecharge) | **POST** /transaction/v1/charges/{charge_id}/reverse | 撤销 Charge 对象


## Documentation For Models

 - [ExtraAlipayAgreementSignParamsAccessParams](docs/Model/ExtraAlipayAgreementSignParamsAccessParams.md)
 - [ExtraAlipayAgreementSignParamsPeriodRuleParams](docs/Model/ExtraAlipayAgreementSignParamsPeriodRuleParams.md)
 - [ExtraAlipayAgreementSignParamsSubMerchant](docs/Model/ExtraAlipayAgreementSignParamsSubMerchant.md)
 - [ExtraAlipayInvoiceInfoKeyInfo](docs/Model/ExtraAlipayInvoiceInfoKeyInfo.md)
 - [ExtraAlipayRoyaltyInfoRoyaltyDetailInfos](docs/Model/ExtraAlipayRoyaltyInfoRoyaltyDetailInfos.md)
 - [ExtraAlipaySettleInfoSettleDetailInfos](docs/Model/ExtraAlipaySettleInfoSettleDetailInfos.md)
 - [ExtraWechatpayDetailGoodsDetail](docs/Model/ExtraWechatpayDetailGoodsDetail.md)
 - [ExtraWechatpaySceneInfoStoreInfo](docs/Model/ExtraWechatpaySceneInfoStoreInfo.md)
 - [HealthCheckResponseServingStatus](docs/Model/HealthCheckResponseServingStatus.md)
 - [OpenApiRoyaltyDetailInfoPojoTradeFundBillItem](docs/Model/OpenApiRoyaltyDetailInfoPojoTradeFundBillItem.md)
 - [ProtobufAny](docs/Model/ProtobufAny.md)
 - [QueryChargeListRequestCreated](docs/Model/QueryChargeListRequestCreated.md)
 - [RefundExtraAlipayOpenApiRoyaltyDetailInfoPojo](docs/Model/RefundExtraAlipayOpenApiRoyaltyDetailInfoPojo.md)
 - [RefundExtraWechatPayAccount](docs/Model/RefundExtraWechatPayAccount.md)
 - [RefundExtraWechatPayGoodsDetailItem](docs/Model/RefundExtraWechatPayGoodsDetailItem.md)
 - [RpcStatus](docs/Model/RpcStatus.md)
 - [V1AlipayCallbackResponse](docs/Model/V1AlipayCallbackResponse.md)
 - [V1AlipayNotifyResponse](docs/Model/V1AlipayNotifyResponse.md)
 - [V1Channel](docs/Model/V1Channel.md)
 - [V1Charge](docs/Model/V1Charge.md)
 - [V1ChargeExtra](docs/Model/V1ChargeExtra.md)
 - [V1ChargeListResponse](docs/Model/V1ChargeListResponse.md)
 - [V1ChargeResponse](docs/Model/V1ChargeResponse.md)
 - [V1CreateChargeRequest](docs/Model/V1CreateChargeRequest.md)
 - [V1CreateChargeRequestExtra](docs/Model/V1CreateChargeRequestExtra.md)
 - [V1CreateRefundRequest](docs/Model/V1CreateRefundRequest.md)
 - [V1ExtraAlipayAgreementParams](docs/Model/V1ExtraAlipayAgreementParams.md)
 - [V1ExtraAlipayAgreementSignParams](docs/Model/V1ExtraAlipayAgreementSignParams.md)
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
 - [V1ExtraAlipayRoyaltyInfo](docs/Model/V1ExtraAlipayRoyaltyInfo.md)
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
 - [V1HealthCheckResponse](docs/Model/V1HealthCheckResponse.md)
 - [V1Refund](docs/Model/V1Refund.md)
 - [V1RefundExtra](docs/Model/V1RefundExtra.md)
 - [V1RefundExtraAlipay](docs/Model/V1RefundExtraAlipay.md)
 - [V1RefundExtraWechatPay](docs/Model/V1RefundExtraWechatPay.md)
 - [V1RefundListResponse](docs/Model/V1RefundListResponse.md)
 - [V1RefundResponse](docs/Model/V1RefundResponse.md)
 - [V1WechatpayCallbackResponse](docs/Model/V1WechatpayCallbackResponse.md)
 - [V1WechatpayNotifyResponse](docs/Model/V1WechatpayNotifyResponse.md)


## Documentation For Authorization


## ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-JUSTAP-API-KEY
- **Location**: HTTP header


## Author

support@justap.net


