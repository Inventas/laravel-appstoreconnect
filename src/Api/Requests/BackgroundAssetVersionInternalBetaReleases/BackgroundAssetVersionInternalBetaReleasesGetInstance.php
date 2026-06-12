<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersionInternalBetaReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetVersionInternalBetaReleases_getInstance
 */
class BackgroundAssetVersionInternalBetaReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetVersionInternalBetaReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionInternalBetaReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersionInternalBetaReleases = null,
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
            'fields[backgroundAssetVersionInternalBetaReleases]' => $this->fieldsbackgroundAssetVersionInternalBetaReleases,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
