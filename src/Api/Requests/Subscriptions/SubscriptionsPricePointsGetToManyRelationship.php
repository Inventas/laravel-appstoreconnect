<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_pricePoints_getToManyRelationship
 */
class SubscriptionsPricePointsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/relationships/pricePoints";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
