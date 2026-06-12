<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementVersionsV2_localizations_getToManyRelated
 */
class GameCenterAchievementVersionsV2LocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementVersions/{$this->id}/localizations";
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
            'fields[gameCenterAchievementLocalizations]' => $this->fieldsgameCenterAchievementLocalizations,
            'fields[gameCenterAchievementVersions]' => $this->fieldsgameCenterAchievementVersions,
            'fields[gameCenterAchievementImages]' => $this->fieldsgameCenterAchievementImages,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
