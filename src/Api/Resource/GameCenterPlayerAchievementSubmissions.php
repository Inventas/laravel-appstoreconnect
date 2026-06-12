<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterPlayerAchievementSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterPlayerAchievementSubmissions\GameCenterPlayerAchievementSubmissionsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterPlayerAchievementSubmissions extends BaseResource
{
    public function gameCenterPlayerAchievementSubmissionsCreateInstance(
        GameCenterPlayerAchievementSubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterPlayerAchievementSubmissionsCreateInstance($payload));
    }
}
