<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\BetaAppLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsAppGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsAppGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\BetaAppLocalizations\BetaAppLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class BetaAppLocalizations extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function betaAppLocalizationsGetCollection(
        ?array $filterlocale = null,
        ?array $filterapp = null,
        ?array $fieldsbetaAppLocalizations = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaAppLocalizationsGetCollection($filterlocale, $filterapp, $fieldsbetaAppLocalizations, $fieldsapps, $limit, $include));
    }

    public function betaAppLocalizationsCreateInstance(
        BetaAppLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function betaAppLocalizationsGetInstance(
        string $id,
        ?array $fieldsbetaAppLocalizations = null,
        ?array $fieldsapps = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new BetaAppLocalizationsGetInstance($id, $fieldsbetaAppLocalizations, $fieldsapps, $include));
    }

    public function betaAppLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new BetaAppLocalizationsDeleteInstance($id));
    }

    public function betaAppLocalizationsUpdateInstance(
        string $id,
        BetaAppLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new BetaAppLocalizationsUpdateInstance($id, $payload));
    }

    public function betaAppLocalizationsAppGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new BetaAppLocalizationsAppGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function betaAppLocalizationsAppGetToOneRelated(string $id, ?array $fieldsapps = null): Response
    {
        return $this->connector->send(new BetaAppLocalizationsAppGetToOneRelated($id, $fieldsapps));
    }
}
