<?php

namespace Ebay\Commerce\Notification\Api;

use Ebay\Commerce\Notification\Model\Topic as TopicModel;
use Ebay\Commerce\Notification\Model\TopicSearchResponse;

class Topic extends AbstractAPI
{
    /**
     * This method allows applications to retrieve details for the specified topic.
     * This information includes supported schema versions, formats, and other metadata
     * for the topic.<br /><br />Applications can subscribe to any of the topics for a
     * supported schema version and format, limited by the authorization scopes
     * required to subscribe to the topic.<br /><br />A topic specifies the type of
     * information to be received and the data types associated with an event. An event
     * occurs in the eBay system, such as when a user requests deletion or revokes
     * access for an application. An event is an instance of an event type (topic).<br
     * /><br />Specify the topic to retrieve using the <b>topic_id</b> URI
     * parameter.<br /><br /><span class="tablenote"><b>Note:</b> Use the <a
     * href="/api-docs/commerce/notification/resources/topic/methods/getTopics">getTopics</a>
     * method to find a topic if you do not know the topic ID.</span>.
     *
     * @param string $topic_id the ID of the topic for which to retrieve the details
     *
     * @return TopicModel
     */
    public function get(string $topic_id): TopicModel
    {
        return $this->request(
        'getTopic',
        'GET',
        "topic/$topic_id",
        null,
        [],
        []
        );
    }

    /**
     * This method returns a paginated collection of all supported topics, along with
     * the details for the topics. This information includes supported schema versions,
     * formats, and other metadata for the topics.<br /><br />Applications can
     * subscribe to any of the topics for a supported schema version and format,
     * limited by the authorization scopes required to subscribe to the topic.<br /><br
     * />A topic specifies the type of information to be received and the data types
     * associated with an event. An event occurs in the eBay system, such as when a
     * user requests deletion or revokes access for an application. An event is an
     * instance of an event type (topic).
     *
     * @param array $queries options:
     *                       'limit'	string	The maximum number of items to return per page from the result
     *                       set. A result set is the complete set of results returned by the method. Range
     *                       is from 10-100. <br /><br />If this parameter is omitted, the default value is
     *                       used.<br/><br/><b> Default:</b> 20<br /><br /><b>Maximum:</b> 100 items per page
     *                       'continuation_token'	string	The token used to access the next set of results.
     *
     * @return TopicSearchResponse
     */
    public function gets(array $queries = []): TopicSearchResponse
    {
        return $this->request(
        'getTopics',
        'GET',
        'topic',
        null,
        $queries,
        []
        );
    }
}
