<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\EndAppAvailabilityPreOrders;

use Inventas\AppStoreConnectKit\Api\Dto\EndAppAvailabilityPreOrderCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * endAppAvailabilityPreOrders_createInstance
 */
class EndAppAvailabilityPreOrdersCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/endAppAvailabilityPreOrders';
    }

    public function __construct(
        protected EndAppAvailabilityPreOrderCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
