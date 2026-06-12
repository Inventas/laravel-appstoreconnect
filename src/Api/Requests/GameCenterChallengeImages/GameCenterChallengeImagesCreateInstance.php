<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeImageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallengeImages_createInstance
 */
class GameCenterChallengeImagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterChallengeImages';
    }

    public function __construct(
        protected GameCenterChallengeImageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
