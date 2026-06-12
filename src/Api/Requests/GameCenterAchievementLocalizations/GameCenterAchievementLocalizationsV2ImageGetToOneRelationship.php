<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizationsV2_image_getToOneRelationship
 */
class GameCenterAchievementLocalizationsV2ImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementLocalizations/{$this->id}/relationships/image";
    }

    public function __construct(
        protected string $id,
    ) {}
}
