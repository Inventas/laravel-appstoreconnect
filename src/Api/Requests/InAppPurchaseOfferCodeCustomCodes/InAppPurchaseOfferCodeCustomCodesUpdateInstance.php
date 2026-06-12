<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodeCustomCodes;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeCustomCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchaseOfferCodeCustomCodes_updateInstance
 */
class InAppPurchaseOfferCodeCustomCodesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseOfferCodeCustomCodes/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected InAppPurchaseOfferCodeCustomCodeUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
