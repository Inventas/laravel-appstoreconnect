<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssets_getInstance
 */
class BackgroundAssetsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssets/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssets
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
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
            'fields[backgroundAssets]' => $this->fieldsbackgroundAssets,
            'fields[apps]' => $this->fieldsapps,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
