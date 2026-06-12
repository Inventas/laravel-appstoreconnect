<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementImages_deleteInstance
 */
class GameCenterAchievementImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
