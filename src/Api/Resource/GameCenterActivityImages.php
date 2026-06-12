<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityImageCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityImageUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityImages\GameCenterActivityImagesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityImages\GameCenterActivityImagesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityImages\GameCenterActivityImagesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityImages\GameCenterActivityImagesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterActivityImages extends BaseResource
{
    public function gameCenterActivityImagesCreateInstance(
        GameCenterActivityImageCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityImagesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     */
    public function gameCenterActivityImagesGetInstance(
        string $id,
        ?array $fieldsgameCenterActivityImages = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityImagesGetInstance($id, $fieldsgameCenterActivityImages));
    }

    public function gameCenterActivityImagesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterActivityImagesDeleteInstance($id));
    }

    public function gameCenterActivityImagesUpdateInstance(
        string $id,
        GameCenterActivityImageUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityImagesUpdateInstance($id, $payload));
    }
}
