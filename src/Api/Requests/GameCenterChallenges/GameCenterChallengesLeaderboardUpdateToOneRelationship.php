<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeLeaderboardLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallenges_leaderboard_updateToOneRelationship
 */
class GameCenterChallengesLeaderboardUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallenges/{$this->id}/relationships/leaderboard";
    }

    public function __construct(
        protected string $id,
        protected GameCenterChallengeLeaderboardLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
