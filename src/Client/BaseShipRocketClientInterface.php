<?php

namespace Hyperzod\ShipRocketSdkPhp\Client;

/**
 * Interface for a ShipRocket client.
 */
interface BaseShipRocketClientInterface
{
   /**
    * Gets the API key used by the client to send requests.
    *
    * @return null|string the API key used by the client to send requests
    */
   public function getClientEmail();
   /**
    * Gets the API key used by the client to send requests.
    *
    * @return null|string the API key used by the client to send requests
    */
   public function getClientPassword();

   /**
    * Gets the auth_url used by the client to send requests.
    *
    * @return null|string the auth_url used by the client to send requests
    */
   public function getClientAuthUrl();

   /**
    * Gets the base URL for ShipRocket's API.
    *
    * @return string the base URL for ShipRocket's API
    */
   public function getApiBase();
}
