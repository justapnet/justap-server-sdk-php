<?php
/**
 * V1ExtraWechatpayScan
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
    * 欢迎阅读 Justap Api 文档  Justap 是为移动端应用和PC端应用打造的下一代聚合支付SAAS服务平台，通过一个 SDK 即可快速的支持各种形式的应用，并且一次接口完成多个不同支付渠道的接入。平台除了支持服务商子商户模式，同时还对商家自有商户（即自己前往微信、支付宝等机构开户）提供了完整的支持。  感谢您的支持，我们将不断探索，为您提供更优质的服务！如需技术支持可前往商户中心提交工单，支持工程师会尽快与您取得联系！  # 文档说明 采用 REST 风格设计。所有接口请求地址都是可预期的以及面向资源的。使用规范的 HTTP 响应代码来表示请求结果的正确或错误信息。使用 HTTP 内置的特性，如 HTTP Authentication 和 HTTP 请求方法让接口易于理解。  ## HTTP 状态码 HTTP 状态码可以用于表明服务的状态。服务器返回的 HTTP 状态码遵循 [RFC 7231](http://tools.ietf.org/html/rfc7231#section-6) 和 [IANA Status Code Registry](http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml) 标准。  ## 认证 在调用 API 时，必须提供 API Key 作为每个请求的身份验证。你可以在管理平台内管理你的 API Key。API Key 是商户在系统中的身份标识，请安全存储，确保其不要被泄露。如需获取或更新 API Key ，也可以在商户中心内进行操作。 Api Key 在使用自定义的 HTTP Header 进行传递。  ``` X-Justap-Api-Key ```  API Key 分为 live 和 test 两种模式。分别对应真实交易环境和模拟测试交易环境并且可以实时切换。 测试模式下的 API Key 会模拟交易等请求，但是不会产生任何真实交易行为和费用，便于调试和接入。  **⚠️ 注意**：在使用 live 模式前，需要先前往 `商户中心 -> 应用设置 -> 开发参数` 开启 live 模式。  <SecurityDefinitions />  ## 请求类型 所有的 API 请求只支持 HTTPS 方式调用。  ## 路由参数 路由参数是指出现在 URL 路径中的可变变量。在本文档中，使用 `{}` 包裹的部分。 例如： `{charge_id}`，在实际使用是，需要将 `{charge_id}` 替换为实际值 `charge_8a8sdf888888`  ## MIME Type MIME 类型用于指示服务器返回的数据格式。服务器目前默认采用 `application/json`。  例如: ``` application/json ```  ## 错误 服务器使用 HTTP 状态码 (status code) 来表明一个 API 请求的成功或失败状态。返回 HTTP 2XX 表明 API 请求成功。返回 HTTP 4XX 表明在请求 API 时提供了错误信息，例如参数缺失、参数错误、支付渠道错误等。返回 HTTP 5XX 表明 API 请求时，服务器发生了错误。 在返回错误的状态码时，回同时返回一些错误信息提示出错原因。  具体的错误码我们正在整理当中。  ## 分页 所有的 Justap 资源都可以被 list API 方法支持，例如分页 charges 和 refunds。这些 list API 方法拥有相同的数据结构。Justap 是基于 cursor 的分页机制，使用参数 starting_after 来决定列表从何处开始，使用参数 ending_before 来决定列表从何处结束。  ## 参数说明 请求参数中包含的以下字段释义请参考：  - REQUIRED: 必填参数 - OPTIONAL: 可选参数，可以在请求当前接口时按需传入 - CONDITIONAL: 在某些条件下必传 - RESPONSE-ONLY: 标示该参数仅在接口返回参数中出现，调用 API 时无需传入  # 如何保证幂等性 如果发生请求超时或服务器内部错误，客户端可能会尝试重发请求。您可以在请求中设置 ClientToken 参数避免多次重试带来重复操作的问题。  ## 什么是幂等性 在数学计算或者计算机科学中，幂等性（idempotence）是指相同操作或资源在一次或多次请求中具有同样效果的作用。幂等性是在分布式系统设计中具有十分重要的地位。  ## 保证幂等性 通常情况下，客户端只需要在500（InternalErrorInternalError）或503（ServiceUnavailable）错误，或者无法获取响应结果时重试。充实时您可以从客户端生成一个参数值不超过64个的ASCII字符，并将值赋予 ClientToken，保证重试请求的幂等性。  ## ClientToken 详解 ClientToken参数的详细信息如下所示。  - ClientToken 是一个由客户端生成的唯一的、大小写敏感、不超过64个ASCII字符的字符串。例如，`ClientToken=123e4567-e89b-12d3-a456-426655440000`。 - 如果您提供了一个已经使用过的 ClientToken，但其他请求参数**有变化**，则服务器会返回 IdempotentParameterMismatch 的错误代码。 - 如果您提供了一个已经使用过的 ClientToken，且其他请求参数**不变**，则服务器会尝试返回 ClientToken 对应的记录。  ## API列表 以下为部分包含了 ClientToken 参数的API，供您参考。具体哪些API支持 ClientToken 参数请以各 API 文档为准，此处不一一列举。  - [申请退款接口](https://www.justap.cn/docs#operation/TradeService_Refunds)  # 签名 为保证安全，JUSTAP 所有接口均需要对请求进行签名。服务器收到请求后进行签名的验证。如果签名验证不通过，将会拒绝处理请求，并返回 401 Unauthorized。  签名算法：  ``` base64Encode(hamc-sha256(md5(请求 body + 请求时间戳 + 一次性随机字符串) + 一次性随机字符串)) ```  ## 准备 首先需要在 Justap 创建一个应用，商户需要生成一对 RSA 密钥对，并将公钥配置到 `商户中心 -> 开发配置`。 RSA 可以使用支付宝提供的 [密钥生成工具](https://opendocs.alipay.com/common/02kipl) 来生成。  商户在使用时，可以按照下述步骤生成请求的签名。   ## 算法描述: - 在请求发送前，取完整的**请求 body** - 生成一个随机的32位字符串，得到 **一次性随机字符串** - 获取当前时间的时间戳，得到 **请求时间戳** - 在请求字符串后面拼接上 **请求时间戳** 和 **一次性随机字符串**，得到 **待 Hash 字符串** - 对 **待 Hash 字符串** 转换为 utf8 编码并计算 md5，得到 **待签名字符串** - **待签名字符串** 后面拼接上 一次性随机字符串，得到完整的 **待签名字符串** - 使用商户 RSA 私钥，对 **待签名字符串** 计算签名，并对 结果 进行 base64 编码，即可得到 **签名**  ## 设置HTTP头 Justap 要求请求通过 自定义头部 来传递签名。具体定义如下:  ``` X-Justap-Signature: 签名 X-Justap-Request-Time: 请求时间戳 X-Justap-Nonce: 一次性随机字符串 X-Justap-Body-Hash: 待签名字符串 ```  具体的签名算法实现，可参考我们提供的各语言 SDK。  # WebHooks
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
 * V1ExtraWechatpayScan Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1ExtraWechatpayScan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1ExtraWechatpayScan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attach' => 'string',
        'auth_code' => 'string',
        'bank_type' => 'string',
        'cash_fee' => 'string',
        'cash_fee_type' => 'string',
        'detail' => '\Justapnet\Justap\Model\V1ExtraWechatpayDetail',
        'fee_type' => 'string',
        'goods_tag' => 'string',
        'is_subscribe' => 'bool',
        'payer' => '\Justapnet\Justap\Model\V1ExtraWechatpayPayer',
        'scene_info' => '\Justapnet\Justap\Model\V1ExtraWechatpaySceneInfo',
        'settle_info' => '\Justapnet\Justap\Model\V1ExtraWechatpaySettleInfo',
        'settlement_total_fee' => 'float',
        'spbill_create_ip' => 'string',
        'sub_is_subscribe' => 'bool',
        'sub_openid' => 'string',
        'time_end' => 'string',
        'time_expire' => 'string',
        'time_start' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attach' => null,
        'auth_code' => 'string',
        'bank_type' => 'string',
        'cash_fee' => 'string',
        'cash_fee_type' => 'string',
        'detail' => null,
        'fee_type' => 'string',
        'goods_tag' => 'string',
        'is_subscribe' => null,
        'payer' => null,
        'scene_info' => null,
        'settle_info' => null,
        'settlement_total_fee' => 'int64',
        'spbill_create_ip' => 'string',
        'sub_is_subscribe' => null,
        'sub_openid' => 'string',
        'time_end' => 'string',
        'time_expire' => 'string',
        'time_start' => 'string'
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
        'attach' => 'attach',
        'auth_code' => 'auth_code',
        'bank_type' => 'bank_type',
        'cash_fee' => 'cash_fee',
        'cash_fee_type' => 'cash_fee_type',
        'detail' => 'detail',
        'fee_type' => 'fee_type',
        'goods_tag' => 'goods_tag',
        'is_subscribe' => 'is_subscribe',
        'payer' => 'payer',
        'scene_info' => 'scene_info',
        'settle_info' => 'settle_info',
        'settlement_total_fee' => 'settlement_total_fee',
        'spbill_create_ip' => 'spbill_create_ip',
        'sub_is_subscribe' => 'sub_is_subscribe',
        'sub_openid' => 'sub_openid',
        'time_end' => 'time_end',
        'time_expire' => 'time_expire',
        'time_start' => 'time_start'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attach' => 'setAttach',
        'auth_code' => 'setAuthCode',
        'bank_type' => 'setBankType',
        'cash_fee' => 'setCashFee',
        'cash_fee_type' => 'setCashFeeType',
        'detail' => 'setDetail',
        'fee_type' => 'setFeeType',
        'goods_tag' => 'setGoodsTag',
        'is_subscribe' => 'setIsSubscribe',
        'payer' => 'setPayer',
        'scene_info' => 'setSceneInfo',
        'settle_info' => 'setSettleInfo',
        'settlement_total_fee' => 'setSettlementTotalFee',
        'spbill_create_ip' => 'setSpbillCreateIp',
        'sub_is_subscribe' => 'setSubIsSubscribe',
        'sub_openid' => 'setSubOpenid',
        'time_end' => 'setTimeEnd',
        'time_expire' => 'setTimeExpire',
        'time_start' => 'setTimeStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attach' => 'getAttach',
        'auth_code' => 'getAuthCode',
        'bank_type' => 'getBankType',
        'cash_fee' => 'getCashFee',
        'cash_fee_type' => 'getCashFeeType',
        'detail' => 'getDetail',
        'fee_type' => 'getFeeType',
        'goods_tag' => 'getGoodsTag',
        'is_subscribe' => 'getIsSubscribe',
        'payer' => 'getPayer',
        'scene_info' => 'getSceneInfo',
        'settle_info' => 'getSettleInfo',
        'settlement_total_fee' => 'getSettlementTotalFee',
        'spbill_create_ip' => 'getSpbillCreateIp',
        'sub_is_subscribe' => 'getSubIsSubscribe',
        'sub_openid' => 'getSubOpenid',
        'time_end' => 'getTimeEnd',
        'time_expire' => 'getTimeExpire',
        'time_start' => 'getTimeStart'
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
        $this->container['attach'] = isset($data['attach']) ? $data['attach'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['bank_type'] = isset($data['bank_type']) ? $data['bank_type'] : null;
        $this->container['cash_fee'] = isset($data['cash_fee']) ? $data['cash_fee'] : null;
        $this->container['cash_fee_type'] = isset($data['cash_fee_type']) ? $data['cash_fee_type'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['goods_tag'] = isset($data['goods_tag']) ? $data['goods_tag'] : null;
        $this->container['is_subscribe'] = isset($data['is_subscribe']) ? $data['is_subscribe'] : false;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['scene_info'] = isset($data['scene_info']) ? $data['scene_info'] : null;
        $this->container['settle_info'] = isset($data['settle_info']) ? $data['settle_info'] : null;
        $this->container['settlement_total_fee'] = isset($data['settlement_total_fee']) ? $data['settlement_total_fee'] : null;
        $this->container['spbill_create_ip'] = isset($data['spbill_create_ip']) ? $data['spbill_create_ip'] : null;
        $this->container['sub_is_subscribe'] = isset($data['sub_is_subscribe']) ? $data['sub_is_subscribe'] : false;
        $this->container['sub_openid'] = isset($data['sub_openid']) ? $data['sub_openid'] : null;
        $this->container['time_end'] = isset($data['time_end']) ? $data['time_end'] : null;
        $this->container['time_expire'] = isset($data['time_expire']) ? $data['time_expire'] : null;
        $this->container['time_start'] = isset($data['time_start']) ? $data['time_start'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['auth_code'] === null) {
            $invalidProperties[] = "'auth_code' can't be null";
        }
        if ($this->container['bank_type'] === null) {
            $invalidProperties[] = "'bank_type' can't be null";
        }
        if ($this->container['cash_fee'] === null) {
            $invalidProperties[] = "'cash_fee' can't be null";
        }
        if ($this->container['cash_fee_type'] === null) {
            $invalidProperties[] = "'cash_fee_type' can't be null";
        }
        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        if ($this->container['goods_tag'] === null) {
            $invalidProperties[] = "'goods_tag' can't be null";
        }
        if ($this->container['is_subscribe'] === null) {
            $invalidProperties[] = "'is_subscribe' can't be null";
        }
        if ($this->container['settlement_total_fee'] === null) {
            $invalidProperties[] = "'settlement_total_fee' can't be null";
        }
        if ($this->container['spbill_create_ip'] === null) {
            $invalidProperties[] = "'spbill_create_ip' can't be null";
        }
        if ($this->container['sub_is_subscribe'] === null) {
            $invalidProperties[] = "'sub_is_subscribe' can't be null";
        }
        if ($this->container['sub_openid'] === null) {
            $invalidProperties[] = "'sub_openid' can't be null";
        }
        if ($this->container['time_end'] === null) {
            $invalidProperties[] = "'time_end' can't be null";
        }
        if ($this->container['time_expire'] === null) {
            $invalidProperties[] = "'time_expire' can't be null";
        }
        if ($this->container['time_start'] === null) {
            $invalidProperties[] = "'time_start' can't be null";
        }
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
     * Gets attach
     *
     * @return string
     */
    public function getAttach()
    {
        return $this->container['attach'];
    }

    /**
     * Sets attach
     *
     * @param string $attach 元数据
     *
     * @return $this
     */
    public function setAttach($attach)
    {
        $this->container['attach'] = $attach;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string $auth_code 授权码
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets bank_type
     *
     * @return string
     */
    public function getBankType()
    {
        return $this->container['bank_type'];
    }

    /**
     * Sets bank_type
     *
     * @param string $bank_type 付款银行
     *
     * @return $this
     */
    public function setBankType($bank_type)
    {
        $this->container['bank_type'] = $bank_type;

        return $this;
    }

    /**
     * Gets cash_fee
     *
     * @return string
     */
    public function getCashFee()
    {
        return $this->container['cash_fee'];
    }

    /**
     * Sets cash_fee
     *
     * @param string $cash_fee 现金支付金额
     *
     * @return $this
     */
    public function setCashFee($cash_fee)
    {
        $this->container['cash_fee'] = $cash_fee;

        return $this;
    }

    /**
     * Gets cash_fee_type
     *
     * @return string
     */
    public function getCashFeeType()
    {
        return $this->container['cash_fee_type'];
    }

    /**
     * Sets cash_fee_type
     *
     * @param string $cash_fee_type 现金支付币种
     *
     * @return $this
     */
    public function setCashFeeType($cash_fee_type)
    {
        $this->container['cash_fee_type'] = $cash_fee_type;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayDetail
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayDetail $detail 商品详情
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type 货币种类
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets goods_tag
     *
     * @return string
     */
    public function getGoodsTag()
    {
        return $this->container['goods_tag'];
    }

    /**
     * Sets goods_tag
     *
     * @param string $goods_tag 订单优惠标记
     *
     * @return $this
     */
    public function setGoodsTag($goods_tag)
    {
        $this->container['goods_tag'] = $goods_tag;

        return $this;
    }

    /**
     * Gets is_subscribe
     *
     * @return bool
     */
    public function getIsSubscribe()
    {
        return $this->container['is_subscribe'];
    }

    /**
     * Sets is_subscribe
     *
     * @param bool $is_subscribe 是否关注公众账号
     *
     * @return $this
     */
    public function setIsSubscribe($is_subscribe)
    {
        $this->container['is_subscribe'] = $is_subscribe;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayPayer
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayPayer $payer 付款人信息
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets scene_info
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpaySceneInfo
     */
    public function getSceneInfo()
    {
        return $this->container['scene_info'];
    }

    /**
     * Sets scene_info
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpaySceneInfo $scene_info 场景信息
     *
     * @return $this
     */
    public function setSceneInfo($scene_info)
    {
        $this->container['scene_info'] = $scene_info;

        return $this;
    }

    /**
     * Gets settle_info
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpaySettleInfo
     */
    public function getSettleInfo()
    {
        return $this->container['settle_info'];
    }

    /**
     * Sets settle_info
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpaySettleInfo $settle_info 结算信息
     *
     * @return $this
     */
    public function setSettleInfo($settle_info)
    {
        $this->container['settle_info'] = $settle_info;

        return $this;
    }

    /**
     * Gets settlement_total_fee
     *
     * @return float
     */
    public function getSettlementTotalFee()
    {
        return $this->container['settlement_total_fee'];
    }

    /**
     * Sets settlement_total_fee
     *
     * @param float $settlement_total_fee 应结订单金额
     *
     * @return $this
     */
    public function setSettlementTotalFee($settlement_total_fee)
    {
        $this->container['settlement_total_fee'] = $settlement_total_fee;

        return $this;
    }

    /**
     * Gets spbill_create_ip
     *
     * @return string
     */
    public function getSpbillCreateIp()
    {
        return $this->container['spbill_create_ip'];
    }

    /**
     * Sets spbill_create_ip
     *
     * @param string $spbill_create_ip 终端IP
     *
     * @return $this
     */
    public function setSpbillCreateIp($spbill_create_ip)
    {
        $this->container['spbill_create_ip'] = $spbill_create_ip;

        return $this;
    }

    /**
     * Gets sub_is_subscribe
     *
     * @return bool
     */
    public function getSubIsSubscribe()
    {
        return $this->container['sub_is_subscribe'];
    }

    /**
     * Sets sub_is_subscribe
     *
     * @param bool $sub_is_subscribe 子商户是否关注公众账号
     *
     * @return $this
     */
    public function setSubIsSubscribe($sub_is_subscribe)
    {
        $this->container['sub_is_subscribe'] = $sub_is_subscribe;

        return $this;
    }

    /**
     * Gets sub_openid
     *
     * @return string
     */
    public function getSubOpenid()
    {
        return $this->container['sub_openid'];
    }

    /**
     * Sets sub_openid
     *
     * @param string $sub_openid 子商户openid
     *
     * @return $this
     */
    public function setSubOpenid($sub_openid)
    {
        $this->container['sub_openid'] = $sub_openid;

        return $this;
    }

    /**
     * Gets time_end
     *
     * @return string
     */
    public function getTimeEnd()
    {
        return $this->container['time_end'];
    }

    /**
     * Sets time_end
     *
     * @param string $time_end 支付完成时间
     *
     * @return $this
     */
    public function setTimeEnd($time_end)
    {
        $this->container['time_end'] = $time_end;

        return $this;
    }

    /**
     * Gets time_expire
     *
     * @return string
     */
    public function getTimeExpire()
    {
        return $this->container['time_expire'];
    }

    /**
     * Sets time_expire
     *
     * @param string $time_expire 交易结束时间
     *
     * @return $this
     */
    public function setTimeExpire($time_expire)
    {
        $this->container['time_expire'] = $time_expire;

        return $this;
    }

    /**
     * Gets time_start
     *
     * @return string
     */
    public function getTimeStart()
    {
        return $this->container['time_start'];
    }

    /**
     * Sets time_start
     *
     * @param string $time_start 交易起始时间
     *
     * @return $this
     */
    public function setTimeStart($time_start)
    {
        $this->container['time_start'] = $time_start;

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


