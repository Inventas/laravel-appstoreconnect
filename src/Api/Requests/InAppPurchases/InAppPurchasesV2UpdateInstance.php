<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * inAppPurchasesV2_updateInstance
 */
class InAppPurchasesV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected InAppPurchaseV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
