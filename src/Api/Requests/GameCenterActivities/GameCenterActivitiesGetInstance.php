<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivities_getInstance
 */
class GameCenterActivitiesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivities/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitachievements = null,
        protected ?int $limitachievementsV2 = null,
        protected ?int $limitleaderboards = null,
        protected ?int $limitleaderboardsV2 = null,
        protected ?int $limitversions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterActivityVersions]' => $this->fieldsgameCenterActivityVersions,
            'include' => $this->include,
            'limit[achievements]' => $this->limitachievements,
            'limit[achievementsV2]' => $this->limitachievementsV2,
            'limit[leaderboards]' => $this->limitleaderboards,
            'limit[leaderboardsV2]' => $this->limitleaderboardsV2,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
