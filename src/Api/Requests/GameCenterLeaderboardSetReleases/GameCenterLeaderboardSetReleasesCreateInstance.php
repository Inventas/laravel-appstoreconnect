<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetReleases;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetReleases_createInstance
 */
class GameCenterLeaderboardSetReleasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterLeaderboardSetReleases';
    }

    public function __construct(
        protected GameCenterLeaderboardSetReleaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
