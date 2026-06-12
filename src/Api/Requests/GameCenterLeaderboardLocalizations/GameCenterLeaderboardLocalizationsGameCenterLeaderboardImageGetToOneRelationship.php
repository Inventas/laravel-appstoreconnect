<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardLocalizations_gameCenterLeaderboardImage_getToOneRelationship
 */
class GameCenterLeaderboardLocalizationsGameCenterLeaderboardImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardLocalizations/{$this->id}/relationships/gameCenterLeaderboardImage";
    }

    public function __construct(
        protected string $id,
    ) {}
}
