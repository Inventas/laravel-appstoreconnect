<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLeaderboardsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivities_leaderboardsV2_deleteToManyRelationship
 */
class GameCenterActivitiesLeaderboardsV2DeleteToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivities/{$this->id}/relationships/leaderboardsV2";
    }

    public function __construct(
        protected string $id,
        protected GameCenterActivityLeaderboardsV2linkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
