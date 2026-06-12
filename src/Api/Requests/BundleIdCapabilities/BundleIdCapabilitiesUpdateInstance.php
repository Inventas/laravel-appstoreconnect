<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIdCapabilities;

use Inventas\AppStoreConnectKit\Api\Dto\BundleIdCapabilityUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * bundleIdCapabilities_updateInstance
 */
class BundleIdCapabilitiesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIdCapabilities/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BundleIdCapabilityUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
