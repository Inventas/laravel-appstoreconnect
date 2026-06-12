<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackageVariants;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackageVariants_getInstance
 */
class AlternativeDistributionPackageVariantsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackageVariants/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionPackageVariants
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionPackageVariants = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[alternativeDistributionPackageVariants]' => $this->fieldsalternativeDistributionPackageVariants], static fn (mixed $value): bool => $value !== null);
    }
}
