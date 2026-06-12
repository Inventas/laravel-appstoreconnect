<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRules_matchmakingBooleanRuleResults_getMetrics
 */
class GameCenterMatchmakingRulesMatchmakingBooleanRuleResultsGetMetrics extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRules/{$this->id}/metrics/matchmakingBooleanRuleResults";
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
        protected ?string $filtergameCenterMatchmakingQueue = null,
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
            'filter[gameCenterMatchmakingQueue]' => $this->filtergameCenterMatchmakingQueue,
            'sort' => $this->sort,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
