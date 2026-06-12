<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleSetTestCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSetTests\GameCenterMatchmakingRuleSetTestsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterMatchmakingRuleSetTests extends BaseResource
{
    public function gameCenterMatchmakingRuleSetTestsCreateInstance(
        GameCenterMatchmakingRuleSetTestCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetTestsCreateInstance($payload));
    }
}
