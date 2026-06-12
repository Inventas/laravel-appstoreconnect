<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardLocalizationV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardLocalizationsV2_updateInstance
 */
class GameCenterLeaderboardLocalizationsV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardLocalizationV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
