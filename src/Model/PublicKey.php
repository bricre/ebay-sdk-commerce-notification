<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that defines the public key for a unique key ID.
 */
class PublicKey extends AbstractModel
{
    /**
     * The algorithm associated with the public key that is returned, such as Elliptic
     * Curve Digital Signature Algorithm (ECDSA).
     *
     * @var string
     */
    public $algorithm = null;

    /**
     * The digest associated with the public key that is returned, such as Secure Hash
     * Algorithm 1 (SHA1).
     *
     * @var string
     */
    public $digest = null;

    /**
     * The public key that is returned for the specified key ID.<br /><br />This value
     * is used to validate the eBay push notification message payload.
     *
     * @var string
     */
    public $key = null;
}
