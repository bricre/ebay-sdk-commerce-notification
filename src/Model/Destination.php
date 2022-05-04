<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that contains information about the destination.
 */
class Destination extends AbstractModel
{
    /**
     * The unique identifier for the destination.
     *
     * @var string
     */
    public $destinationId = null;

    /**
     * The name associated with this destination.
     *
     * @var string
     */
    public $name = null;

    /**
     * The status for this destination.<br /><br /><span class="tablenote"><b>Note:</b>
     * The <b>MARKED_DOWN</b> value is set by eBay systems and cannot be used in a
     * create or update call by applications.</span><br /><br /><b>Valid
     * values:</b><ul><li><code>ENABLED</code></li><li><code>DISABLED</code></li><li><code>MARKED_DOWN</code></li></ul>
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/api:DestinationStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The configuration associated with this destination. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/notification/types/desination'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $deliveryConfig = null;
}
