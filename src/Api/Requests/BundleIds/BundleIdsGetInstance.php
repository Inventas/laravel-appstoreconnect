<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_getInstance
 */
class BundleIdsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsprofiles
     * @param  array<int, string>|null  $fieldsbundleIdCapabilities
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsprofiles = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIdCapabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
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
            'fields[bundleIds]' => $this->fieldsbundleIds,
            'fields[profiles]' => $this->fieldsprofiles,
            'fields[bundleIdCapabilities]' => $this->fieldsbundleIdCapabilities,
            'fields[apps]' => $this->fieldsapps,
            'include' => $this->include,
            'limit[bundleIdCapabilities]' => $this->limitbundleIdCapabilities,
            'limit[profiles]' => $this->limitprofiles,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
