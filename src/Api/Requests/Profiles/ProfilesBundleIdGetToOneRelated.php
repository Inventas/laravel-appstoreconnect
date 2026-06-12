<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_bundleId_getToOneRelated
 */
class ProfilesBundleIdGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}/bundleId";
    }

    /**
     * @param  array<int, string>|null  $fieldsbundleIds
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbundleIds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[bundleIds]' => $this->fieldsbundleIds], static fn (mixed $value): bool => $value !== null);
    }
}
