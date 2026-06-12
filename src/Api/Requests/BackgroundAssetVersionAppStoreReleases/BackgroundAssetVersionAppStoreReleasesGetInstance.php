<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersionAppStoreReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetVersionAppStoreReleases_getInstance
 */
class BackgroundAssetVersionAppStoreReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetVersionAppStoreReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionAppStoreReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersionAppStoreReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[backgroundAssetVersionAppStoreReleases]' => $this->fieldsbackgroundAssetVersionAppStoreReleases,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
