<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingQueueCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingQueueUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesExperimentMatchmakingQueueSizesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesExperimentMatchmakingRequestsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesMatchmakingQueueSizesGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesMatchmakingRequestsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesMatchmakingSessionsGetMetrics;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues\GameCenterMatchmakingQueuesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterMatchmakingQueues extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $include
     */
    public function gameCenterMatchmakingQueuesGetCollection(
        ?array $fieldsgameCenterMatchmakingQueues = null,
        ?array $fieldsgameCenterMatchmakingRuleSets = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesGetCollection($fieldsgameCenterMatchmakingQueues, $fieldsgameCenterMatchmakingRuleSets, $limit, $include));
    }

    public function gameCenterMatchmakingQueuesCreateInstance(
        GameCenterMatchmakingQueueCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $include
     */
    public function gameCenterMatchmakingQueuesGetInstance(
        string $id,
        ?array $fieldsgameCenterMatchmakingQueues = null,
        ?array $fieldsgameCenterMatchmakingRuleSets = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesGetInstance($id, $fieldsgameCenterMatchmakingQueues, $fieldsgameCenterMatchmakingRuleSets, $include));
    }

    public function gameCenterMatchmakingQueuesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterMatchmakingQueuesDeleteInstance($id));
    }

    public function gameCenterMatchmakingQueuesUpdateInstance(
        string $id,
        GameCenterMatchmakingQueueUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesUpdateInstance($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingQueuesExperimentMatchmakingQueueSizesGetMetrics(
        string $id,
        string $granularity,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesExperimentMatchmakingQueueSizesGetMetrics($id, $granularity, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingQueuesExperimentMatchmakingRequestsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filterresult = null,
        ?string $filtergameCenterDetail = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesExperimentMatchmakingRequestsGetMetrics($id, $granularity, $groupBy, $filterresult, $filtergameCenterDetail, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingQueuesMatchmakingQueueSizesGetMetrics(
        string $id,
        string $granularity,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesMatchmakingQueueSizesGetMetrics($id, $granularity, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingQueuesMatchmakingRequestsGetMetrics(
        string $id,
        string $granularity,
        ?array $groupBy = null,
        ?string $filterresult = null,
        ?string $filtergameCenterDetail = null,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesMatchmakingRequestsGetMetrics($id, $granularity, $groupBy, $filterresult, $filtergameCenterDetail, $sort, $limit));
    }

    /**
     * @param  array<int, string>|null  $sort
     */
    public function gameCenterMatchmakingQueuesMatchmakingSessionsGetMetrics(
        string $id,
        string $granularity,
        ?array $sort = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterMatchmakingQueuesMatchmakingSessionsGetMetrics($id, $granularity, $sort, $limit));
    }
}
