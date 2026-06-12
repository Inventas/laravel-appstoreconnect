<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\DeviceCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\DeviceUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Devices\DevicesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Devices\DevicesGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Devices\DevicesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Devices\DevicesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Devices extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterudid
     * @param  array<int, string>|null  $filterstatus
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsdevices
     */
    public function devicesGetCollection(
        ?array $filtername = null,
        ?array $filterplatform = null,
        ?array $filterudid = null,
        ?array $filterstatus = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsdevices = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new DevicesGetCollection($filtername, $filterplatform, $filterudid, $filterstatus, $filterid, $sort, $fieldsdevices, $limit));
    }

    public function devicesCreateInstance(DeviceCreateRequest $payload): Response
    {
        return $this->connector->send(new DevicesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsdevices
     */
    public function devicesGetInstance(string $id, ?array $fieldsdevices = null): Response
    {
        return $this->connector->send(new DevicesGetInstance($id, $fieldsdevices));
    }

    public function devicesUpdateInstance(
        string $id,
        DeviceUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new DevicesUpdateInstance($id, $payload));
    }
}
