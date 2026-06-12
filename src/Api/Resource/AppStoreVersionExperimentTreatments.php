<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentTreatmentCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentTreatmentUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments\AppStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments\AppStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments\AppStoreVersionExperimentTreatmentsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments\AppStoreVersionExperimentTreatmentsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments\AppStoreVersionExperimentTreatmentsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatments\AppStoreVersionExperimentTreatmentsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionExperimentTreatments extends BaseResource
{
    public function appStoreVersionExperimentTreatmentsCreateInstance(
        AppStoreVersionExperimentTreatmentCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentTreatmentsGetInstance(
        string $id,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $include = null,
        ?int $limitappStoreVersionExperimentTreatmentLocalizations = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentsGetInstance($id, $fieldsappStoreVersionExperimentTreatments, $fieldsappStoreVersionExperiments, $fieldsappStoreVersionExperimentTreatmentLocalizations, $include, $limitappStoreVersionExperimentTreatmentLocalizations));
    }

    public function appStoreVersionExperimentTreatmentsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentsDeleteInstance($id));
    }

    public function appStoreVersionExperimentTreatmentsUpdateInstance(
        string $id,
        AppStoreVersionExperimentTreatmentUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentsUpdateInstance($id, $payload));
    }

    public function appStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelated(
        string $id,
        ?array $filterlocale = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappPreviewSets = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappScreenshotSets = null,
        ?int $limitappPreviewSets = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentsAppStoreVersionExperimentTreatmentLocalizationsGetToManyRelated($id, $filterlocale, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappStoreVersionExperimentTreatments, $fieldsappScreenshotSets, $fieldsappPreviewSets, $limit, $include, $limitappScreenshotSets, $limitappPreviewSets));
    }
}
