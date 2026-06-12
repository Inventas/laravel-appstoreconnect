<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterMatchmakingRules_updateInstance
 */
class GameCenterMatchmakingRulesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRules/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterMatchmakingRuleUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
