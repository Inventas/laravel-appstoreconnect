<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBetaDetails_getCollection
 */
class BuildBetaDetailsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/buildBetaDetails';
    }

    /**
     * @param  array<int, string>|null  $filterbuild
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $fieldsbuildBetaDetails
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filterbuild = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuildBetaDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[build]' => $this->filterbuild,
            'filter[id]' => $this->filterid,
            'fields[buildBetaDetails]' => $this->fieldsbuildBetaDetails,
            'fields[builds]' => $this->fieldsbuilds,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
