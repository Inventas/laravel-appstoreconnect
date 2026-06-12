<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaLicenseAgreements_getInstance
 */
class BetaLicenseAgreementsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaLicenseAgreements/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaLicenseAgreements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaLicenseAgreements]' => $this->fieldsbetaLicenseAgreements,
            'fields[apps]' => $this->fieldsapps,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
