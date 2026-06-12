<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_bundleIdCapabilities_getToManyRelated
 */
class BundleIdsBundleIdCapabilitiesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}/bundleIdCapabilities";
    }

    /**
     * @param  array<int, string>|null  $fieldsbundleIdCapabilities
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIdCapabilities = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[bundleIdCapabilities]' => $this->fieldsbundleIdCapabilities, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
