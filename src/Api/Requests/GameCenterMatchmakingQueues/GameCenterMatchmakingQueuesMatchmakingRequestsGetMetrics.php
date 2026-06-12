<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingQueues_matchmakingRequests_getMetrics
 */
class GameCenterMatchmakingQueuesMatchmakingRequestsGetMetrics extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingQueues/{$this->id}/metrics/matchmakingRequests";
    }

    /**
     * @param  array<int, string>|null  $groupBy
     * @param  array<int, string>|null  $sort
     */
    public function __construct(
        protected string $id,
        protected string $granularity,
        /** @var array<int, string>|null */
        protected ?array $groupBy = null,
        protected ?string $filterresult = null,
        protected ?string $filtergameCenterDetail = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'granularity' => $this->granularity,
            'groupBy' => $this->groupBy,
            'filter[result]' => $this->filterresult,
            'filter[gameCenterDetail]' => $this->filtergameCenterDetail,
            'sort' => $this->sort,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
