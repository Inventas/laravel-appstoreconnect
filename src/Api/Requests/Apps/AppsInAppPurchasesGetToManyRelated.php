<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_inAppPurchases_getToManyRelated
 */
class AppsInAppPurchasesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/inAppPurchases";
    }

    /**
     * @param  array<int, string>|null  $filterinAppPurchaseType
     * @param  array<int, string>|null  $filtercanBeSubmitted
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterinAppPurchaseType = null,
        /** @var array<int, string>|null */
        protected ?array $filtercanBeSubmitted = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitapps = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[inAppPurchaseType]' => $this->filterinAppPurchaseType,
            'filter[canBeSubmitted]' => $this->filtercanBeSubmitted,
            'sort' => $this->sort,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[apps]' => $this->limitapps,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
