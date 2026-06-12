<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementImagesV2_getInstance
 */
class GameCenterAchievementImagesV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievementImages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterAchievementLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterAchievementImages]' => $this->fieldsgameCenterAchievementImages,
            'fields[gameCenterAchievementLocalizations]' => $this->fieldsgameCenterAchievementLocalizations,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
