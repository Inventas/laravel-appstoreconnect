<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementReleases_getInstance
 */
class GameCenterAchievementReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterAchievementReleases]' => $this->fieldsgameCenterAchievementReleases,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
