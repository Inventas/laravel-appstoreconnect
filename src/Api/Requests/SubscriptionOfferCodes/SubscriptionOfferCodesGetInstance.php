<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionOfferCodes_getInstance
 */
class SubscriptionOfferCodesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionOfferCodes/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodePrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodeOneTimeUseCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodeCustomCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodePrices = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcustomCodes = null,
        protected ?int $limitoneTimeUseCodes = null,
        protected ?int $limitprices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionOfferCodes]' => $this->fieldssubscriptionOfferCodes,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'fields[subscriptionOfferCodeOneTimeUseCodes]' => $this->fieldssubscriptionOfferCodeOneTimeUseCodes,
            'fields[subscriptionOfferCodeCustomCodes]' => $this->fieldssubscriptionOfferCodeCustomCodes,
            'fields[subscriptionOfferCodePrices]' => $this->fieldssubscriptionOfferCodePrices,
            'include' => $this->include,
            'limit[customCodes]' => $this->limitcustomCodes,
            'limit[oneTimeUseCodes]' => $this->limitoneTimeUseCodes,
            'limit[prices]' => $this->limitprices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
