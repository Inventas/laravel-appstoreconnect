<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetVersionV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetVersionsV2_createInstance
 */
class GameCenterLeaderboardSetVersionsV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/gameCenterLeaderboardSetVersions';
    }

    public function __construct(
        protected GameCenterLeaderboardSetVersionV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
