<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WebhookPings;

use Inventas\AppStoreConnectKit\Api\Dto\WebhookPingCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * webhookPings_createInstance
 */
class WebhookPingsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/webhookPings';
    }

    public function __construct(
        protected WebhookPingCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
