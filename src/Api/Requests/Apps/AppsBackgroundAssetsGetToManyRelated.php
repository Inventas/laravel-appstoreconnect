<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_backgroundAssets_getToManyRelated
 */
class AppsBackgroundAssetsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/backgroundAssets";
    }

    /**
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterassetPackIdentifier
     * @param  array<int, string>|null  $filterversionsLocale
     * @param  array<int, string>|null  $filterversionsPlatforms
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsbackgroundAssets
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbackgroundAssetVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterarchived = null,
        /** @var array<int, string>|null */
        protected ?array $filterassetPackIdentifier = null,
        /** @var array<int, string>|null */
        protected ?array $filterversionsLocale = null,
        /** @var array<int, string>|null */
        protected ?array $filterversionsPlatforms = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetVersions = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[archived]' => $this->filterarchived,
            'filter[assetPackIdentifier]' => $this->filterassetPackIdentifier,
            'filter[versions.locale]' => $this->filterversionsLocale,
            'filter[versions.platforms]' => $this->filterversionsPlatforms,
            'sort' => $this->sort,
            'fields[backgroundAssets]' => $this->fieldsbackgroundAssets,
            'fields[apps]' => $this->fieldsapps,
            'fields[backgroundAssetVersions]' => $this->fieldsbackgroundAssetVersions,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
