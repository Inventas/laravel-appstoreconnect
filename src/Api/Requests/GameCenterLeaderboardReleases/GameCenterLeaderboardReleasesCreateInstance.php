<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardReleases;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardReleases_createInstance
 */
class GameCenterLeaderboardReleasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterLeaderboardReleases';
    }

    public function __construct(
        protected GameCenterLeaderboardReleaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
