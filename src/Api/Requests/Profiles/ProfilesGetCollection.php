<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_getCollection
 */
class ProfilesGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/profiles';
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterprofileType
     * @param  array<int, string>|null  $filterprofileState
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsdevices
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filterprofileType = null,
        /** @var array<int, string>|null */
        protected ?array $filterprofileState = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsprofiles = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsdevices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcertificates = null,
        protected ?int $limitdevices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[profileType]' => $this->filterprofileType,
            'filter[profileState]' => $this->filterprofileState,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[profiles]' => $this->fieldsprofiles,
            'fields[bundleIds]' => $this->fieldsbundleIds,
            'fields[devices]' => $this->fieldsdevices,
            'fields[certificates]' => $this->fieldscertificates,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[certificates]' => $this->limitcertificates,
            'limit[devices]' => $this->limitdevices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
