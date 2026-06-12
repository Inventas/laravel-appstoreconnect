<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackageVersions_variants_getToManyRelated
 */
class AlternativeDistributionPackageVersionsVariantsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackageVersions/{$this->id}/variants";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVariants = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[alternativeDistributionPackageVariants]' => $this->fieldsalternativeDistributionPackageVariants,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
