<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Devices;

use Inventas\AppStoreConnectKit\Api\Dto\DeviceUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * devices_updateInstance
 */
class DevicesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/devices/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected DeviceUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
