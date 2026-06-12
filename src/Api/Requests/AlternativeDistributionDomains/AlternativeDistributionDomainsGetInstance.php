<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionDomains_getInstance
 */
class AlternativeDistributionDomainsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionDomains/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionDomains
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionDomains = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[alternativeDistributionDomains]' => $this->fieldsalternativeDistributionDomains], static fn (mixed $value): bool => $value !== null);
    }
}
