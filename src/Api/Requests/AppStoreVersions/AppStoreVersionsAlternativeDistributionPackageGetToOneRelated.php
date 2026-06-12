<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_alternativeDistributionPackage_getToOneRelated
 */
class AppStoreVersionsAlternativeDistributionPackageGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/alternativeDistributionPackage";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackages = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitversions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[alternativeDistributionPackages]' => $this->fieldsalternativeDistributionPackages,
            'fields[alternativeDistributionPackageVersions]' => $this->fieldsalternativeDistributionPackageVersions,
            'include' => $this->include,
            'limit[versions]' => $this->limitversions,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
