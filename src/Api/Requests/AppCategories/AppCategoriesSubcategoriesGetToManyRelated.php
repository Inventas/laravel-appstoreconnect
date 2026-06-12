<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCategories_subcategories_getToManyRelated
 */
class AppCategoriesSubcategoriesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCategories/{$this->id}/subcategories";
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCategories = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appCategories]' => $this->fieldsappCategories, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
