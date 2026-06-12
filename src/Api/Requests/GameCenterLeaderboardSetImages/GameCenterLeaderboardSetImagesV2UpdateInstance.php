<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetImageV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetImagesV2_updateInstance
 */
class GameCenterLeaderboardSetImagesV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetImageV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
