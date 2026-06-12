<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRuleSets_matchmakingQueues_getToManyRelated
 */
class GameCenterMatchmakingRuleSetsMatchmakingQueuesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRuleSets/{$this->id}/matchmakingQueues";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingQueues = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingRuleSets = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterMatchmakingQueues]' => $this->fieldsgameCenterMatchmakingQueues,
            'fields[gameCenterMatchmakingRuleSets]' => $this->fieldsgameCenterMatchmakingRuleSets,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
