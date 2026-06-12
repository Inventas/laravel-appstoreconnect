<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityVersions_getInstance
 */
class GameCenterActivityVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivities
     * @param  array<int, string>|null  $fieldsgameCenterActivityLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityImages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersionReleases = null,
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
            'fields[gameCenterActivityVersions]' => $this->fieldsgameCenterActivityVersions,
            'fields[gameCenterActivities]' => $this->fieldsgameCenterActivities,
            'fields[gameCenterActivityLocalizations]' => $this->fieldsgameCenterActivityLocalizations,
            'fields[gameCenterActivityImages]' => $this->fieldsgameCenterActivityImages,
            'fields[gameCenterActivityVersionReleases]' => $this->fieldsgameCenterActivityVersionReleases,
            'include' => $this->include,
            'limit[localizations]' => $this->limitlocalizations,
            'limit[releases]' => $this->limitreleases,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
