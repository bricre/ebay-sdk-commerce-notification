<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about a subscription request.
 */
class CreateSubscriptionRequest extends AbstractModel
{
    /**
     * The unique identifier for the topic associated with this subscription.
     *
     * @var string
     */
    public $topicId = null;

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
