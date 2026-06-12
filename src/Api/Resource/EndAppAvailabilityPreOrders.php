<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\EndAppAvailabilityPreOrderCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\EndAppAvailabilityPreOrders\EndAppAvailabilityPreOrdersCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class EndAppAvailabilityPreOrders extends BaseResource
{
    public function endAppAvailabilityPreOrdersCreateInstance(
        EndAppAvailabilityPreOrderCreateRequest $payload,
    ): Response {
        return $this->connector->send(new EndAppAvailabilityPreOrdersCreateInstance($payload));
    }
}
