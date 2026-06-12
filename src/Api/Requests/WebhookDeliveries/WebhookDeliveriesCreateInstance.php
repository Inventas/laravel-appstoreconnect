<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WebhookDeliveries;

use Inventas\AppStoreConnectKit\Api\Dto\WebhookDeliveryCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * webhookDeliveries_createInstance
 */
class WebhookDeliveriesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/webhookDeliveries';
    }

    public function __construct(
        protected WebhookDeliveryCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
