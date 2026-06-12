<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterGroups;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterGroupCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterGroups_createInstance
 */
class GameCenterGroupsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterGroups';
    }

    public function __construct(
        protected GameCenterGroupCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
