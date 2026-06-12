<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotSetAppScreenshotsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppScreenshotSetCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets\AppScreenshotSetsAppScreenshotsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets\AppScreenshotSetsAppScreenshotsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets\AppScreenshotSetsAppScreenshotsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets\AppScreenshotSetsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets\AppScreenshotSetsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppScreenshotSets\AppScreenshotSetsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppScreenshotSets extends BaseResource
{
    public function appScreenshotSetsCreateInstance(
        AppScreenshotSetCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppScreenshotSetsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $include
     */
    public function appScreenshotSetsGetInstance(
        string $id,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappScreenshots = null,
        ?array $include = null,
        ?int $limitappScreenshots = null,
    ): Response {
        return $this->connector->send(new AppScreenshotSetsGetInstance($id, $fieldsappScreenshotSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappScreenshots, $include, $limitappScreenshots));
    }

    public function appScreenshotSetsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppScreenshotSetsDeleteInstance($id));
    }

    public function appScreenshotSetsAppScreenshotsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppScreenshotSetsAppScreenshotsGetToManyRelationship($id, $limit));
    }

    public function appScreenshotSetsAppScreenshotsReplaceToManyRelationship(
        string $id,
        AppScreenshotSetAppScreenshotsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppScreenshotSetsAppScreenshotsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $include
     */
    public function appScreenshotSetsAppScreenshotsGetToManyRelated(
        string $id,
        ?array $fieldsappScreenshots = null,
        ?array $fieldsappScreenshotSets = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppScreenshotSetsAppScreenshotsGetToManyRelated($id, $fieldsappScreenshots, $fieldsappScreenshotSets, $limit, $include));
    }
}
