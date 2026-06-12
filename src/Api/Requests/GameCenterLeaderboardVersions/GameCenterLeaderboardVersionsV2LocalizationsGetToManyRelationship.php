<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardVersionsV2_localizations_getToManyRelationship
 */
class GameCenterLeaderboardVersionsV2LocalizationsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardVersions/{$this->id}/relationships/localizations";
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
