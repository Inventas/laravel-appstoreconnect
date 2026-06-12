<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetImagesV2_createInstance
 */
class GameCenterLeaderboardSetImagesV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/gameCenterLeaderboardSetImages';
    }

    public function __construct(
        protected GameCenterLeaderboardSetImageV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
