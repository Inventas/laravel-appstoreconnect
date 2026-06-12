<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPriceSchedules_baseTerritory_getToOneRelationship
 */
class AppPriceSchedulesBaseTerritoryGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPriceSchedules/{$this->id}/relationships/baseTerritory";
    }

    public function __construct(
        protected string $id,
    ) {}
}
