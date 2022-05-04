<?php

namespace Ebay\Commerce\Notification\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the <b>alertEmail</b> field.
 */
class Config extends AbstractModel
{
    /**
     * The alert email address for this application.
     *
     * @var string
     */
    public $alertEmail = null;
}
