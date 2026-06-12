<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardImages_deleteInstance
 */
class GameCenterLeaderboardImagesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
