<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPromotionalOffers_getInstance
 */
class SubscriptionPromotionalOffersGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPromotionalOffers/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOffers
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPromotionalOffers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPromotionalOfferPrices = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitprices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionPromotionalOffers]' => $this->fieldssubscriptionPromotionalOffers,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'fields[subscriptionPromotionalOfferPrices]' => $this->fieldssubscriptionPromotionalOfferPrices,
            'include' => $this->include,
            'limit[prices]' => $this->limitprices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
