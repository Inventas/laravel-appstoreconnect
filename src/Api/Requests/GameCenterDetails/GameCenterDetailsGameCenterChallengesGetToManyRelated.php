<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterDetails_gameCenterChallenges_getToManyRelated
 */
class GameCenterDetailsGameCenterChallengesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterDetails/{$this->id}/gameCenterChallenges";
    }

    /**
     * @param  array<int, string>|null  $filterreferenceName
     * @param  array<int, string>|null  $filterarchived
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterGroups
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterreferenceName = null,
        /** @var array<int, string>|null */
        protected ?array $filterarchived = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallenges = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterGroups = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterLeaderboards = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitversions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[referenceName]' => $this->filterreferenceName,
            'filter[archived]' => $this->filterarchived,
            'filter[id]' => $this->filterid,
            'fields[gameCenterChallenges]' => $this->fieldsgameCenterChallenges,
            'fields[gameCenterDetails]' => $this->fieldsgameCenterDetails,
            'fields[gameCenterGroups]' => $this->fieldsgameCenterGroups,
            'fields[gameCenterChallengeVersions]' => $this->fieldsgameCenterChallengeVersions,
            'fields[gameCenterLeaderboards]' => $this->fieldsgameCenterLeaderboards,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
