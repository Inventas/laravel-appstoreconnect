<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppCategories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appCategories_parent_getToOneRelated
 */
class AppCategoriesParentGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appCategories/{$this->id}/parent";
    }

    /**
     * @param  array<int, string>|null  $fieldsappCategories
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappCategories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appCategories]' => $this->fieldsappCategories], static fn (mixed $value): bool => $value !== null);
    }
}
