<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackageVersions_deltas_getToManyRelated
 */
class AlternativeDistributionPackageVersionsDeltasGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackageVersions/{$this->id}/deltas";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageDeltas = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[alternativeDistributionPackageDeltas]' => $this->fieldsalternativeDistributionPackageDeltas,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
