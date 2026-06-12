<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementGroupAchievementLinkageRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievements_groupAchievement_updateToOneRelationship
 */
class GameCenterAchievementsGroupAchievementUpdateToOneRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievements/{$this->id}/relationships/groupAchievement";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAchievementGroupAchievementLinkageRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
