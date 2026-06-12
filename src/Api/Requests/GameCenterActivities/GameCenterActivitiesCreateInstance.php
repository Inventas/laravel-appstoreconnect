<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivities_createInstance
 */
class GameCenterActivitiesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterActivities';
    }

    public function __construct(
        protected GameCenterActivityCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
