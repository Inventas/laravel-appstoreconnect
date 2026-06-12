<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementV2activityLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementsV2_activity_updateToOneRelationship
 */
class GameCenterAchievementsV2ActivityUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievements/{$this->id}/relationships/activity";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAchievementV2activityLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
