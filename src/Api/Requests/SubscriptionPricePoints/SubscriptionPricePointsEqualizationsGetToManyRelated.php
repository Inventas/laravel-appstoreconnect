<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPricePoints_equalizations_getToManyRelated
 */
class SubscriptionPricePointsEqualizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPricePoints/{$this->id}/equalizations";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filtersubscription
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $filtersubscription = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPricePoints = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
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
            'filter[territory]' => $this->filterterritory,
            'filter[subscription]' => $this->filtersubscription,
            'fields[subscriptionPricePoints]' => $this->fieldssubscriptionPricePoints,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
