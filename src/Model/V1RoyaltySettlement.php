<?php
/**
 * V1RoyaltySettlement
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
 * V1RoyaltySettlement Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1RoyaltySettlement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1RoyaltySettlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'double',
        'amount_canceled' => 'double',
        'amount_failed' => 'double',
        'amount_succeeded' => 'double',
        'app_id' => 'string',
        'count' => 'string',
        'count_canceled' => 'string',
        'count_failed' => 'string',
        'count_succeeded' => 'string',
        'created' => 'string',
        'fee' => 'double',
        'id' => 'string',
        'livemode' => 'bool',
        'metadata' => 'map[string,string]',
        'method' => '\Justapnet\Justap\Model\V1RoyaltyMethod',
        'object' => 'string',
        'operation_url' => 'string',
        'source' => '\Justapnet\Justap\Model\V1RoyaltySettlementSource',
        'status' => 'string',
        'time_finished' => 'string',
        'transactions' => '\Justapnet\Justap\Model\V1RoyaltySettlementTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'double',
        'amount_canceled' => 'double',
        'amount_failed' => 'double',
        'amount_succeeded' => 'double',
        'app_id' => null,
        'count' => 'int64',
        'count_canceled' => 'int64',
        'count_failed' => 'int64',
        'count_succeeded' => 'int64',
        'created' => 'int64',
        'fee' => 'double',
        'id' => null,
        'livemode' => null,
        'metadata' => null,
        'method' => null,
        'object' => 'string',
        'operation_url' => null,
        'source' => null,
        'status' => null,
        'time_finished' => 'int64',
        'transactions' => null
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
        'amount_canceled' => 'amount_canceled',
        'amount_failed' => 'amount_failed',
        'amount_succeeded' => 'amount_succeeded',
        'app_id' => 'app_id',
        'count' => 'count',
        'count_canceled' => 'count_canceled',
        'count_failed' => 'count_failed',
        'count_succeeded' => 'count_succeeded',
        'created' => 'created',
        'fee' => 'fee',
        'id' => 'id',
        'livemode' => 'livemode',
        'metadata' => 'metadata',
        'method' => 'method',
        'object' => 'object',
        'operation_url' => 'operation_url',
        'source' => 'source',
        'status' => 'status',
        'time_finished' => 'time_finished',
        'transactions' => 'transactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amount_canceled' => 'setAmountCanceled',
        'amount_failed' => 'setAmountFailed',
        'amount_succeeded' => 'setAmountSucceeded',
        'app_id' => 'setAppId',
        'count' => 'setCount',
        'count_canceled' => 'setCountCanceled',
        'count_failed' => 'setCountFailed',
        'count_succeeded' => 'setCountSucceeded',
        'created' => 'setCreated',
        'fee' => 'setFee',
        'id' => 'setId',
        'livemode' => 'setLivemode',
        'metadata' => 'setMetadata',
        'method' => 'setMethod',
        'object' => 'setObject',
        'operation_url' => 'setOperationUrl',
        'source' => 'setSource',
        'status' => 'setStatus',
        'time_finished' => 'setTimeFinished',
        'transactions' => 'setTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amount_canceled' => 'getAmountCanceled',
        'amount_failed' => 'getAmountFailed',
        'amount_succeeded' => 'getAmountSucceeded',
        'app_id' => 'getAppId',
        'count' => 'getCount',
        'count_canceled' => 'getCountCanceled',
        'count_failed' => 'getCountFailed',
        'count_succeeded' => 'getCountSucceeded',
        'created' => 'getCreated',
        'fee' => 'getFee',
        'id' => 'getId',
        'livemode' => 'getLivemode',
        'metadata' => 'getMetadata',
        'method' => 'getMethod',
        'object' => 'getObject',
        'operation_url' => 'getOperationUrl',
        'source' => 'getSource',
        'status' => 'getStatus',
        'time_finished' => 'getTimeFinished',
        'transactions' => 'getTransactions'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_canceled'] = isset($data['amount_canceled']) ? $data['amount_canceled'] : null;
        $this->container['amount_failed'] = isset($data['amount_failed']) ? $data['amount_failed'] : null;
        $this->container['amount_succeeded'] = isset($data['amount_succeeded']) ? $data['amount_succeeded'] : null;
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['count_canceled'] = isset($data['count_canceled']) ? $data['count_canceled'] : null;
        $this->container['count_failed'] = isset($data['count_failed']) ? $data['count_failed'] : null;
        $this->container['count_succeeded'] = isset($data['count_succeeded']) ? $data['count_succeeded'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['livemode'] = isset($data['livemode']) ? $data['livemode'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : 'RoyaltySettlement';
        $this->container['operation_url'] = isset($data['operation_url']) ? $data['operation_url'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['time_finished'] = isset($data['time_finished']) ? $data['time_finished'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
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
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_canceled
     *
     * @return double
     */
    public function getAmountCanceled()
    {
        return $this->container['amount_canceled'];
    }

    /**
     * Sets amount_canceled
     *
     * @param double $amount_canceled amount_canceled
     *
     * @return $this
     */
    public function setAmountCanceled($amount_canceled)
    {
        $this->container['amount_canceled'] = $amount_canceled;

        return $this;
    }

    /**
     * Gets amount_failed
     *
     * @return double
     */
    public function getAmountFailed()
    {
        return $this->container['amount_failed'];
    }

    /**
     * Sets amount_failed
     *
     * @param double $amount_failed amount_failed
     *
     * @return $this
     */
    public function setAmountFailed($amount_failed)
    {
        $this->container['amount_failed'] = $amount_failed;

        return $this;
    }

    /**
     * Gets amount_succeeded
     *
     * @return double
     */
    public function getAmountSucceeded()
    {
        return $this->container['amount_succeeded'];
    }

    /**
     * Sets amount_succeeded
     *
     * @param double $amount_succeeded amount_succeeded
     *
     * @return $this
     */
    public function setAmountSucceeded($amount_succeeded)
    {
        $this->container['amount_succeeded'] = $amount_succeeded;

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
     * @param string $app_id app_id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param string $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets count_canceled
     *
     * @return string
     */
    public function getCountCanceled()
    {
        return $this->container['count_canceled'];
    }

    /**
     * Sets count_canceled
     *
     * @param string $count_canceled count_canceled
     *
     * @return $this
     */
    public function setCountCanceled($count_canceled)
    {
        $this->container['count_canceled'] = $count_canceled;

        return $this;
    }

    /**
     * Gets count_failed
     *
     * @return string
     */
    public function getCountFailed()
    {
        return $this->container['count_failed'];
    }

    /**
     * Sets count_failed
     *
     * @param string $count_failed count_failed
     *
     * @return $this
     */
    public function setCountFailed($count_failed)
    {
        $this->container['count_failed'] = $count_failed;

        return $this;
    }

    /**
     * Gets count_succeeded
     *
     * @return string
     */
    public function getCountSucceeded()
    {
        return $this->container['count_succeeded'];
    }

    /**
     * Sets count_succeeded
     *
     * @param string $count_succeeded count_succeeded
     *
     * @return $this
     */
    public function setCountSucceeded($count_succeeded)
    {
        $this->container['count_succeeded'] = $count_succeeded;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return double
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param double $fee fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets livemode
     *
     * @return bool
     */
    public function getLivemode()
    {
        return $this->container['livemode'];
    }

    /**
     * Sets livemode
     *
     * @param bool $livemode livemode
     *
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->container['livemode'] = $livemode;

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
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \Justapnet\Justap\Model\V1RoyaltyMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \Justapnet\Justap\Model\V1RoyaltyMethod $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

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
     * Gets operation_url
     *
     * @return string
     */
    public function getOperationUrl()
    {
        return $this->container['operation_url'];
    }

    /**
     * Sets operation_url
     *
     * @param string $operation_url operation_url
     *
     * @return $this
     */
    public function setOperationUrl($operation_url)
    {
        $this->container['operation_url'] = $operation_url;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Justapnet\Justap\Model\V1RoyaltySettlementSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Justapnet\Justap\Model\V1RoyaltySettlementSource $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets time_finished
     *
     * @return string
     */
    public function getTimeFinished()
    {
        return $this->container['time_finished'];
    }

    /**
     * Sets time_finished
     *
     * @param string $time_finished time_finished
     *
     * @return $this
     */
    public function setTimeFinished($time_finished)
    {
        $this->container['time_finished'] = $time_finished;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Justapnet\Justap\Model\V1RoyaltySettlementTransaction[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Justapnet\Justap\Model\V1RoyaltySettlementTransaction[] $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

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

