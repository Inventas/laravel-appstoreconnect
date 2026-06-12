<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterAchievementLocalizations_gameCenterAchievementImage_getToOneRelated
 */
class GameCenterAchievementLocalizationsGameCenterAchievementImageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementLocalizations/{$this->id}/gameCenterAchievementImage";
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
