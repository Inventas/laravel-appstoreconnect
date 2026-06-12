<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AndroidToIosAppMappingDetails;

use Inventas\AppStoreConnectKit\Api\Dto\AndroidToIosAppMappingDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * androidToIosAppMappingDetails_updateInstance
 */
class AndroidToIosAppMappingDetailsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/androidToIosAppMappingDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AndroidToIosAppMappingDetailUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
