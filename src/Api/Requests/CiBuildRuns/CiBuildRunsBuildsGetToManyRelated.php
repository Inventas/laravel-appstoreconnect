<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiBuildRuns;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciBuildRuns_builds_getToManyRelated
 */
class CiBuildRunsBuildsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/ciBuildRuns/{$this->id}/builds";
    }

    /**
     * @param  array<int, string>|null  $filterversion
     * @param  array<int, string>|null  $filterexpired
     * @param  array<int, string>|null  $filterprocessingState
     * @param  array<int, string>|null  $filterbetaAppReviewSubmissionBetaReviewState
     * @param  array<int, string>|null  $filterusesNonExemptEncryption
     * @param  array<int, string>|null  $filterpreReleaseVersionVersion
     * @param  array<int, string>|null  $filterpreReleaseVersionPlatform
     * @param  array<int, string>|null  $filterbuildAudienceType
     * @param  array<int, string>|null  $filterpreReleaseVersion
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbetaGroups
     * @param  array<int, string>|null  $filterappStoreVersion
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbetaTesters
     * @param  array<int, string>|null  $fieldsbetaGroups
     * @param  array<int, string>|null  $fieldsbetaBuildLocalizations
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $fieldsbuildIcons
     * @param  array<int, string>|null  $fieldsbuildBundles
     * @param  array<int, string>|null  $fieldsbuildUploads
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterversion = null,
        /** @var array<int, string>|null */
        protected ?array $filterexpired = null,
        /** @var array<int, string>|null */
        protected ?array $filterprocessingState = null,
        /** @var array<int, string>|null */
        protected ?array $filterbetaAppReviewSubmissionBetaReviewState = null,
        /** @var array<int, string>|null */
        protected ?array $filterusesNonExemptEncryption = null,
        /** @var array<int, string>|null */
        protected ?array $filterpreReleaseVersionVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filterpreReleaseVersionPlatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuildAudienceType = null,
        /** @var array<int, string>|null */
        protected ?array $filterpreReleaseVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filterapp = null,
        /** @var array<int, string>|null */
        protected ?array $filterbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        protected ?bool $existsusesNonExemptEncryption = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspreReleaseVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaTesters = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaBuildLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildBetaDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildIcons = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildBundles = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildUploads = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitindividualTesters = null,
        protected ?int $limitbetaGroups = null,
        protected ?int $limitbetaBuildLocalizations = null,
        protected ?int $limiticons = null,
        protected ?int $limitbuildBundles = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[version]' => $this->filterversion,
            'filter[expired]' => $this->filterexpired,
            'filter[processingState]' => $this->filterprocessingState,
            'filter[betaAppReviewSubmission.betaReviewState]' => $this->filterbetaAppReviewSubmissionBetaReviewState,
            'filter[usesNonExemptEncryption]' => $this->filterusesNonExemptEncryption,
            'filter[preReleaseVersion.version]' => $this->filterpreReleaseVersionVersion,
            'filter[preReleaseVersion.platform]' => $this->filterpreReleaseVersionPlatform,
            'filter[buildAudienceType]' => $this->filterbuildAudienceType,
            'filter[preReleaseVersion]' => $this->filterpreReleaseVersion,
            'filter[app]' => $this->filterapp,
            'filter[betaGroups]' => $this->filterbetaGroups,
            'filter[appStoreVersion]' => $this->filterappStoreVersion,
            'filter[id]' => $this->filterid,
            'exists[usesNonExemptEncryption]' => $this->existsusesNonExemptEncryption,
            'sort' => $this->sort,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[preReleaseVersions]' => $this->fieldspreReleaseVersions,
            'fields[betaTesters]' => $this->fieldsbetaTesters,
            'fields[betaGroups]' => $this->fieldsbetaGroups,
            'fields[betaBuildLocalizations]' => $this->fieldsbetaBuildLocalizations,
            'fields[appEncryptionDeclarations]' => $this->fieldsappEncryptionDeclarations,
            'fields[betaAppReviewSubmissions]' => $this->fieldsbetaAppReviewSubmissions,
            'fields[apps]' => $this->fieldsapps,
            'fields[buildBetaDetails]' => $this->fieldsbuildBetaDetails,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[buildIcons]' => $this->fieldsbuildIcons,
            'fields[buildBundles]' => $this->fieldsbuildBundles,
            'fields[buildUploads]' => $this->fieldsbuildUploads,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[individualTesters]' => $this->limitindividualTesters,
            'limit[betaGroups]' => $this->limitbetaGroups,
            'limit[betaBuildLocalizations]' => $this->limitbetaBuildLocalizations,
            'limit[icons]' => $this->limiticons,
            'limit[buildBundles]' => $this->limitbuildBundles,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
