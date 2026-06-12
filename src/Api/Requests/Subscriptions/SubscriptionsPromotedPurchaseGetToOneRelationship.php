<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_promotedPurchase_getToOneRelationship
 */
class SubscriptionsPromotedPurchaseGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/relationships/promotedPurchase";
    }

    public function __construct(
        protected string $id,
    ) {}
}
