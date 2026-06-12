<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallenges_updateInstance
 */
class GameCenterChallengesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallenges/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterChallengeUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
