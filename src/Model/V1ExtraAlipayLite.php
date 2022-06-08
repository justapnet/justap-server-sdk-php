<?php
/**
 * V1ExtraAlipayLite
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
* Swagger Codegen version: 3.0.34
*/

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Justapnet\Justap\Model;

use \ArrayAccess;
use Justapnet\Justap\ObjectSerializer;

/**
 * V1ExtraAlipayLite Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1ExtraAlipayLite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1ExtraAlipayLite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'body' => 'string',
        'business_params' => '\Justapnet\Justap\Model\V1ExtraAlipayBusinessParams',
        'buyer_id' => 'string',
        'discountable_amount' => 'double',
        'extend_params' => '\Justapnet\Justap\Model\V1ExtraAlipayExtendParams',
        'logistics_detail' => '\Justapnet\Justap\Model\V1ExtraAlipayLogisticsDetail',
        'operator_id' => 'string',
        'product_code' => 'string',
        'receiver_address_info' => '\Justapnet\Justap\Model\V1ExtraAlipayReceiverAddressInfo',
        'seller_id' => 'string',
        'settle_info' => '\Justapnet\Justap\Model\V1ExtraAlipaySettleInfo',
        'store_id' => 'string',
        'terminal_id' => 'string',
        'time_expire' => 'string',
        'timeout_express' => 'string',
        'trade_no' => 'string',
        'undiscountable_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'body' => 'string',
        'business_params' => null,
        'buyer_id' => 'string',
        'discountable_amount' => 'double',
        'extend_params' => null,
        'logistics_detail' => null,
        'operator_id' => 'string',
        'product_code' => 'string',
        'receiver_address_info' => null,
        'seller_id' => 'string',
        'settle_info' => null,
        'store_id' => 'string',
        'terminal_id' => 'string',
        'time_expire' => 'string',
        'timeout_express' => 'string',
        'trade_no' => 'string',
        'undiscountable_amount' => 'double'
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
        'body' => 'body',
        'business_params' => 'business_params',
        'buyer_id' => 'buyer_id',
        'discountable_amount' => 'discountable_amount',
        'extend_params' => 'extend_params',
        'logistics_detail' => 'logistics_detail',
        'operator_id' => 'operator_id',
        'product_code' => 'product_code',
        'receiver_address_info' => 'receiver_address_info',
        'seller_id' => 'seller_id',
        'settle_info' => 'settle_info',
        'store_id' => 'store_id',
        'terminal_id' => 'terminal_id',
        'time_expire' => 'time_expire',
        'timeout_express' => 'timeout_express',
        'trade_no' => 'trade_no',
        'undiscountable_amount' => 'undiscountable_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'business_params' => 'setBusinessParams',
        'buyer_id' => 'setBuyerId',
        'discountable_amount' => 'setDiscountableAmount',
        'extend_params' => 'setExtendParams',
        'logistics_detail' => 'setLogisticsDetail',
        'operator_id' => 'setOperatorId',
        'product_code' => 'setProductCode',
        'receiver_address_info' => 'setReceiverAddressInfo',
        'seller_id' => 'setSellerId',
        'settle_info' => 'setSettleInfo',
        'store_id' => 'setStoreId',
        'terminal_id' => 'setTerminalId',
        'time_expire' => 'setTimeExpire',
        'timeout_express' => 'setTimeoutExpress',
        'trade_no' => 'setTradeNo',
        'undiscountable_amount' => 'setUndiscountableAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'business_params' => 'getBusinessParams',
        'buyer_id' => 'getBuyerId',
        'discountable_amount' => 'getDiscountableAmount',
        'extend_params' => 'getExtendParams',
        'logistics_detail' => 'getLogisticsDetail',
        'operator_id' => 'getOperatorId',
        'product_code' => 'getProductCode',
        'receiver_address_info' => 'getReceiverAddressInfo',
        'seller_id' => 'getSellerId',
        'settle_info' => 'getSettleInfo',
        'store_id' => 'getStoreId',
        'terminal_id' => 'getTerminalId',
        'time_expire' => 'getTimeExpire',
        'timeout_express' => 'getTimeoutExpress',
        'trade_no' => 'getTradeNo',
        'undiscountable_amount' => 'getUndiscountableAmount'
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['business_params'] = isset($data['business_params']) ? $data['business_params'] : null;
        $this->container['buyer_id'] = isset($data['buyer_id']) ? $data['buyer_id'] : null;
        $this->container['discountable_amount'] = isset($data['discountable_amount']) ? $data['discountable_amount'] : null;
        $this->container['extend_params'] = isset($data['extend_params']) ? $data['extend_params'] : null;
        $this->container['logistics_detail'] = isset($data['logistics_detail']) ? $data['logistics_detail'] : null;
        $this->container['operator_id'] = isset($data['operator_id']) ? $data['operator_id'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['receiver_address_info'] = isset($data['receiver_address_info']) ? $data['receiver_address_info'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['settle_info'] = isset($data['settle_info']) ? $data['settle_info'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['time_expire'] = isset($data['time_expire']) ? $data['time_expire'] : null;
        $this->container['timeout_express'] = isset($data['timeout_express']) ? $data['timeout_express'] : null;
        $this->container['trade_no'] = isset($data['trade_no']) ? $data['trade_no'] : null;
        $this->container['undiscountable_amount'] = isset($data['undiscountable_amount']) ? $data['undiscountable_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['buyer_id'] === null) {
            $invalidProperties[] = "'buyer_id' can't be null";
        }
        if ($this->container['operator_id'] === null) {
            $invalidProperties[] = "'operator_id' can't be null";
        }
        if ($this->container['product_code'] === null) {
            $invalidProperties[] = "'product_code' can't be null";
        }
        if ($this->container['seller_id'] === null) {
            $invalidProperties[] = "'seller_id' can't be null";
        }
        if ($this->container['store_id'] === null) {
            $invalidProperties[] = "'store_id' can't be null";
        }
        if ($this->container['terminal_id'] === null) {
            $invalidProperties[] = "'terminal_id' can't be null";
        }
        if ($this->container['time_expire'] === null) {
            $invalidProperties[] = "'time_expire' can't be null";
        }
        if ($this->container['timeout_express'] === null) {
            $invalidProperties[] = "'timeout_express' can't be null";
        }
        if ($this->container['trade_no'] === null) {
            $invalidProperties[] = "'trade_no' can't be null";
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
     * @param string $body 商品描述
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets business_params
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayBusinessParams
     */
    public function getBusinessParams()
    {
        return $this->container['business_params'];
    }

    /**
     * Sets business_params
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayBusinessParams $business_params business_params
     *
     * @return $this
     */
    public function setBusinessParams($business_params)
    {
        $this->container['business_params'] = $business_params;

        return $this;
    }

    /**
     * Gets buyer_id
     *
     * @return string
     */
    public function getBuyerId()
    {
        return $this->container['buyer_id'];
    }

    /**
     * Sets buyer_id
     *
     * @param string $buyer_id 买家的支付宝唯一用户号（2088开头的16位纯数字）
     *
     * @return $this
     */
    public function setBuyerId($buyer_id)
    {
        $this->container['buyer_id'] = $buyer_id;

        return $this;
    }

    /**
     * Gets discountable_amount
     *
     * @return double
     */
    public function getDiscountableAmount()
    {
        return $this->container['discountable_amount'];
    }

    /**
     * Sets discountable_amount
     *
     * @param double $discountable_amount 可打折金额. 参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000] 如果该值未传入，但传入了【订单总金额】，【不可打折金额】则该值默认为【订单总金额】-【不可打折金额】
     *
     * @return $this
     */
    public function setDiscountableAmount($discountable_amount)
    {
        $this->container['discountable_amount'] = $discountable_amount;

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
     * @param \Justapnet\Justap\Model\V1ExtraAlipayExtendParams $extend_params extend_params
     *
     * @return $this
     */
    public function setExtendParams($extend_params)
    {
        $this->container['extend_params'] = $extend_params;

        return $this;
    }

    /**
     * Gets logistics_detail
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayLogisticsDetail
     */
    public function getLogisticsDetail()
    {
        return $this->container['logistics_detail'];
    }

    /**
     * Sets logistics_detail
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayLogisticsDetail $logistics_detail logistics_detail
     *
     * @return $this
     */
    public function setLogisticsDetail($logistics_detail)
    {
        $this->container['logistics_detail'] = $logistics_detail;

        return $this;
    }

    /**
     * Gets operator_id
     *
     * @return string
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param string $operator_id 商户操作员编号
     *
     * @return $this
     */
    public function setOperatorId($operator_id)
    {
        $this->container['operator_id'] = $operator_id;

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
     * @param string $product_code 销售产品码，商家和支付宝签约的产品码，为固定值 FACE_TO_FACE_PAYMENT
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets receiver_address_info
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayReceiverAddressInfo
     */
    public function getReceiverAddressInfo()
    {
        return $this->container['receiver_address_info'];
    }

    /**
     * Sets receiver_address_info
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayReceiverAddressInfo $receiver_address_info receiver_address_info
     *
     * @return $this
     */
    public function setReceiverAddressInfo($receiver_address_info)
    {
        $this->container['receiver_address_info'] = $receiver_address_info;

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
     * @param string $seller_id 卖家支付宝用户号
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets settle_info
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipaySettleInfo
     */
    public function getSettleInfo()
    {
        return $this->container['settle_info'];
    }

    /**
     * Sets settle_info
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipaySettleInfo $settle_info settle_info
     *
     * @return $this
     */
    public function setSettleInfo($settle_info)
    {
        $this->container['settle_info'] = $settle_info;

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
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id 商户机具终端编号
     *
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

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
     * @param string $time_expire 绝对超时时间，格式为yyyy-MM-dd HH:mm:ss
     *
     * @return $this
     */
    public function setTimeExpire($time_expire)
    {
        $this->container['time_expire'] = $time_expire;

        return $this;
    }

    /**
     * Gets timeout_express
     *
     * @return string
     */
    public function getTimeoutExpress()
    {
        return $this->container['timeout_express'];
    }

    /**
     * Sets timeout_express
     *
     * @param string $timeout_express 订单有效时间，该时间段内订单可以进行支付，结束后订单将关闭，天数为0表示永久有效
     *
     * @return $this
     */
    public function setTimeoutExpress($timeout_express)
    {
        $this->container['timeout_express'] = $timeout_express;

        return $this;
    }

    /**
     * Gets trade_no
     *
     * @return string
     */
    public function getTradeNo()
    {
        return $this->container['trade_no'];
    }

    /**
     * Sets trade_no
     *
     * @param string $trade_no [ONLY IN RESPONSE] 支付宝交易号
     *
     * @return $this
     */
    public function setTradeNo($trade_no)
    {
        $this->container['trade_no'] = $trade_no;

        return $this;
    }

    /**
     * Gets undiscountable_amount
     *
     * @return double
     */
    public function getUndiscountableAmount()
    {
        return $this->container['undiscountable_amount'];
    }

    /**
     * Sets undiscountable_amount
     *
     * @param double $undiscountable_amount 不可打折金额. 不参与优惠计算的金额，单位为元，精确到小数点后两位，取值范围[0.01,100000000] 如果该值未传入，但传入了【订单总金额】,【可打折金额】，则该值默认为【订单总金额】-【可打折金额】
     *
     * @return $this
     */
    public function setUndiscountableAmount($undiscountable_amount)
    {
        $this->container['undiscountable_amount'] = $undiscountable_amount;

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


