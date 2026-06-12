<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRuleSets_rules_getToManyRelated
 */
class GameCenterMatchmakingRuleSetsRulesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRuleSets/{$this->id}/rules";
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterMatchmakingRules
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsgameCenterMatchmakingRules = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[gameCenterMatchmakingRules]' => $this->fieldsgameCenterMatchmakingRules, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
