<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_appAvailabilityV2_getToOneRelationship
 */
class AppsAppAvailabilityV2GetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/appAvailabilityV2";
    }

    public function __construct(
        protected string $id,
    ) {}
}
