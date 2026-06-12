<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchasesV2_createInstance
 */
class InAppPurchasesV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/inAppPurchases';
    }

    public function __construct(
        protected InAppPurchaseV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
