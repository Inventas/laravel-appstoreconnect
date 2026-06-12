<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeLocalizations_getInstance
 */
class GameCenterChallengeLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $fieldsgameCenterChallengeImages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterChallengeImages = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[gameCenterChallengeLocalizations]' => $this->fieldsgameCenterChallengeLocalizations,
            'fields[gameCenterChallengeVersions]' => $this->fieldsgameCenterChallengeVersions,
            'fields[gameCenterChallengeImages]' => $this->fieldsgameCenterChallengeImages,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
