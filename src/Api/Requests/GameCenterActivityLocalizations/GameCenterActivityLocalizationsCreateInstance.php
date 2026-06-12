<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityLocalizations;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivityLocalizations_createInstance
 */
class GameCenterActivityLocalizationsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterActivityLocalizations';
    }

    public function __construct(
        protected GameCenterActivityLocalizationCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
