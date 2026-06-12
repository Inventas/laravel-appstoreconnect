<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizations_getInstance
 */
class GameCenterAchievementLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementImages = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterAchievementLocalizations]' => $this->fieldsgameCenterAchievementLocalizations,
            'fields[gameCenterAchievements]' => $this->fieldsgameCenterAchievements,
            'fields[gameCenterAchievementImages]' => $this->fieldsgameCenterAchievementImages,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
