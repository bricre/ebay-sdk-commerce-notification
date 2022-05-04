<?php

namespace Ebay\Commerce\Notification\Api;

use Ebay\Commerce\Notification\Model\CreateSubscriptionRequest;
use Ebay\Commerce\Notification\Model\Subscription as SubscriptionModel;
use Ebay\Commerce\Notification\Model\SubscriptionSearchResponse;
use Ebay\Commerce\Notification\Model\UpdateSubscriptionRequest;

class Subscription extends AbstractAPI
{
    /**
     * This method allows applications to retrieve a list of all subscriptions. The
     * list returned is a paginated collection of subscription resources.<br /><br
     * />Subscriptions allow applications to express interest in notifications and keep
     * receiving the information relevant to their business.
     *
     * @param array $queries options:
     *                       'limit'	string	The number of items, from the result set, returned in a single
     *                       page. Range is from 10-100. If this parameter is omitted, the default value is
     *                       used.<br/><br/><b>Default:</b> 20<br/><br/><b>Maximum:</b> 100 items per page
     *                       'continuation_token'	string	The continuation token for the next set of results.
     *
     * @return SubscriptionSearchResponse
     */
    public function gets(array $queries = []): SubscriptionSearchResponse
    {
        return $this->request(
        'getSubscriptions',
        'GET',
        'subscription',
        null,
        $queries,
        []
        );
    }

    /**
     * This method allows applications to create a subscription for a topic and
     * supported schema version. Subscriptions allow applications to express interest
     * in notifications and keep receiving the information relevant to their
     * business.<br/><br/>Each application and topic-schema pairing to a subscription
     * should have a 1:1 cardinality.<br/><br/>You can create the subscription in
     * disabled mode, test it (see the <b>test</b> method), and when everything is
     * ready, you can enable the subscription (see the <b>enableSubscription</b>
     * method).<br /><br /><span class="tablenote"><b>Note:</b> If an application is
     * not authorized to subscribe to a topic, for example, if your authorization does
     * not include the list of scopes required for the topic, an error code of 195011
     * is returned.</span>.
     *
     * @param CreateSubscriptionRequest $Model the create subscription request
     *
     * @return object
     */
    public function create(CreateSubscriptionRequest $Model): object
    {
        return $this->request(
        'createSubscription',
        'POST',
        'subscription',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method allows applications to retrieve subscription details for the
     * specified subscription.<br /><br />Specify the subscription to retrieve using
     * the <strong>subscription_id</strong>. Use the <strong>getSubscriptions</strong>
     * method to browse all subscriptions if you do not know the
     * <strong>subscription_id</strong>.<br /><br />Subscriptions allow applications to
     * express interest in notifications and keep receiving the information relevant to
     * their business.
     *
     * @param string $subscription_id the unique identifier for the subscription
     *
     * @return SubscriptionModel
     */
    public function get(string $subscription_id): SubscriptionModel
    {
        return $this->request(
        'getSubscription',
        'GET',
        "subscription/$subscription_id",
        null,
        [],
        []
        );
    }

    /**
     * This method allows applications to update a subscription. Subscriptions allow
     * applications to express interest in notifications and keep receiving the
     * information relevant to their business.<br /><br /><span
     * class="tablenote"><b>Note:</b> This call returns an error if an application is
     * not authorized to subscribe to a topic.</span><br/><br/>You can pause and
     * restart a subscription. See the <b>disableSubscription</b> and
     * <b>enableSubscription</b> methods.
     *
     * @param string                    $subscription_id the unique identifier for the subscription
     * @param UpdateSubscriptionRequest $Model           the create subscription request
     *
     * @return mixed
     */
    public function update(string $subscription_id, UpdateSubscriptionRequest $Model): mixed
    {
        return $this->request(
        'updateSubscription',
        'PUT',
        "subscription/$subscription_id",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method allows applications to delete a subscription. Subscriptions can be
     * deleted regardless of status.
     *
     * @param string $subscription_id the unique identifier for the subscription
     *
     * @return mixed
     */
    public function delete(string $subscription_id): mixed
    {
        return $this->request(
        'deleteSubscription',
        'DELETE',
        "subscription/$subscription_id",
        null,
        [],
        []
        );
    }

    /**
     * This method allows applications to enable a disabled subscription. To pause (or
     * disable) an enabled subscription, call <strong>disableSubscription</strong>.
     *
     * @param string $subscription_id the unique identifier for the subscription
     *
     * @return mixed
     */
    public function enable(string $subscription_id): mixed
    {
        return $this->request(
        'enableSubscription',
        'POST',
        "subscription/$subscription_id/enable",
        null,
        [],
        []
        );
    }

    /**
     * This method disables a subscription, which prevents the subscription from
     * providing notifications. To restart a subscription, call
     * <strong>enableSubscription</strong>.
     *
     * @param string $subscription_id the unique identifier for the subscription
     *
     * @return mixed
     */
    public function disable(string $subscription_id): mixed
    {
        return $this->request(
        'disableSubscription',
        'POST',
        "subscription/$subscription_id/disable",
        null,
        [],
        []
        );
    }

    /**
     * This method triggers a mocked test payload that includes a notification ID,
     * publish date, and so on. Use this method to test your subscription
     * end-to-end.<br /><br />You can create the subscription in disabled mode, test it
     * using this method, and when everything is ready, you can enable the subscription
     * (see the <strong>enableSubscription</strong> method).<br /><br /><span
     * class="tablenote"><b>Note:</b> Use the <strong>notificationId</strong> to tell
     * the difference between a test payload and a real payload.</span>.
     *
     * @param string $subscription_id the unique identifier for the subscription
     *
     * @return mixed
     */
    public function test(string $subscription_id): mixed
    {
        return $this->request(
        'test',
        'POST',
        "subscription/$subscription_id/test",
        null,
        [],
        []
        );
    }
}
