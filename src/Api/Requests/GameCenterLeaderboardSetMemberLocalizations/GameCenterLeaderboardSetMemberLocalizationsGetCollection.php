<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetMemberLocalizations_getCollection
 */
class GameCenterLeaderboardSetMemberLocalizationsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterLeaderboardSetMemberLocalizations';
    }

    /**
     * @param  array<int, string>  $filtergameCenterLeaderboardSet
     * @param  array<int, string>  $filtergameCenterLeaderboard
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetMemberLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filtergameCenterLeaderboardSet,
        /** @var array<int, string> */
        protected array $filtergameCenterLeaderboard,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetMemberLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
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
            'filter[gameCenterLeaderboardSet]' => $this->filtergameCenterLeaderboardSet,
            'filter[gameCenterLeaderboard]' => $this->filtergameCenterLeaderboard,
            'fields[gameCenterLeaderboardSetMemberLocalizations]' => $this->fieldsgameCenterLeaderboardSetMemberLocalizations,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
