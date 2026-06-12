<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterGroups_gameCenterAchievementsV2_getToManyRelated
 */
class GameCenterGroupsGameCenterAchievementsV2GetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/gameCenterAchievementsV2";
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
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
        protected ?array $fieldsgameCenterActivities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementVersions = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitversions = null,
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
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterAchievementVersions]' => $this->fieldsgameCenterAchievementVersions,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
