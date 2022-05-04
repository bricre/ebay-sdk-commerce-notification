<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that contains information about the destination search response.
 */
class DestinationSearchResponse extends AbstractModel
{
    /**
     * The total number of matches for the search criteria.
     *
     * @var int
     */
    public $total = null;

    /**
     * The path to the call URI that produced the current page of results.
     *
     * @var string
     */
    public $href = null;

    /**
     * The URL to access the next set of results. This field includes a
     * <strong>continuation_token</strong>. No <b>prev</b> field is returned, but this
     * value is persistent during the session so that you can use it to return to the
     * next page.<br><br>This field is not returned if fewer records than specified by
     * the <strong>limit</strong> field are returned.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of records to show in the current response.<br /><br
     * /><b>Default:</b> 20.
     *
     * @var int
     */
    public $limit = null;

    /**
     * An array that contains the destination details.
     *
     * @var \Ebay\Commerce\Notification\Model\Destination[]
     */
    public $destinations = null;
}
