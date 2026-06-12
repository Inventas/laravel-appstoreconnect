<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases;

use Inventas\AppStoreConnectKit\Api\Dto\PromotedPurchaseCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * promotedPurchases_createInstance
 */
class PromotedPurchasesCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/promotedPurchases';
    }

    public function __construct(
        protected PromotedPurchaseCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
