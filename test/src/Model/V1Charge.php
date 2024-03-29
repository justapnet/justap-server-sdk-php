<?php
/**
 * V1Charge
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
 * V1Charge Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1Charge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1Charge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'double',
        'amount_fee' => 'float',
        'amount_refund' => 'float',
        'amount_royalty' => 'float',
        'amount_settle' => 'double',
        'app_id' => 'string',
        'body' => 'string',
        'channel' => '\Justapnet\Justap\Model\Tradev1Channel',
        'charge_id' => 'string',
        'client_ip' => 'string',
        'closed' => 'bool',
        'closed_at' => '\DateTime',
        'closed_ts' => 'string',
        'created_at' => '\DateTime',
        'credential' => '\Justapnet\Justap\Model\ProtobufAny',
        'currency' => 'string',
        'description' => 'string',
        'expired_ts' => 'string',
        'extra' => '\Justapnet\Justap\Model\V1ChargeExtra',
        'failure_code' => 'string',
        'failure_msg' => 'string',
        'live_mode' => 'bool',
        'merchant_trade_id' => 'string',
        'metadata' => 'map[string,string]',
        'object' => 'string',
        'paid' => 'bool',
        'paid_at' => '\DateTime',
        'paid_ts' => 'string',
        'refunded' => 'bool',
        'refunds' => '\Justapnet\Justap\Model\V1Refund[]',
        'reversed' => 'bool',
        'reversed_at' => '\DateTime',
        'subject' => 'string',
        'time_expire' => '\DateTime',
        'transaction_no' => 'string',
        'ttl' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'double',
        'amount_fee' => 'float',
        'amount_refund' => 'float',
        'amount_royalty' => 'float',
        'amount_settle' => 'double',
        'app_id' => 'string',
        'body' => 'string',
        'channel' => null,
        'charge_id' => 'string',
        'client_ip' => 'string',
        'closed' => 'boolean',
        'closed_at' => 'date-time',
        'closed_ts' => 'int64',
        'created_at' => 'date-time',
        'credential' => null,
        'currency' => 'string',
        'description' => 'string',
        'expired_ts' => 'int64',
        'extra' => null,
        'failure_code' => 'string',
        'failure_msg' => 'string',
        'live_mode' => null,
        'merchant_trade_id' => 'string',
        'metadata' => null,
        'object' => 'string',
        'paid' => null,
        'paid_at' => 'date-time',
        'paid_ts' => 'int64',
        'refunded' => null,
        'refunds' => null,
        'reversed' => null,
        'reversed_at' => 'date-time',
        'subject' => 'string',
        'time_expire' => 'date-time',
        'transaction_no' => 'string',
        'ttl' => 'int32'
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
        'amount' => 'amount',
        'amount_fee' => 'amount_fee',
        'amount_refund' => 'amount_refund',
        'amount_royalty' => 'amount_royalty',
        'amount_settle' => 'amount_settle',
        'app_id' => 'app_id',
        'body' => 'body',
        'channel' => 'channel',
        'charge_id' => 'charge_id',
        'client_ip' => 'client_ip',
        'closed' => 'closed',
        'closed_at' => 'closed_at',
        'closed_ts' => 'closed_ts',
        'created_at' => 'created_at',
        'credential' => 'credential',
        'currency' => 'currency',
        'description' => 'description',
        'expired_ts' => 'expired_ts',
        'extra' => 'extra',
        'failure_code' => 'failure_code',
        'failure_msg' => 'failure_msg',
        'live_mode' => 'live_mode',
        'merchant_trade_id' => 'merchant_trade_id',
        'metadata' => 'metadata',
        'object' => 'object',
        'paid' => 'paid',
        'paid_at' => 'paid_at',
        'paid_ts' => 'paid_ts',
        'refunded' => 'refunded',
        'refunds' => 'refunds',
        'reversed' => 'reversed',
        'reversed_at' => 'reversed_at',
        'subject' => 'subject',
        'time_expire' => 'time_expire',
        'transaction_no' => 'transaction_no',
        'ttl' => 'ttl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amount_fee' => 'setAmountFee',
        'amount_refund' => 'setAmountRefund',
        'amount_royalty' => 'setAmountRoyalty',
        'amount_settle' => 'setAmountSettle',
        'app_id' => 'setAppId',
        'body' => 'setBody',
        'channel' => 'setChannel',
        'charge_id' => 'setChargeId',
        'client_ip' => 'setClientIp',
        'closed' => 'setClosed',
        'closed_at' => 'setClosedAt',
        'closed_ts' => 'setClosedTs',
        'created_at' => 'setCreatedAt',
        'credential' => 'setCredential',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'expired_ts' => 'setExpiredTs',
        'extra' => 'setExtra',
        'failure_code' => 'setFailureCode',
        'failure_msg' => 'setFailureMsg',
        'live_mode' => 'setLiveMode',
        'merchant_trade_id' => 'setMerchantTradeId',
        'metadata' => 'setMetadata',
        'object' => 'setObject',
        'paid' => 'setPaid',
        'paid_at' => 'setPaidAt',
        'paid_ts' => 'setPaidTs',
        'refunded' => 'setRefunded',
        'refunds' => 'setRefunds',
        'reversed' => 'setReversed',
        'reversed_at' => 'setReversedAt',
        'subject' => 'setSubject',
        'time_expire' => 'setTimeExpire',
        'transaction_no' => 'setTransactionNo',
        'ttl' => 'setTtl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amount_fee' => 'getAmountFee',
        'amount_refund' => 'getAmountRefund',
        'amount_royalty' => 'getAmountRoyalty',
        'amount_settle' => 'getAmountSettle',
        'app_id' => 'getAppId',
        'body' => 'getBody',
        'channel' => 'getChannel',
        'charge_id' => 'getChargeId',
        'client_ip' => 'getClientIp',
        'closed' => 'getClosed',
        'closed_at' => 'getClosedAt',
        'closed_ts' => 'getClosedTs',
        'created_at' => 'getCreatedAt',
        'credential' => 'getCredential',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'expired_ts' => 'getExpiredTs',
        'extra' => 'getExtra',
        'failure_code' => 'getFailureCode',
        'failure_msg' => 'getFailureMsg',
        'live_mode' => 'getLiveMode',
        'merchant_trade_id' => 'getMerchantTradeId',
        'metadata' => 'getMetadata',
        'object' => 'getObject',
        'paid' => 'getPaid',
        'paid_at' => 'getPaidAt',
        'paid_ts' => 'getPaidTs',
        'refunded' => 'getRefunded',
        'refunds' => 'getRefunds',
        'reversed' => 'getReversed',
        'reversed_at' => 'getReversedAt',
        'subject' => 'getSubject',
        'time_expire' => 'getTimeExpire',
        'transaction_no' => 'getTransactionNo',
        'ttl' => 'getTtl'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : 0.0;
        $this->container['amount_fee'] = isset($data['amount_fee']) ? $data['amount_fee'] : null;
        $this->container['amount_refund'] = isset($data['amount_refund']) ? $data['amount_refund'] : null;
        $this->container['amount_royalty'] = isset($data['amount_royalty']) ? $data['amount_royalty'] : null;
        $this->container['amount_settle'] = isset($data['amount_settle']) ? $data['amount_settle'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['charge_id'] = isset($data['charge_id']) ? $data['charge_id'] : null;
        $this->container['client_ip'] = isset($data['client_ip']) ? $data['client_ip'] : null;
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : false;
        $this->container['closed_at'] = isset($data['closed_at']) ? $data['closed_at'] : null;
        $this->container['closed_ts'] = isset($data['closed_ts']) ? $data['closed_ts'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expired_ts'] = isset($data['expired_ts']) ? $data['expired_ts'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['failure_code'] = isset($data['failure_code']) ? $data['failure_code'] : null;
        $this->container['failure_msg'] = isset($data['failure_msg']) ? $data['failure_msg'] : null;
        $this->container['live_mode'] = isset($data['live_mode']) ? $data['live_mode'] : false;
        $this->container['merchant_trade_id'] = isset($data['merchant_trade_id']) ? $data['merchant_trade_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : 'Charge';
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : false;
        $this->container['paid_at'] = isset($data['paid_at']) ? $data['paid_at'] : null;
        $this->container['paid_ts'] = isset($data['paid_ts']) ? $data['paid_ts'] : null;
        $this->container['refunded'] = isset($data['refunded']) ? $data['refunded'] : false;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['reversed'] = isset($data['reversed']) ? $data['reversed'] : false;
        $this->container['reversed_at'] = isset($data['reversed_at']) ? $data['reversed_at'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['time_expire'] = isset($data['time_expire']) ? $data['time_expire'] : null;
        $this->container['transaction_no'] = isset($data['transaction_no']) ? $data['transaction_no'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : 0;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['amount_fee'] === null) {
            $invalidProperties[] = "'amount_fee' can't be null";
        }
        if ($this->container['amount_refund'] === null) {
            $invalidProperties[] = "'amount_refund' can't be null";
        }
        if ($this->container['amount_royalty'] === null) {
            $invalidProperties[] = "'amount_royalty' can't be null";
        }
        if ($this->container['amount_settle'] === null) {
            $invalidProperties[] = "'amount_settle' can't be null";
        }
        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['charge_id'] === null) {
            $invalidProperties[] = "'charge_id' can't be null";
        }
        if ($this->container['client_ip'] === null) {
            $invalidProperties[] = "'client_ip' can't be null";
        }
        if ($this->container['closed'] === null) {
            $invalidProperties[] = "'closed' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['failure_code'] === null) {
            $invalidProperties[] = "'failure_code' can't be null";
        }
        if ($this->container['failure_msg'] === null) {
            $invalidProperties[] = "'failure_msg' can't be null";
        }
        if ($this->container['live_mode'] === null) {
            $invalidProperties[] = "'live_mode' can't be null";
        }
        if ($this->container['merchant_trade_id'] === null) {
            $invalidProperties[] = "'merchant_trade_id' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['paid'] === null) {
            $invalidProperties[] = "'paid' can't be null";
        }
        if ($this->container['refunded'] === null) {
            $invalidProperties[] = "'refunded' can't be null";
        }
        if ($this->container['reversed'] === null) {
            $invalidProperties[] = "'reversed' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['transaction_no'] === null) {
            $invalidProperties[] = "'transaction_no' can't be null";
        }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
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
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount 订单金额
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_fee
     *
     * @return float
     */
    public function getAmountFee()
    {
        return $this->container['amount_fee'];
    }

    /**
     * Sets amount_fee
     *
     * @param float $amount_fee 下单金额
     *
     * @return $this
     */
    public function setAmountFee($amount_fee)
    {
        $this->container['amount_fee'] = $amount_fee;

        return $this;
    }

    /**
     * Gets amount_refund
     *
     * @return float
     */
    public function getAmountRefund()
    {
        return $this->container['amount_refund'];
    }

    /**
     * Sets amount_refund
     *
     * @param float $amount_refund 订单退款总金额
     *
     * @return $this
     */
    public function setAmountRefund($amount_refund)
    {
        $this->container['amount_refund'] = $amount_refund;

        return $this;
    }

    /**
     * Gets amount_royalty
     *
     * @return float
     */
    public function getAmountRoyalty()
    {
        return $this->container['amount_royalty'];
    }

    /**
     * Sets amount_royalty
     *
     * @param float $amount_royalty 分账金额
     *
     * @return $this
     */
    public function setAmountRoyalty($amount_royalty)
    {
        $this->container['amount_royalty'] = $amount_royalty;

        return $this;
    }

    /**
     * Gets amount_settle
     *
     * @return double
     */
    public function getAmountSettle()
    {
        return $this->container['amount_settle'];
    }

    /**
     * Sets amount_settle
     *
     * @param double $amount_settle 结算金额，不一定有，视支付通道情况返回
     *
     * @return $this
     */
    public function setAmountSettle($amount_settle)
    {
        $this->container['amount_settle'] = $amount_settle;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id 应用ID
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body 订单描述信息
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \Justapnet\Justap\Model\Tradev1Channel
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \Justapnet\Justap\Model\Tradev1Channel $channel 支付渠道
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets charge_id
     *
     * @return string
     */
    public function getChargeId()
    {
        return $this->container['charge_id'];
    }

    /**
     * Sets charge_id
     *
     * @param string $charge_id Charge 对象 id
     *
     * @return $this
     */
    public function setChargeId($charge_id)
    {
        $this->container['charge_id'] = $charge_id;

        return $this;
    }

    /**
     * Gets client_ip
     *
     * @return string
     */
    public function getClientIp()
    {
        return $this->container['client_ip'];
    }

    /**
     * Sets client_ip
     *
     * @param string $client_ip 顾客IP
     *
     * @return $this
     */
    public function setClientIp($client_ip)
    {
        $this->container['client_ip'] = $client_ip;

        return $this;
    }

    /**
     * Gets closed
     *
     * @return bool
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool $closed 是否关闭
     *
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets closed_at
     *
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param \DateTime $closed_at 关闭时间
     *
     * @return $this
     */
    public function setClosedAt($closed_at)
    {
        $this->container['closed_at'] = $closed_at;

        return $this;
    }

    /**
     * Gets closed_ts
     *
     * @return string
     */
    public function getClosedTs()
    {
        return $this->container['closed_ts'];
    }

    /**
     * Sets closed_ts
     *
     * @param string $closed_ts 关闭时间戳
     *
     * @return $this
     */
    public function setClosedTs($closed_ts)
    {
        $this->container['closed_ts'] = $closed_ts;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Charge 对象创建时间
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets credential
     *
     * @return \Justapnet\Justap\Model\ProtobufAny
     */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
     * Sets credential
     *
     * @param \Justapnet\Justap\Model\ProtobufAny $credential 支付凭证
     *
     * @return $this
     */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency 货币单位，当前仅支持 CNY
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 描述信息
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets expired_ts
     *
     * @return string
     */
    public function getExpiredTs()
    {
        return $this->container['expired_ts'];
    }

    /**
     * Sets expired_ts
     *
     * @param string $expired_ts 订单过期时间戳
     *
     * @return $this
     */
    public function setExpiredTs($expired_ts)
    {
        $this->container['expired_ts'] = $expired_ts;

        return $this;
    }

    /**
     * Gets extra
     *
     * @return \Justapnet\Justap\Model\V1ChargeExtra
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     *
     * @param \Justapnet\Justap\Model\V1ChargeExtra $extra 支付渠道元数据
     *
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string $failure_code 收单机构错误码
     *
     * @return $this
     */
    public function setFailureCode($failure_code)
    {
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets failure_msg
     *
     * @return string
     */
    public function getFailureMsg()
    {
        return $this->container['failure_msg'];
    }

    /**
     * Sets failure_msg
     *
     * @param string $failure_msg 收单机构错误描述信息
     *
     * @return $this
     */
    public function setFailureMsg($failure_msg)
    {
        $this->container['failure_msg'] = $failure_msg;

        return $this;
    }

    /**
     * Gets live_mode
     *
     * @return bool
     */
    public function getLiveMode()
    {
        return $this->container['live_mode'];
    }

    /**
     * Sets live_mode
     *
     * @param bool $live_mode 表明是否是沙箱环境
     *
     * @return $this
     */
    public function setLiveMode($live_mode)
    {
        $this->container['live_mode'] = $live_mode;

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
     * @param string $merchant_trade_id 商户系统订单号，APP下需唯一
     *
     * @return $this
     */
    public function setMerchantTradeId($merchant_trade_id)
    {
        $this->container['merchant_trade_id'] = $merchant_trade_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata 订单元数据，原样返回
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object 对象类型
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool $paid 表明是否已支付
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param \DateTime $paid_at 支付时间
     *
     * @return $this
     */
    public function setPaidAt($paid_at)
    {
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets paid_ts
     *
     * @return string
     */
    public function getPaidTs()
    {
        return $this->container['paid_ts'];
    }

    /**
     * Sets paid_ts
     *
     * @param string $paid_ts 支付时间戳
     *
     * @return $this
     */
    public function setPaidTs($paid_ts)
    {
        $this->container['paid_ts'] = $paid_ts;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return bool
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param bool $refunded 表明是否包含退款，含退款失败的
     *
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Justapnet\Justap\Model\V1Refund[]
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Justapnet\Justap\Model\V1Refund[] $refunds Refund 对象列表
     *
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets reversed
     *
     * @return bool
     */
    public function getReversed()
    {
        return $this->container['reversed'];
    }

    /**
     * Sets reversed
     *
     * @param bool $reversed 表明是否已经撤销
     *
     * @return $this
     */
    public function setReversed($reversed)
    {
        $this->container['reversed'] = $reversed;

        return $this;
    }

    /**
     * Gets reversed_at
     *
     * @return \DateTime
     */
    public function getReversedAt()
    {
        return $this->container['reversed_at'];
    }

    /**
     * Sets reversed_at
     *
     * @param \DateTime $reversed_at 冲正时间
     *
     * @return $this
     */
    public function setReversedAt($reversed_at)
    {
        $this->container['reversed_at'] = $reversed_at;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject 订单描述主题
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets time_expire
     *
     * @return \DateTime
     */
    public function getTimeExpire()
    {
        return $this->container['time_expire'];
    }

    /**
     * Sets time_expire
     *
     * @param \DateTime $time_expire 订单过期时间
     *
     * @return $this
     */
    public function setTimeExpire($time_expire)
    {
        $this->container['time_expire'] = $time_expire;

        return $this;
    }

    /**
     * Gets transaction_no
     *
     * @return string
     */
    public function getTransactionNo()
    {
        return $this->container['transaction_no'];
    }

    /**
     * Sets transaction_no
     *
     * @param string $transaction_no Charge 的支付单号
     *
     * @return $this
     */
    public function setTransactionNo($transaction_no)
    {
        $this->container['transaction_no'] = $transaction_no;

        return $this;
    }

    /**
     * Gets ttl
     *
     * @return int
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     *
     * @param int $ttl 订单生存时间，单位秒
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

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


