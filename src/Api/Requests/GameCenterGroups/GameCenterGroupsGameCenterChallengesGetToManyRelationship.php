<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterGroups_gameCenterChallenges_getToManyRelationship
 */
class GameCenterGroupsGameCenterChallengesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterGroups/{$this->id}/relationships/gameCenterChallenges";
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
