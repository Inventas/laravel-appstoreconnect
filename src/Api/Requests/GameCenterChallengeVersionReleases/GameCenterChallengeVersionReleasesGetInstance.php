<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersionReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeVersionReleases_getInstance
 */
class GameCenterChallengeVersionReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeVersionReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersionReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterChallengeVersionReleases]' => $this->fieldsgameCenterChallengeVersionReleases,
            'fields[gameCenterChallengeVersions]' => $this->fieldsgameCenterChallengeVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
