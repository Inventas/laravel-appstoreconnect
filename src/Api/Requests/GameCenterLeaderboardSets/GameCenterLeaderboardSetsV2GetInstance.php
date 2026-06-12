<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetsV2_getInstance
 */
class GameCenterLeaderboardSetsV2GetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSets/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitgameCenterLeaderboards = null,
        protected ?int $limitversions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterLeaderboardSetVersions]' => $this->fieldsgameCenterLeaderboardSetVersions,
            'include' => $this->include,
            'limit[gameCenterLeaderboards]' => $this->limitgameCenterLeaderboards,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
