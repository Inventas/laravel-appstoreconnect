<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_profiles_getToManyRelationship
 */
class BundleIdsProfilesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}/relationships/profiles";
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
