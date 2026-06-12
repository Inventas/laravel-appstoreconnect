<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements;

use Inventas\AppStoreConnectKit\Api\Dto\EndUserLicenseAgreementCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * endUserLicenseAgreements_createInstance
 */
class EndUserLicenseAgreementsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/endUserLicenseAgreements';
    }

    public function __construct(
        protected EndUserLicenseAgreementCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
