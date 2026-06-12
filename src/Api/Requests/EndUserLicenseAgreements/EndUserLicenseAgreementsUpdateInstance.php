<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements;

use Inventas\AppStoreConnectKit\Api\Dto\EndUserLicenseAgreementUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * endUserLicenseAgreements_updateInstance
 */
class EndUserLicenseAgreementsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/endUserLicenseAgreements/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected EndUserLicenseAgreementUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
