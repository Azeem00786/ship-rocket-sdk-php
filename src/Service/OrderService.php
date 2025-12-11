<?php

namespace Hyperzod\ShipRocketSdkPhp\Service;

use Hyperzod\ShipRocketSdkPhp\Enums\HttpMethodEnum;

class OrderService extends AbstractService
{
   /**
    * Create a job on ShipRocket
    *
    * @param array $params
    *
    * @throws \Hyperzod\ShipRocketSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function create(array $params)
   {
      return $this->request(HttpMethodEnum::POST, 'v3/orders', $params);
   }
}
