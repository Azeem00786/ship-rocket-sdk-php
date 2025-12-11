<?php

namespace Hyperzod\ShipRocketSdkPhp\Client;

use Hyperzod\ShipRocketSdkPhp\Service\CoreServiceFactory;

class ShipRocketClient extends BaseShipRocketClient
{
    /**
     * @var CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->__get($name);
    }
}
