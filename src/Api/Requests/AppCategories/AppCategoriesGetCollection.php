<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCategories_getCollection
 */
class AppCategoriesGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/appCategories';
    }

    /**
     * @param  array<int, string>|null  $filterplatforms
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterplatforms = null,
        protected ?bool $existsparent = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCategories = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitsubcategories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[platforms]' => $this->filterplatforms,
            'exists[parent]' => $this->existsparent,
            'fields[appCategories]' => $this->fieldsappCategories,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[subcategories]' => $this->limitsubcategories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
