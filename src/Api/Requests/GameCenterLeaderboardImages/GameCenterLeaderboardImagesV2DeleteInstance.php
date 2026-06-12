<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardImagesV2_deleteInstance
 */
class GameCenterLeaderboardImagesV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
