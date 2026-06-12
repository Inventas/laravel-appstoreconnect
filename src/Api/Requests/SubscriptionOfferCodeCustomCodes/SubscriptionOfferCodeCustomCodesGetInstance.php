<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeCustomCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionOfferCodeCustomCodes_getInstance
 */
class SubscriptionOfferCodeCustomCodesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionOfferCodeCustomCodes/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodeCustomCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodes = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[subscriptionOfferCodeCustomCodes]' => $this->fieldssubscriptionOfferCodeCustomCodes,
            'fields[subscriptionOfferCodes]' => $this->fieldssubscriptionOfferCodes,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
