<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_promotedPurchase_getToOneRelationship
 */
class InAppPurchasesV2PromotedPurchaseGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/relationships/promotedPurchase";
    }

    public function __construct(
        protected string $id,
    ) {}
}
