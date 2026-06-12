<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBetaDetails_build_getToOneRelated
 */
class BuildBetaDetailsBuildGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBetaDetails/{$this->id}/build";
    }

    /**
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
            'include' => $this->include,
            'limit[individualTesters]' => $this->limitindividualTesters,
            'limit[betaGroups]' => $this->limitbetaGroups,
            'limit[betaBuildLocalizations]' => $this->limitbetaBuildLocalizations,
            'limit[icons]' => $this->limiticons,
            'limit[buildBundles]' => $this->limitbuildBundles,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
