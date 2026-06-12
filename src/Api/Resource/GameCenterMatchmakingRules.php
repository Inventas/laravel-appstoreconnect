<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules\GameCenterMatchmakingRulesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules\GameCenterMatchmakingRulesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules\GameCenterMatchmakingRulesMatchmakingBooleanRuleResultsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules\GameCenterMatchmakingRulesMatchmakingNumberRuleResultsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules\GameCenterMatchmakingRulesMatchmakingRuleErrorsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules\GameCenterMatchmakingRulesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterMatchmakingRules extends BaseResource
{
    public function gameCenterMatchmakingRulesCreateInstance(
        GameCenterMatchmakingRuleCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRulesCreateInstance($payload));
    }

    public function gameCenterMatchmakingRulesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterMatchmakingRulesDeleteInstance($id));
    }

    public function gameCenterMatchmakingRulesUpdateInstance(
        string $id,
        GameCenterMatchmakingRuleUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRulesUpdateInstance($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingRulesMatchmakingBooleanRuleResultsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filterresult = null,
        ?string $filtergameCenterMatchmakingQueue = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRulesMatchmakingBooleanRuleResultsGetMetrics($id, $granularity, $groupBy, $filterresult, $filtergameCenterMatchmakingQueue, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingRulesMatchmakingNumberRuleResultsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filtergameCenterMatchmakingQueue = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRulesMatchmakingNumberRuleResultsGetMetrics($id, $granularity, $groupBy, $filtergameCenterMatchmakingQueue, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingRulesMatchmakingRuleErrorsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filtergameCenterMatchmakingQueue = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingRulesMatchmakingRuleErrorsGetMetrics($id, $granularity, $groupBy, $filtergameCenterMatchmakingQueue, $sort, $limit));
    }
}
