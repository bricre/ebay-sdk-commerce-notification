<?php

namespace Ebay\Commerce\Notification\Api;

use Ebay\Commerce\Notification\Model\Destination as DestinationModel;
use Ebay\Commerce\Notification\Model\DestinationRequest;
use Ebay\Commerce\Notification\Model\DestinationSearchResponse;

class Destination extends AbstractAPI
{
    /**
     * This method allows applications to retrieve a paginated collection of
     * destination resources and related details. The details include the destination
     * names, statuses, and configurations, including the endpoints and verification
     * tokens.
     *
     * @param array $queries options:
     *                       'limit'	string	The number of items, from the result set, returned in a single
     *                       page. Range is from 10-100. If this parameter is omitted, the default value is
     *                       used.<br/><br/><b>Default:</b> 20<br/><br/><b>Maximum:</b> 100 items per page
     *                       'continuation_token'	string	The continuation token for the next set of results.
     *
     * @return DestinationSearchResponse
     */
    public function gets(array $queries = []): DestinationSearchResponse
    {
        return $this->request(
        'getDestinations',
        'GET',
        'destination',
        null,
        $queries,
        []
        );
    }

    /**
     * This method allows applications to create a destination. A destination is an
     * endpoint that receives HTTP push notifications.<br /><br />A single destination
     * for all topics is valid, as is individual destinations for each topic.<br /><br
     * />To update a destination, use the <strong>updateDestination</strong> call.<br
     * /><br />The destination created will need to be referenced while creating or
     * updating a subscription to a topic.<br/><br/><span
     * class="tablenote"><b>Note:</b> The destination should be created and ready to
     * respond with the expected <b>challengeResponse</b> for the endpoint to be
     * registered successfully. Refer to the <a
     * href="/api-docs/commerce/notification/overview.html">Notification API
     * overview</a> for more information.</span>.
     *
     * @param DestinationRequest $Model the create destination request
     *
     * @return object
     */
    public function create(DestinationRequest $Model): object
    {
        return $this->request(
        'createDestination',
        'POST',
        'destination',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method allows applications to fetch the details for a destination. The
     * details include the destination name, status, and configuration, including the
     * endpoint and verification token.
     *
     * @param string $destination_id the unique identifier for the destination
     *
     * @return DestinationModel
     */
    public function get(string $destination_id): DestinationModel
    {
        return $this->request(
        'getDestination',
        'GET',
        "destination/$destination_id",
        null,
        [],
        []
        );
    }

    /**
     * This method allows applications to update a destination.<br/><br/><span
     * class="tablenote"><b>Note:</b> The destination should be created and ready to
     * respond with the expected <b>challengeResponse</b> for the endpoint to be
     * registered successfully. Refer to the <a
     * href="/api-docs/commerce/notification/overview.html">Notification API
     * overview</a> for more information.</span>.
     *
     * @param string             $destination_id the unique identifier for the destination
     * @param DestinationRequest $Model          the create subscription request
     *
     * @return mixed
     */
    public function update(string $destination_id, DestinationRequest $Model): mixed
    {
        return $this->request(
        'updateDestination',
        'PUT',
        "destination/$destination_id",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method provides applications a way to delete a destination.<br /><br />The
     * same destination ID can be used by many destinations.<br /><br />Trying to
     * delete an active destination results in an error. You can disable a
     * subscription, and when the destination is no longer in use, you can delete it.
     *
     * @param string $destination_id the unique identifier for the destination
     *
     * @return mixed
     */
    public function delete(string $destination_id): mixed
    {
        return $this->request(
        'deleteDestination',
        'DELETE',
        "destination/$destination_id",
        null,
        [],
        []
        );
    }
}
