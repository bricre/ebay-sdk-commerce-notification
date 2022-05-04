<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that describes the details of the topic search response.
 */
class TopicSearchResponse extends AbstractModel
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
     * The value of the limit parameter submitted in the request, which is the maximum
     * number of items to return per page, from the result set. A result set is the
     * complete set of results returned by the method.<br /><br /><span
     * class="tablenote"><b>Note:</b> Though this parameter is not required to be
     * submitted in the request, the parameter defaults to <code>20</code> if
     * omitted.</span>.
     *
     * @var int
     */
    public $limit = null;

    /**
     * An array of topics that match the specified criteria.
     *
     * @var \Ebay\Commerce\Notification\Model\Topic[]
     */
    public $topics = null;
}
