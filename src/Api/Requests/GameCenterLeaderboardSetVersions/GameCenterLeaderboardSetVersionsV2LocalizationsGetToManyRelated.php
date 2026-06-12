<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetVersionsV2_localizations_getToManyRelated
 */
class GameCenterLeaderboardSetVersionsV2LocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetVersions/{$this->id}/localizations";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetImages = null,
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
            'fields[gameCenterLeaderboardSetLocalizations]' => $this->fieldsgameCenterLeaderboardSetLocalizations,
            'fields[gameCenterLeaderboardSetVersions]' => $this->fieldsgameCenterLeaderboardSetVersions,
            'fields[gameCenterLeaderboardSetImages]' => $this->fieldsgameCenterLeaderboardSetImages,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
