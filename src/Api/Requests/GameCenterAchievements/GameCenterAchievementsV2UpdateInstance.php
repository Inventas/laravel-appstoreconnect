<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementsV2_updateInstance
 */
class GameCenterAchievementsV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterAchievements/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAchievementV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
