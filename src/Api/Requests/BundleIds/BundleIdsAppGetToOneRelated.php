<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BundleIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * bundleIds_app_getToOneRelated
 */
class BundleIdsAppGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/bundleIds/{$this->id}/app";
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[apps]' => $this->fieldsapps], static fn (mixed $value): bool => $value !== null);
    }
}
