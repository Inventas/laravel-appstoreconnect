<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingTeams;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingTeamCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterMatchmakingTeams_createInstance
 */
class GameCenterMatchmakingTeamsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterMatchmakingTeams';
    }

    public function __construct(
        protected GameCenterMatchmakingTeamCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
