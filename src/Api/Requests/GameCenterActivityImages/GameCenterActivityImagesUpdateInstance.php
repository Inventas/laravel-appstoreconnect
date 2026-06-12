<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivityImages_updateInstance
 */
class GameCenterActivityImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterActivityImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
