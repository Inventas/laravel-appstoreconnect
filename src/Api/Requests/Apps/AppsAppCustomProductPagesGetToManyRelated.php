<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appCustomProductPages_getToManyRelated
 */
class AppsAppCustomProductPagesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/appCustomProductPages";
    }

    /**
     * @param  array<int, string>|null  $filtervisible
     * @param  array<int, string>|null  $fieldsappCustomProductPages
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsappCustomProductPageVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filtervisible = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCustomProductPageVersions = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitappCustomProductPageVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[visible]' => $this->filtervisible,
            'fields[appCustomProductPages]' => $this->fieldsappCustomProductPages,
            'fields[apps]' => $this->fieldsapps,
            'fields[appCustomProductPageVersions]' => $this->fieldsappCustomProductPageVersions,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[appCustomProductPageVersions]' => $this->limitappCustomProductPageVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
