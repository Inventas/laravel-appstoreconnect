<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppRelationships
 */
class AppRelationships extends SpatieData
{
    public function __construct(
        public AppRelationshipsAccessibilityDeclarations|Optional $accessibilityDeclarations = new Optional,
        public AppRelationshipsAppEncryptionDeclarations|Optional $appEncryptionDeclarations = new Optional,
        public AppRelationshipsAppStoreIcon|Optional $appStoreIcon = new Optional,
        public AppRelationshipsCiProduct|Optional $ciProduct = new Optional,
        public AppRelationshipsBetaTesters|Optional $betaTesters = new Optional,
        public AppRelationshipsBetaGroups|Optional $betaGroups = new Optional,
        public AppRelationshipsAppStoreVersions|Optional $appStoreVersions = new Optional,
        public AppRelationshipsAppTags|Optional $appTags = new Optional,
        public AppRelationshipsPreReleaseVersions|Optional $preReleaseVersions = new Optional,
        public AppRelationshipsBetaAppLocalizations|Optional $betaAppLocalizations = new Optional,
        public AppRelationshipsBuilds|Optional $builds = new Optional,
        public AppRelationshipsBetaLicenseAgreement|Optional $betaLicenseAgreement = new Optional,
        public AppRelationshipsBetaAppReviewDetail|Optional $betaAppReviewDetail = new Optional,
        public AppRelationshipsAppInfos|Optional $appInfos = new Optional,
        public AppRelationshipsAppClips|Optional $appClips = new Optional,
        public AppRelationshipsAppPricePoints|Optional $appPricePoints = new Optional,
        public AppRelationshipsEndUserLicenseAgreement|Optional $endUserLicenseAgreement = new Optional,
        public AppRelationshipsAppPriceSchedule|Optional $appPriceSchedule = new Optional,
        public AppRelationshipsAppAvailabilityV2|Optional $appAvailabilityV2 = new Optional,
        public AppRelationshipsInAppPurchases|Optional $inAppPurchases = new Optional,
        public AppRelationshipsSubscriptionGroups|Optional $subscriptionGroups = new Optional,
        public AppRelationshipsGameCenterEnabledVersions|Optional $gameCenterEnabledVersions = new Optional,
        public AppRelationshipsPerfPowerMetrics|Optional $perfPowerMetrics = new Optional,
        public AppRelationshipsAppCustomProductPages|Optional $appCustomProductPages = new Optional,
        public AppRelationshipsInAppPurchasesV2|Optional $inAppPurchasesV2 = new Optional,
        public AppRelationshipsPromotedPurchases|Optional $promotedPurchases = new Optional,
        public AppRelationshipsAppEvents|Optional $appEvents = new Optional,
        public AppRelationshipsReviewSubmissions|Optional $reviewSubmissions = new Optional,
        public AppRelationshipsSubscriptionGracePeriod|Optional $subscriptionGracePeriod = new Optional,
        public AppRelationshipsCustomerReviews|Optional $customerReviews = new Optional,
        public AppRelationshipsCustomerReviewSummarizations|Optional $customerReviewSummarizations = new Optional,
        public AppRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public AppRelationshipsAppStoreVersionExperimentsV2|Optional $appStoreVersionExperimentsV2 = new Optional,
        public AppRelationshipsAlternativeDistributionKey|Optional $alternativeDistributionKey = new Optional,
        public AppRelationshipsAnalyticsReportRequests|Optional $analyticsReportRequests = new Optional,
        public AppRelationshipsMarketplaceSearchDetail|Optional $marketplaceSearchDetail = new Optional,
        public AppRelationshipsBuildUploads|Optional $buildUploads = new Optional,
        public AppRelationshipsBackgroundAssets|Optional $backgroundAssets = new Optional,
        public AppRelationshipsBetaFeedbackScreenshotSubmissions|Optional $betaFeedbackScreenshotSubmissions = new Optional,
        public AppRelationshipsBetaFeedbackCrashSubmissions|Optional $betaFeedbackCrashSubmissions = new Optional,
        public AppRelationshipsSearchKeywords|Optional $searchKeywords = new Optional,
        public AppRelationshipsWebhooks|Optional $webhooks = new Optional,
        public AppRelationshipsAndroidToIosAppMappingDetails|Optional $androidToIosAppMappingDetails = new Optional,
    ) {}
}
