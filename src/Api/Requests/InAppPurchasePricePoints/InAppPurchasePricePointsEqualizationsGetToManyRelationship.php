<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePricePoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasePricePoints_equalizations_getToManyRelationship
 */
class InAppPurchasePricePointsEqualizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchasePricePoints/{$this->id}/relationships/equalizations";
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
