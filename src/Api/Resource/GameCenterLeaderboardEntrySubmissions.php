<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardEntrySubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardEntrySubmissions\GameCenterLeaderboardEntrySubmissionsCreateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardEntrySubmissions extends BaseResource
{
    public function gameCenterLeaderboardEntrySubmissionsCreateInstance(
        GameCenterLeaderboardEntrySubmissionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardEntrySubmissionsCreateInstance($payload));
    }
}
