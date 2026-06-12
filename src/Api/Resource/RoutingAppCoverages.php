<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\RoutingAppCoverageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\RoutingAppCoverageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages\RoutingAppCoveragesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages\RoutingAppCoveragesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages\RoutingAppCoveragesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages\RoutingAppCoveragesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class RoutingAppCoverages extends BaseResource
{
    public function routingAppCoveragesCreateInstance(
        RoutingAppCoverageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new RoutingAppCoveragesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsroutingAppCoverages
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function routingAppCoveragesGetInstance(
        string $id,
        ?array $fieldsroutingAppCoverages = null,
        ?array $fieldsappStoreVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new RoutingAppCoveragesGetInstance($id, $fieldsroutingAppCoverages, $fieldsappStoreVersions, $include));
    }

    public function routingAppCoveragesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new RoutingAppCoveragesDeleteInstance($id));
    }

    public function routingAppCoveragesUpdateInstance(
        string $id,
        RoutingAppCoverageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new RoutingAppCoveragesUpdateInstance($id, $payload));
    }
}
