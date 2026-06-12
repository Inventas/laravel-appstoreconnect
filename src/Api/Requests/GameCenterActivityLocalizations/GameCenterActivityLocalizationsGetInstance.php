<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterActivityLocalizations_getInstance
 */
class GameCenterActivityLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $fieldsgameCenterActivityImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterActivityImages = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterActivityLocalizations]' => $this->fieldsgameCenterActivityLocalizations,
            'fields[gameCenterActivityVersions]' => $this->fieldsgameCenterActivityVersions,
            'fields[gameCenterActivityImages]' => $this->fieldsgameCenterActivityImages,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
