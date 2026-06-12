<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations\GameCenterActivityLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations\GameCenterActivityLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations\GameCenterActivityLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations\GameCenterActivityLocalizationsImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations\GameCenterActivityLocalizationsImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations\GameCenterActivityLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterActivityLocalizations extends BaseResource
{
    public function gameCenterActivityLocalizationsCreateInstance(
        GameCenterActivityLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterActivityLocalizationsGetInstance(
        string $id,
        ?array $fieldsgameCenterActivityLocalizations = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $fieldsgameCenterActivityImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityLocalizationsGetInstance($id, $fieldsgameCenterActivityLocalizations, $fieldsgameCenterActivityVersions, $fieldsgameCenterActivityImages, $include));
    }

    public function gameCenterActivityLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterActivityLocalizationsDeleteInstance($id));
    }

    public function gameCenterActivityLocalizationsUpdateInstance(
        string $id,
        GameCenterActivityLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityLocalizationsUpdateInstance($id, $payload));
    }

    public function gameCenterActivityLocalizationsImageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterActivityLocalizationsImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     */
    public function gameCenterActivityLocalizationsImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterActivityImages = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityLocalizationsImageGetToOneRelated($id, $fieldsgameCenterActivityImages));
    }
}
