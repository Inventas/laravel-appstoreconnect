<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBundles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBundles_buildBundleFileSizes_getToManyRelated
 */
class BuildBundlesBuildBundleFileSizesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBundles/{$this->id}/buildBundleFileSizes";
    }

    /**
     * @param  array<int, string>|null  $fieldsbuildBundleFileSizes
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildBundleFileSizes = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[buildBundleFileSizes]' => $this->fieldsbuildBundleFileSizes, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
