<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallengeImages_updateInstance
 */
class GameCenterChallengeImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterChallengeImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
