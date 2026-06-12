<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivities_deleteInstance
 */
class GameCenterActivitiesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivities/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
