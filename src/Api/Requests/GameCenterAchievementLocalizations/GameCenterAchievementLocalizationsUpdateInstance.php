<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAchievementLocalizations_updateInstance
 */
class GameCenterAchievementLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterAchievementLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterAchievementLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
