<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Certificates;

use Inventas\AppStoreConnectKit\Api\Dto\CertificateUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * certificates_updateInstance
 */
class CertificatesUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/certificates/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected CertificateUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
