<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetMemberLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetMemberLocalizations_updateInstance
 */
class GameCenterLeaderboardSetMemberLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetMemberLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardSetMemberLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
