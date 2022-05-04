<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that contains information about the delivery configuration.
 */
class DeliveryConfig extends AbstractModel
{
    /**
     * The endpoint for this destination.
     *
     * @var string
     */
    public $endpoint = null;

    /**
     * The verification token associated with this endpoint.
     *
     * @var string
     */
    public $verificationToken = null;
}
