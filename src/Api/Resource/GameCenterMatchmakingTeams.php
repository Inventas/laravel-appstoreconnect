<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingTeamCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingTeamUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingTeams\GameCenterMatchmakingTeamsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingTeams\GameCenterMatchmakingTeamsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingTeams\GameCenterMatchmakingTeamsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterMatchmakingTeams extends BaseResource
{
    public function gameCenterMatchmakingTeamsCreateInstance(
        GameCenterMatchmakingTeamCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingTeamsCreateInstance($payload));
    }

    public function gameCenterMatchmakingTeamsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterMatchmakingTeamsDeleteInstance($id));
    }

    public function gameCenterMatchmakingTeamsUpdateInstance(
        string $id,
        GameCenterMatchmakingTeamUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingTeamsUpdateInstance($id, $payload));
    }
}
