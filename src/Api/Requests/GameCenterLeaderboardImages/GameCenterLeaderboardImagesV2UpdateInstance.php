<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardImageV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardImagesV2_updateInstance
 */
class GameCenterLeaderboardImagesV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardImages/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardImageV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
