<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_classicMatchmakingRequests_getMetrics
 */
class GameCenterDetailsClassicMatchmakingRequestsGetMetrics extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/metrics/classicMatchmakingRequests";
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
            'sort' => $this->sort,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
