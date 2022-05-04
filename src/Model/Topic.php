<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that describes the details of the topic.
 */
class Topic extends AbstractModel
{
    /**
     * The unique identifier for the topic.
     *
     * @var string
     */
    public $topicId = null;

    /**
     * The description of the topic.
     *
     * @var string
     */
    public $description = null;

    /**
     * The authorization scopes required to subscribe to this topic.
     *
     * @var string[]
     */
    public $authorizationScopes = null;

    /**
     * The status of this topic. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:StatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The business context associated with this topic. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ContextEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $context = null;

    /**
     * The scope of this topic. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:ScopeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $scope = null;

    /**
     * The supported payloads for this topic.
     *
     * @var \Ebay\Commerce\Notification\Model\PayloadDetail[]
     */
    public $supportedPayloads = null;
}
