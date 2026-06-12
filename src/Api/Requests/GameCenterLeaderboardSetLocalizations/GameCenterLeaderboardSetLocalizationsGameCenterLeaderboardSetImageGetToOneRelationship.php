<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetLocalizations_gameCenterLeaderboardSetImage_getToOneRelationship
 */
class GameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetLocalizations/{$this->id}/relationships/gameCenterLeaderboardSetImage";
    }

    public function __construct(
        protected string $id,
    ) {}
}
