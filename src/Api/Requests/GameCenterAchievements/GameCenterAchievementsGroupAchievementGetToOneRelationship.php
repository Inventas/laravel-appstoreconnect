<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievements_groupAchievement_getToOneRelationship
 */
class GameCenterAchievementsGroupAchievementGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievements/{$this->id}/relationships/groupAchievement";
    }

    public function __construct(
        protected string $id,
    ) {}
}
