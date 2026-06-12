<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_inAppPurchaseAvailability_getToOneRelationship
 */
class InAppPurchasesV2InAppPurchaseAvailabilityGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/relationships/inAppPurchaseAvailability";
    }

    public function __construct(
        protected string $id,
    ) {}
}
