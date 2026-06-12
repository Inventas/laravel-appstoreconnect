<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivityLocalizations_updateInstance
 */
class GameCenterActivityLocalizationsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivityLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterActivityLocalizationUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
