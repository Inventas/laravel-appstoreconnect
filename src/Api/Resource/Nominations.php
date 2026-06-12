<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\NominationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\NominationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Nominations\NominationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Nominations\NominationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Nominations\NominationsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Nominations\NominationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Nominations\NominationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Nominations extends BaseResource
{
    /**
     * @param  array<int, string>  $filterstate
     * @param  array<int, string>|null  $filtertype
     * @param  array<int, string>|null  $filterhasInAppEvents
     * @param  array<int, string>|null  $filterrelatedApps
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsnominations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function nominationsGetCollection(
        array $filterstate,
        ?array $filtertype = null,
        ?array $filterhasInAppEvents = null,
        ?array $filterrelatedApps = null,
        ?array $sort = null,
        ?array $fieldsnominations = null,
        ?array $fieldsapps = null,
        ?array $fieldsactors = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitinAppEvents = null,
        ?int $limitrelatedApps = null,
        ?int $limitsupportedTerritories = null,
    ): Response {
        return $this->connector->send(new NominationsGetCollection($filterstate, $filtertype, $filterhasInAppEvents, $filterrelatedApps, $sort, $fieldsnominations, $fieldsapps, $fieldsactors, $fieldsappEvents, $fieldsterritories, $limit, $include, $limitinAppEvents, $limitrelatedApps, $limitsupportedTerritories));
    }

    public function nominationsCreateInstance(
        NominationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new NominationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsnominations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function nominationsGetInstance(
        string $id,
        ?array $fieldsnominations = null,
        ?array $fieldsapps = null,
        ?array $fieldsactors = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitinAppEvents = null,
        ?int $limitrelatedApps = null,
        ?int $limitsupportedTerritories = null,
    ): Response {
        return $this->connector->send(new NominationsGetInstance($id, $fieldsnominations, $fieldsapps, $fieldsactors, $fieldsappEvents, $fieldsterritories, $include, $limitinAppEvents, $limitrelatedApps, $limitsupportedTerritories));
    }

    public function nominationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new NominationsDeleteInstance($id));
    }

    public function nominationsUpdateInstance(
        string $id,
        NominationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new NominationsUpdateInstance($id, $payload));
    }
}
