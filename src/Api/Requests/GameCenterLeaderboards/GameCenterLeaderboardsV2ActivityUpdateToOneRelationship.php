<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardV2activityLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterLeaderboardsV2_activity_updateToOneRelationship
 */
class GameCenterLeaderboardsV2ActivityUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboards/{$this->id}/relationships/activity";
    }

    public function __construct(
        protected string $id,
        protected GameCenterLeaderboardV2activityLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
