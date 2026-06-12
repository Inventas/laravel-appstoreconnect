<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements;

use Inventas\AppStoreConnectKit\Api\Dto\BetaLicenseAgreementUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaLicenseAgreements_updateInstance
 */
class BetaLicenseAgreementsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/betaLicenseAgreements/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BetaLicenseAgreementUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
