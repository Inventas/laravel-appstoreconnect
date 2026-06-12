<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIdCapabilities;

use Inventas\AppStoreConnectKit\Api\Dto\BundleIdCapabilityCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * bundleIdCapabilities_createInstance
 */
class BundleIdCapabilitiesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/bundleIdCapabilities';
    }

    public function __construct(
        protected BundleIdCapabilityCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
