<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementImages;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementImageV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementImagesV2_createInstance
 */
class GameCenterAchievementImagesV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/gameCenterAchievementImages';
    }

    public function __construct(
        protected GameCenterAchievementImageV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
