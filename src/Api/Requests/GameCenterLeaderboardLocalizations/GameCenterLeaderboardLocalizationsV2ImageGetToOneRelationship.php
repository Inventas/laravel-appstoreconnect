<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardLocalizationsV2_image_getToOneRelationship
 */
class GameCenterLeaderboardLocalizationsV2ImageGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardLocalizations/{$this->id}/relationships/image";
    }

    public function __construct(
        protected string $id,
    ) {}
}
