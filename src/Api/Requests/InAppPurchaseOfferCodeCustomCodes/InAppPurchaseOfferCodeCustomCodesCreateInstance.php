<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeCustomCodes;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeCustomCodeCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseOfferCodeCustomCodes_createInstance
 */
class InAppPurchaseOfferCodeCustomCodesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/inAppPurchaseOfferCodeCustomCodes';
    }

    public function __construct(
        protected InAppPurchaseOfferCodeCustomCodeCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
