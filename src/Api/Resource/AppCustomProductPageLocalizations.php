<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppCustomProductPageLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsAppPreviewSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsAppPreviewSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsSearchKeywordsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsSearchKeywordsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsSearchKeywordsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsSearchKeywordsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppCustomProductPageLocalizations\AppCustomProductPageLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppCustomProductPageLocalizations extends BaseResource
{
    public function appCustomProductPageLocalizationsCreateInstance(
        AppCustomProductPageLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPageLocalizationsGetInstance(
        string $id,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappCustomProductPageVersions = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappPreviewSets = null,
        ?array $include = null,
        ?int $limitappPreviewSets = null,
        ?int $limitappScreenshotSets = null,
        ?int $limitsearchKeywords = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsGetInstance($id, $fieldsappCustomProductPageLocalizations, $fieldsappCustomProductPageVersions, $fieldsappScreenshotSets, $fieldsappPreviewSets, $include, $limitappPreviewSets, $limitappScreenshotSets, $limitsearchKeywords));
    }

    public function appCustomProductPageLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppCustomProductPageLocalizationsDeleteInstance($id));
    }

    public function appCustomProductPageLocalizationsUpdateInstance(
        string $id,
        AppCustomProductPageLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsUpdateInstance($id, $payload));
    }

    public function appCustomProductPageLocalizationsAppPreviewSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsAppPreviewSetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterpreviewType
     * @param  array<int, string>|null  $filterappStoreVersionLocalization
     * @param  array<int, string>|null  $filterappStoreVersionExperimentTreatmentLocalization
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPageLocalizationsAppPreviewSetsGetToManyRelated(
        string $id,
        ?array $filterpreviewType = null,
        ?array $filterappStoreVersionLocalization = null,
        ?array $filterappStoreVersionExperimentTreatmentLocalization = null,
        ?array $fieldsappPreviewSets = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappPreviews = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappPreviews = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsAppPreviewSetsGetToManyRelated($id, $filterpreviewType, $filterappStoreVersionLocalization, $filterappStoreVersionExperimentTreatmentLocalization, $fieldsappPreviewSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappPreviews, $limit, $include, $limitappPreviews));
    }

    public function appCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterscreenshotDisplayType
     * @param  array<int, string>|null  $filterappStoreVersionLocalization
     * @param  array<int, string>|null  $filterappStoreVersionExperimentTreatmentLocalization
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $include
     */
    public function appCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelated(
        string $id,
        ?array $filterscreenshotDisplayType = null,
        ?array $filterappStoreVersionLocalization = null,
        ?array $filterappStoreVersionExperimentTreatmentLocalization = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappCustomProductPageLocalizations = null,
        ?array $fieldsappStoreVersionExperimentTreatmentLocalizations = null,
        ?array $fieldsappScreenshots = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappScreenshots = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsAppScreenshotSetsGetToManyRelated($id, $filterscreenshotDisplayType, $filterappStoreVersionLocalization, $filterappStoreVersionExperimentTreatmentLocalization, $fieldsappScreenshotSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappScreenshots, $limit, $include, $limitappScreenshots));
    }

    public function appCustomProductPageLocalizationsSearchKeywordsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsSearchKeywordsGetToManyRelationship($id, $limit));
    }

    public function appCustomProductPageLocalizationsSearchKeywordsCreateToManyRelationship(
        string $id,
        AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsSearchKeywordsCreateToManyRelationship($id, $payload));
    }

    public function appCustomProductPageLocalizationsSearchKeywordsDeleteToManyRelationship(
        string $id,
        AppCustomProductPageLocalizationSearchKeywordsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsSearchKeywordsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappKeywords
     */
    public function appCustomProductPageLocalizationsSearchKeywordsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterlocale = null,
        ?array $fieldsappKeywords = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppCustomProductPageLocalizationsSearchKeywordsGetToManyRelated($id, $filterplatform, $filterlocale, $fieldsappKeywords, $limit));
    }
}
