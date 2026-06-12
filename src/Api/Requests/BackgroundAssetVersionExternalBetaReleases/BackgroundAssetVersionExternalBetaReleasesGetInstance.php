<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetVersionExternalBetaReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetVersionExternalBetaReleases_getInstance
 */
class BackgroundAssetVersionExternalBetaReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetVersionExternalBetaReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersionExternalBetaReleases
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersionExternalBetaReleases = null,
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
            'fields[backgroundAssetVersionExternalBetaReleases]' => $this->fieldsbackgroundAssetVersionExternalBetaReleases,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
