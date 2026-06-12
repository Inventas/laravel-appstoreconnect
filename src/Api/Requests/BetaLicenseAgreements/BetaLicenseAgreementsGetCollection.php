<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaLicenseAgreements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaLicenseAgreements_getCollection
 */
class BetaLicenseAgreementsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaLicenseAgreements';
    }

    /**
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $fieldsbetaLicenseAgreements
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterapp = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaLicenseAgreements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[app]' => $this->filterapp,
            'fields[betaLicenseAgreements]' => $this->fieldsbetaLicenseAgreements,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
