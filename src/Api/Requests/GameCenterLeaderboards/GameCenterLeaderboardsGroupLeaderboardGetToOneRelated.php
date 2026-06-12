<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboards_groupLeaderboard_getToOneRelated
 */
class GameCenterLeaderboardsGroupLeaderboardGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboards/{$this->id}/groupLeaderboard";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallenges = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitgameCenterLeaderboardSets = null,
        protected ?int $limitlocalizations = null,
        protected ?int $limitreleases = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterLeaderboardLocalizations]' => $this->fieldsgameCenterLeaderboardLocalizations,
            'fields[gameCenterLeaderboardReleases]' => $this->fieldsgameCenterLeaderboardReleases,
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterChallenges]' => $this->fieldsgameCenterChallenges,
            'include' => $this->include,
            'limit[gameCenterLeaderboardSets]' => $this->limitgameCenterLeaderboardSets,
            'limit[localizations]' => $this->limitlocalizations,
            'limit[releases]' => $this->limitreleases,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
