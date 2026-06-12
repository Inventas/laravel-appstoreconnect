<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appPriceSchedule_getToOneRelationship
 */
class AppsAppPriceScheduleGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/appPriceSchedule";
    }

    public function __construct(
        protected string $id,
    ) {}
}
