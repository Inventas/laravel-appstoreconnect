<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Inventas\AppStoreConnectKit\Api\Dto\BundleIdUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * bundleIds_updateInstance
 */
class BundleIdsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BundleIdUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
