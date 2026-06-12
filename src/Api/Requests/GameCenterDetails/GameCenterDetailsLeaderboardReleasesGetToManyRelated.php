<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_leaderboardReleases_getToManyRelated
 */
class GameCenterDetailsLeaderboardReleasesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/leaderboardReleases";
    }

    /**
     * @param  array<int, string>|null  $filterlive
     * @param  array<int, string>|null  $filtergameCenterLeaderboard
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterlive = null,
        /** @var array<int, string>|null */
        protected ?array $filtergameCenterLeaderboard = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
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
            'filter[gameCenterLeaderboard]' => $this->filtergameCenterLeaderboard,
            'fields[gameCenterLeaderboardReleases]' => $this->fieldsgameCenterLeaderboardReleases,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
