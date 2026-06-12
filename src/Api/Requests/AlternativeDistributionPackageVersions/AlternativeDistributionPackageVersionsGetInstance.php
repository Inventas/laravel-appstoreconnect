<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackageVersions_getInstance
 */
class AlternativeDistributionPackageVersionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackageVersions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVersions
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackages
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVersions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVariants = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageDeltas = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackages = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitdeltas = null,
        protected ?int $limitvariants = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[alternativeDistributionPackageVersions]' => $this->fieldsalternativeDistributionPackageVersions,
            'fields[alternativeDistributionPackageVariants]' => $this->fieldsalternativeDistributionPackageVariants,
            'fields[alternativeDistributionPackageDeltas]' => $this->fieldsalternativeDistributionPackageDeltas,
            'fields[alternativeDistributionPackages]' => $this->fieldsalternativeDistributionPackages,
            'include' => $this->include,
            'limit[deltas]' => $this->limitdeltas,
            'limit[variants]' => $this->limitvariants,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
