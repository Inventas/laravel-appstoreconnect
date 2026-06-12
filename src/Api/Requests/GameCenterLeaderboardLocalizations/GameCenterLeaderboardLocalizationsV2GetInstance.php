<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardLocalizationsV2_getInstance
 */
class GameCenterLeaderboardLocalizationsV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardLocalizations/{$this->id}";
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
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
