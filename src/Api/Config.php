<?php

namespace Ebay\Commerce\Notification\Api;

use Ebay\Commerce\Notification\Model\Config as ConfigModel;
use OpenAPI\Runtime\UnexpectedResponse;

class Config extends AbstractAPI
{
    /**
     * This method allows applications to retrieve a previously created configuration.
     *
     * @return ConfigModel|UnexpectedResponse
     */
    public function get()
    {
        return $this->request(
        'getConfig',
        'GET',
        'config',
        null,
        [],
        []
        );
    }

    /**
     * This method allows applications to create a new configuration or update an
     * existing configuration. This app-level configuration allows developers to set up
     * alerts.
     *
     * @param ConfigModel $Model the configurations for this application
     *
     * @return UnexpectedResponse
     */
    public function update(ConfigModel $Model): UnexpectedResponse
    {
        return $this->request(
        'updateConfig',
        'PUT',
        'config',
        $Model->getArrayCopy(),
        [],
        []
        );
    }
}
