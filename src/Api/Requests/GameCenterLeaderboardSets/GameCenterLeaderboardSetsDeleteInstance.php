<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSets_deleteInstance
 */
class GameCenterLeaderboardSetsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSets/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
