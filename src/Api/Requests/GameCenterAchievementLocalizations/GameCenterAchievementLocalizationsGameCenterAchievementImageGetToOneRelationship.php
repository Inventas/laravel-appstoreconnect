<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizations_gameCenterAchievementImage_getToOneRelationship
 */
class GameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementLocalizations/{$this->id}/relationships/gameCenterAchievementImage";
    }

    public function __construct(
        protected string $id,
    ) {}
}
