<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetImages_updateInstance
 */
class GameCenterLeaderboardSetImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
