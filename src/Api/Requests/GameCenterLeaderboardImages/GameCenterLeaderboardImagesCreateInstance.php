<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardImages_createInstance
 */
class GameCenterLeaderboardImagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterLeaderboardImages';
    }

    public function __construct(
        protected GameCenterLeaderboardImageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
