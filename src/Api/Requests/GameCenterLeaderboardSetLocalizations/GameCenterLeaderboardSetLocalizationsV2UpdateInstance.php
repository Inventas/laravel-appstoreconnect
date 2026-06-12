<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetLocalizationV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetLocalizationsV2_updateInstance
 */
class GameCenterLeaderboardSetLocalizationsV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetLocalizationV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
