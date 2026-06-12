<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages\AppCustomProductPagesAppCustomProductPageVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages\AppCustomProductPagesAppCustomProductPageVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages\AppCustomProductPagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages\AppCustomProductPagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages\AppCustomProductPagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPages\AppCustomProductPagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppCustomProductPages extends BaseResource
{
    public function appCustomProductPagesCreateInstance(
        AppCustomProductPageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPagesGetInstance(
        string $id,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldsapps = null,
        ?array $fieldsappCustomProductPageVersions = null,
        ?array $include = null,
        ?int $limitappCustomProductPageVersions = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPagesGetInstance($id, $fieldsappCustomProductPages, $fieldsapps, $fieldsappCustomProductPageVersions, $include, $limitappCustomProductPageVersions));
    }

    public function appCustomProductPagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppCustomProductPagesDeleteInstance($id));
    }

    public function appCustomProductPagesUpdateInstance(
        string $id,
        AppCustomProductPageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPagesUpdateInstance($id, $payload));
    }

    public function appCustomProductPagesAppCustomProductPageVersionsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPagesAppCustomProductPageVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPagesAppCustomProductPageVersionsGetToManyRelated(
        string $id,
        ?array $filterstate = null,
        ?array $fieldsappCustomProductPageVersions = null,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappCustomProductPageLocalizations = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPagesAppCustomProductPageVersionsGetToManyRelated($id, $filterstate, $fieldsappCustomProductPageVersions, $fieldsappCustomProductPages, $fieldsappCustomProductPageLocalizations, $limit, $include, $limitappCustomProductPageLocalizations));
    }
}
