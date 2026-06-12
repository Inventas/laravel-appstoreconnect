<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleSetCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleSetUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsRulesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsRulesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsTeamsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsTeamsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets\GameCenterMatchmakingRuleSetsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterMatchmakingRuleSets extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingTeams
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRules
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $include
     */
    public function gameCenterMatchmakingRuleSetsGetCollection(
        ?array $fieldsgameCenterMatchmakingRuleSets = null,
        ?array $fieldsgameCenterMatchmakingTeams = null,
        ?array $fieldsgameCenterMatchmakingRules = null,
        ?array $fieldsgameCenterMatchmakingQueues = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitmatchmakingQueues = null,
        ?int $limitrules = null,
        ?int $limitteams = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsGetCollection($fieldsgameCenterMatchmakingRuleSets, $fieldsgameCenterMatchmakingTeams, $fieldsgameCenterMatchmakingRules, $fieldsgameCenterMatchmakingQueues, $limit, $include, $limitmatchmakingQueues, $limitrules, $limitteams));
    }

    public function gameCenterMatchmakingRuleSetsCreateInstance(
        GameCenterMatchmakingRuleSetCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingTeams
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRules
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $include
     */
    public function gameCenterMatchmakingRuleSetsGetInstance(
        string $id,
        ?array $fieldsgameCenterMatchmakingRuleSets = null,
        ?array $fieldsgameCenterMatchmakingTeams = null,
        ?array $fieldsgameCenterMatchmakingRules = null,
        ?array $fieldsgameCenterMatchmakingQueues = null,
        ?array $include = null,
        ?int $limitmatchmakingQueues = null,
        ?int $limitrules = null,
        ?int $limitteams = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsGetInstance($id, $fieldsgameCenterMatchmakingRuleSets, $fieldsgameCenterMatchmakingTeams, $fieldsgameCenterMatchmakingRules, $fieldsgameCenterMatchmakingQueues, $include, $limitmatchmakingQueues, $limitrules, $limitteams));
    }

    public function gameCenterMatchmakingRuleSetsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsDeleteInstance($id));
    }

    public function gameCenterMatchmakingRuleSetsUpdateInstance(
        string $id,
        GameCenterMatchmakingRuleSetUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsUpdateInstance($id, $payload));
    }

    public function gameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $include
     */
    public function gameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterMatchmakingQueues = null,
        ?array $fieldsgameCenterMatchmakingRuleSets = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelated($id, $fieldsgameCenterMatchmakingQueues, $fieldsgameCenterMatchmakingRuleSets, $limit, $include));
    }

    public function gameCenterMatchmakingRuleSetsRulesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsRulesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRules
     */
    public function gameCenterMatchmakingRuleSetsRulesGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterMatchmakingRules = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsRulesGetToManyRelated($id, $fieldsgameCenterMatchmakingRules, $limit));
    }

    public function gameCenterMatchmakingRuleSetsTeamsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsTeamsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingTeams
     */
    public function gameCenterMatchmakingRuleSetsTeamsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterMatchmakingTeams = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRuleSetsTeamsGetToManyRelated($id, $fieldsgameCenterMatchmakingTeams, $limit));
    }
}
