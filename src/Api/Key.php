<?php

namespace Ebay\Commerce\Notification\Api;

use Ebay\Commerce\Notification\Model\PublicKey;
use OpenAPI\Runtime\UnexpectedResponse;

class Key extends AbstractAPI
{
    /**
     * This method allows users to retrieve a public key using a specified key ID. The
     * public key that is returned in the response payload is used to process and
     * validate eBay notifications.<br /><br />The public key ID, which is a required
     * request parameter for this method, is retrieved from the Base64-encoded
     * <b>X-EBAY-SIGNATURE</b> header that is included in the eBay notification.<br
     * /><br /><span class="tablenote"><b>Note:</b> For more details about how to
     * process eBay push notifications and validate notification message payloads, see
     * the <a href="/api-docs/commerce/notification/overview.html">Notification API
     * overview</a>.</span>.
     *
     * @param string $public_key_id The unique key ID that is used to retrieve the
     *                              public key.<br /><br /><span class="tablenote"><b>Note: </b>This is retrieved
     *                              from the <b>X-EBAY-SIGNATURE</b> header that is included with the push
     *                              notification.</span>
     *
     * @return PublicKey|UnexpectedResponse
     */
    public function get(string $public_key_id)
    {
        return $this->request(
        'getPublicKey',
        'GET',
        "public_key/$public_key_id",
        null,
        [],
        []
        );
    }
}
