<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AlternativeDistributionPackages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * alternativeDistributionPackages_versions_getToManyRelationship
 */
class AlternativeDistributionPackagesVersionsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/alternativeDistributionPackages/{$this->id}/relationships/versions";
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
