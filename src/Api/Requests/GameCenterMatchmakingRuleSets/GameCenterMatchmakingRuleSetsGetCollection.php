<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRuleSets_getCollection
 */
class GameCenterMatchmakingRuleSetsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterMatchmakingRuleSets';
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRuleSets
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingTeams
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRules
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingQueues
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingRuleSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingTeams = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingRules = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingQueues = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitmatchmakingQueues = null,
        protected ?int $limitrules = null,
        protected ?int $limitteams = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterMatchmakingRuleSets]' => $this->fieldsgameCenterMatchmakingRuleSets,
            'fields[gameCenterMatchmakingTeams]' => $this->fieldsgameCenterMatchmakingTeams,
            'fields[gameCenterMatchmakingRules]' => $this->fieldsgameCenterMatchmakingRules,
            'fields[gameCenterMatchmakingQueues]' => $this->fieldsgameCenterMatchmakingQueues,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[matchmakingQueues]' => $this->limitmatchmakingQueues,
            'limit[rules]' => $this->limitrules,
            'limit[teams]' => $this->limitteams,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
