<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionOfferCodes_oneTimeUseCodes_getToManyRelated
 */
class SubscriptionOfferCodesOneTimeUseCodesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionOfferCodes/{$this->id}/oneTimeUseCodes";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodeOneTimeUseCodes = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionOfferCodes = null,
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
            'fields[subscriptionOfferCodeOneTimeUseCodes]' => $this->fieldssubscriptionOfferCodeOneTimeUseCodes,
            'fields[subscriptionOfferCodes]' => $this->fieldssubscriptionOfferCodes,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
