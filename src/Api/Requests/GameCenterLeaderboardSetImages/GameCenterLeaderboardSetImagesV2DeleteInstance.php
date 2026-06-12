<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetImagesV2_deleteInstance
 */
class GameCenterLeaderboardSetImagesV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
