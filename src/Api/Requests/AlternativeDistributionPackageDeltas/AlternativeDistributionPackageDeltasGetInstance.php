<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageDeltas;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackageDeltas_getInstance
 */
class AlternativeDistributionPackageDeltasGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackageDeltas/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageDeltas
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageDeltas = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[alternativeDistributionPackageDeltas]' => $this->fieldsalternativeDistributionPackageDeltas], static fn (mixed $value): bool => $value !== null);
    }
}
