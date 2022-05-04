<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that describes the details of the update subscription request.
 */
class UpdateSubscriptionRequest extends AbstractModel
{
    /**
     * The status of this subscription. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:SubscriptionStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The payload associated with this subscription.
     *
     * @var \Ebay\Commerce\Notification\Model\SubscriptionPayloadDetail
     */
    public $payload = null;

    /**
     * The unique identifier for the destination associated with this subscription.
     *
     * @var string
     */
    public $destinationId = null;
}
