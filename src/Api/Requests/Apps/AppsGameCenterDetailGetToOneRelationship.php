<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_gameCenterDetail_getToOneRelationship
 */
class AppsGameCenterDetailGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/relationships/gameCenterDetail";
    }

    public function __construct(
        protected string $id,
    ) {}
}
