<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\EndUserLicenseAgreements;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * endUserLicenseAgreements_getInstance
 */
class EndUserLicenseAgreementsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/endUserLicenseAgreements/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsendUserLicenseAgreements
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsendUserLicenseAgreements = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitterritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[endUserLicenseAgreements]' => $this->fieldsendUserLicenseAgreements,
            'fields[apps]' => $this->fieldsapps,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
            'limit[territories]' => $this->limitterritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
