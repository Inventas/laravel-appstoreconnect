<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterAppVersions;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAppVersionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterAppVersions_createInstance
 */
class GameCenterAppVersionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterAppVersions';
    }

    public function __construct(
        protected GameCenterAppVersionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
