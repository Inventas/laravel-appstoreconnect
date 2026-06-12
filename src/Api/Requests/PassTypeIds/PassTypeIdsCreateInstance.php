<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds;

use Inventas\AppStoreConnectKit\Api\Dto\PassTypeIdCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * passTypeIds_createInstance
 */
class PassTypeIdsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/passTypeIds';
    }

    public function __construct(
        protected PassTypeIdCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
