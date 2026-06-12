<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementsV2_deleteInstance
 */
class GameCenterAchievementsV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievements/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
