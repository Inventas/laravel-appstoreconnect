<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AndroidToIosAppMappingDetailCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AndroidToIosAppMappingDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails\AndroidToIosAppMappingDetailsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails\AndroidToIosAppMappingDetailsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails\AndroidToIosAppMappingDetailsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails\AndroidToIosAppMappingDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AndroidToIosAppMappingDetails extends BaseResource
{
    public function androidToIosAppMappingDetailsCreateInstance(
        AndroidToIosAppMappingDetailCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AndroidToIosAppMappingDetailsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     */
    public function androidToIosAppMappingDetailsGetInstance(
        string $id,
        ?array $fieldsandroidToIosAppMappingDetails = null,
    ): Response {
        return $this->connector->send(new AndroidToIosAppMappingDetailsGetInstance($id, $fieldsandroidToIosAppMappingDetails));
    }

    public function androidToIosAppMappingDetailsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AndroidToIosAppMappingDetailsDeleteInstance($id));
    }

    public function androidToIosAppMappingDetailsUpdateInstance(
        string $id,
        AndroidToIosAppMappingDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AndroidToIosAppMappingDetailsUpdateInstance($id, $payload));
    }
}
