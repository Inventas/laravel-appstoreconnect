<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAvailabilities;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseAvailabilityCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseAvailabilities_createInstance
 */
class InAppPurchaseAvailabilitiesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseAvailabilities';
    }

    public function __construct(
        protected InAppPurchaseAvailabilityCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
