<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetLocalizations_gameCenterLeaderboardSetImage_getToOneRelated
 */
class GameCenterLeaderboardSetLocalizationsGameCenterLeaderboardSetImageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetLocalizations/{$this->id}/gameCenterLeaderboardSetImage";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterLeaderboardSetImages]' => $this->fieldsgameCenterLeaderboardSetImages,
            'fields[gameCenterLeaderboardSetLocalizations]' => $this->fieldsgameCenterLeaderboardSetLocalizations,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
