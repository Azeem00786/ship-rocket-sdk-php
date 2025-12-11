<?php

namespace Hyperzod\ShipRocketSdkPhp\Client;

/**
 * Interface for a ShipRocket client.
 */
interface ShipRocketClientInterface extends BaseShipRocketClientInterface
{
   /**   
    * Sends a request to ShipRocket's API.
    *
    * @param string $method the HTTP method
    * @param string $path the path of the request
    * @param array $params the parameters of the request
    */
   public function request($method, $path, $params);
}
