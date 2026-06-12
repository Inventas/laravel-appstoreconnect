<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievements;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievements_createInstance
 */
class GameCenterAchievementsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterAchievements';
    }

    public function __construct(
        protected GameCenterAchievementCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
