<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallenges_versions_getToManyRelated
 */
class GameCenterChallengesVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallenges/{$this->id}/versions";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallenges
     * @param  array<int, string>|null  $fieldsgameCenterChallengeLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallenges = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersionReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeImages = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitlocalizations = null,
        protected ?int $limitreleases = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterChallengeVersions]' => $this->fieldsgameCenterChallengeVersions,
            'fields[gameCenterChallenges]' => $this->fieldsgameCenterChallenges,
            'fields[gameCenterChallengeLocalizations]' => $this->fieldsgameCenterChallengeLocalizations,
            'fields[gameCenterChallengeVersionReleases]' => $this->fieldsgameCenterChallengeVersionReleases,
            'fields[gameCenterChallengeImages]' => $this->fieldsgameCenterChallengeImages,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
            'limit[releases]' => $this->limitreleases,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
