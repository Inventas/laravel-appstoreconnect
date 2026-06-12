<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds;

use Inventas\AppStoreConnectKit\Api\Dto\PassTypeIdUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * passTypeIds_updateInstance
 */
class PassTypeIdsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/passTypeIds/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected PassTypeIdUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
