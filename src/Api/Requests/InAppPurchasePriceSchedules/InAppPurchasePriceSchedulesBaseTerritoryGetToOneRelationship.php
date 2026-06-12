<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasePriceSchedules_baseTerritory_getToOneRelationship
 */
class InAppPurchasePriceSchedulesBaseTerritoryGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchasePriceSchedules/{$this->id}/relationships/baseTerritory";
    }

    public function __construct(
        protected string $id,
    ) {}
}
