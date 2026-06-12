<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations\GameCenterChallengeLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations\GameCenterChallengeLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations\GameCenterChallengeLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations\GameCenterChallengeLocalizationsImageGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations\GameCenterChallengeLocalizationsImageGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations\GameCenterChallengeLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterChallengeLocalizations extends BaseResource
{
    public function gameCenterChallengeLocalizationsCreateInstance(
        GameCenterChallengeLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengeLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterChallengeLocalizationsGetInstance(
        string $id,
        ?array $fieldsgameCenterChallengeLocalizations = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $fieldsgameCenterChallengeImages = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeLocalizationsGetInstance($id, $fieldsgameCenterChallengeLocalizations, $fieldsgameCenterChallengeVersions, $fieldsgameCenterChallengeImages, $include));
    }

    public function gameCenterChallengeLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterChallengeLocalizationsDeleteInstance($id));
    }

    public function gameCenterChallengeLocalizationsUpdateInstance(
        string $id,
        GameCenterChallengeLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengeLocalizationsUpdateInstance($id, $payload));
    }

    public function gameCenterChallengeLocalizationsImageGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new GameCenterChallengeLocalizationsImageGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     */
    public function gameCenterChallengeLocalizationsImageGetToOneRelated(
        string $id,
        ?array $fieldsgameCenterChallengeImages = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeLocalizationsImageGetToOneRelated($id, $fieldsgameCenterChallengeImages));
    }
}
