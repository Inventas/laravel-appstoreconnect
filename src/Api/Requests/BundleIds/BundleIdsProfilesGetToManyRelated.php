<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_profiles_getToManyRelated
 */
class BundleIdsProfilesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}/profiles";
    }

    /**
     * @param  array<int, string>|null  $fieldsprofiles
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsprofiles = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[profiles]' => $this->fieldsprofiles, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
