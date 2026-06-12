<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersionReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityVersionReleases_getInstance
 */
class GameCenterActivityVersionReleasesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityVersionReleases/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersionReleases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterActivityVersionReleases]' => $this->fieldsgameCenterActivityVersionReleases,
            'fields[gameCenterActivityVersions]' => $this->fieldsgameCenterActivityVersions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
