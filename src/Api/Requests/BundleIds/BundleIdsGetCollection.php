<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_getCollection
 */
class BundleIdsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/bundleIds';
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filteridentifier
     * @param  array<int, string>|null  $filterseedId
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIdCapabilities
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filteridentifier = null,
        /** @var array<int, string>|null */
        protected ?array $filterseedId = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsprofiles = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIdCapabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbundleIdCapabilities = null,
        protected ?int $limitprofiles = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[platform]' => $this->filterplatform,
            'filter[identifier]' => $this->filteridentifier,
            'filter[seedId]' => $this->filterseedId,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[bundleIds]' => $this->fieldsbundleIds,
            'fields[profiles]' => $this->fieldsprofiles,
            'fields[bundleIdCapabilities]' => $this->fieldsbundleIdCapabilities,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[bundleIdCapabilities]' => $this->limitbundleIdCapabilities,
            'limit[profiles]' => $this->limitprofiles,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
