<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsV2AppStoreVersionExperimentTreatmentsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsV2AppStoreVersionExperimentTreatmentsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperiments\AppStoreVersionExperimentsV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionExperiments extends BaseResource
{
    public function appStoreVersionExperimentsV2createInstance(
        AppStoreVersionExperimentV2createRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentsV2getInstance(
        string $id,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsapps = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $include = null,
        ?int $limitappStoreVersionExperimentTreatments = null,
        ?int $limitcontrolVersions = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsV2GetInstance($id, $fieldsappStoreVersionExperiments, $fieldsapps, $fieldsappStoreVersions, $fieldsappStoreVersionExperimentTreatments, $include, $limitappStoreVersionExperimentTreatments, $limitcontrolVersions));
    }

    public function appStoreVersionExperimentsV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionExperimentsV2DeleteInstance($id));
    }

    public function appStoreVersionExperimentsV2updateInstance(
        string $id,
        AppStoreVersionExperimentV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsV2UpdateInstance($id, $payload));
    }

    public function appStoreVersionExperimentsCreateInstance(
        AppStoreVersionExperimentCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentsGetInstance(
        string $id,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $include = null,
        ?int $limitappStoreVersionExperimentTreatments = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsGetInstance($id, $fieldsappStoreVersionExperiments, $fieldsappStoreVersions, $fieldsappStoreVersionExperimentTreatments, $include, $limitappStoreVersionExperimentTreatments));
    }

    public function appStoreVersionExperimentsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionExperimentsDeleteInstance($id));
    }

    public function appStoreVersionExperimentsUpdateInstance(
        string $id,
        AppStoreVersionExperimentUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsUpdateInstance($id, $payload));
    }

    public function appStoreVersionExperimentsV2appStoreVersionExperimentTreatmentsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsV2AppStoreVersionExperimentTreatmentsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentsV2appStoreVersionExperimentTreatmentsGetToManyRelated(
        string $id,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappStoreVersionExperimentTreatmentLocalizations = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsV2AppStoreVersionExperimentTreatmentsGetToManyRelated($id, $fieldsappStoreVersionExperimentTreatments, $fieldsappStoreVersionExperiments, $fieldsappStoreVersionExperimentTreatmentLocalizations, $limit, $include, $limitappStoreVersionExperimentTreatmentLocalizations));
    }

    public function appStoreVersionExperimentsAppStoreVersionExperimentTreatmentsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentsAppStoreVersionExperimentTreatmentsGetToManyRelated(
        string $id,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappStoreVersionExperimentTreatmentLocalizations = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentsAppStoreVersionExperimentTreatmentsGetToManyRelated($id, $fieldsappStoreVersionExperimentTreatments, $fieldsappStoreVersionExperiments, $fieldsappStoreVersionExperimentTreatmentLocalizations, $limit, $include, $limitappStoreVersionExperimentTreatmentLocalizations));
    }
}
