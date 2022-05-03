<?php
include('./vendor/autoload.php');
include('./example_common.php');

$body = new \Justapnet\Justap\Model\V1CreateChargeRequest();

$body->setAmount(0.01);
// app id 必须和 X-Justap-Api-Key 匹配
$body->setAppId('YourAppId');
$body->setChannel(\Justapnet\Justap\Model\V1Channel::ALIPAY_QR);
// 客户端ip地址
$body->setClientIp('127.0.0.1');
// 客户系统订单号
$body->setMerchantTradeId('test_'.md5(time()));
$body->setSubject('test sdk 下单');
$body->setBody('test sdk 下单');

try {
    $result = $apiInstance->tradeServiceCharges($body);
    var_dump($result->getData()->getChargeId());
} catch (Exception $e) {
    echo 'Exception when calling TradeServiceApi->tradeServiceCharges: ', $e->getMessage(), PHP_EOL;
}