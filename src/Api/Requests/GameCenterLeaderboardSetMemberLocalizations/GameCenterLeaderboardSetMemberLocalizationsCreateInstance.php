<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetMemberLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardSetMemberLocalizations_createInstance
 */
class GameCenterLeaderboardSetMemberLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterLeaderboardSetMemberLocalizations';
    }

    public function __construct(
        protected GameCenterLeaderboardSetMemberLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
