<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackages_versions_getToManyRelated
 */
class AlternativeDistributionPackagesVersionsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackages/{$this->id}/versions";
    }

    /**
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterstate = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVariants = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageDeltas = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackages = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitvariants = null,
        protected ?int $limitdeltas = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[state]' => $this->filterstate,
            'fields[alternativeDistributionPackageVersions]' => $this->fieldsalternativeDistributionPackageVersions,
            'fields[alternativeDistributionPackageVariants]' => $this->fieldsalternativeDistributionPackageVariants,
            'fields[alternativeDistributionPackageDeltas]' => $this->fieldsalternativeDistributionPackageDeltas,
            'fields[alternativeDistributionPackages]' => $this->fieldsalternativeDistributionPackages,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[variants]' => $this->limitvariants,
            'limit[deltas]' => $this->limitdeltas,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
