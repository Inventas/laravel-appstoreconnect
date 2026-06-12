<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetLocalizations_updateInstance
 */
class GameCenterLeaderboardSetLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
