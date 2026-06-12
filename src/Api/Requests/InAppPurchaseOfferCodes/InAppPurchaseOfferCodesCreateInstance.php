<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseOfferCodes_createInstance
 */
class InAppPurchaseOfferCodesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseOfferCodes';
    }

    public function __construct(
        protected InAppPurchaseOfferCodeCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
