<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetImages_deleteInstance
 */
class GameCenterLeaderboardSetImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
