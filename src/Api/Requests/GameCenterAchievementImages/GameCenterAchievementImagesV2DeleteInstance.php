<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementImagesV2_deleteInstance
 */
class GameCenterAchievementImagesV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
