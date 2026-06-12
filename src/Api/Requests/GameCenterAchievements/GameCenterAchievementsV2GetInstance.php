<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementsV2_getInstance
 */
class GameCenterAchievementsV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievements/{$this->id}";
    }

    /**
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
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementVersions = null,
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
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterAchievementVersions]' => $this->fieldsgameCenterAchievementVersions,
            'include' => $this->include,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
