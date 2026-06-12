<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRuleSets_teams_getToManyRelated
 */
class GameCenterMatchmakingRuleSetsTeamsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRuleSets/{$this->id}/teams";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingTeams
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingTeams = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[gameCenterMatchmakingTeams]' => $this->fieldsgameCenterMatchmakingTeams, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
