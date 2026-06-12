<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageVersionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageVersionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions\AppCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions\AppCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions\AppCustomProductPageVersionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions\AppCustomProductPageVersionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageVersions\AppCustomProductPageVersionsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppCustomProductPageVersions extends BaseResource
{
    public function appCustomProductPageVersionsCreateInstance(
        AppCustomProductPageVersionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPageVersionsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPageVersionsGetInstance(
        string $id,
        ?array $fieldsappCustomProductPageVersions = null,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $include = null,
        ?int $limitappCustomProductPageLocalizations = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageVersionsGetInstance($id, $fieldsappCustomProductPageVersions, $fieldsappCustomProductPages, $fieldsappCustomProductPageLocalizations, $include, $limitappCustomProductPageLocalizations));
    }

    public function appCustomProductPageVersionsUpdateInstance(
        string $id,
        AppCustomProductPageVersionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPageVersionsUpdateInstance($id, $payload));
    }

    public function appCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappKeywords
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelated(
        string $id,
        ?array $filterlocale = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappCustomProductPageVersions = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappPreviewSets = null,
        ?array $fieldsappKeywords = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappScreenshotSets = null,
        ?int $limitappPreviewSets = null,
        ?int $limitsearchKeywords = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageVersionsAppCustomProductPageLocalizationsGetToManyRelated($id, $filterlocale, $fieldsappCustomProductPageLocalizations, $fieldsappCustomProductPageVersions, $fieldsappScreenshotSets, $fieldsappPreviewSets, $fieldsappKeywords, $limit, $include, $limitappScreenshotSets, $limitappPreviewSets, $limitsearchKeywords));
    }
}
