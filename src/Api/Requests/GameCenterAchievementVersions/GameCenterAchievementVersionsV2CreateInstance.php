<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementVersionV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementVersionsV2_createInstance
 */
class GameCenterAchievementVersionsV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/gameCenterAchievementVersions';
    }

    public function __construct(
        protected GameCenterAchievementVersionV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
