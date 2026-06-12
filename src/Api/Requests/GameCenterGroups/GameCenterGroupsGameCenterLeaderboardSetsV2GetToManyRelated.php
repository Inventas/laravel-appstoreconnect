<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterGroups_gameCenterLeaderboardSetsV2_getToManyRelated
 */
class GameCenterGroupsGameCenterLeaderboardSetsV2GetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/gameCenterLeaderboardSetsV2";
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterid
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
        protected ?array $filterreferenceName = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
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
        protected ?int $limit = null,
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
            'filter[referenceName]' => $this->filterreferenceName,
            'filter[id]' => $this->filterid,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'fields[gameCenterLeaderboardSetVersions]' => $this->fieldsgameCenterLeaderboardSetVersions,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[gameCenterLeaderboards]' => $this->limitgameCenterLeaderboards,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
