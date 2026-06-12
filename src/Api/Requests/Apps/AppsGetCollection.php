<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_getCollection
 */
class AppsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/apps';
    }

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
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filterbundleId = null,
        /** @var array<int, string>|null */
        protected ?array $filtersku = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionsAppStoreState = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionsPlatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersionsAppVersionState = null,
        /** @var array<int, string>|null */
        protected ?array $filterreviewSubmissionsState = null,
        /** @var array<int, string>|null */
        protected ?array $filterreviewSubmissionsPlatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        protected ?bool $existsgameCenterEnabledVersions = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildIcons = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciProducts = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspreReleaseVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaLicenseAgreements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappInfos = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClips = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsendUserLicenseAgreements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterEnabledVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspromotedPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEvents = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsreviewSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGracePeriods = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperiments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsandroidToIosAppMappingDetails = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitandroidToIosAppMappingDetails = null,
        protected ?int $limitappClips = null,
        protected ?int $limitappCustomProductPages = null,
        protected ?int $limitappEncryptionDeclarations = null,
        protected ?int $limitappEvents = null,
        protected ?int $limitappInfos = null,
        protected ?int $limitappStoreVersionExperimentsV2 = null,
        protected ?int $limitappStoreVersions = null,
        protected ?int $limitbetaAppLocalizations = null,
        protected ?int $limitbetaGroups = null,
        protected ?int $limitbuilds = null,
        protected ?int $limitgameCenterEnabledVersions = null,
        protected ?int $limitinAppPurchases = null,
        protected ?int $limitinAppPurchasesV2 = null,
        protected ?int $limitpreReleaseVersions = null,
        protected ?int $limitpromotedPurchases = null,
        protected ?int $limitreviewSubmissions = null,
        protected ?int $limitsubscriptionGroups = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[bundleId]' => $this->filterbundleId,
            'filter[sku]' => $this->filtersku,
            'filter[appStoreVersions.appStoreState]' => $this->filterappStoreVersionsAppStoreState,
            'filter[appStoreVersions.platform]' => $this->filterappStoreVersionsPlatform,
            'filter[appStoreVersions.appVersionState]' => $this->filterappStoreVersionsAppVersionState,
            'filter[reviewSubmissions.state]' => $this->filterreviewSubmissionsState,
            'filter[reviewSubmissions.platform]' => $this->filterreviewSubmissionsPlatform,
            'filter[appStoreVersions]' => $this->filterappStoreVersions,
            'filter[id]' => $this->filterid,
            'exists[gameCenterEnabledVersions]' => $this->existsgameCenterEnabledVersions,
            'sort' => $this->sort,
            'fields[apps]' => $this->fieldsapps,
            'fields[appEncryptionDeclarations]' => $this->fieldsappEncryptionDeclarations,
            'fields[buildIcons]' => $this->fieldsbuildIcons,
            'fields[ciProducts]' => $this->fieldsciProducts,
            'fields[betaGroups]' => $this->fieldsbetaGroups,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[preReleaseVersions]' => $this->fieldspreReleaseVersions,
            'fields[betaAppLocalizations]' => $this->fieldsbetaAppLocalizations,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[betaLicenseAgreements]' => $this->fieldsbetaLicenseAgreements,
            'fields[betaAppReviewDetails]' => $this->fieldsbetaAppReviewDetails,
            'fields[appInfos]' => $this->fieldsappInfos,
            'fields[appClips]' => $this->fieldsappClips,
            'fields[endUserLicenseAgreements]' => $this->fieldsendUserLicenseAgreements,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'fields[subscriptionGroups]' => $this->fieldssubscriptionGroups,
            'fields[gameCenterEnabledVersions]' => $this->fieldsgameCenterEnabledVersions,
            'fields[appCustomProductPages]' => $this->fieldsappCustomProductPages,
            'fields[promotedPurchases]' => $this->fieldspromotedPurchases,
            'fields[appEvents]' => $this->fieldsappEvents,
            'fields[reviewSubmissions]' => $this->fieldsreviewSubmissions,
            'fields[subscriptionGracePeriods]' => $this->fieldssubscriptionGracePeriods,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[appStoreVersionExperiments]' => $this->fieldsappStoreVersionExperiments,
            'fields[androidToIosAppMappingDetails]' => $this->fieldsandroidToIosAppMappingDetails,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[androidToIosAppMappingDetails]' => $this->limitandroidToIosAppMappingDetails,
            'limit[appClips]' => $this->limitappClips,
            'limit[appCustomProductPages]' => $this->limitappCustomProductPages,
            'limit[appEncryptionDeclarations]' => $this->limitappEncryptionDeclarations,
            'limit[appEvents]' => $this->limitappEvents,
            'limit[appInfos]' => $this->limitappInfos,
            'limit[appStoreVersionExperimentsV2]' => $this->limitappStoreVersionExperimentsV2,
            'limit[appStoreVersions]' => $this->limitappStoreVersions,
            'limit[betaAppLocalizations]' => $this->limitbetaAppLocalizations,
            'limit[betaGroups]' => $this->limitbetaGroups,
            'limit[builds]' => $this->limitbuilds,
            'limit[gameCenterEnabledVersions]' => $this->limitgameCenterEnabledVersions,
            'limit[inAppPurchases]' => $this->limitinAppPurchases,
            'limit[inAppPurchasesV2]' => $this->limitinAppPurchasesV2,
            'limit[preReleaseVersions]' => $this->limitpreReleaseVersions,
            'limit[promotedPurchases]' => $this->limitpromotedPurchases,
            'limit[reviewSubmissions]' => $this->limitreviewSubmissions,
            'limit[subscriptionGroups]' => $this->limitsubscriptionGroups,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
