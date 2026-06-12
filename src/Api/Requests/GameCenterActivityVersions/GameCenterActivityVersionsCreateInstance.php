<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityVersionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivityVersions_createInstance
 */
class GameCenterActivityVersionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterActivityVersions';
    }

    public function __construct(
        protected GameCenterActivityVersionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
