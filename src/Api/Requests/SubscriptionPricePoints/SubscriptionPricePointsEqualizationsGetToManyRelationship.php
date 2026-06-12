<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionPricePoints_equalizations_getToManyRelationship
 */
class SubscriptionPricePointsEqualizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionPricePoints/{$this->id}/relationships/equalizations";
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
