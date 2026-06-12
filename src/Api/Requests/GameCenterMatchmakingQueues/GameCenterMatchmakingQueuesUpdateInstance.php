<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterMatchmakingQueueUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterMatchmakingQueues_updateInstance
 */
class GameCenterMatchmakingQueuesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingQueues/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterMatchmakingQueueUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
