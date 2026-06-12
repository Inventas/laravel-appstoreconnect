<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_endUserLicenseAgreement_getToOneRelated
 */
class AppsEndUserLicenseAgreementGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/endUserLicenseAgreement";
    }

    /**
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsendUserLicenseAgreements = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[endUserLicenseAgreements]' => $this->fieldsendUserLicenseAgreements], static fn (mixed $value): bool => $value !== null);
    }
}
