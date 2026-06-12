<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeVersionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallengeVersions_createInstance
 */
class GameCenterChallengeVersionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterChallengeVersions';
    }

    public function __construct(
        protected GameCenterChallengeVersionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
