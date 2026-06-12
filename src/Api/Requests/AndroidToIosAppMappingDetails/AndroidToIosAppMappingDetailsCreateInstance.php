<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails;

use Inventas\AppStoreConnectKit\Api\Dto\AndroidToIosAppMappingDetailCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * androidToIosAppMappingDetails_createInstance
 */
class AndroidToIosAppMappingDetailsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/androidToIosAppMappingDetails';
    }

    public function __construct(
        protected AndroidToIosAppMappingDetailCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
