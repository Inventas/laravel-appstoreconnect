<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSets_gameCenterLeaderboards_getToManyRelationship
 */
class GameCenterLeaderboardSetsGameCenterLeaderboardsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSets/{$this->id}/relationships/gameCenterLeaderboards";
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
