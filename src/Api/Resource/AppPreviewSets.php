<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewSetAppPreviewsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppPreviewSetCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets\AppPreviewSetsAppPreviewsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets\AppPreviewSetsAppPreviewsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets\AppPreviewSetsAppPreviewsReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets\AppPreviewSetsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets\AppPreviewSetsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPreviewSets\AppPreviewSetsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppPreviewSets extends BaseResource
{
    public function appPreviewSetsCreateInstance(
        AppPreviewSetCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppPreviewSetsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $include
     */
    public function appPreviewSetsGetInstance(
        string $id,
        ?array $fieldsappPreviewSets = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappPreviews = null,
        ?array $include = null,
        ?int $limitappPreviews = null,
    ): Response {
        return $this->connector->send(new AppPreviewSetsGetInstance($id, $fieldsappPreviewSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappPreviews, $include, $limitappPreviews));
    }

    public function appPreviewSetsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppPreviewSetsDeleteInstance($id));
    }

    public function appPreviewSetsAppPreviewsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppPreviewSetsAppPreviewsGetToManyRelationship($id, $limit));
    }

    public function appPreviewSetsAppPreviewsReplaceToManyRelationship(
        string $id,
        AppPreviewSetAppPreviewsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppPreviewSetsAppPreviewsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function appPreviewSetsAppPreviewsGetToManyRelated(
        string $id,
        ?array $fieldsappPreviews = null,
        ?array $fieldsappPreviewSets = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppPreviewSetsAppPreviewsGetToManyRelated($id, $fieldsappPreviews, $fieldsappPreviewSets, $limit, $include));
    }
}
