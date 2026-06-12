<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_gameCenterDetail_getToOneRelated
 */
class AppsGameCenterDetailGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/gameCenterDetail";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsgameCenterAppVersions
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsappStoreVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAppVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
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
        protected ?array $fieldsgameCenterAchievementReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersionReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersionReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappStoreVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitgameCenterAppVersions = null,
        protected ?int $limitgameCenterLeaderboards = null,
        protected ?int $limitgameCenterLeaderboardsV2 = null,
        protected ?int $limitgameCenterLeaderboardSets = null,
        protected ?int $limitgameCenterLeaderboardSetsV2 = null,
        protected ?int $limitgameCenterAchievements = null,
        protected ?int $limitgameCenterAchievementsV2 = null,
        protected ?int $limitgameCenterActivities = null,
        protected ?int $limitgameCenterChallenges = null,
        protected ?int $limitachievementReleases = null,
        protected ?int $limitactivityReleases = null,
        protected ?int $limitchallengeReleases = null,
        protected ?int $limitleaderboardReleases = null,
        protected ?int $limitleaderboardSetReleases = null,
        protected ?int $limitchallengesMinimumPlatformVersions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[apps]' => $this->fieldsapps,
            'fields[gameCenterAppVersions]' => $this->fieldsgameCenterAppVersions,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterChallenges]' => $this->fieldsgameCenterChallenges,
            'fields[gameCenterAchievementReleases]' => $this->fieldsgameCenterAchievementReleases,
            'fields[gameCenterActivityVersionReleases]' => $this->fieldsgameCenterActivityVersionReleases,
            'fields[gameCenterChallengeVersionReleases]' => $this->fieldsgameCenterChallengeVersionReleases,
            'fields[gameCenterLeaderboardReleases]' => $this->fieldsgameCenterLeaderboardReleases,
            'fields[gameCenterLeaderboardSetReleases]' => $this->fieldsgameCenterLeaderboardSetReleases,
            'fields[appStoreVersions]' => $this->fieldsappStoreVersions,
            'include' => $this->include,
            'limit[gameCenterAppVersions]' => $this->limitgameCenterAppVersions,
            'limit[gameCenterLeaderboards]' => $this->limitgameCenterLeaderboards,
            'limit[gameCenterLeaderboardsV2]' => $this->limitgameCenterLeaderboardsV2,
            'limit[gameCenterLeaderboardSets]' => $this->limitgameCenterLeaderboardSets,
            'limit[gameCenterLeaderboardSetsV2]' => $this->limitgameCenterLeaderboardSetsV2,
            'limit[gameCenterAchievements]' => $this->limitgameCenterAchievements,
            'limit[gameCenterAchievementsV2]' => $this->limitgameCenterAchievementsV2,
            'limit[gameCenterActivities]' => $this->limitgameCenterActivities,
            'limit[gameCenterChallenges]' => $this->limitgameCenterChallenges,
            'limit[achievementReleases]' => $this->limitachievementReleases,
            'limit[activityReleases]' => $this->limitactivityReleases,
            'limit[challengeReleases]' => $this->limitchallengeReleases,
            'limit[leaderboardReleases]' => $this->limitleaderboardReleases,
            'limit[leaderboardSetReleases]' => $this->limitleaderboardSetReleases,
            'limit[challengesMinimumPlatformVersions]' => $this->limitchallengesMinimumPlatformVersions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
