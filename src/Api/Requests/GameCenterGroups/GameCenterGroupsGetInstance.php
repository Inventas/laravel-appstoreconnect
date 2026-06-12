<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterGroups_getInstance
 */
class GameCenterGroupsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallenges = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitgameCenterAchievements = null,
        protected ?int $limitgameCenterAchievementsV2 = null,
        protected ?int $limitgameCenterActivities = null,
        protected ?int $limitgameCenterChallenges = null,
        protected ?int $limitgameCenterDetails = null,
        protected ?int $limitgameCenterLeaderboardSets = null,
        protected ?int $limitgameCenterLeaderboardSetsV2 = null,
        protected ?int $limitgameCenterLeaderboards = null,
        protected ?int $limitgameCenterLeaderboardsV2 = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterChallenges]' => $this->fieldsgameCenterChallenges,
            'include' => $this->include,
            'limit[gameCenterAchievements]' => $this->limitgameCenterAchievements,
            'limit[gameCenterAchievementsV2]' => $this->limitgameCenterAchievementsV2,
            'limit[gameCenterActivities]' => $this->limitgameCenterActivities,
            'limit[gameCenterChallenges]' => $this->limitgameCenterChallenges,
            'limit[gameCenterDetails]' => $this->limitgameCenterDetails,
            'limit[gameCenterLeaderboardSets]' => $this->limitgameCenterLeaderboardSets,
            'limit[gameCenterLeaderboardSetsV2]' => $this->limitgameCenterLeaderboardSetsV2,
            'limit[gameCenterLeaderboards]' => $this->limitgameCenterLeaderboards,
            'limit[gameCenterLeaderboardsV2]' => $this->limitgameCenterLeaderboardsV2,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
