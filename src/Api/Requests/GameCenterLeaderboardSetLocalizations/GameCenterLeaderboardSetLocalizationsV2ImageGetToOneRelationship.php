<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetLocalizationsV2_image_getToOneRelationship
 */
class GameCenterLeaderboardSetLocalizationsV2ImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetLocalizations/{$this->id}/relationships/image";
    }

    public function __construct(
        protected string $id,
    ) {}
}
