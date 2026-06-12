<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSetTests;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingRuleSetTestCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterMatchmakingRuleSetTests_createInstance
 */
class GameCenterMatchmakingRuleSetTestsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterMatchmakingRuleSetTests';
    }

    public function __construct(
        protected GameCenterMatchmakingRuleSetTestCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
