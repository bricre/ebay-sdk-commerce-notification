<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that describes the details about a topic's payload.
 */
class PayloadDetail extends AbstractModel
{
    /**
     * The supported schema version.
     *
     * @var string
     */
    public $schemaVersion = null;

    /**
     * The supported format. Presently, <code>JSON</code> is the only supported format.
     *
     * @var string[]|
     */
    public $format = null;

    /**
     * The supported delivery protocols. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $deliveryProtocol = null;

    /**
     * A deprecation indicator.
     *
     * @var bool
     */
    public $deprecated = null;
}
