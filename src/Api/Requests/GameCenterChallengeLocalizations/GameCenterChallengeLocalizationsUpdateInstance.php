<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterChallengeLocalizations_updateInstance
 */
class GameCenterChallengeLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterChallengeLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
