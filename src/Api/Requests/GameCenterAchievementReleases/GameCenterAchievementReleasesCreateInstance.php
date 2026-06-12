<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementReleases;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementReleases_createInstance
 */
class GameCenterAchievementReleasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterAchievementReleases';
    }

    public function __construct(
        protected GameCenterAchievementReleaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
