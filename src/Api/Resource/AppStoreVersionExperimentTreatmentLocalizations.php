<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionExperimentTreatmentLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsAppPreviewSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsAppPreviewSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsAppScreenshotSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsAppScreenshotSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionExperimentTreatmentLocalizations\AppStoreVersionExperimentTreatmentLocalizationsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionExperimentTreatmentLocalizations extends BaseResource
{
    public function appStoreVersionExperimentTreatmentLocalizationsCreateInstance(
        AppStoreVersionExperimentTreatmentLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentTreatmentLocalizationsGetInstance(
        string $id,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappPreviewSets = null,
        ?array $include = null,
        ?int $limitappPreviewSets = null,
        ?int $limitappScreenshotSets = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsGetInstance($id, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappStoreVersionExperimentTreatments, $fieldsappScreenshotSets, $fieldsappPreviewSets, $include, $limitappPreviewSets, $limitappScreenshotSets));
    }

    public function appStoreVersionExperimentTreatmentLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsDeleteInstance($id));
    }

    public function appStoreVersionExperimentTreatmentLocalizationsAppPreviewSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsAppPreviewSetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterpreviewType
     * @param  array<int, string>|null  $filterappStoreVersionLocalization
     * @param  array<int, string>|null  $filterappCustomProductPageLocalization
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentTreatmentLocalizationsAppPreviewSetsGetToManyRelated(
        string $id,
        ?array $filterpreviewType = null,
        ?array $filterappStoreVersionLocalization = null,
        ?array $filterappCustomProductPageLocalization = null,
        ?array $fieldsappPreviewSets = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappPreviews = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappPreviews = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsAppPreviewSetsGetToManyRelated($id, $filterpreviewType, $filterappStoreVersionLocalization, $filterappCustomProductPageLocalization, $fieldsappPreviewSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappPreviews, $limit, $include, $limitappPreviews));
    }

    public function appStoreVersionExperimentTreatmentLocalizationsAppScreenshotSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsAppScreenshotSetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterscreenshotDisplayType
     * @param  array<int, string>|null  $filterappStoreVersionLocalization
     * @param  array<int, string>|null  $filterappCustomProductPageLocalization
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionExperimentTreatmentLocalizationsAppScreenshotSetsGetToManyRelated(
        string $id,
        ?array $filterscreenshotDisplayType = null,
        ?array $filterappStoreVersionLocalization = null,
        ?array $filterappCustomProductPageLocalization = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappScreenshots = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappScreenshots = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionExperimentTreatmentLocalizationsAppScreenshotSetsGetToManyRelated($id, $filterscreenshotDisplayType, $filterappStoreVersionLocalization, $filterappCustomProductPageLocalization, $fieldsappScreenshotSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappScreenshots, $limit, $include, $limitappScreenshots));
    }
}
