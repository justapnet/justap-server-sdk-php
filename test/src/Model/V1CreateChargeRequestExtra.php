<?php
/**
 * V1CreateChargeRequestExtra
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
 * V1CreateChargeRequestExtra Class Doc Comment
 *
 * @category Class
 * @package  Justapnet\Justap
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1CreateChargeRequestExtra implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1CreateChargeRequestExtra';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alipay_app' => '\Justapnet\Justap\Model\V1ExtraAlipayApp',
        'alipay_face' => '\Justapnet\Justap\Model\V1ExtraAlipayFace',
        'alipay_jsapi' => '\Justapnet\Justap\Model\V1ExtraAlipayJSAPI',
        'alipay_lite' => '\Justapnet\Justap\Model\V1ExtraAlipayLite',
        'alipay_page' => '\Justapnet\Justap\Model\V1ExtraAlipayPage',
        'alipay_qr' => '\Justapnet\Justap\Model\V1ExtraAlipayQr',
        'alipay_scan' => '\Justapnet\Justap\Model\V1ExtraAlipayScan',
        'alipay_wap' => '\Justapnet\Justap\Model\V1ExtraAlipayWap',
        'wechatpay_app' => '\Justapnet\Justap\Model\V1ExtraWechatpayApp',
        'wechatpay_h5' => '\Justapnet\Justap\Model\V1ExtraWechatpayH5',
        'wechatpay_jsapi' => '\Justapnet\Justap\Model\V1ExtraWechatpayJsapi',
        'wechatpay_lite' => '\Justapnet\Justap\Model\V1ExtraWechatpayLite',
        'wechatpay_native' => '\Justapnet\Justap\Model\V1ExtraWechatpayNative',
        'wechatpay_scan' => '\Justapnet\Justap\Model\V1ExtraWechatpayScan'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alipay_app' => null,
        'alipay_face' => null,
        'alipay_jsapi' => null,
        'alipay_lite' => null,
        'alipay_page' => null,
        'alipay_qr' => null,
        'alipay_scan' => null,
        'alipay_wap' => null,
        'wechatpay_app' => null,
        'wechatpay_h5' => null,
        'wechatpay_jsapi' => null,
        'wechatpay_lite' => null,
        'wechatpay_native' => null,
        'wechatpay_scan' => null
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
        'alipay_app' => 'alipay_app',
        'alipay_face' => 'alipay_face',
        'alipay_jsapi' => 'alipay_jsapi',
        'alipay_lite' => 'alipay_lite',
        'alipay_page' => 'alipay_page',
        'alipay_qr' => 'alipay_qr',
        'alipay_scan' => 'alipay_scan',
        'alipay_wap' => 'alipay_wap',
        'wechatpay_app' => 'wechatpay_app',
        'wechatpay_h5' => 'wechatpay_h5',
        'wechatpay_jsapi' => 'wechatpay_jsapi',
        'wechatpay_lite' => 'wechatpay_lite',
        'wechatpay_native' => 'wechatpay_native',
        'wechatpay_scan' => 'wechatpay_scan'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipay_app' => 'setAlipayApp',
        'alipay_face' => 'setAlipayFace',
        'alipay_jsapi' => 'setAlipayJsapi',
        'alipay_lite' => 'setAlipayLite',
        'alipay_page' => 'setAlipayPage',
        'alipay_qr' => 'setAlipayQr',
        'alipay_scan' => 'setAlipayScan',
        'alipay_wap' => 'setAlipayWap',
        'wechatpay_app' => 'setWechatpayApp',
        'wechatpay_h5' => 'setWechatpayH5',
        'wechatpay_jsapi' => 'setWechatpayJsapi',
        'wechatpay_lite' => 'setWechatpayLite',
        'wechatpay_native' => 'setWechatpayNative',
        'wechatpay_scan' => 'setWechatpayScan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipay_app' => 'getAlipayApp',
        'alipay_face' => 'getAlipayFace',
        'alipay_jsapi' => 'getAlipayJsapi',
        'alipay_lite' => 'getAlipayLite',
        'alipay_page' => 'getAlipayPage',
        'alipay_qr' => 'getAlipayQr',
        'alipay_scan' => 'getAlipayScan',
        'alipay_wap' => 'getAlipayWap',
        'wechatpay_app' => 'getWechatpayApp',
        'wechatpay_h5' => 'getWechatpayH5',
        'wechatpay_jsapi' => 'getWechatpayJsapi',
        'wechatpay_lite' => 'getWechatpayLite',
        'wechatpay_native' => 'getWechatpayNative',
        'wechatpay_scan' => 'getWechatpayScan'
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
        $this->container['alipay_app'] = isset($data['alipay_app']) ? $data['alipay_app'] : null;
        $this->container['alipay_face'] = isset($data['alipay_face']) ? $data['alipay_face'] : null;
        $this->container['alipay_jsapi'] = isset($data['alipay_jsapi']) ? $data['alipay_jsapi'] : null;
        $this->container['alipay_lite'] = isset($data['alipay_lite']) ? $data['alipay_lite'] : null;
        $this->container['alipay_page'] = isset($data['alipay_page']) ? $data['alipay_page'] : null;
        $this->container['alipay_qr'] = isset($data['alipay_qr']) ? $data['alipay_qr'] : null;
        $this->container['alipay_scan'] = isset($data['alipay_scan']) ? $data['alipay_scan'] : null;
        $this->container['alipay_wap'] = isset($data['alipay_wap']) ? $data['alipay_wap'] : null;
        $this->container['wechatpay_app'] = isset($data['wechatpay_app']) ? $data['wechatpay_app'] : null;
        $this->container['wechatpay_h5'] = isset($data['wechatpay_h5']) ? $data['wechatpay_h5'] : null;
        $this->container['wechatpay_jsapi'] = isset($data['wechatpay_jsapi']) ? $data['wechatpay_jsapi'] : null;
        $this->container['wechatpay_lite'] = isset($data['wechatpay_lite']) ? $data['wechatpay_lite'] : null;
        $this->container['wechatpay_native'] = isset($data['wechatpay_native']) ? $data['wechatpay_native'] : null;
        $this->container['wechatpay_scan'] = isset($data['wechatpay_scan']) ? $data['wechatpay_scan'] : null;
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
     * Gets alipay_app
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayApp
     */
    public function getAlipayApp()
    {
        return $this->container['alipay_app'];
    }

    /**
     * Sets alipay_app
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayApp $alipay_app 支付宝 APP 支付元数据
     *
     * @return $this
     */
    public function setAlipayApp($alipay_app)
    {
        $this->container['alipay_app'] = $alipay_app;

        return $this;
    }

    /**
     * Gets alipay_face
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayFace
     */
    public function getAlipayFace()
    {
        return $this->container['alipay_face'];
    }

    /**
     * Sets alipay_face
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayFace $alipay_face 支付宝刷脸支付元数据
     *
     * @return $this
     */
    public function setAlipayFace($alipay_face)
    {
        $this->container['alipay_face'] = $alipay_face;

        return $this;
    }

    /**
     * Gets alipay_jsapi
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayJSAPI
     */
    public function getAlipayJsapi()
    {
        return $this->container['alipay_jsapi'];
    }

    /**
     * Sets alipay_jsapi
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayJSAPI $alipay_jsapi 支付宝 JSAPI 支付元数据
     *
     * @return $this
     */
    public function setAlipayJsapi($alipay_jsapi)
    {
        $this->container['alipay_jsapi'] = $alipay_jsapi;

        return $this;
    }

    /**
     * Gets alipay_lite
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayLite
     */
    public function getAlipayLite()
    {
        return $this->container['alipay_lite'];
    }

    /**
     * Sets alipay_lite
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayLite $alipay_lite 支付宝小程序支付元数据
     *
     * @return $this
     */
    public function setAlipayLite($alipay_lite)
    {
        $this->container['alipay_lite'] = $alipay_lite;

        return $this;
    }

    /**
     * Gets alipay_page
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayPage
     */
    public function getAlipayPage()
    {
        return $this->container['alipay_page'];
    }

    /**
     * Sets alipay_page
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayPage $alipay_page 支付宝电脑网站支付元数据
     *
     * @return $this
     */
    public function setAlipayPage($alipay_page)
    {
        $this->container['alipay_page'] = $alipay_page;

        return $this;
    }

    /**
     * Gets alipay_qr
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayQr
     */
    public function getAlipayQr()
    {
        return $this->container['alipay_qr'];
    }

    /**
     * Sets alipay_qr
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayQr $alipay_qr 支付宝二维码支付元数据
     *
     * @return $this
     */
    public function setAlipayQr($alipay_qr)
    {
        $this->container['alipay_qr'] = $alipay_qr;

        return $this;
    }

    /**
     * Gets alipay_scan
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayScan
     */
    public function getAlipayScan()
    {
        return $this->container['alipay_scan'];
    }

    /**
     * Sets alipay_scan
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayScan $alipay_scan 支付宝扫码（被扫）支付元数据
     *
     * @return $this
     */
    public function setAlipayScan($alipay_scan)
    {
        $this->container['alipay_scan'] = $alipay_scan;

        return $this;
    }

    /**
     * Gets alipay_wap
     *
     * @return \Justapnet\Justap\Model\V1ExtraAlipayWap
     */
    public function getAlipayWap()
    {
        return $this->container['alipay_wap'];
    }

    /**
     * Sets alipay_wap
     *
     * @param \Justapnet\Justap\Model\V1ExtraAlipayWap $alipay_wap 支付宝手机网站支付元数据
     *
     * @return $this
     */
    public function setAlipayWap($alipay_wap)
    {
        $this->container['alipay_wap'] = $alipay_wap;

        return $this;
    }

    /**
     * Gets wechatpay_app
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayApp
     */
    public function getWechatpayApp()
    {
        return $this->container['wechatpay_app'];
    }

    /**
     * Sets wechatpay_app
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayApp $wechatpay_app 微信支付 APP 支付元数据
     *
     * @return $this
     */
    public function setWechatpayApp($wechatpay_app)
    {
        $this->container['wechatpay_app'] = $wechatpay_app;

        return $this;
    }

    /**
     * Gets wechatpay_h5
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayH5
     */
    public function getWechatpayH5()
    {
        return $this->container['wechatpay_h5'];
    }

    /**
     * Sets wechatpay_h5
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayH5 $wechatpay_h5 微信支付 H5 支付元数据
     *
     * @return $this
     */
    public function setWechatpayH5($wechatpay_h5)
    {
        $this->container['wechatpay_h5'] = $wechatpay_h5;

        return $this;
    }

    /**
     * Gets wechatpay_jsapi
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayJsapi
     */
    public function getWechatpayJsapi()
    {
        return $this->container['wechatpay_jsapi'];
    }

    /**
     * Sets wechatpay_jsapi
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayJsapi $wechatpay_jsapi 微信支付 JSAPI 支付元数据
     *
     * @return $this
     */
    public function setWechatpayJsapi($wechatpay_jsapi)
    {
        $this->container['wechatpay_jsapi'] = $wechatpay_jsapi;

        return $this;
    }

    /**
     * Gets wechatpay_lite
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayLite
     */
    public function getWechatpayLite()
    {
        return $this->container['wechatpay_lite'];
    }

    /**
     * Sets wechatpay_lite
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayLite $wechatpay_lite 微信支付小程序支付元数据
     *
     * @return $this
     */
    public function setWechatpayLite($wechatpay_lite)
    {
        $this->container['wechatpay_lite'] = $wechatpay_lite;

        return $this;
    }

    /**
     * Gets wechatpay_native
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayNative
     */
    public function getWechatpayNative()
    {
        return $this->container['wechatpay_native'];
    }

    /**
     * Sets wechatpay_native
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayNative $wechatpay_native 微信支付二维码支付元数据
     *
     * @return $this
     */
    public function setWechatpayNative($wechatpay_native)
    {
        $this->container['wechatpay_native'] = $wechatpay_native;

        return $this;
    }

    /**
     * Gets wechatpay_scan
     *
     * @return \Justapnet\Justap\Model\V1ExtraWechatpayScan
     */
    public function getWechatpayScan()
    {
        return $this->container['wechatpay_scan'];
    }

    /**
     * Sets wechatpay_scan
     *
     * @param \Justapnet\Justap\Model\V1ExtraWechatpayScan $wechatpay_scan 微信支付扫码（被扫）支付元数据
     *
     * @return $this
     */
    public function setWechatpayScan($wechatpay_scan)
    {
        $this->container['wechatpay_scan'] = $wechatpay_scan;

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


