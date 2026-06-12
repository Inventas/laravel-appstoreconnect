<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingQueueCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterMatchmakingQueues_createInstance
 */
class GameCenterMatchmakingQueuesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/gameCenterMatchmakingQueues';
    }

    public function __construct(
        protected GameCenterMatchmakingQueueCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
