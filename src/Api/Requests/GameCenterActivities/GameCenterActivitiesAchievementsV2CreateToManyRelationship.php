<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityAchievementsV2linkagesRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivities_achievementsV2_createToManyRelationship
 */
class GameCenterActivitiesAchievementsV2CreateToManyRelationship extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivities/{$this->id}/relationships/achievementsV2";
    }

    public function __construct(
        protected string $id,
        protected GameCenterActivityAchievementsV2linkagesRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
