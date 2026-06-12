<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\TerritoryAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\TerritoryAvailabilityUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * territoryAvailabilities_updateInstance
 */
class TerritoryAvailabilitiesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/territoryAvailabilities/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected TerritoryAvailabilityUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
