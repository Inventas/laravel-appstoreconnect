<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingQueues_matchmakingQueueSizes_getMetrics
 */
class GameCenterMatchmakingQueuesMatchmakingQueueSizesGetMetrics extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingQueues/{$this->id}/metrics/matchmakingQueueSizes";
    }

    /**
     * @param  array<int, string>|null  $sort
     */
    public function __construct(
        protected string $id,
        protected string $granularity,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['granularity' => $this->granularity, 'sort' => $this->sort, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
