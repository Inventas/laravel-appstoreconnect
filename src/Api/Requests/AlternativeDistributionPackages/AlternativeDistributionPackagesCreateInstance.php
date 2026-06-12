<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages;

use Inventas\AppStoreConnectKit\Api\Dto\AlternativeDistributionPackageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * alternativeDistributionPackages_createInstance
 */
class AlternativeDistributionPackagesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/alternativeDistributionPackages';
    }

    public function __construct(
        protected AlternativeDistributionPackageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
