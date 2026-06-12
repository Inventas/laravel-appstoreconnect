<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizations_gameCenterAchievement_getToOneRelationship
 */
class GameCenterAchievementLocalizationsGameCenterAchievementGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementLocalizations/{$this->id}/relationships/gameCenterAchievement";
    }

    public function __construct(
        protected string $id,
    ) {}
}
