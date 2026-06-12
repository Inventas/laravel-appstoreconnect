<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_getInstance
 */
class SubscriptionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionLocalizations
     * @param  array<int, string>|null  $fieldssubscriptionAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldssubscriptionIntroductoryOffers
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOffers
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $fieldssubscriptionPrices
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldssubscriptionAvailabilities
     * @param  array<int, string>|null  $fieldswinBackOffers
     * @param  array<int, string>|null  $fieldssubscriptionImages
     * @param  array<int, string>|null  $fieldssubscriptionPlanAvailabilities
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionAppStoreReviewScreenshots = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionIntroductoryOffers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPromotionalOffers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPrices = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspromotedPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldswinBackOffers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionPlanAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitimages = null,
        protected ?int $limitintroductoryOffers = null,
        protected ?int $limitofferCodes = null,
        protected ?int $limitplanAvailabilities = null,
        protected ?int $limitprices = null,
        protected ?int $limitpromotionalOffers = null,
        protected ?int $limitsubscriptionLocalizations = null,
        protected ?int $limitwinBackOffers = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'fields[subscriptionLocalizations]' => $this->fieldssubscriptionLocalizations,
            'fields[subscriptionAppStoreReviewScreenshots]' => $this->fieldssubscriptionAppStoreReviewScreenshots,
            'fields[subscriptionGroups]' => $this->fieldssubscriptionGroups,
            'fields[subscriptionIntroductoryOffers]' => $this->fieldssubscriptionIntroductoryOffers,
            'fields[subscriptionPromotionalOffers]' => $this->fieldssubscriptionPromotionalOffers,
            'fields[subscriptionOfferCodes]' => $this->fieldssubscriptionOfferCodes,
            'fields[subscriptionPrices]' => $this->fieldssubscriptionPrices,
            'fields[promotedPurchases]' => $this->fieldspromotedPurchases,
            'fields[subscriptionAvailabilities]' => $this->fieldssubscriptionAvailabilities,
            'fields[winBackOffers]' => $this->fieldswinBackOffers,
            'fields[subscriptionImages]' => $this->fieldssubscriptionImages,
            'fields[subscriptionPlanAvailabilities]' => $this->fieldssubscriptionPlanAvailabilities,
            'include' => $this->include,
            'limit[images]' => $this->limitimages,
            'limit[introductoryOffers]' => $this->limitintroductoryOffers,
            'limit[offerCodes]' => $this->limitofferCodes,
            'limit[planAvailabilities]' => $this->limitplanAvailabilities,
            'limit[prices]' => $this->limitprices,
            'limit[promotionalOffers]' => $this->limitpromotionalOffers,
            'limit[subscriptionLocalizations]' => $this->limitsubscriptionLocalizations,
            'limit[winBackOffers]' => $this->limitwinBackOffers,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
