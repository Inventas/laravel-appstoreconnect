<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterGroups_gameCenterAchievements_getToManyRelated
 */
class GameCenterGroupsGameCenterAchievementsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/gameCenterAchievements";
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterreferenceName = null,
        /** @var array<int, string>|null */
        protected ?array $filterarchived = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivities = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitlocalizations = null,
        protected ?int $limitreleases = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[referenceName]' => $this->filterreferenceName,
            'filter[archived]' => $this->filterarchived,
            'filter[id]' => $this->filterid,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterAchievementLocalizations]' => $this->fieldsgameCenterAchievementLocalizations,
            'fields[gameCenterAchievementReleases]' => $this->fieldsgameCenterAchievementReleases,
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
            'limit[releases]' => $this->limitreleases,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
