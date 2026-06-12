<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardLocalizationV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardLocalizationsV2_createInstance
 */
class GameCenterLeaderboardLocalizationsV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/gameCenterLeaderboardLocalizations';
    }

    public function __construct(
        protected GameCenterLeaderboardLocalizationV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
