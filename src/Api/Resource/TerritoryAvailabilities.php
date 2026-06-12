<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\TerritoryAvailabilityUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\TerritoryAvailabilities\TerritoryAvailabilitiesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class TerritoryAvailabilities extends BaseResource
{
    public function territoryAvailabilitiesUpdateInstance(
        string $id,
        TerritoryAvailabilityUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new TerritoryAvailabilitiesUpdateInstance($id, $payload));
    }
}
