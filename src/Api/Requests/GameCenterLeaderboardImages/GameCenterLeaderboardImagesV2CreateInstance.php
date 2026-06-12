<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardImagesV2_createInstance
 */
class GameCenterLeaderboardImagesV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/gameCenterLeaderboardImages';
    }

    public function __construct(
        protected GameCenterLeaderboardImageV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
