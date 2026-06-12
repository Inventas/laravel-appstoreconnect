<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_introductoryOffers_getToManyRelated
 */
class SubscriptionsIntroductoryOffersGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/introductoryOffers";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionIntroductoryOffers
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionIntroductoryOffers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPricePoints = null,
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
            'fields[subscriptionIntroductoryOffers]' => $this->fieldssubscriptionIntroductoryOffers,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'fields[territories]' => $this->fieldsterritories,
            'fields[subscriptionPricePoints]' => $this->fieldssubscriptionPricePoints,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
