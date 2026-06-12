<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementImageUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementImages_updateInstance
 */
class GameCenterAchievementImagesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAchievementImageUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
