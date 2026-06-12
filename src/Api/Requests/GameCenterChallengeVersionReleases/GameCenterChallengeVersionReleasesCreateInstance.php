<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersionReleases;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeVersionReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallengeVersionReleases_createInstance
 */
class GameCenterChallengeVersionReleasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterChallengeVersionReleases';
    }

    public function __construct(
        protected GameCenterChallengeVersionReleaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
