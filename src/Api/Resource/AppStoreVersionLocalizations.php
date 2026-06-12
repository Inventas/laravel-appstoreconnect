<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionLocalizationSearchKeywordsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppStoreVersionLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsAppPreviewSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsAppPreviewSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsAppScreenshotSetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsSearchKeywordsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsSearchKeywordsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsSearchKeywordsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsSearchKeywordsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionLocalizations\AppStoreVersionLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppStoreVersionLocalizations extends BaseResource
{
    public function appStoreVersionLocalizationsCreateInstance(
        AppStoreVersionLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionLocalizationsGetInstance(
        string $id,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappScreenshotSets = null,
        ?array $fieldsappPreviewSets = null,
        ?array $include = null,
        ?int $limitappPreviewSets = null,
        ?int $limitappScreenshotSets = null,
        ?int $limitsearchKeywords = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsGetInstance($id, $fieldsappStoreVersionLocalizations, $fieldsappStoreVersions, $fieldsappScreenshotSets, $fieldsappPreviewSets, $include, $limitappPreviewSets, $limitappScreenshotSets, $limitsearchKeywords));
    }

    public function appStoreVersionLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AppStoreVersionLocalizationsDeleteInstance($id));
    }

    public function appStoreVersionLocalizationsUpdateInstance(
        string $id,
        AppStoreVersionLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsUpdateInstance($id, $payload));
    }

    public function appStoreVersionLocalizationsAppPreviewSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsAppPreviewSetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterpreviewType
     * @param  array<int, string>|null  $filterappCustomProductPageLocalization
     * @param  array<int, string>|null  $filterappStoreVersionExperimentTreatmentLocalization
     * @param  array<int, string>|null  $fieldsappPreviewSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappPreviews
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionLocalizationsAppPreviewSetsGetToManyRelated(
        string $id,
        ?array $filterpreviewType = null,
        ?array $filterappCustomProductPageLocalization = null,
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
        return $this->connector->send(new AppStoreVersionLocalizationsAppPreviewSetsGetToManyRelated($id, $filterpreviewType, $filterappCustomProductPageLocalization, $filterappStoreVersionExperimentTreatmentLocalization, $fieldsappPreviewSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappPreviews, $limit, $include, $limitappPreviews));
    }

    public function appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsAppScreenshotSetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterscreenshotDisplayType
     * @param  array<int, string>|null  $filterappCustomProductPageLocalization
     * @param  array<int, string>|null  $filterappStoreVersionExperimentTreatmentLocalization
     * @param  array<int, string>|null  $fieldsappScreenshotSets
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsappCustomProductPageLocalizations
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatmentLocalizations
     * @param  array<int, string>|null  $fieldsappScreenshots
     * @param  array<int, string>|null  $include
     */
    public function appStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated(
        string $id,
        ?array $filterscreenshotDisplayType = null,
        ?array $filterappCustomProductPageLocalization = null,
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
        return $this->connector->send(new AppStoreVersionLocalizationsAppScreenshotSetsGetToManyRelated($id, $filterscreenshotDisplayType, $filterappCustomProductPageLocalization, $filterappStoreVersionExperimentTreatmentLocalization, $fieldsappScreenshotSets, $fieldsappStoreVersionLocalizations, $fieldsappCustomProductPageLocalizations, $fieldsappStoreVersionExperimentTreatmentLocalizations, $fieldsappScreenshots, $limit, $include, $limitappScreenshots));
    }

    public function appStoreVersionLocalizationsSearchKeywordsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsSearchKeywordsGetToManyRelationship($id, $limit));
    }

    public function appStoreVersionLocalizationsSearchKeywordsCreateToManyRelationship(
        string $id,
        AppStoreVersionLocalizationSearchKeywordsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsSearchKeywordsCreateToManyRelationship($id, $payload));
    }

    public function appStoreVersionLocalizationsSearchKeywordsDeleteToManyRelationship(
        string $id,
        AppStoreVersionLocalizationSearchKeywordsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsSearchKeywordsDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappKeywords
     */
    public function appStoreVersionLocalizationsSearchKeywordsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterlocale = null,
        ?array $fieldsappKeywords = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppStoreVersionLocalizationsSearchKeywordsGetToManyRelated($id, $filterplatform, $filterlocale, $fieldsappKeywords, $limit));
    }
}
