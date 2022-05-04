<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that describes the details of the subscription payload.
 */
class SubscriptionPayloadDetail extends AbstractModel
{
    /**
     * The supported format. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:FormatTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $format = null;

    /**
     * The supported schema version.
     *
     * @var string
     */
    public $schemaVersion = null;

    /**
     * The supported protocol. For exmaple: <code>HTTPS</code> For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ProtocolEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $deliveryProtocol = null;
}
