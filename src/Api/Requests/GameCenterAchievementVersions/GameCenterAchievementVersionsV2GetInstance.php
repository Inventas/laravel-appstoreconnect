<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementVersionsV2_getInstance
 */
class GameCenterAchievementVersionsV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitlocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterAchievementVersions]' => $this->fieldsgameCenterAchievementVersions,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterAchievementLocalizations]' => $this->fieldsgameCenterAchievementLocalizations,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
