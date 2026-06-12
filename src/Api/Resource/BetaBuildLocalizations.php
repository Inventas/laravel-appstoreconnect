<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaBuildLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaBuildLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsBuildGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsBuildGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaBuildLocalizations\BetaBuildLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaBuildLocalizations extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function betaBuildLocalizationsGetCollection(
        ?array $filterlocale = null,
        ?array $filterbuild = null,
        ?array $fieldsbetaBuildLocalizations = null,
        ?array $fieldsbuilds = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaBuildLocalizationsGetCollection($filterlocale, $filterbuild, $fieldsbetaBuildLocalizations, $fieldsbuilds, $limit, $include));
    }

    public function betaBuildLocalizationsCreateInstance(
        BetaBuildLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaBuildLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function betaBuildLocalizationsGetInstance(
        string $id,
        ?array $fieldsbetaBuildLocalizations = null,
        ?array $fieldsbuilds = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaBuildLocalizationsGetInstance($id, $fieldsbetaBuildLocalizations, $fieldsbuilds, $include));
    }

    public function betaBuildLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaBuildLocalizationsDeleteInstance($id));
    }

    public function betaBuildLocalizationsUpdateInstance(
        string $id,
        BetaBuildLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaBuildLocalizationsUpdateInstance($id, $payload));
    }

    public function betaBuildLocalizationsBuildGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaBuildLocalizationsBuildGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function betaBuildLocalizationsBuildGetToOneRelated(string $id, ?array $fieldsbuilds = null): Response
    {
        return $this->connector->send(new BetaBuildLocalizationsBuildGetToOneRelated($id, $fieldsbuilds));
    }
}
