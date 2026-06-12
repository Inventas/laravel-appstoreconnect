<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivities;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * gameCenterActivities_updateInstance
 */
class GameCenterActivitiesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterActivities/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected GameCenterActivityUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
