<?php

namespace Ebay\Commerce\Notification\Api;

use Ebay\Commerce\Notification\Model\Config as ConfigModel;

class Config extends AbstractAPI
{
    /**
     * This method allows applications to retrieve a previously created configuration.
     *
     * @return ConfigModel
     */
    public function get(): ConfigModel
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
     * @return mixed
     */
    public function update(ConfigModel $Model): mixed
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
