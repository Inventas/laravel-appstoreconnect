<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardVersionsV2_localizations_getToManyRelated
 */
class GameCenterLeaderboardVersionsV2LocalizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardVersions/{$this->id}/localizations";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardImages = null,
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
            'fields[gameCenterLeaderboardLocalizations]' => $this->fieldsgameCenterLeaderboardLocalizations,
            'fields[gameCenterLeaderboardVersions]' => $this->fieldsgameCenterLeaderboardVersions,
            'fields[gameCenterLeaderboardImages]' => $this->fieldsgameCenterLeaderboardImages,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
