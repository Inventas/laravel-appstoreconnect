<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackageVersions_variants_getToManyRelationship
 */
class AlternativeDistributionPackageVersionsVariantsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackageVersions/{$this->id}/relationships/variants";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
