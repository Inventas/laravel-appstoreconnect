<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppBetaTestersLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppPromotedPurchasesLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\AppUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAccessibilityDeclarationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAccessibilityDeclarationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAlternativeDistributionKeyGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAlternativeDistributionKeyGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAnalyticsReportRequestsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAnalyticsReportRequestsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAndroidToIosAppMappingDetailsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAndroidToIosAppMappingDetailsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppAvailabilityV2GetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppAvailabilityV2GetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppClipsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppClipsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppCustomProductPagesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppCustomProductPagesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppEncryptionDeclarationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppEncryptionDeclarationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppEventsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppEventsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppInfosGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppInfosGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppPricePointsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppPricePointsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppPriceScheduleGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppPriceScheduleGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppStoreVersionExperimentsV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppStoreVersionExperimentsV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppStoreVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppStoreVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppTagsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsAppTagsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBackgroundAssetsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBackgroundAssetsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaAppLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaAppLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaAppReviewDetailGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaAppReviewDetailGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaFeedbackCrashSubmissionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaFeedbackCrashSubmissionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaFeedbackScreenshotSubmissionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaFeedbackScreenshotSubmissionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaGroupsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaGroupsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaLicenseAgreementGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaLicenseAgreementGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaTestersDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBetaTesterUsagesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBuildsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBuildsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBuildUploadsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsBuildUploadsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsCiProductGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsCiProductGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsCustomerReviewsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsCustomerReviewsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsCustomerReviewSummarizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsEndUserLicenseAgreementGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsEndUserLicenseAgreementGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGameCenterDetailGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGameCenterDetailGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGameCenterEnabledVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGameCenterEnabledVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsInAppPurchasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsInAppPurchasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsInAppPurchasesV2GetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsInAppPurchasesV2GetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsMarketplaceSearchDetailGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsMarketplaceSearchDetailGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsPerfPowerMetricsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsPreReleaseVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsPreReleaseVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsPromotedPurchasesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsPromotedPurchasesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsPromotedPurchasesReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsReviewSubmissionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsReviewSubmissionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsSearchKeywordsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsSearchKeywordsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsSubscriptionGracePeriodGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsSubscriptionGracePeriodGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsSubscriptionGroupsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsSubscriptionGroupsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsWebhooksGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Apps\AppsWebhooksGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Apps extends BaseResource
{
    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterbundleId
     * @param  array<int, string>|null  $filtersku
     * @param  array<int, string>|null  $filterappStoreVersionsAppStoreState
     * @param  array<int, string>|null  $filterappStoreVersionsPlatform
     * @param  array<int, string>|null  $filterappStoreVersionsAppVersionState
     * @param  array<int, string>|null  $filterreviewSubmissionsState
     * @param  array<int, string>|null  $filterreviewSubmissionsPlatform
     * @param  array<int, string>|null  $filterappStoreVersions
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsbuildIcons
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldsgameCenterEnabledVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldssubscriptionGracePeriods
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     * @param  array<int, string>|null  $include
     */
    public function appsGetCollection(
        ?array $filtername = null,
        ?array $filterbundleId = null,
        ?array $filtersku = null,
        ?array $filterappStoreVersionsAppStoreState = null,
        ?array $filterappStoreVersionsPlatform = null,
        ?array $filterappStoreVersionsAppVersionState = null,
        ?array $filterreviewSubmissionsState = null,
        ?array $filterreviewSubmissionsPlatform = null,
        ?array $filterappStoreVersions = null,
        ?array $filterid = null,
        ?bool $existsgameCenterEnabledVersions = null,
        ?array $sort = null,
        ?array $fieldsapps = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsbuildIcons = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbetaAppLocalizations = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaLicenseAgreements = null,
        ?array $fieldsbetaAppReviewDetails = null,
        ?array $fieldsappInfos = null,
        ?array $fieldsappClips = null,
        ?array $fieldsendUserLicenseAgreements = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptionGroups = null,
        ?array $fieldsgameCenterEnabledVersions = null,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsreviewSubmissions = null,
        ?array $fieldssubscriptionGracePeriods = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsandroidToIosAppMappingDetails = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitandroidToIosAppMappingDetails = null,
        ?int $limitappClips = null,
        ?int $limitappCustomProductPages = null,
        ?int $limitappEncryptionDeclarations = null,
        ?int $limitappEvents = null,
        ?int $limitappInfos = null,
        ?int $limitappStoreVersionExperimentsV2 = null,
        ?int $limitappStoreVersions = null,
        ?int $limitbetaAppLocalizations = null,
        ?int $limitbetaGroups = null,
        ?int $limitbuilds = null,
        ?int $limitgameCenterEnabledVersions = null,
        ?int $limitinAppPurchases = null,
        ?int $limitinAppPurchasesV2 = null,
        ?int $limitpreReleaseVersions = null,
        ?int $limitpromotedPurchases = null,
        ?int $limitreviewSubmissions = null,
        ?int $limitsubscriptionGroups = null,
    ): Response {
        return $this->connector->send(new AppsGetCollection($filtername, $filterbundleId, $filtersku, $filterappStoreVersionsAppStoreState, $filterappStoreVersionsPlatform, $filterappStoreVersionsAppVersionState, $filterreviewSubmissionsState, $filterreviewSubmissionsPlatform, $filterappStoreVersions, $filterid, $existsgameCenterEnabledVersions, $sort, $fieldsapps, $fieldsappEncryptionDeclarations, $fieldsbuildIcons, $fieldsciProducts, $fieldsbetaGroups, $fieldsappStoreVersions, $fieldspreReleaseVersions, $fieldsbetaAppLocalizations, $fieldsbuilds, $fieldsbetaLicenseAgreements, $fieldsbetaAppReviewDetails, $fieldsappInfos, $fieldsappClips, $fieldsendUserLicenseAgreements, $fieldsinAppPurchases, $fieldssubscriptionGroups, $fieldsgameCenterEnabledVersions, $fieldsappCustomProductPages, $fieldspromotedPurchases, $fieldsappEvents, $fieldsreviewSubmissions, $fieldssubscriptionGracePeriods, $fieldsgameCenterDetails, $fieldsappStoreVersionExperiments, $fieldsandroidToIosAppMappingDetails, $limit, $include, $limitandroidToIosAppMappingDetails, $limitappClips, $limitappCustomProductPages, $limitappEncryptionDeclarations, $limitappEvents, $limitappInfos, $limitappStoreVersionExperimentsV2, $limitappStoreVersions, $limitbetaAppLocalizations, $limitbetaGroups, $limitbuilds, $limitgameCenterEnabledVersions, $limitinAppPurchases, $limitinAppPurchasesV2, $limitpreReleaseVersions, $limitpromotedPurchases, $limitreviewSubmissions, $limitsubscriptionGroups));
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsbuildIcons
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldsgameCenterEnabledVersions
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldssubscriptionGracePeriods
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     * @param  array<int, string>|null  $include
     */
    public function appsGetInstance(
        string $id,
        ?array $fieldsapps = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsbuildIcons = null,
        ?array $fieldsciProducts = null,
        ?array $fieldsbetaGroups = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldspreReleaseVersions = null,
        ?array $fieldsbetaAppLocalizations = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaLicenseAgreements = null,
        ?array $fieldsbetaAppReviewDetails = null,
        ?array $fieldsappInfos = null,
        ?array $fieldsappClips = null,
        ?array $fieldsendUserLicenseAgreements = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptionGroups = null,
        ?array $fieldsgameCenterEnabledVersions = null,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsreviewSubmissions = null,
        ?array $fieldssubscriptionGracePeriods = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsandroidToIosAppMappingDetails = null,
        ?array $include = null,
        ?int $limitandroidToIosAppMappingDetails = null,
        ?int $limitappClips = null,
        ?int $limitappCustomProductPages = null,
        ?int $limitappEncryptionDeclarations = null,
        ?int $limitappEvents = null,
        ?int $limitappInfos = null,
        ?int $limitappStoreVersionExperimentsV2 = null,
        ?int $limitappStoreVersions = null,
        ?int $limitbetaAppLocalizations = null,
        ?int $limitbetaGroups = null,
        ?int $limitbuilds = null,
        ?int $limitgameCenterEnabledVersions = null,
        ?int $limitinAppPurchases = null,
        ?int $limitinAppPurchasesV2 = null,
        ?int $limitpreReleaseVersions = null,
        ?int $limitpromotedPurchases = null,
        ?int $limitreviewSubmissions = null,
        ?int $limitsubscriptionGroups = null,
    ): Response {
        return $this->connector->send(new AppsGetInstance($id, $fieldsapps, $fieldsappEncryptionDeclarations, $fieldsbuildIcons, $fieldsciProducts, $fieldsbetaGroups, $fieldsappStoreVersions, $fieldspreReleaseVersions, $fieldsbetaAppLocalizations, $fieldsbuilds, $fieldsbetaLicenseAgreements, $fieldsbetaAppReviewDetails, $fieldsappInfos, $fieldsappClips, $fieldsendUserLicenseAgreements, $fieldsinAppPurchases, $fieldssubscriptionGroups, $fieldsgameCenterEnabledVersions, $fieldsappCustomProductPages, $fieldspromotedPurchases, $fieldsappEvents, $fieldsreviewSubmissions, $fieldssubscriptionGracePeriods, $fieldsgameCenterDetails, $fieldsappStoreVersionExperiments, $fieldsandroidToIosAppMappingDetails, $include, $limitandroidToIosAppMappingDetails, $limitappClips, $limitappCustomProductPages, $limitappEncryptionDeclarations, $limitappEvents, $limitappInfos, $limitappStoreVersionExperimentsV2, $limitappStoreVersions, $limitbetaAppLocalizations, $limitbetaGroups, $limitbuilds, $limitgameCenterEnabledVersions, $limitinAppPurchases, $limitinAppPurchasesV2, $limitpreReleaseVersions, $limitpromotedPurchases, $limitreviewSubmissions, $limitsubscriptionGroups));
    }

    public function appsUpdateInstance(
        string $id,
        AppUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppsUpdateInstance($id, $payload));
    }

    public function appsAccessibilityDeclarationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAccessibilityDeclarationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterdeviceFamily
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsaccessibilityDeclarations
     */
    public function appsAccessibilityDeclarationsGetToManyRelated(
        string $id,
        ?array $filterdeviceFamily = null,
        ?array $filterstate = null,
        ?array $fieldsaccessibilityDeclarations = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsAccessibilityDeclarationsGetToManyRelated($id, $filterdeviceFamily, $filterstate, $fieldsaccessibilityDeclarations, $limit));
    }

    public function appsAlternativeDistributionKeyGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsAlternativeDistributionKeyGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionKeys
     */
    public function appsAlternativeDistributionKeyGetToOneRelated(
        string $id,
        ?array $fieldsalternativeDistributionKeys = null,
    ): Response {
        return $this->connector->send(new AppsAlternativeDistributionKeyGetToOneRelated($id, $fieldsalternativeDistributionKeys));
    }

    public function appsAnalyticsReportRequestsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAnalyticsReportRequestsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filteraccessType
     * @param  array<int, string>|null  $fieldsanalyticsReportRequests
     * @param  array<int, string>|null  $fieldsanalyticsReports
     * @param  array<int, string>|null  $include
     */
    public function appsAnalyticsReportRequestsGetToManyRelated(
        string $id,
        ?array $filteraccessType = null,
        ?array $fieldsanalyticsReportRequests = null,
        ?array $fieldsanalyticsReports = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitreports = null,
    ): Response {
        return $this->connector->send(new AppsAnalyticsReportRequestsGetToManyRelated($id, $filteraccessType, $fieldsanalyticsReportRequests, $fieldsanalyticsReports, $limit, $include, $limitreports));
    }

    public function appsAndroidToIosAppMappingDetailsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAndroidToIosAppMappingDetailsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsandroidToIosAppMappingDetails
     */
    public function appsAndroidToIosAppMappingDetailsGetToManyRelated(
        string $id,
        ?array $fieldsandroidToIosAppMappingDetails = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsAndroidToIosAppMappingDetailsGetToManyRelated($id, $fieldsandroidToIosAppMappingDetails, $limit));
    }

    public function appsAppAvailabilityV2getToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsAppAvailabilityV2GetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappAvailabilities
     * @param  array<int, string>|null  $fieldsterritoryAvailabilities
     * @param  array<int, string>|null  $include
     */
    public function appsAppAvailabilityV2getToOneRelated(
        string $id,
        ?array $fieldsappAvailabilities = null,
        ?array $fieldsterritoryAvailabilities = null,
        ?array $include = null,
        ?int $limitterritoryAvailabilities = null,
    ): Response {
        return $this->connector->send(new AppsAppAvailabilityV2GetToOneRelated($id, $fieldsappAvailabilities, $fieldsterritoryAvailabilities, $include, $limitterritoryAvailabilities));
    }

    public function appsAppClipsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppClipsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterbundleId
     * @param  array<int, string>|null  $fieldsappClips
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $include
     */
    public function appsAppClipsGetToManyRelated(
        string $id,
        ?array $filterbundleId = null,
        ?array $fieldsappClips = null,
        ?array $fieldsapps = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappClipDefaultExperiences = null,
    ): Response {
        return $this->connector->send(new AppsAppClipsGetToManyRelated($id, $filterbundleId, $fieldsappClips, $fieldsapps, $fieldsappClipDefaultExperiences, $limit, $include, $limitappClipDefaultExperiences));
    }

    public function appsAppCustomProductPagesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppCustomProductPagesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtervisible
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $include
     */
    public function appsAppCustomProductPagesGetToManyRelated(
        string $id,
        ?array $filtervisible = null,
        ?array $fieldsappCustomProductPages = null,
        ?array $fieldsapps = null,
        ?array $fieldsappCustomProductPageVersions = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappCustomProductPageVersions = null,
    ): Response {
        return $this->connector->send(new AppsAppCustomProductPagesGetToManyRelated($id, $filtervisible, $fieldsappCustomProductPages, $fieldsapps, $fieldsappCustomProductPageVersions, $limit, $include, $limitappCustomProductPageVersions));
    }

    public function appsAppEncryptionDeclarationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppEncryptionDeclarationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     * @param  array<int, string>|null  $include
     */
    public function appsAppEncryptionDeclarationsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterbuilds = null,
        ?array $fieldsappEncryptionDeclarations = null,
        ?array $fieldsapps = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsappEncryptionDeclarationDocuments = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitbuilds = null,
    ): Response {
        return $this->connector->send(new AppsAppEncryptionDeclarationsGetToManyRelated($id, $filterplatform, $filterbuilds, $fieldsappEncryptionDeclarations, $fieldsapps, $fieldsbuilds, $fieldsappEncryptionDeclarationDocuments, $limit, $include, $limitbuilds));
    }

    public function appsAppEventsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppEventsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtereventState
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsappEvents
     * @param  array<int, string>|null  $fieldsappEventLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appsAppEventsGetToManyRelated(
        string $id,
        ?array $filtereventState = null,
        ?array $filterid = null,
        ?array $fieldsappEvents = null,
        ?array $fieldsappEventLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new AppsAppEventsGetToManyRelated($id, $filtereventState, $filterid, $fieldsappEvents, $fieldsappEventLocalizations, $limit, $include, $limitlocalizations));
    }

    public function appsAppInfosGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppInfosGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsappInfos
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsageRatingDeclarations
     * @param  array<int, string>|null  $fieldsappInfoLocalizations
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function appsAppInfosGetToManyRelated(
        string $id,
        ?array $fieldsappInfos = null,
        ?array $fieldsapps = null,
        ?array $fieldsageRatingDeclarations = null,
        ?array $fieldsappInfoLocalizations = null,
        ?array $fieldsappCategories = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappInfoLocalizations = null,
    ): Response {
        return $this->connector->send(new AppsAppInfosGetToManyRelated($id, $fieldsappInfos, $fieldsapps, $fieldsageRatingDeclarations, $fieldsappInfoLocalizations, $fieldsappCategories, $limit, $include, $limitappInfoLocalizations));
    }

    public function appsAppPricePointsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppPricePointsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appsAppPricePointsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsappPricePoints = null,
        ?array $fieldsapps = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsAppPricePointsGetToManyRelated($id, $filterterritory, $fieldsappPricePoints, $fieldsapps, $fieldsterritories, $limit, $include));
    }

    public function appsAppPriceScheduleGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsAppPriceScheduleGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsappPriceSchedules
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsappPrices
     * @param  array<int, string>|null  $include
     */
    public function appsAppPriceScheduleGetToOneRelated(
        string $id,
        ?array $fieldsappPriceSchedules = null,
        ?array $fieldsapps = null,
        ?array $fieldsterritories = null,
        ?array $fieldsappPrices = null,
        ?array $include = null,
        ?int $limitmanualPrices = null,
        ?int $limitautomaticPrices = null,
    ): Response {
        return $this->connector->send(new AppsAppPriceScheduleGetToOneRelated($id, $fieldsappPriceSchedules, $fieldsapps, $fieldsterritories, $fieldsappPrices, $include, $limitmanualPrices, $limitautomaticPrices));
    }

    public function appsAppStoreVersionExperimentsV2getToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppStoreVersionExperimentsV2GetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsappStoreVersionExperimentTreatments
     * @param  array<int, string>|null  $include
     */
    public function appsAppStoreVersionExperimentsV2getToManyRelated(
        string $id,
        ?array $filterstate = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsapps = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsappStoreVersionExperimentTreatments = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcontrolVersions = null,
        ?int $limitappStoreVersionExperimentTreatments = null,
    ): Response {
        return $this->connector->send(new AppsAppStoreVersionExperimentsV2GetToManyRelated($id, $filterstate, $fieldsappStoreVersionExperiments, $fieldsapps, $fieldsappStoreVersions, $fieldsappStoreVersionExperimentTreatments, $limit, $include, $limitcontrolVersions, $limitappStoreVersionExperimentTreatments));
    }

    public function appsAppStoreVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppStoreVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterversionString
     * @param  array<int, string>|null  $filterappStoreState
     * @param  array<int, string>|null  $filterappVersionState
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappStoreVersionLocalizations
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappStoreVersionPhasedReleases
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsroutingAppCoverages
     * @param  array<int, string>|null  $fieldsappStoreReviewDetails
     * @param  array<int, string>|null  $fieldsappStoreVersionSubmissions
     * @param  array<int, string>|null  $fieldsappClipDefaultExperiences
     * @param  array<int, string>|null  $fieldsappStoreVersionExperiments
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $include
     */
    public function appsAppStoreVersionsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterversionString = null,
        ?array $filterappStoreState = null,
        ?array $filterappVersionState = null,
        ?array $filterid = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsapps = null,
        ?array $fieldsappStoreVersionLocalizations = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsappStoreVersionPhasedReleases = null,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsroutingAppCoverages = null,
        ?array $fieldsappStoreReviewDetails = null,
        ?array $fieldsappStoreVersionSubmissions = null,
        ?array $fieldsappClipDefaultExperiences = null,
        ?array $fieldsappStoreVersionExperiments = null,
        ?array $fieldsalternativeDistributionPackages = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitappStoreVersionLocalizations = null,
        ?int $limitappStoreVersionExperiments = null,
        ?int $limitappStoreVersionExperimentsV2 = null,
    ): Response {
        return $this->connector->send(new AppsAppStoreVersionsGetToManyRelated($id, $filterplatform, $filterversionString, $filterappStoreState, $filterappVersionState, $filterid, $fieldsappStoreVersions, $fieldsapps, $fieldsappStoreVersionLocalizations, $fieldsbuilds, $fieldsappStoreVersionPhasedReleases, $fieldsgameCenterAppVersions, $fieldsroutingAppCoverages, $fieldsappStoreReviewDetails, $fieldsappStoreVersionSubmissions, $fieldsappClipDefaultExperiences, $fieldsappStoreVersionExperiments, $fieldsalternativeDistributionPackages, $limit, $include, $limitappStoreVersionLocalizations, $limitappStoreVersionExperiments, $limitappStoreVersionExperimentsV2));
    }

    public function appsAppTagsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsAppTagsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtervisibleInAppStore
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsappTags
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appsAppTagsGetToManyRelated(
        string $id,
        ?array $filtervisibleInAppStore = null,
        ?array $sort = null,
        ?array $fieldsappTags = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitterritories = null,
    ): Response {
        return $this->connector->send(new AppsAppTagsGetToManyRelated($id, $filtervisibleInAppStore, $sort, $fieldsappTags, $fieldsterritories, $limit, $include, $limitterritories));
    }

    public function appsBackgroundAssetsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBackgroundAssetsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterassetPackIdentifier
     * @param  array<int, string>|null  $filterversionsLocale
     * @param  array<int, string>|null  $filterversionsPlatforms
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbackgroundAssets
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function appsBackgroundAssetsGetToManyRelated(
        string $id,
        ?array $filterarchived = null,
        ?array $filterassetPackIdentifier = null,
        ?array $filterversionsLocale = null,
        ?array $filterversionsPlatforms = null,
        ?array $sort = null,
        ?array $fieldsbackgroundAssets = null,
        ?array $fieldsapps = null,
        ?array $fieldsbackgroundAssetVersions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsBackgroundAssetsGetToManyRelated($id, $filterarchived, $filterassetPackIdentifier, $filterversionsLocale, $filterversionsPlatforms, $sort, $fieldsbackgroundAssets, $fieldsapps, $fieldsbackgroundAssetVersions, $limit, $include));
    }

    public function appsBetaAppLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBetaAppLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppLocalizations
     */
    public function appsBetaAppLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsbetaAppLocalizations = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsBetaAppLocalizationsGetToManyRelated($id, $fieldsbetaAppLocalizations, $limit));
    }

    public function appsBetaAppReviewDetailGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsBetaAppReviewDetailGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     */
    public function appsBetaAppReviewDetailGetToOneRelated(
        string $id,
        ?array $fieldsbetaAppReviewDetails = null,
    ): Response {
        return $this->connector->send(new AppsBetaAppReviewDetailGetToOneRelated($id, $fieldsbetaAppReviewDetails));
    }

    public function appsBetaFeedbackCrashSubmissionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBetaFeedbackCrashSubmissionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterdeviceModel
     * @param  array<int, string>|null  $filterosVersion
     * @param  array<int, string>|null  $filterappPlatform
     * @param  array<int, string>|null  $filterdevicePlatform
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $filterbuildPreReleaseVersion
     * @param  array<int, string>|null  $filtertester
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaFeedbackCrashSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function appsBetaFeedbackCrashSubmissionsGetToManyRelated(
        string $id,
        ?array $filterdeviceModel = null,
        ?array $filterosVersion = null,
        ?array $filterappPlatform = null,
        ?array $filterdevicePlatform = null,
        ?array $filterbuild = null,
        ?array $filterbuildPreReleaseVersion = null,
        ?array $filtertester = null,
        ?array $sort = null,
        ?array $fieldsbetaFeedbackCrashSubmissions = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaTesters = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsBetaFeedbackCrashSubmissionsGetToManyRelated($id, $filterdeviceModel, $filterosVersion, $filterappPlatform, $filterdevicePlatform, $filterbuild, $filterbuildPreReleaseVersion, $filtertester, $sort, $fieldsbetaFeedbackCrashSubmissions, $fieldsbuilds, $fieldsbetaTesters, $limit, $include));
    }

    public function appsBetaFeedbackScreenshotSubmissionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBetaFeedbackScreenshotSubmissionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterdeviceModel
     * @param  array<int, string>|null  $filterosVersion
     * @param  array<int, string>|null  $filterappPlatform
     * @param  array<int, string>|null  $filterdevicePlatform
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $filterbuildPreReleaseVersion
     * @param  array<int, string>|null  $filtertester
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbetaFeedbackScreenshotSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $include
     */
    public function appsBetaFeedbackScreenshotSubmissionsGetToManyRelated(
        string $id,
        ?array $filterdeviceModel = null,
        ?array $filterosVersion = null,
        ?array $filterappPlatform = null,
        ?array $filterdevicePlatform = null,
        ?array $filterbuild = null,
        ?array $filterbuildPreReleaseVersion = null,
        ?array $filtertester = null,
        ?array $sort = null,
        ?array $fieldsbetaFeedbackScreenshotSubmissions = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbetaTesters = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsBetaFeedbackScreenshotSubmissionsGetToManyRelated($id, $filterdeviceModel, $filterosVersion, $filterappPlatform, $filterdevicePlatform, $filterbuild, $filterbuildPreReleaseVersion, $filtertester, $sort, $fieldsbetaFeedbackScreenshotSubmissions, $fieldsbuilds, $fieldsbetaTesters, $limit, $include));
    }

    public function appsBetaGroupsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBetaGroupsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaGroups
     */
    public function appsBetaGroupsGetToManyRelated(
        string $id,
        ?array $fieldsbetaGroups = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsBetaGroupsGetToManyRelated($id, $fieldsbetaGroups, $limit));
    }

    public function appsBetaLicenseAgreementGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsBetaLicenseAgreementGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     */
    public function appsBetaLicenseAgreementGetToOneRelated(
        string $id,
        ?array $fieldsbetaLicenseAgreements = null,
    ): Response {
        return $this->connector->send(new AppsBetaLicenseAgreementGetToOneRelated($id, $fieldsbetaLicenseAgreements));
    }

    public function appsBetaTestersDeleteToManyRelationship(
        string $id,
        AppBetaTestersLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppsBetaTestersDeleteToManyRelationship($id, $payload));
    }

    public function appsBuildUploadsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBuildUploadsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtercfBundleShortVersionString
     * @param  array<int, string>|null  $filtercfBundleVersion
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsbuildUploadFiles
     * @param  array<int, string>|null  $include
     */
    public function appsBuildUploadsGetToManyRelated(
        string $id,
        ?array $filtercfBundleShortVersionString = null,
        ?array $filtercfBundleVersion = null,
        ?array $filterplatform = null,
        ?array $filterstate = null,
        ?array $sort = null,
        ?array $fieldsbuildUploads = null,
        ?array $fieldsbuilds = null,
        ?array $fieldsbuildUploadFiles = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsBuildUploadsGetToManyRelated($id, $filtercfBundleShortVersionString, $filtercfBundleVersion, $filterplatform, $filterstate, $sort, $fieldsbuildUploads, $fieldsbuilds, $fieldsbuildUploadFiles, $limit, $include));
    }

    public function appsBuildsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBuildsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsbuilds
     */
    public function appsBuildsGetToManyRelated(string $id, ?array $fieldsbuilds = null, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsBuildsGetToManyRelated($id, $fieldsbuilds, $limit));
    }

    public function appsCiProductGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsCiProductGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function appsCiProductGetToOneRelated(
        string $id,
        ?array $fieldsciProducts = null,
        ?array $fieldsapps = null,
        ?array $fieldsbundleIds = null,
        ?array $fieldsscmRepositories = null,
        ?array $include = null,
        ?int $limitprimaryRepositories = null,
    ): Response {
        return $this->connector->send(new AppsCiProductGetToOneRelated($id, $fieldsciProducts, $fieldsapps, $fieldsbundleIds, $fieldsscmRepositories, $include, $limitprimaryRepositories));
    }

    /**
     * @param  array<int, string>  $filterplatform
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldscustomerReviewSummarizations
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appsCustomerReviewSummarizationsGetToManyRelated(
        string $id,
        array $filterplatform,
        ?array $filterterritory = null,
        ?array $fieldscustomerReviewSummarizations = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsCustomerReviewSummarizationsGetToManyRelated($id, $filterplatform, $filterterritory, $fieldscustomerReviewSummarizations, $fieldsterritories, $limit, $include));
    }

    public function appsCustomerReviewsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsCustomerReviewsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filterrating
     * @param  array<int, string>|null  $filterreviewTerritory
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appsCustomerReviewsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $filterrating = null,
        ?array $filterreviewTerritory = null,
        ?bool $existspublishedResponse = null,
        ?array $sort = null,
        ?array $fieldscustomerReviews = null,
        ?array $fieldscustomerReviewResponses = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsCustomerReviewsGetToManyRelated($id, $filterterritory, $filterrating, $filterreviewTerritory, $existspublishedResponse, $sort, $fieldscustomerReviews, $fieldscustomerReviewResponses, $fieldsterritories, $limit, $include));
    }

    public function appsEndUserLicenseAgreementGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsEndUserLicenseAgreementGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     */
    public function appsEndUserLicenseAgreementGetToOneRelated(
        string $id,
        ?array $fieldsendUserLicenseAgreements = null,
    ): Response {
        return $this->connector->send(new AppsEndUserLicenseAgreementGetToOneRelated($id, $fieldsendUserLicenseAgreements));
    }

    public function appsGameCenterDetailGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsGameCenterDetailGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function appsGameCenterDetailGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsapps = null,
        ?array $fieldsgameCenterAppVersions = null,
        ?array $fieldsgameCenterGroups = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterActivities = null,
        ?array $fieldsgameCenterChallenges = null,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterActivityVersionReleases = null,
        ?array $fieldsgameCenterChallengeVersionReleases = null,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $fieldsappStoreVersions = null,
        ?array $include = null,
        ?int $limitgameCenterAppVersions = null,
        ?int $limitgameCenterLeaderboards = null,
        ?int $limitgameCenterLeaderboardsV2 = null,
        ?int $limitgameCenterLeaderboardSets = null,
        ?int $limitgameCenterLeaderboardSetsV2 = null,
        ?int $limitgameCenterAchievements = null,
        ?int $limitgameCenterAchievementsV2 = null,
        ?int $limitgameCenterActivities = null,
        ?int $limitgameCenterChallenges = null,
        ?int $limitachievementReleases = null,
        ?int $limitactivityReleases = null,
        ?int $limitchallengeReleases = null,
        ?int $limitleaderboardReleases = null,
        ?int $limitleaderboardSetReleases = null,
        ?int $limitchallengesMinimumPlatformVersions = null,
    ): Response {
        return $this->connector->send(new AppsGameCenterDetailGetToOneRelated($id, $fieldsgameCenterDetails, $fieldsapps, $fieldsgameCenterAppVersions, $fieldsgameCenterGroups, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterAchievements, $fieldsgameCenterActivities, $fieldsgameCenterChallenges, $fieldsgameCenterAchievementReleases, $fieldsgameCenterActivityVersionReleases, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterLeaderboardSetReleases, $fieldsappStoreVersions, $include, $limitgameCenterAppVersions, $limitgameCenterLeaderboards, $limitgameCenterLeaderboardsV2, $limitgameCenterLeaderboardSets, $limitgameCenterLeaderboardSetsV2, $limitgameCenterAchievements, $limitgameCenterAchievementsV2, $limitgameCenterActivities, $limitgameCenterChallenges, $limitachievementReleases, $limitactivityReleases, $limitchallengeReleases, $limitleaderboardReleases, $limitleaderboardSetReleases, $limitchallengesMinimumPlatformVersions));
    }

    public function appsGameCenterEnabledVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsGameCenterEnabledVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterversionString
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsgameCenterEnabledVersions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function appsGameCenterEnabledVersionsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterversionString = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsgameCenterEnabledVersions = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcompatibleVersions = null,
    ): Response {
        return $this->connector->send(new AppsGameCenterEnabledVersionsGetToManyRelated($id, $filterplatform, $filterversionString, $filterid, $sort, $fieldsgameCenterEnabledVersions, $fieldsapps, $limit, $include, $limitcompatibleVersions));
    }

    public function appsInAppPurchasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsInAppPurchasesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterinAppPurchaseType
     * @param  array<int, string>|null  $filtercanBeSubmitted
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function appsInAppPurchasesGetToManyRelated(
        string $id,
        ?array $filterinAppPurchaseType = null,
        ?array $filtercanBeSubmitted = null,
        ?array $sort = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitapps = null,
    ): Response {
        return $this->connector->send(new AppsInAppPurchasesGetToManyRelated($id, $filterinAppPurchaseType, $filtercanBeSubmitted, $sort, $fieldsinAppPurchases, $fieldsapps, $limit, $include, $limitapps));
    }

    public function appsInAppPurchasesV2getToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsInAppPurchasesV2GetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterproductId
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $filterinAppPurchaseType
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
     * @param  array<int, string>|null  $fieldsinAppPurchaseContents
     * @param  array<int, string>|null  $fieldsinAppPurchaseAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchasePriceSchedules
     * @param  array<int, string>|null  $fieldsinAppPurchaseAvailabilities
     * @param  array<int, string>|null  $fieldsinAppPurchaseImages
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function appsInAppPurchasesV2getToManyRelated(
        string $id,
        ?array $filterproductId = null,
        ?array $filtername = null,
        ?array $filterstate = null,
        ?array $filterinAppPurchaseType = null,
        ?array $sort = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldsinAppPurchaseLocalizations = null,
        ?array $fieldsinAppPurchaseContents = null,
        ?array $fieldsinAppPurchaseAppStoreReviewScreenshots = null,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsinAppPurchasePriceSchedules = null,
        ?array $fieldsinAppPurchaseAvailabilities = null,
        ?array $fieldsinAppPurchaseImages = null,
        ?array $fieldsinAppPurchaseOfferCodes = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitinAppPurchaseLocalizations = null,
        ?int $limitimages = null,
        ?int $limitofferCodes = null,
    ): Response {
        return $this->connector->send(new AppsInAppPurchasesV2GetToManyRelated($id, $filterproductId, $filtername, $filterstate, $filterinAppPurchaseType, $sort, $fieldsinAppPurchases, $fieldsinAppPurchaseLocalizations, $fieldsinAppPurchaseContents, $fieldsinAppPurchaseAppStoreReviewScreenshots, $fieldspromotedPurchases, $fieldsinAppPurchasePriceSchedules, $fieldsinAppPurchaseAvailabilities, $fieldsinAppPurchaseImages, $fieldsinAppPurchaseOfferCodes, $limit, $include, $limitinAppPurchaseLocalizations, $limitimages, $limitofferCodes));
    }

    public function appsMarketplaceSearchDetailGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsMarketplaceSearchDetailGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsmarketplaceSearchDetails
     */
    public function appsMarketplaceSearchDetailGetToOneRelated(
        string $id,
        ?array $fieldsmarketplaceSearchDetails = null,
    ): Response {
        return $this->connector->send(new AppsMarketplaceSearchDetailGetToOneRelated($id, $fieldsmarketplaceSearchDetails));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filtermetricType
     * @param  array<int, string>|null  $filterdeviceType
     */
    public function appsPerfPowerMetricsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filtermetricType = null,
        ?array $filterdeviceType = null,
    ): Response {
        return $this->connector->send(new AppsPerfPowerMetricsGetToManyRelated($id, $filterplatform, $filtermetricType, $filterdeviceType));
    }

    public function appsPreReleaseVersionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsPreReleaseVersionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     */
    public function appsPreReleaseVersionsGetToManyRelated(
        string $id,
        ?array $fieldspreReleaseVersions = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsPreReleaseVersionsGetToManyRelated($id, $fieldspreReleaseVersions, $limit));
    }

    public function appsPromotedPurchasesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsPromotedPurchasesGetToManyRelationship($id, $limit));
    }

    public function appsPromotedPurchasesReplaceToManyRelationship(
        string $id,
        AppPromotedPurchasesLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new AppsPromotedPurchasesReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function appsPromotedPurchasesGetToManyRelated(
        string $id,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsPromotedPurchasesGetToManyRelated($id, $fieldspromotedPurchases, $fieldsinAppPurchases, $fieldssubscriptions, $limit, $include));
    }

    public function appsReviewSubmissionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsReviewSubmissionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsreviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsreviewSubmissionItems
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function appsReviewSubmissionsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterstate = null,
        ?array $fieldsreviewSubmissions = null,
        ?array $fieldsapps = null,
        ?array $fieldsreviewSubmissionItems = null,
        ?array $fieldsappStoreVersions = null,
        ?array $fieldsactors = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limititems = null,
    ): Response {
        return $this->connector->send(new AppsReviewSubmissionsGetToManyRelated($id, $filterplatform, $filterstate, $fieldsreviewSubmissions, $fieldsapps, $fieldsreviewSubmissionItems, $fieldsappStoreVersions, $fieldsactors, $limit, $include, $limititems));
    }

    public function appsSearchKeywordsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsSearchKeywordsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterlocale
     * @param  array<int, string>|null  $fieldsappKeywords
     */
    public function appsSearchKeywordsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterlocale = null,
        ?array $fieldsappKeywords = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsSearchKeywordsGetToManyRelated($id, $filterplatform, $filterlocale, $fieldsappKeywords, $limit));
    }

    public function appsSubscriptionGracePeriodGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppsSubscriptionGracePeriodGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGracePeriods
     */
    public function appsSubscriptionGracePeriodGetToOneRelated(
        string $id,
        ?array $fieldssubscriptionGracePeriods = null,
    ): Response {
        return $this->connector->send(new AppsSubscriptionGracePeriodGetToOneRelated($id, $fieldssubscriptionGracePeriods));
    }

    public function appsSubscriptionGroupsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsSubscriptionGroupsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filtersubscriptionsState
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $include
     */
    public function appsSubscriptionGroupsGetToManyRelated(
        string $id,
        ?array $filterreferenceName = null,
        ?array $filtersubscriptionsState = null,
        ?array $sort = null,
        ?array $fieldssubscriptionGroups = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionGroupLocalizations = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitsubscriptions = null,
        ?int $limitsubscriptionGroupLocalizations = null,
    ): Response {
        return $this->connector->send(new AppsSubscriptionGroupsGetToManyRelated($id, $filterreferenceName, $filtersubscriptionsState, $sort, $fieldssubscriptionGroups, $fieldssubscriptions, $fieldssubscriptionGroupLocalizations, $limit, $include, $limitsubscriptions, $limitsubscriptionGroupLocalizations));
    }

    public function appsWebhooksGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppsWebhooksGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldswebhooks
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function appsWebhooksGetToManyRelated(
        string $id,
        ?array $fieldswebhooks = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppsWebhooksGetToManyRelated($id, $fieldswebhooks, $fieldsapps, $limit, $include));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     */
    public function appsBetaTesterUsagesGetMetrics(
        string $id,
        ?string $period = null,
        ?array $groupBy = null,
        ?string $filterbetaTesters = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppsBetaTesterUsagesGetMetrics($id, $period, $groupBy, $filterbetaTesters, $limit));
    }
}
