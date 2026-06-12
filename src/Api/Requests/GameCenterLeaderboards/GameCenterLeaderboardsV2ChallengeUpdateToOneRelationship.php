<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardV2challengeLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardsV2_challenge_updateToOneRelationship
 */
class GameCenterLeaderboardsV2ChallengeUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboards/{$this->id}/relationships/challenge";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardV2challengeLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
