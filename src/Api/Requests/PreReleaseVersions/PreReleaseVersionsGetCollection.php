<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PreReleaseVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * preReleaseVersions_getCollection
 */
class PreReleaseVersionsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/preReleaseVersions';
    }

    /**
     * @param  array<int, string>|null  $filterbuildsBuildAudienceType
     * @param  array<int, string>|null  $filterbuildsExpired
     * @param  array<int, string>|null  $filterbuildsProcessingState
     * @param  array<int, string>|null  $filterbuildsVersion
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterversion
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterbuilds
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldspreReleaseVersions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterbuildsBuildAudienceType = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuildsExpired = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuildsProcessingState = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuildsVersion = null,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterversion = null,
        /** @var array<int, string>|null */
        protected ?array $filterapp = null,
        /** @var array<int, string>|null */
        protected ?array $filterbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspreReleaseVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[builds.buildAudienceType]' => $this->filterbuildsBuildAudienceType,
            'filter[builds.expired]' => $this->filterbuildsExpired,
            'filter[builds.processingState]' => $this->filterbuildsProcessingState,
            'filter[builds.version]' => $this->filterbuildsVersion,
            'filter[platform]' => $this->filterplatform,
            'filter[version]' => $this->filterversion,
            'filter[app]' => $this->filterapp,
            'filter[builds]' => $this->filterbuilds,
            'sort' => $this->sort,
            'fields[preReleaseVersions]' => $this->fieldspreReleaseVersions,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
