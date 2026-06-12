<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingTeams;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingTeamUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterMatchmakingTeams_updateInstance
 */
class GameCenterMatchmakingTeamsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingTeams/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterMatchmakingTeamUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
