<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardLocalizations_getInstance
 */
class GameCenterLeaderboardLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
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
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterLeaderboardImages]' => $this->fieldsgameCenterLeaderboardImages,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
