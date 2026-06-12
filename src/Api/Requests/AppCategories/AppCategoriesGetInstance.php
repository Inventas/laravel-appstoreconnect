<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCategories_getInstance
 */
class AppCategoriesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCategories/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCategories = null,
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
            'fields[appCategories]' => $this->fieldsappCategories,
            'include' => $this->include,
            'limit[subcategories]' => $this->limitsubcategories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
