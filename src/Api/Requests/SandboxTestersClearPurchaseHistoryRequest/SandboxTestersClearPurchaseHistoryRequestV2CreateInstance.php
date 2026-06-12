<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SandboxTestersClearPurchaseHistoryRequest;

use Inventas\AppStoreConnectKit\Api\Dto\SandboxTestersClearPurchaseHistoryRequestV2createRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * sandboxTestersClearPurchaseHistoryRequestV2_createInstance
 */
class SandboxTestersClearPurchaseHistoryRequestV2CreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v2/sandboxTestersClearPurchaseHistoryRequest';
    }

    public function __construct(
        protected SandboxTestersClearPurchaseHistoryRequestV2createRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
