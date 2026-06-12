<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetReleases_getInstance
 */
class GameCenterLeaderboardSetReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSetReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboardSets = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterLeaderboardSetReleases]' => $this->fieldsgameCenterLeaderboardSetReleases,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterLeaderboardSets]' => $this->fieldsgameCenterLeaderboardSets,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
