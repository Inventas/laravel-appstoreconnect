<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_betaLicenseAgreement_getToOneRelated
 */
class AppsBetaLicenseAgreementGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/betaLicenseAgreement";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaLicenseAgreements = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaLicenseAgreements]' => $this->fieldsbetaLicenseAgreements], static fn (mixed $value): bool => $value !== null);
    }
}
