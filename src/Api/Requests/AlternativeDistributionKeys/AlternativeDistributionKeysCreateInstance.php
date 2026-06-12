<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionKeys;

use Inventas\AppStoreConnectKit\Api\Dto\AlternativeDistributionKeyCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * alternativeDistributionKeys_createInstance
 */
class AlternativeDistributionKeysCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/alternativeDistributionKeys';
    }

    public function __construct(
        protected AlternativeDistributionKeyCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
