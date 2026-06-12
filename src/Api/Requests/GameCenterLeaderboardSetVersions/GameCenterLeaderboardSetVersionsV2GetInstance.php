<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetVersionsV2_getInstance
 */
class GameCenterLeaderboardSetVersionsV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitlocalizations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterLeaderboardSetVersions]' => $this->fieldsgameCenterLeaderboardSetVersions,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterLeaderboardSetLocalizations]' => $this->fieldsgameCenterLeaderboardSetLocalizations,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
