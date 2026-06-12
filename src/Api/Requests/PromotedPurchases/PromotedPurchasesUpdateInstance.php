<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases;

use Inventas\AppStoreConnectKit\Api\Dto\PromotedPurchaseUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * promotedPurchases_updateInstance
 */
class PromotedPurchasesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/promotedPurchases/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected PromotedPurchaseUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
