<?php
/**
 * V1ExtraAlipayApp
 *
 * PHP version 5
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
    * Justap API
    *
    * 欢迎阅读 Justap Api 文档  Justap 是为移动端应用和PC端应用打造的下一代聚合支付SAAS服务平台，通过一个 SDK 即可快速的支持各种形式的应用，并且一次接口完成多个不同支付渠道的接入。平台除了支持服务商子商户模式，同时还对商家自有商户（即自己前往微信、支付宝等机构开户）提供了完整的支持。  感谢您的支持，我们将不断探索，为您提供更优质的服务！如需技术支持可前往商户中心提交工单，支持工程师会尽快与您取得联系！  # 文档说明 采用 REST 风格设计。所有接口请求地址都是可预期的以及面向资源的。使用规范的 HTTP 响应代码来表示请求结果的正确或错误信息。使用 HTTP 内置的特性，如 HTTP Authentication 和 HTTP 请求方法让接口易于理解。  ## HTTP 状态码 HTTP 状态码可以用于表明服务的状态。服务器返回的 HTTP 状态码遵循 [RFC 7231](http://tools.ietf.org/html/rfc7231#section-6) 和 [IANA Status Code Registry](http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml) 标准。  ## 认证 在调用 API 时，必须提供 API Key 作为每个请求的身份验证。你可以在管理平台内管理你的 API Key。API Key 是商户在系统中的身份标识，请安全存储，确保其不要被泄露。如需获取或更新 API Key ，也可以在商户中心内进行操作。 Api Key 在使用自定义的 HTTP Header 进行传递。  ``` X-Justap-Api-Key ```  API Key 分为 live 和 test 两种模式。分别对应真实交易环境和模拟测试交易环境并且可以实时切换。 测试模式下的 API Key 会模拟交易等请求，但是不会产生任何真实交易行为和费用，便于调试和接入。  **⚠️ 注意**：在使用 live 模式前，需要先前往 `商户中心 -> 应用设置 -> 开发参数` 开启 live 模式。  <SecurityDefinitions />  ## 请求类型 所有的 API 请求只支持 HTTPS 方式调用。  ## 路由参数 路由参数是指出现在 URL 路径中的可变变量。在本文档中，使用 `{}` 包裹的部分。 例如： `{charge_id}`，在实际使用是，需要将 `{charge_id}` 替换为实际值 `charge_8a8sdf888888`  ## MIME Type MIME 类型用于指示服务器返回的数据格式。服务器目前默认采用 `application/json`。  例如: ``` application/json ```  ## 错误 服务器使用 HTTP 状态码 (status code) 来表明一个 API 请求的成功或失败状态。返回 HTTP 2XX 表明 API 请求成功。返回 HTTP 4XX 表明在请求 API 时提供了错误信息，例如参数缺失、参数错误、支付渠道错误等。返回 HTTP 5XX 表明 API 请求时，服务器发生了错误。 在返回错误的状态码时，回同时返回一些错误信息提示出错原因。  具体的错误码我们正在整理当中。  ## 分页 所有的 Justap 资源都可以被 list API 方法支持，例如分页 charges 和 refunds。这些 list API 方法拥有相同的数据结构。Justap 是基于 cursor 的分页机制，使用参数 starting_after 来决定列表从何处开始，使用参数 ending_before 来决定列表从何处结束。  ## 参数说明 请求参数中包含的以下字段释义请参考：  - REQUIRED: 必填参数 - OPTIONAL: 可选参数，可以在请求当前接口时按需传入 - CONDITIONAL: 在某些条件下必传 - RESPONSE-ONLY: 标示该参数仅在接口返回参数中出现，调用 API 时无需传入  # 如何保证幂等性 如果发生请求超时或服务器内部错误，客户端可能会尝试重发请求。您可以在请求中设置 ClientToken 参数避免多次重试带来重复操作的问题。  ## 什么是幂等性 在数学计算或者计算机科学中，幂等性（idempotence）是指相同操作或资源在一次或多次请求中具有同样效果的作用。幂等性是在分布式系统设计中具有十分重要的地位。  ## 保证幂等性 通常情况下，客户端只需要在500（InternalErrorInternalError）或503（ServiceUnavailable）错误，或者无法获取响应结果时重试。充实时您可以从客户端生成一个参数值不超过64个的ASCII字符，并将值赋予 ClientToken，保证重试请求的幂等性。  ## ClientToken 详解 ClientToken参数的详细信息如下所示。  - ClientToken 是一个由客户端生成的唯一的、大小写敏感、不超过64个ASCII字符的字符串。例如，`ClientToken=123e4567-e89b-12d3-a456-426655440000`。 - 如果您提供了一个已经使用过的 ClientToken，但其他请求参数**有变化**，则服务器会返回 IdempotentParameterMismatch 的错误代码。 - 如果您提供了一个已经使用过的 ClientToken，且其他请求参数**不变**，则服务器会尝试返回 ClientToken 对应的记录。  ## API列表 以下为部分包含了 ClientToken 参数的API，供您参考。具体哪些API支持 ClientToken 参数请以各 API 文档为准，此处不一一列举。  - [申请退款接口](https://www.justap.cn/docs#operation/TradeService_Refunds)  # 签名 为保证安全，JUSTAP 所有接口均需要对请求进行签名。服务器收到请求后进行签名的验证。如果签名验证不通过，将会拒绝处理请求，并返回 401 Unauthorized。  签名算法：  ``` base64Encode(hamc-sha256(md5(请求 body + 请求时间戳 + 一次性随机字符串) + 一次性随机字符串)) ```  ## 准备 首先需要在 Justap 创建一个应用，商户需要生成一对 RSA 密钥对，并将公钥配置到 `商户中心 -> 开发配置`。 RSA 可以使用支付宝提供的 [密钥生成工具](https://opendocs.alipay.com/common/02kipl) 来生成。  商户在使用时，可以按照下述步骤生成请求的签名。   ## 算法描述: - 在请求发送前，取完整的**请求 body** - 生成一个随机的32位字符串，得到 **一次性随机字符串** - 获取当前时间的时间戳，得到 **请求时间戳** - 在请求字符串后面拼接上 **请求时间戳** 和 **一次性随机字符串**，得到 **待 Hash 字符串** - 对 **待 Hash 字符串** 计算 md5，得到 **待签名字符串** - **待签名字符串** 后面拼接上 一次性随机字符串，得到完整的 **待签名字符串** - 使用商户 RSA 私钥，对 **待签名字符串** 计算签名，并对 结果 进行 base64 编码，即可得到 **签名**  ## 设置HTTP头 Justap 要求请求通过 自定义头部 来传递签名。具体定义如下:  ``` X-Justap-Signature: 签名 X-Justap-Request-Time: 请求时间戳 X-Justap-Nonce: 一次性随机字符串 X-Justap-Body-Hash: 待签名字符串 ```  具体的签名算法实现，可参考我们提供的各语言 SDK。  # WebHooks
    *
* OpenAPI spec version: 1.0
* Contact: support@justap.net
* Generated by: https://github.com/swagger-api/swagger-codegen.git
* Swagger Codegen version: 2.4.28-SNAPSHOT
*/

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Justapnet\Justap\Model;

use \ArrayAccess;
use \Justapnet\Justap\ObjectSerializer;

/**
 * V1ExtraAlipayApp Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1ExtraAlipayApp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1ExtraAlipayApp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'credit_agreement_id' => 'string',
        'credit_biz_order_id' => 'string',
        'credit_pay_mode' => 'string',
        'disable_pay_channels' => 'string',
        'enable_pay_channels' => 'string',
        'ext_user_info' => '\Justapnet\Justap\Model\V1ExtraAlipayExtUserInfo',
        'extend_params' => '\Justapnet\Justap\Model\V1ExtraAlipayExtendParams',
        'goods_detail' => '\Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[]',
        'goods_type' => 'string',
        'merchant_trade_id' => 'string',
        'pay_param' => 'string',
        'product_code' => 'string',
        'seller_id' => 'string',
        'store_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'credit_agreement_id' => 'string',
        'credit_biz_order_id' => 'string',
        'credit_pay_mode' => 'string',
        'disable_pay_channels' => 'string',
        'enable_pay_channels' => 'string',
        'ext_user_info' => null,
        'extend_params' => null,
        'goods_detail' => null,
        'goods_type' => 'string',
        'merchant_trade_id' => 'string',
        'pay_param' => 'string',
        'product_code' => 'string',
        'seller_id' => 'string',
        'store_id' => 'string'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'credit_agreement_id' => 'credit_agreement_id',
        'credit_biz_order_id' => 'credit_biz_order_id',
        'credit_pay_mode' => 'credit_pay_mode',
        'disable_pay_channels' => 'disable_pay_channels',
        'enable_pay_channels' => 'enable_pay_channels',
        'ext_user_info' => 'ext_user_info',
        'extend_params' => 'extend_params',
        'goods_detail' => 'goods_detail',
        'goods_type' => 'goods_type',
        'merchant_trade_id' => 'merchant_trade_id',
        'pay_param' => 'pay_param',
        'product_code' => 'product_code',
        'seller_id' => 'seller_id',
        'store_id' => 'store_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'credit_agreement_id' => 'setCreditAgreementId',
        'credit_biz_order_id' => 'setCreditBizOrderId',
        'credit_pay_mode' => 'setCreditPayMode',
        'disable_pay_channels' => 'setDisablePayChannels',
        'enable_pay_channels' => 'setEnablePayChannels',
        'ext_user_info' => 'setExtUserInfo',
        'extend_params' => 'setExtendParams',
        'goods_detail' => 'setGoodsDetail',
        'goods_type' => 'setGoodsType',
        'merchant_trade_id' => 'setMerchantTradeId',
        'pay_param' => 'setPayParam',
        'product_code' => 'setProductCode',
        'seller_id' => 'setSellerId',
        'store_id' => 'setStoreId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'credit_agreement_id' => 'getCreditAgreementId',
        'credit_biz_order_id' => 'getCreditBizOrderId',
        'credit_pay_mode' => 'getCreditPayMode',
        'disable_pay_channels' => 'getDisablePayChannels',
        'enable_pay_channels' => 'getEnablePayChannels',
        'ext_user_info' => 'getExtUserInfo',
        'extend_params' => 'getExtendParams',
        'goods_detail' => 'getGoodsDetail',
        'goods_type' => 'getGoodsType',
        'merchant_trade_id' => 'getMerchantTradeId',
        'pay_param' => 'getPayParam',
        'product_code' => 'getProductCode',
        'seller_id' => 'getSellerId',
        'store_id' => 'getStoreId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['credit_agreement_id'] = isset($data['credit_agreement_id']) ? $data['credit_agreement_id'] : null;
        $this->container['credit_biz_order_id'] = isset($data['credit_biz_order_id']) ? $data['credit_biz_order_id'] : null;
        $this->container['credit_pay_mode'] = isset($data['credit_pay_mode']) ? $data['credit_pay_mode'] : null;
        $this->container['disable_pay_channels'] = isset($data['disable_pay_channels']) ? $data['disable_pay_channels'] : null;
        $this->container['enable_pay_channels'] = isset($data['enable_pay_channels']) ? $data['enable_pay_channels'] : null;
        $this->container['ext_user_info'] = isset($data['ext_user_info']) ? $data['ext_user_info'] : null;
        $this->container['extend_params'] = isset($data['extend_params']) ? $data['extend_params'] : null;
        $this->container['goods_detail'] = isset($data['goods_detail']) ? $data['goods_detail'] : null;
        $this->container['goods_type'] = isset($data['goods_type']) ? $data['goods_type'] : null;
        $this->container['merchant_trade_id'] = isset($data['merchant_trade_id']) ? $data['merchant_trade_id'] : null;
        $this->container['pay_param'] = isset($data['pay_param']) ? $data['pay_param'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets credit_agreement_id
     *
     * @return string
     */
    public function getCreditAgreementId()
    {
        return $this->container['credit_agreement_id'];
    }

    /**
     * Sets credit_agreement_id
     *
     * @param string $credit_agreement_id [ONLY IN RESPONSE] 信用支付协议号
     *
     * @return $this
     */
    public function setCreditAgreementId($credit_agreement_id)
    {
        $this->container['credit_agreement_id'] = $credit_agreement_id;

        return $this;
    }

    /**
     * Gets credit_biz_order_id
     *
     * @return string
     */
    public function getCreditBizOrderId()
    {
        return $this->container['credit_biz_order_id'];
    }

    /**
     * Sets credit_biz_order_id
     *
     * @param string $credit_biz_order_id [ONLY IN RESPONSE] 信用支付业务订单号
     *
     * @return $this
     */
    public function setCreditBizOrderId($credit_biz_order_id)
    {
        $this->container['credit_biz_order_id'] = $credit_biz_order_id;

        return $this;
    }

    /**
     * Gets credit_pay_mode
     *
     * @return string
     */
    public function getCreditPayMode()
    {
        return $this->container['credit_pay_mode'];
    }

    /**
     * Sets credit_pay_mode
     *
     * @param string $credit_pay_mode [ONLY IN RESPONSE] 信用支付模式
     *
     * @return $this
     */
    public function setCreditPayMode($credit_pay_mode)
    {
        $this->container['credit_pay_mode'] = $credit_pay_mode;

        return $this;
    }

    /**
     * Gets disable_pay_channels
     *
     * @return string
     */
    public function getDisablePayChannels()
    {
        return $this->container['disable_pay_channels'];
    }

    /**
     * Sets disable_pay_channels
     *
     * @param string $disable_pay_channels 禁用渠道
     *
     * @return $this
     */
    public function setDisablePayChannels($disable_pay_channels)
    {
        $this->container['disable_pay_channels'] = $disable_pay_channels;

        return $this;
    }

    /**
     * Gets enable_pay_channels
     *
     * @return string
     */
    public function getEnablePayChannels()
    {
        return $this->container['enable_pay_channels'];
    }

    /**
     * Sets enable_pay_channels
     *
     * @param string $enable_pay_channels 可用渠道
     *
     * @return $this
     */
    public function setEnablePayChannels($enable_pay_channels)
    {
        $this->container['enable_pay_channels'] = $enable_pay_channels;

        return $this;
    }

    /**
     * Gets ext_user_info
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayExtUserInfo
     */
    public function getExtUserInfo()
    {
        return $this->container['ext_user_info'];
    }

    /**
     * Sets ext_user_info
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayExtUserInfo $ext_user_info 外部指定买家
     *
     * @return $this
     */
    public function setExtUserInfo($ext_user_info)
    {
        $this->container['ext_user_info'] = $ext_user_info;

        return $this;
    }

    /**
     * Gets extend_params
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayExtendParams
     */
    public function getExtendParams()
    {
        return $this->container['extend_params'];
    }

    /**
     * Sets extend_params
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayExtendParams $extend_params 业务扩展参数
     *
     * @return $this
     */
    public function setExtendParams($extend_params)
    {
        $this->container['extend_params'] = $extend_params;

        return $this;
    }

    /**
     * Gets goods_detail
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[]
     */
    public function getGoodsDetail()
    {
        return $this->container['goods_detail'];
    }

    /**
     * Sets goods_detail
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayGoodsDetail[] $goods_detail 商品明细列表
     *
     * @return $this
     */
    public function setGoodsDetail($goods_detail)
    {
        $this->container['goods_detail'] = $goods_detail;

        return $this;
    }

    /**
     * Gets goods_type
     *
     * @return string
     */
    public function getGoodsType()
    {
        return $this->container['goods_type'];
    }

    /**
     * Sets goods_type
     *
     * @param string $goods_type 商品类型
     *
     * @return $this
     */
    public function setGoodsType($goods_type)
    {
        $this->container['goods_type'] = $goods_type;

        return $this;
    }

    /**
     * Gets merchant_trade_id
     *
     * @return string
     */
    public function getMerchantTradeId()
    {
        return $this->container['merchant_trade_id'];
    }

    /**
     * Sets merchant_trade_id
     *
     * @param string $merchant_trade_id [ONLY IN RESPONSE] 商户订单号
     *
     * @return $this
     */
    public function setMerchantTradeId($merchant_trade_id)
    {
        $this->container['merchant_trade_id'] = $merchant_trade_id;

        return $this;
    }

    /**
     * Gets pay_param
     *
     * @return string
     */
    public function getPayParam()
    {
        return $this->container['pay_param'];
    }

    /**
     * Sets pay_param
     *
     * @param string $pay_param [ONLY IN RESPONSE] App 用于拉起支付的请求字符串
     *
     * @return $this
     */
    public function setPayParam($pay_param)
    {
        $this->container['pay_param'] = $pay_param;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code 销售产品码，商家和支付宝签约的产品码
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string $seller_id [ONLY IN RESPONSE] 支付宝卖家支付宝用户ID
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return string
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param string $store_id 商户门店编号
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


