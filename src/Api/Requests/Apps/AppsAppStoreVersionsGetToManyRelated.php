<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appStoreVersions_getToManyRelated
 */
class AppsAppStoreVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appStoreVersions";
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
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterversionString = null,
        /** @var array<int, string>|null */
        protected ?array $filterappStoreState = null,
        /** @var array<int, string>|null */
        protected ?array $filterappVersionState = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionPhasedReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAppVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsroutingAppCoverages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDefaultExperiences = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersionExperiments = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackages = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappStoreVersionLocalizations = null,
        protected ?int $limitappStoreVersionExperiments = null,
        protected ?int $limitappStoreVersionExperimentsV2 = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[platform]' => $this->filterplatform,
            'filter[versionString]' => $this->filterversionString,
            'filter[appStoreState]' => $this->filterappStoreState,
            'filter[appVersionState]' => $this->filterappVersionState,
            'filter[id]' => $this->filterid,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'fields[apps]' => $this->fieldsapps,
            'fields[appStoreVersionLocalizations]' => $this->fieldsappStoreVersionLocalizations,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[appStoreVersionPhasedReleases]' => $this->fieldsappStoreVersionPhasedReleases,
            'fields[gameCenterAppVersions]' => $this->fieldsgameCenterAppVersions,
            'fields[routingAppCoverages]' => $this->fieldsroutingAppCoverages,
            'fields[appStoreReviewDetails]' => $this->fieldsappStoreReviewDetails,
            'fields[appStoreVersionSubmissions]' => $this->fieldsappStoreVersionSubmissions,
            'fields[appClipDefaultExperiences]' => $this->fieldsappClipDefaultExperiences,
            'fields[appStoreVersionExperiments]' => $this->fieldsappStoreVersionExperiments,
            'fields[alternativeDistributionPackages]' => $this->fieldsalternativeDistributionPackages,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appStoreVersionLocalizations]' => $this->limitappStoreVersionLocalizations,
            'limit[appStoreVersionExperiments]' => $this->limitappStoreVersionExperiments,
            'limit[appStoreVersionExperimentsV2]' => $this->limitappStoreVersionExperimentsV2,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
