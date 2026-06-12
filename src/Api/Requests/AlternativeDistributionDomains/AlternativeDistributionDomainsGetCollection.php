<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionDomains;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionDomains_getCollection
 */
class AlternativeDistributionDomainsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/alternativeDistributionDomains';
    }

    /**
     * @param  array<int, string>|null  $fieldsalternativeDistributionDomains
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldsalternativeDistributionDomains = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[alternativeDistributionDomains]' => $this->fieldsalternativeDistributionDomains, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
