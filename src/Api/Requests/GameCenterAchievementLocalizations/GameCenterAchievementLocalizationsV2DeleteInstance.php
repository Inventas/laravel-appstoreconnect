<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizationsV2_deleteInstance
 */
class GameCenterAchievementLocalizationsV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
