<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MerchantIds;

use Inventas\AppStoreConnectKit\Api\Dto\MerchantIdCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * merchantIds_createInstance
 */
class MerchantIdsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/merchantIds';
    }

    public function __construct(
        protected MerchantIdCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
