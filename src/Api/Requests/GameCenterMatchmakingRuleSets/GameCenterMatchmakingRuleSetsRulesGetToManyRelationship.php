<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRuleSets_rules_getToManyRelationship
 */
class GameCenterMatchmakingRuleSetsRulesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRuleSets/{$this->id}/relationships/rules";
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
