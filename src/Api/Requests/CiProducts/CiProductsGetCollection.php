<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiProducts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ciProducts_getCollection
 */
class CiProductsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/ciProducts';
    }

    /**
     * @param  array<int, string>|null  $filterproductType
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $fieldsciProducts
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbundleIds
     * @param  array<int, string>|null  $fieldsscmRepositories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterproductType = null,
        /** @var array<int, string>|null */
        protected ?array $filterapp = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsciProducts = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsscmRepositories = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitprimaryRepositories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[productType]' => $this->filterproductType,
            'filter[app]' => $this->filterapp,
            'fields[ciProducts]' => $this->fieldsciProducts,
            'fields[apps]' => $this->fieldsapps,
            'fields[bundleIds]' => $this->fieldsbundleIds,
            'fields[scmRepositories]' => $this->fieldsscmRepositories,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[primaryRepositories]' => $this->limitprimaryRepositories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
