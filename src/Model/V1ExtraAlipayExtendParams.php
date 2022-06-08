<?php
/**
 * V1ExtraAlipayExtendParams
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
 * V1ExtraAlipayExtendParams Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1ExtraAlipayExtendParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1ExtraAlipayExtendParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_type' => 'string',
        'hb_fq_num' => 'string',
        'hb_fq_seller_percent' => 'float',
        'industry_reflux_info' => 'string',
        'specified_seller_name' => 'string',
        'sys_service_provider_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_type' => 'string',
        'hb_fq_num' => 'string',
        'hb_fq_seller_percent' => 'int32',
        'industry_reflux_info' => 'string',
        'specified_seller_name' => 'string',
        'sys_service_provider_id' => 'string'
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
        'card_type' => 'card_type',
        'hb_fq_num' => 'hb_fq_num',
        'hb_fq_seller_percent' => 'hb_fq_seller_percent',
        'industry_reflux_info' => 'industry_reflux_info',
        'specified_seller_name' => 'specified_seller_name',
        'sys_service_provider_id' => 'sys_service_provider_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_type' => 'setCardType',
        'hb_fq_num' => 'setHbFqNum',
        'hb_fq_seller_percent' => 'setHbFqSellerPercent',
        'industry_reflux_info' => 'setIndustryRefluxInfo',
        'specified_seller_name' => 'setSpecifiedSellerName',
        'sys_service_provider_id' => 'setSysServiceProviderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_type' => 'getCardType',
        'hb_fq_num' => 'getHbFqNum',
        'hb_fq_seller_percent' => 'getHbFqSellerPercent',
        'industry_reflux_info' => 'getIndustryRefluxInfo',
        'specified_seller_name' => 'getSpecifiedSellerName',
        'sys_service_provider_id' => 'getSysServiceProviderId'
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
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['hb_fq_num'] = isset($data['hb_fq_num']) ? $data['hb_fq_num'] : null;
        $this->container['hb_fq_seller_percent'] = isset($data['hb_fq_seller_percent']) ? $data['hb_fq_seller_percent'] : null;
        $this->container['industry_reflux_info'] = isset($data['industry_reflux_info']) ? $data['industry_reflux_info'] : null;
        $this->container['specified_seller_name'] = isset($data['specified_seller_name']) ? $data['specified_seller_name'] : null;
        $this->container['sys_service_provider_id'] = isset($data['sys_service_provider_id']) ? $data['sys_service_provider_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['card_type'] === null) {
            $invalidProperties[] = "'card_type' can't be null";
        }
        if ($this->container['hb_fq_num'] === null) {
            $invalidProperties[] = "'hb_fq_num' can't be null";
        }
        if ($this->container['hb_fq_seller_percent'] === null) {
            $invalidProperties[] = "'hb_fq_seller_percent' can't be null";
        }
        if ($this->container['industry_reflux_info'] === null) {
            $invalidProperties[] = "'industry_reflux_info' can't be null";
        }
        if ($this->container['specified_seller_name'] === null) {
            $invalidProperties[] = "'specified_seller_name' can't be null";
        }
        if ($this->container['sys_service_provider_id'] === null) {
            $invalidProperties[] = "'sys_service_provider_id' can't be null";
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
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type 卡类型
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets hb_fq_num
     *
     * @return string
     */
    public function getHbFqNum()
    {
        return $this->container['hb_fq_num'];
    }

    /**
     * Sets hb_fq_num
     *
     * @param string $hb_fq_num 使用花呗分期要进行的分期数
     *
     * @return $this
     */
    public function setHbFqNum($hb_fq_num)
    {
        $this->container['hb_fq_num'] = $hb_fq_num;

        return $this;
    }

    /**
     * Gets hb_fq_seller_percent
     *
     * @return float
     */
    public function getHbFqSellerPercent()
    {
        return $this->container['hb_fq_seller_percent'];
    }

    /**
     * Sets hb_fq_seller_percent
     *
     * @param float $hb_fq_seller_percent 使用花呗分期需要卖家承担的手续费比例的百分值，传入100代表100%
     *
     * @return $this
     */
    public function setHbFqSellerPercent($hb_fq_seller_percent)
    {
        $this->container['hb_fq_seller_percent'] = $hb_fq_seller_percent;

        return $this;
    }

    /**
     * Gets industry_reflux_info
     *
     * @return string
     */
    public function getIndustryRefluxInfo()
    {
        return $this->container['industry_reflux_info'];
    }

    /**
     * Sets industry_reflux_info
     *
     * @param string $industry_reflux_info 行业数据回流信息
     *
     * @return $this
     */
    public function setIndustryRefluxInfo($industry_reflux_info)
    {
        $this->container['industry_reflux_info'] = $industry_reflux_info;

        return $this;
    }

    /**
     * Gets specified_seller_name
     *
     * @return string
     */
    public function getSpecifiedSellerName()
    {
        return $this->container['specified_seller_name'];
    }

    /**
     * Sets specified_seller_name
     *
     * @param string $specified_seller_name 指定收款支付宝用户名
     *
     * @return $this
     */
    public function setSpecifiedSellerName($specified_seller_name)
    {
        $this->container['specified_seller_name'] = $specified_seller_name;

        return $this;
    }

    /**
     * Gets sys_service_provider_id
     *
     * @return string
     */
    public function getSysServiceProviderId()
    {
        return $this->container['sys_service_provider_id'];
    }

    /**
     * Sets sys_service_provider_id
     *
     * @param string $sys_service_provider_id 系统商编号，该参数作为系统商返佣数据提取的依据，请填写系统商签约协议的PID
     *
     * @return $this
     */
    public function setSysServiceProviderId($sys_service_provider_id)
    {
        $this->container['sys_service_provider_id'] = $sys_service_provider_id;

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


