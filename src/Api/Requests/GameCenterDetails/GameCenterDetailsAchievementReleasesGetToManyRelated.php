<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_achievementReleases_getToManyRelated
 */
class GameCenterDetailsAchievementReleasesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/achievementReleases";
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterAchievement
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterlive = null,
        /** @var array<int, string>|null */
        protected ?array $filtergameCenterAchievement = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
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
            'filter[live]' => $this->filterlive,
            'filter[gameCenterAchievement]' => $this->filtergameCenterAchievement,
            'fields[gameCenterAchievementReleases]' => $this->fieldsgameCenterAchievementReleases,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
