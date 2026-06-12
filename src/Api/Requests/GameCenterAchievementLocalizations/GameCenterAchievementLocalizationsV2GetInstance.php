<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizationsV2_getInstance
 */
class GameCenterAchievementLocalizationsV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementVersions = null,
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
            'fields[gameCenterAchievementVersions]' => $this->fieldsgameCenterAchievementVersions,
            'fields[gameCenterAchievementImages]' => $this->fieldsgameCenterAchievementImages,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
