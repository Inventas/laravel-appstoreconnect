<?php

namespace Inventas\AppStoreConnectKit\Api;

use Inventas\AppStoreConnectKit\Api\Resource\AccessibilityDeclarations;
use Inventas\AppStoreConnectKit\Api\Resource\Actors;
use Inventas\AppStoreConnectKit\Api\Resource\AgeRatingDeclarations;
use Inventas\AppStoreConnectKit\Api\Resource\AlternativeDistributionDomains;
use Inventas\AppStoreConnectKit\Api\Resource\AlternativeDistributionKeys;
use Inventas\AppStoreConnectKit\Api\Resource\AlternativeDistributionPackageDeltas;
use Inventas\AppStoreConnectKit\Api\Resource\AlternativeDistributionPackages;
use Inventas\AppStoreConnectKit\Api\Resource\AlternativeDistributionPackageVariants;
use Inventas\AppStoreConnectKit\Api\Resource\AlternativeDistributionPackageVersions;
use Inventas\AppStoreConnectKit\Api\Resource\AnalyticsReportInstances;
use Inventas\AppStoreConnectKit\Api\Resource\AnalyticsReportRequests;
use Inventas\AppStoreConnectKit\Api\Resource\AnalyticsReports;
use Inventas\AppStoreConnectKit\Api\Resource\AnalyticsReportSegments;
use Inventas\AppStoreConnectKit\Api\Resource\AndroidToIosAppMappingDetails;
use Inventas\AppStoreConnectKit\Api\Resource\AppAvailabilities;
use Inventas\AppStoreConnectKit\Api\Resource\AppCategories;
use Inventas\AppStoreConnectKit\Api\Resource\AppClipAdvancedExperienceImages;
use Inventas\AppStoreConnectKit\Api\Resource\AppClipAdvancedExperiences;
use Inventas\AppStoreConnectKit\Api\Resource\AppClipAppStoreReviewDetails;
use Inventas\AppStoreConnectKit\Api\Resource\AppClipDefaultExperienceLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\AppClipDefaultExperiences;
use Inventas\AppStoreConnectKit\Api\Resource\AppClipHeaderImages;
use Inventas\AppStoreConnectKit\Api\Resource\AppClips;
use Inventas\AppStoreConnectKit\Api\Resource\AppCustomProductPageLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\AppCustomProductPages;
use Inventas\AppStoreConnectKit\Api\Resource\AppCustomProductPageVersions;
use Inventas\AppStoreConnectKit\Api\Resource\AppEncryptionDeclarationDocuments;
use Inventas\AppStoreConnectKit\Api\Resource\AppEncryptionDeclarations;
use Inventas\AppStoreConnectKit\Api\Resource\AppEventLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\AppEvents;
use Inventas\AppStoreConnectKit\Api\Resource\AppEventScreenshots;
use Inventas\AppStoreConnectKit\Api\Resource\AppEventVideoClips;
use Inventas\AppStoreConnectKit\Api\Resource\AppInfoLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\AppInfos;
use Inventas\AppStoreConnectKit\Api\Resource\AppPreviews;
use Inventas\AppStoreConnectKit\Api\Resource\AppPreviewSets;
use Inventas\AppStoreConnectKit\Api\Resource\AppPricePoints;
use Inventas\AppStoreConnectKit\Api\Resource\AppPriceSchedules;
use Inventas\AppStoreConnectKit\Api\Resource\Apps;
use Inventas\AppStoreConnectKit\Api\Resource\AppScreenshots;
use Inventas\AppStoreConnectKit\Api\Resource\AppScreenshotSets;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreReviewAttachments;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreReviewDetails;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionExperiments;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionExperimentTreatmentLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionExperimentTreatments;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionPhasedReleases;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionPromotions;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionReleaseRequests;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersions;
use Inventas\AppStoreConnectKit\Api\Resource\AppStoreVersionSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\AppTags;
use Inventas\AppStoreConnectKit\Api\Resource\BackgroundAssets;
use Inventas\AppStoreConnectKit\Api\Resource\BackgroundAssetUploadFiles;
use Inventas\AppStoreConnectKit\Api\Resource\BackgroundAssetVersionAppStoreReleases;
use Inventas\AppStoreConnectKit\Api\Resource\BackgroundAssetVersionExternalBetaReleases;
use Inventas\AppStoreConnectKit\Api\Resource\BackgroundAssetVersionInternalBetaReleases;
use Inventas\AppStoreConnectKit\Api\Resource\BackgroundAssetVersions;
use Inventas\AppStoreConnectKit\Api\Resource\BetaAppClipInvocationLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\BetaAppClipInvocations;
use Inventas\AppStoreConnectKit\Api\Resource\BetaAppLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\BetaAppReviewDetails;
use Inventas\AppStoreConnectKit\Api\Resource\BetaAppReviewSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\BetaBuildLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\BetaCrashLogs;
use Inventas\AppStoreConnectKit\Api\Resource\BetaFeedbackCrashSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\BetaFeedbackScreenshotSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\BetaGroups;
use Inventas\AppStoreConnectKit\Api\Resource\BetaLicenseAgreements;
use Inventas\AppStoreConnectKit\Api\Resource\BetaRecruitmentCriteria;
use Inventas\AppStoreConnectKit\Api\Resource\BetaRecruitmentCriterionOptions;
use Inventas\AppStoreConnectKit\Api\Resource\BetaTesterInvitations;
use Inventas\AppStoreConnectKit\Api\Resource\BetaTesters;
use Inventas\AppStoreConnectKit\Api\Resource\BuildBetaDetails;
use Inventas\AppStoreConnectKit\Api\Resource\BuildBetaNotifications;
use Inventas\AppStoreConnectKit\Api\Resource\BuildBundles;
use Inventas\AppStoreConnectKit\Api\Resource\Builds;
use Inventas\AppStoreConnectKit\Api\Resource\BuildUploadFiles;
use Inventas\AppStoreConnectKit\Api\Resource\BuildUploads;
use Inventas\AppStoreConnectKit\Api\Resource\BundleIdCapabilities;
use Inventas\AppStoreConnectKit\Api\Resource\BundleIds;
use Inventas\AppStoreConnectKit\Api\Resource\Certificates;
use Inventas\AppStoreConnectKit\Api\Resource\CiArtifacts;
use Inventas\AppStoreConnectKit\Api\Resource\CiBuildActions;
use Inventas\AppStoreConnectKit\Api\Resource\CiBuildRuns;
use Inventas\AppStoreConnectKit\Api\Resource\CiIssues;
use Inventas\AppStoreConnectKit\Api\Resource\CiMacOsVersions;
use Inventas\AppStoreConnectKit\Api\Resource\CiProducts;
use Inventas\AppStoreConnectKit\Api\Resource\CiTestResults;
use Inventas\AppStoreConnectKit\Api\Resource\CiWorkflows;
use Inventas\AppStoreConnectKit\Api\Resource\CiXcodeVersions;
use Inventas\AppStoreConnectKit\Api\Resource\CustomerReviewResponses;
use Inventas\AppStoreConnectKit\Api\Resource\CustomerReviews;
use Inventas\AppStoreConnectKit\Api\Resource\Devices;
use Inventas\AppStoreConnectKit\Api\Resource\DiagnosticSignatures;
use Inventas\AppStoreConnectKit\Api\Resource\EndAppAvailabilityPreOrders;
use Inventas\AppStoreConnectKit\Api\Resource\EndUserLicenseAgreements;
use Inventas\AppStoreConnectKit\Api\Resource\FinanceReports;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterAchievementImages;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterAchievementLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterAchievementReleases;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterAchievements;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterAchievementVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterActivities;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterActivityImages;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterActivityLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterActivityVersionReleases;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterActivityVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterAppVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterChallengeImages;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterChallengeLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterChallenges;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterChallengeVersionReleases;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterChallengeVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterDetails;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterEnabledVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterGroups;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardEntrySubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardImages;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardReleases;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboards;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardSetImages;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardSetLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardSetMemberLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardSetReleases;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardSets;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardSetVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterLeaderboardVersions;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterMatchmakingQueues;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterMatchmakingRules;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterMatchmakingRuleSets;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterMatchmakingRuleSetTests;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterMatchmakingTeams;
use Inventas\AppStoreConnectKit\Api\Resource\GameCenterPlayerAchievementSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseAppStoreReviewScreenshots;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseAvailabilities;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseContents;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseImages;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseOfferCodeCustomCodes;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseOfferCodeOneTimeUseCodes;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseOfferCodes;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchasePricePoints;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchasePriceSchedules;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchases;
use Inventas\AppStoreConnectKit\Api\Resource\InAppPurchaseSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\MarketplaceSearchDetails;
use Inventas\AppStoreConnectKit\Api\Resource\MarketplaceWebhooks;
use Inventas\AppStoreConnectKit\Api\Resource\MerchantIds;
use Inventas\AppStoreConnectKit\Api\Resource\Nominations;
use Inventas\AppStoreConnectKit\Api\Resource\PassTypeIds;
use Inventas\AppStoreConnectKit\Api\Resource\PreReleaseVersions;
use Inventas\AppStoreConnectKit\Api\Resource\Profiles;
use Inventas\AppStoreConnectKit\Api\Resource\PromotedPurchases;
use Inventas\AppStoreConnectKit\Api\Resource\ReviewSubmissionItems;
use Inventas\AppStoreConnectKit\Api\Resource\ReviewSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\RoutingAppCoverages;
use Inventas\AppStoreConnectKit\Api\Resource\SalesReports;
use Inventas\AppStoreConnectKit\Api\Resource\SandboxTesters;
use Inventas\AppStoreConnectKit\Api\Resource\SandboxTestersClearPurchaseHistoryRequest;
use Inventas\AppStoreConnectKit\Api\Resource\ScmGitReferences;
use Inventas\AppStoreConnectKit\Api\Resource\ScmProviders;
use Inventas\AppStoreConnectKit\Api\Resource\ScmPullRequests;
use Inventas\AppStoreConnectKit\Api\Resource\ScmRepositories;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionAppStoreReviewScreenshots;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionAvailabilities;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionGracePeriods;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionGroupLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionGroups;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionGroupSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionImages;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionIntroductoryOffers;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionLocalizations;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionOfferCodeCustomCodes;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionOfferCodeOneTimeUseCodes;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionOfferCodes;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionPlanAvailabilities;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionPricePoints;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionPrices;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionPromotionalOffers;
use Inventas\AppStoreConnectKit\Api\Resource\Subscriptions;
use Inventas\AppStoreConnectKit\Api\Resource\SubscriptionSubmissions;
use Inventas\AppStoreConnectKit\Api\Resource\Territories;
use Inventas\AppStoreConnectKit\Api\Resource\TerritoryAvailabilities;
use Inventas\AppStoreConnectKit\Api\Resource\UserInvitations;
use Inventas\AppStoreConnectKit\Api\Resource\Users;
use Inventas\AppStoreConnectKit\Api\Resource\WebhookDeliveries;
use Inventas\AppStoreConnectKit\Api\Resource\WebhookPings;
use Inventas\AppStoreConnectKit\Api\Resource\Webhooks;
use Inventas\AppStoreConnectKit\Api\Resource\WinBackOffers;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

/**
 * App Store Connect API
 */
class AppStoreConnect extends Connector
{
    public function __construct(
        protected string $bearerToken,
    ) {}

    public function resolveBaseUrl(): string
    {
        return 'https://api.appstoreconnect.apple.com/';
    }

    public function defaultAuth(): Authenticator
    {
        return new TokenAuthenticator($this->bearerToken, 'Bearer');
    }

    public function accessibilityDeclarations(): AccessibilityDeclarations
    {
        return new AccessibilityDeclarations($this);
    }

    public function actors(): Actors
    {
        return new Actors($this);
    }

    public function ageRatingDeclarations(): AgeRatingDeclarations
    {
        return new AgeRatingDeclarations($this);
    }

    public function alternativeDistributionDomains(): AlternativeDistributionDomains
    {
        return new AlternativeDistributionDomains($this);
    }

    public function alternativeDistributionKeys(): AlternativeDistributionKeys
    {
        return new AlternativeDistributionKeys($this);
    }

    public function alternativeDistributionPackageDeltas(): AlternativeDistributionPackageDeltas
    {
        return new AlternativeDistributionPackageDeltas($this);
    }

    public function alternativeDistributionPackageVariants(): AlternativeDistributionPackageVariants
    {
        return new AlternativeDistributionPackageVariants($this);
    }

    public function alternativeDistributionPackageVersions(): AlternativeDistributionPackageVersions
    {
        return new AlternativeDistributionPackageVersions($this);
    }

    public function alternativeDistributionPackages(): AlternativeDistributionPackages
    {
        return new AlternativeDistributionPackages($this);
    }

    public function analyticsReportInstances(): AnalyticsReportInstances
    {
        return new AnalyticsReportInstances($this);
    }

    public function analyticsReportRequests(): AnalyticsReportRequests
    {
        return new AnalyticsReportRequests($this);
    }

    public function analyticsReportSegments(): AnalyticsReportSegments
    {
        return new AnalyticsReportSegments($this);
    }

    public function analyticsReports(): AnalyticsReports
    {
        return new AnalyticsReports($this);
    }

    public function androidToIosAppMappingDetails(): AndroidToIosAppMappingDetails
    {
        return new AndroidToIosAppMappingDetails($this);
    }

    public function appAvailabilities(): AppAvailabilities
    {
        return new AppAvailabilities($this);
    }

    public function appCategories(): AppCategories
    {
        return new AppCategories($this);
    }

    public function appClipAdvancedExperienceImages(): AppClipAdvancedExperienceImages
    {
        return new AppClipAdvancedExperienceImages($this);
    }

    public function appClipAdvancedExperiences(): AppClipAdvancedExperiences
    {
        return new AppClipAdvancedExperiences($this);
    }

    public function appClipAppStoreReviewDetails(): AppClipAppStoreReviewDetails
    {
        return new AppClipAppStoreReviewDetails($this);
    }

    public function appClipDefaultExperienceLocalizations(): AppClipDefaultExperienceLocalizations
    {
        return new AppClipDefaultExperienceLocalizations($this);
    }

    public function appClipDefaultExperiences(): AppClipDefaultExperiences
    {
        return new AppClipDefaultExperiences($this);
    }

    public function appClipHeaderImages(): AppClipHeaderImages
    {
        return new AppClipHeaderImages($this);
    }

    public function appClips(): AppClips
    {
        return new AppClips($this);
    }

    public function appCustomProductPageLocalizations(): AppCustomProductPageLocalizations
    {
        return new AppCustomProductPageLocalizations($this);
    }

    public function appCustomProductPageVersions(): AppCustomProductPageVersions
    {
        return new AppCustomProductPageVersions($this);
    }

    public function appCustomProductPages(): AppCustomProductPages
    {
        return new AppCustomProductPages($this);
    }

    public function appEncryptionDeclarationDocuments(): AppEncryptionDeclarationDocuments
    {
        return new AppEncryptionDeclarationDocuments($this);
    }

    public function appEncryptionDeclarations(): AppEncryptionDeclarations
    {
        return new AppEncryptionDeclarations($this);
    }

    public function appEventLocalizations(): AppEventLocalizations
    {
        return new AppEventLocalizations($this);
    }

    public function appEventScreenshots(): AppEventScreenshots
    {
        return new AppEventScreenshots($this);
    }

    public function appEventVideoClips(): AppEventVideoClips
    {
        return new AppEventVideoClips($this);
    }

    public function appEvents(): AppEvents
    {
        return new AppEvents($this);
    }

    public function appInfoLocalizations(): AppInfoLocalizations
    {
        return new AppInfoLocalizations($this);
    }

    public function appInfos(): AppInfos
    {
        return new AppInfos($this);
    }

    public function appPreviewSets(): AppPreviewSets
    {
        return new AppPreviewSets($this);
    }

    public function appPreviews(): AppPreviews
    {
        return new AppPreviews($this);
    }

    public function appPricePoints(): AppPricePoints
    {
        return new AppPricePoints($this);
    }

    public function appPriceSchedules(): AppPriceSchedules
    {
        return new AppPriceSchedules($this);
    }

    public function appScreenshotSets(): AppScreenshotSets
    {
        return new AppScreenshotSets($this);
    }

    public function appScreenshots(): AppScreenshots
    {
        return new AppScreenshots($this);
    }

    public function appStoreReviewAttachments(): AppStoreReviewAttachments
    {
        return new AppStoreReviewAttachments($this);
    }

    public function appStoreReviewDetails(): AppStoreReviewDetails
    {
        return new AppStoreReviewDetails($this);
    }

    public function appStoreVersionExperimentTreatmentLocalizations(): AppStoreVersionExperimentTreatmentLocalizations
    {
        return new AppStoreVersionExperimentTreatmentLocalizations($this);
    }

    public function appStoreVersionExperimentTreatments(): AppStoreVersionExperimentTreatments
    {
        return new AppStoreVersionExperimentTreatments($this);
    }

    public function appStoreVersionExperiments(): AppStoreVersionExperiments
    {
        return new AppStoreVersionExperiments($this);
    }

    public function appStoreVersionLocalizations(): AppStoreVersionLocalizations
    {
        return new AppStoreVersionLocalizations($this);
    }

    public function appStoreVersionPhasedReleases(): AppStoreVersionPhasedReleases
    {
        return new AppStoreVersionPhasedReleases($this);
    }

    public function appStoreVersionPromotions(): AppStoreVersionPromotions
    {
        return new AppStoreVersionPromotions($this);
    }

    public function appStoreVersionReleaseRequests(): AppStoreVersionReleaseRequests
    {
        return new AppStoreVersionReleaseRequests($this);
    }

    public function appStoreVersionSubmissions(): AppStoreVersionSubmissions
    {
        return new AppStoreVersionSubmissions($this);
    }

    public function appStoreVersions(): AppStoreVersions
    {
        return new AppStoreVersions($this);
    }

    public function appTags(): AppTags
    {
        return new AppTags($this);
    }

    public function apps(): Apps
    {
        return new Apps($this);
    }

    public function backgroundAssetUploadFiles(): BackgroundAssetUploadFiles
    {
        return new BackgroundAssetUploadFiles($this);
    }

    public function backgroundAssetVersionAppStoreReleases(): BackgroundAssetVersionAppStoreReleases
    {
        return new BackgroundAssetVersionAppStoreReleases($this);
    }

    public function backgroundAssetVersionExternalBetaReleases(): BackgroundAssetVersionExternalBetaReleases
    {
        return new BackgroundAssetVersionExternalBetaReleases($this);
    }

    public function backgroundAssetVersionInternalBetaReleases(): BackgroundAssetVersionInternalBetaReleases
    {
        return new BackgroundAssetVersionInternalBetaReleases($this);
    }

    public function backgroundAssetVersions(): BackgroundAssetVersions
    {
        return new BackgroundAssetVersions($this);
    }

    public function backgroundAssets(): BackgroundAssets
    {
        return new BackgroundAssets($this);
    }

    public function betaAppClipInvocationLocalizations(): BetaAppClipInvocationLocalizations
    {
        return new BetaAppClipInvocationLocalizations($this);
    }

    public function betaAppClipInvocations(): BetaAppClipInvocations
    {
        return new BetaAppClipInvocations($this);
    }

    public function betaAppLocalizations(): BetaAppLocalizations
    {
        return new BetaAppLocalizations($this);
    }

    public function betaAppReviewDetails(): BetaAppReviewDetails
    {
        return new BetaAppReviewDetails($this);
    }

    public function betaAppReviewSubmissions(): BetaAppReviewSubmissions
    {
        return new BetaAppReviewSubmissions($this);
    }

    public function betaBuildLocalizations(): BetaBuildLocalizations
    {
        return new BetaBuildLocalizations($this);
    }

    public function betaCrashLogs(): BetaCrashLogs
    {
        return new BetaCrashLogs($this);
    }

    public function betaFeedbackCrashSubmissions(): BetaFeedbackCrashSubmissions
    {
        return new BetaFeedbackCrashSubmissions($this);
    }

    public function betaFeedbackScreenshotSubmissions(): BetaFeedbackScreenshotSubmissions
    {
        return new BetaFeedbackScreenshotSubmissions($this);
    }

    public function betaGroups(): BetaGroups
    {
        return new BetaGroups($this);
    }

    public function betaLicenseAgreements(): BetaLicenseAgreements
    {
        return new BetaLicenseAgreements($this);
    }

    public function betaRecruitmentCriteria(): BetaRecruitmentCriteria
    {
        return new BetaRecruitmentCriteria($this);
    }

    public function betaRecruitmentCriterionOptions(): BetaRecruitmentCriterionOptions
    {
        return new BetaRecruitmentCriterionOptions($this);
    }

    public function betaTesterInvitations(): BetaTesterInvitations
    {
        return new BetaTesterInvitations($this);
    }

    public function betaTesters(): BetaTesters
    {
        return new BetaTesters($this);
    }

    public function buildBetaDetails(): BuildBetaDetails
    {
        return new BuildBetaDetails($this);
    }

    public function buildBetaNotifications(): BuildBetaNotifications
    {
        return new BuildBetaNotifications($this);
    }

    public function buildBundles(): BuildBundles
    {
        return new BuildBundles($this);
    }

    public function buildUploadFiles(): BuildUploadFiles
    {
        return new BuildUploadFiles($this);
    }

    public function buildUploads(): BuildUploads
    {
        return new BuildUploads($this);
    }

    public function builds(): Builds
    {
        return new Builds($this);
    }

    public function bundleIdCapabilities(): BundleIdCapabilities
    {
        return new BundleIdCapabilities($this);
    }

    public function bundleIds(): BundleIds
    {
        return new BundleIds($this);
    }

    public function certificates(): Certificates
    {
        return new Certificates($this);
    }

    public function ciArtifacts(): CiArtifacts
    {
        return new CiArtifacts($this);
    }

    public function ciBuildActions(): CiBuildActions
    {
        return new CiBuildActions($this);
    }

    public function ciBuildRuns(): CiBuildRuns
    {
        return new CiBuildRuns($this);
    }

    public function ciIssues(): CiIssues
    {
        return new CiIssues($this);
    }

    public function ciMacOsVersions(): CiMacOsVersions
    {
        return new CiMacOsVersions($this);
    }

    public function ciProducts(): CiProducts
    {
        return new CiProducts($this);
    }

    public function ciTestResults(): CiTestResults
    {
        return new CiTestResults($this);
    }

    public function ciWorkflows(): CiWorkflows
    {
        return new CiWorkflows($this);
    }

    public function ciXcodeVersions(): CiXcodeVersions
    {
        return new CiXcodeVersions($this);
    }

    public function customerReviewResponses(): CustomerReviewResponses
    {
        return new CustomerReviewResponses($this);
    }

    public function customerReviews(): CustomerReviews
    {
        return new CustomerReviews($this);
    }

    public function devices(): Devices
    {
        return new Devices($this);
    }

    public function diagnosticSignatures(): DiagnosticSignatures
    {
        return new DiagnosticSignatures($this);
    }

    public function endAppAvailabilityPreOrders(): EndAppAvailabilityPreOrders
    {
        return new EndAppAvailabilityPreOrders($this);
    }

    public function endUserLicenseAgreements(): EndUserLicenseAgreements
    {
        return new EndUserLicenseAgreements($this);
    }

    public function financeReports(): FinanceReports
    {
        return new FinanceReports($this);
    }

    public function gameCenterAchievementImages(): GameCenterAchievementImages
    {
        return new GameCenterAchievementImages($this);
    }

    public function gameCenterAchievementLocalizations(): GameCenterAchievementLocalizations
    {
        return new GameCenterAchievementLocalizations($this);
    }

    public function gameCenterAchievementReleases(): GameCenterAchievementReleases
    {
        return new GameCenterAchievementReleases($this);
    }

    public function gameCenterAchievementVersions(): GameCenterAchievementVersions
    {
        return new GameCenterAchievementVersions($this);
    }

    public function gameCenterAchievements(): GameCenterAchievements
    {
        return new GameCenterAchievements($this);
    }

    public function gameCenterActivities(): GameCenterActivities
    {
        return new GameCenterActivities($this);
    }

    public function gameCenterActivityImages(): GameCenterActivityImages
    {
        return new GameCenterActivityImages($this);
    }

    public function gameCenterActivityLocalizations(): GameCenterActivityLocalizations
    {
        return new GameCenterActivityLocalizations($this);
    }

    public function gameCenterActivityVersionReleases(): GameCenterActivityVersionReleases
    {
        return new GameCenterActivityVersionReleases($this);
    }

    public function gameCenterActivityVersions(): GameCenterActivityVersions
    {
        return new GameCenterActivityVersions($this);
    }

    public function gameCenterAppVersions(): GameCenterAppVersions
    {
        return new GameCenterAppVersions($this);
    }

    public function gameCenterChallengeImages(): GameCenterChallengeImages
    {
        return new GameCenterChallengeImages($this);
    }

    public function gameCenterChallengeLocalizations(): GameCenterChallengeLocalizations
    {
        return new GameCenterChallengeLocalizations($this);
    }

    public function gameCenterChallengeVersionReleases(): GameCenterChallengeVersionReleases
    {
        return new GameCenterChallengeVersionReleases($this);
    }

    public function gameCenterChallengeVersions(): GameCenterChallengeVersions
    {
        return new GameCenterChallengeVersions($this);
    }

    public function gameCenterChallenges(): GameCenterChallenges
    {
        return new GameCenterChallenges($this);
    }

    public function gameCenterDetails(): GameCenterDetails
    {
        return new GameCenterDetails($this);
    }

    public function gameCenterEnabledVersions(): GameCenterEnabledVersions
    {
        return new GameCenterEnabledVersions($this);
    }

    public function gameCenterGroups(): GameCenterGroups
    {
        return new GameCenterGroups($this);
    }

    public function gameCenterLeaderboardEntrySubmissions(): GameCenterLeaderboardEntrySubmissions
    {
        return new GameCenterLeaderboardEntrySubmissions($this);
    }

    public function gameCenterLeaderboardImages(): GameCenterLeaderboardImages
    {
        return new GameCenterLeaderboardImages($this);
    }

    public function gameCenterLeaderboardLocalizations(): GameCenterLeaderboardLocalizations
    {
        return new GameCenterLeaderboardLocalizations($this);
    }

    public function gameCenterLeaderboardReleases(): GameCenterLeaderboardReleases
    {
        return new GameCenterLeaderboardReleases($this);
    }

    public function gameCenterLeaderboardSetImages(): GameCenterLeaderboardSetImages
    {
        return new GameCenterLeaderboardSetImages($this);
    }

    public function gameCenterLeaderboardSetLocalizations(): GameCenterLeaderboardSetLocalizations
    {
        return new GameCenterLeaderboardSetLocalizations($this);
    }

    public function gameCenterLeaderboardSetMemberLocalizations(): GameCenterLeaderboardSetMemberLocalizations
    {
        return new GameCenterLeaderboardSetMemberLocalizations($this);
    }

    public function gameCenterLeaderboardSetReleases(): GameCenterLeaderboardSetReleases
    {
        return new GameCenterLeaderboardSetReleases($this);
    }

    public function gameCenterLeaderboardSetVersions(): GameCenterLeaderboardSetVersions
    {
        return new GameCenterLeaderboardSetVersions($this);
    }

    public function gameCenterLeaderboardSets(): GameCenterLeaderboardSets
    {
        return new GameCenterLeaderboardSets($this);
    }

    public function gameCenterLeaderboardVersions(): GameCenterLeaderboardVersions
    {
        return new GameCenterLeaderboardVersions($this);
    }

    public function gameCenterLeaderboards(): GameCenterLeaderboards
    {
        return new GameCenterLeaderboards($this);
    }

    public function gameCenterMatchmakingQueues(): GameCenterMatchmakingQueues
    {
        return new GameCenterMatchmakingQueues($this);
    }

    public function gameCenterMatchmakingRuleSetTests(): GameCenterMatchmakingRuleSetTests
    {
        return new GameCenterMatchmakingRuleSetTests($this);
    }

    public function gameCenterMatchmakingRuleSets(): GameCenterMatchmakingRuleSets
    {
        return new GameCenterMatchmakingRuleSets($this);
    }

    public function gameCenterMatchmakingRules(): GameCenterMatchmakingRules
    {
        return new GameCenterMatchmakingRules($this);
    }

    public function gameCenterMatchmakingTeams(): GameCenterMatchmakingTeams
    {
        return new GameCenterMatchmakingTeams($this);
    }

    public function gameCenterPlayerAchievementSubmissions(): GameCenterPlayerAchievementSubmissions
    {
        return new GameCenterPlayerAchievementSubmissions($this);
    }

    public function inAppPurchaseAppStoreReviewScreenshots(): InAppPurchaseAppStoreReviewScreenshots
    {
        return new InAppPurchaseAppStoreReviewScreenshots($this);
    }

    public function inAppPurchaseAvailabilities(): InAppPurchaseAvailabilities
    {
        return new InAppPurchaseAvailabilities($this);
    }

    public function inAppPurchaseContents(): InAppPurchaseContents
    {
        return new InAppPurchaseContents($this);
    }

    public function inAppPurchaseImages(): InAppPurchaseImages
    {
        return new InAppPurchaseImages($this);
    }

    public function inAppPurchaseLocalizations(): InAppPurchaseLocalizations
    {
        return new InAppPurchaseLocalizations($this);
    }

    public function inAppPurchaseOfferCodeCustomCodes(): InAppPurchaseOfferCodeCustomCodes
    {
        return new InAppPurchaseOfferCodeCustomCodes($this);
    }

    public function inAppPurchaseOfferCodeOneTimeUseCodes(): InAppPurchaseOfferCodeOneTimeUseCodes
    {
        return new InAppPurchaseOfferCodeOneTimeUseCodes($this);
    }

    public function inAppPurchaseOfferCodes(): InAppPurchaseOfferCodes
    {
        return new InAppPurchaseOfferCodes($this);
    }

    public function inAppPurchasePricePoints(): InAppPurchasePricePoints
    {
        return new InAppPurchasePricePoints($this);
    }

    public function inAppPurchasePriceSchedules(): InAppPurchasePriceSchedules
    {
        return new InAppPurchasePriceSchedules($this);
    }

    public function inAppPurchaseSubmissions(): InAppPurchaseSubmissions
    {
        return new InAppPurchaseSubmissions($this);
    }

    public function inAppPurchases(): InAppPurchases
    {
        return new InAppPurchases($this);
    }

    public function marketplaceSearchDetails(): MarketplaceSearchDetails
    {
        return new MarketplaceSearchDetails($this);
    }

    public function marketplaceWebhooks(): MarketplaceWebhooks
    {
        return new MarketplaceWebhooks($this);
    }

    public function merchantIds(): MerchantIds
    {
        return new MerchantIds($this);
    }

    public function nominations(): Nominations
    {
        return new Nominations($this);
    }

    public function passTypeIds(): PassTypeIds
    {
        return new PassTypeIds($this);
    }

    public function preReleaseVersions(): PreReleaseVersions
    {
        return new PreReleaseVersions($this);
    }

    public function profiles(): Profiles
    {
        return new Profiles($this);
    }

    public function promotedPurchases(): PromotedPurchases
    {
        return new PromotedPurchases($this);
    }

    public function reviewSubmissionItems(): ReviewSubmissionItems
    {
        return new ReviewSubmissionItems($this);
    }

    public function reviewSubmissions(): ReviewSubmissions
    {
        return new ReviewSubmissions($this);
    }

    public function routingAppCoverages(): RoutingAppCoverages
    {
        return new RoutingAppCoverages($this);
    }

    public function salesReports(): SalesReports
    {
        return new SalesReports($this);
    }

    public function sandboxTesters(): SandboxTesters
    {
        return new SandboxTesters($this);
    }

    public function sandboxTestersClearPurchaseHistoryRequest(): SandboxTestersClearPurchaseHistoryRequest
    {
        return new SandboxTestersClearPurchaseHistoryRequest($this);
    }

    public function scmGitReferences(): ScmGitReferences
    {
        return new ScmGitReferences($this);
    }

    public function scmProviders(): ScmProviders
    {
        return new ScmProviders($this);
    }

    public function scmPullRequests(): ScmPullRequests
    {
        return new ScmPullRequests($this);
    }

    public function scmRepositories(): ScmRepositories
    {
        return new ScmRepositories($this);
    }

    public function subscriptionAppStoreReviewScreenshots(): SubscriptionAppStoreReviewScreenshots
    {
        return new SubscriptionAppStoreReviewScreenshots($this);
    }

    public function subscriptionAvailabilities(): SubscriptionAvailabilities
    {
        return new SubscriptionAvailabilities($this);
    }

    public function subscriptionGracePeriods(): SubscriptionGracePeriods
    {
        return new SubscriptionGracePeriods($this);
    }

    public function subscriptionGroupLocalizations(): SubscriptionGroupLocalizations
    {
        return new SubscriptionGroupLocalizations($this);
    }

    public function subscriptionGroupSubmissions(): SubscriptionGroupSubmissions
    {
        return new SubscriptionGroupSubmissions($this);
    }

    public function subscriptionGroups(): SubscriptionGroups
    {
        return new SubscriptionGroups($this);
    }

    public function subscriptionImages(): SubscriptionImages
    {
        return new SubscriptionImages($this);
    }

    public function subscriptionIntroductoryOffers(): SubscriptionIntroductoryOffers
    {
        return new SubscriptionIntroductoryOffers($this);
    }

    public function subscriptionLocalizations(): SubscriptionLocalizations
    {
        return new SubscriptionLocalizations($this);
    }

    public function subscriptionOfferCodeCustomCodes(): SubscriptionOfferCodeCustomCodes
    {
        return new SubscriptionOfferCodeCustomCodes($this);
    }

    public function subscriptionOfferCodeOneTimeUseCodes(): SubscriptionOfferCodeOneTimeUseCodes
    {
        return new SubscriptionOfferCodeOneTimeUseCodes($this);
    }

    public function subscriptionOfferCodes(): SubscriptionOfferCodes
    {
        return new SubscriptionOfferCodes($this);
    }

    public function subscriptionPlanAvailabilities(): SubscriptionPlanAvailabilities
    {
        return new SubscriptionPlanAvailabilities($this);
    }

    public function subscriptionPricePoints(): SubscriptionPricePoints
    {
        return new SubscriptionPricePoints($this);
    }

    public function subscriptionPrices(): SubscriptionPrices
    {
        return new SubscriptionPrices($this);
    }

    public function subscriptionPromotionalOffers(): SubscriptionPromotionalOffers
    {
        return new SubscriptionPromotionalOffers($this);
    }

    public function subscriptionSubmissions(): SubscriptionSubmissions
    {
        return new SubscriptionSubmissions($this);
    }

    public function subscriptions(): Subscriptions
    {
        return new Subscriptions($this);
    }

    public function territories(): Territories
    {
        return new Territories($this);
    }

    public function territoryAvailabilities(): TerritoryAvailabilities
    {
        return new TerritoryAvailabilities($this);
    }

    public function userInvitations(): UserInvitations
    {
        return new UserInvitations($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }

    public function webhookDeliveries(): WebhookDeliveries
    {
        return new WebhookDeliveries($this);
    }

    public function webhookPings(): WebhookPings
    {
        return new WebhookPings($this);
    }

    public function webhooks(): Webhooks
    {
        return new Webhooks($this);
    }

    public function winBackOffers(): WinBackOffers
    {
        return new WinBackOffers($this);
    }
}
