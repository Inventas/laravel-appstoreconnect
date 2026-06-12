<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages\GameCenterChallengeImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages\GameCenterChallengeImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages\GameCenterChallengeImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages\GameCenterChallengeImagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterChallengeImages extends BaseResource
{
    public function gameCenterChallengeImagesCreateInstance(
        GameCenterChallengeImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengeImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     */
    public function gameCenterChallengeImagesGetInstance(
        string $id,
        ?array $fieldsgameCenterChallengeImages = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeImagesGetInstance($id, $fieldsgameCenterChallengeImages));
    }

    public function gameCenterChallengeImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterChallengeImagesDeleteInstance($id));
    }

    public function gameCenterChallengeImagesUpdateInstance(
        string $id,
        GameCenterChallengeImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengeImagesUpdateInstance($id, $payload));
    }
}
