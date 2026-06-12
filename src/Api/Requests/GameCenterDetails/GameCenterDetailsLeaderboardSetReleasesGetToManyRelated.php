<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_leaderboardSetReleases_getToManyRelated
 */
class GameCenterDetailsLeaderboardSetReleasesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/leaderboardSetReleases";
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterLeaderboardSet
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterlive = null,
        /** @var array<int, string>|null */
        protected ?array $filtergameCenterLeaderboardSet = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
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
            'filter[live]' => $this->filterlive,
            'filter[gameCenterLeaderboardSet]' => $this->filtergameCenterLeaderboardSet,
            'fields[gameCenterLeaderboardSetReleases]' => $this->fieldsgameCenterLeaderboardSetReleases,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
