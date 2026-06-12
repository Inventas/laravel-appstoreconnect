<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MerchantIds;

use Inventas\AppStoreConnectKit\Api\Dto\MerchantIdUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * merchantIds_updateInstance
 */
class MerchantIdsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/merchantIds/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected MerchantIdUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
