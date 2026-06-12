<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallenges_createInstance
 */
class GameCenterChallengesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterChallenges';
    }

    public function __construct(
        protected GameCenterChallengeCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
