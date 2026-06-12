<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\RoutingAppCoverages;

use Inventas\AppStoreConnectKit\Api\Dto\RoutingAppCoverageCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * routingAppCoverages_createInstance
 */
class RoutingAppCoveragesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/routingAppCoverages';
    }

    public function __construct(
        protected RoutingAppCoverageCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
