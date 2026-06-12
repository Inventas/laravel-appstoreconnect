<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfos_primarySubcategoryOne_getToOneRelated
 */
class AppInfosPrimarySubcategoryOneGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}/primarySubcategoryOne";
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
