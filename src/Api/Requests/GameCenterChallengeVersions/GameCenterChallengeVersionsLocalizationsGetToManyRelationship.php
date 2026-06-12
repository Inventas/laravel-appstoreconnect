<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeVersions_localizations_getToManyRelationship
 */
class GameCenterChallengeVersionsLocalizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeVersions/{$this->id}/relationships/localizations";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
