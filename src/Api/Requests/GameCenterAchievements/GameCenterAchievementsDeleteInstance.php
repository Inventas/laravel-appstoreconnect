<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievements_deleteInstance
 */
class GameCenterAchievementsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievements/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
