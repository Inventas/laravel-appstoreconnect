<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\PassTypeIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * passTypeIds_getCollection
 */
class PassTypeIdsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/passTypeIds';
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filteridentifier
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldspassTypeIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filteridentifier = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldspassTypeIds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscertificates = null,
        protected ?int $limit = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitcertificates = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[identifier]' => $this->filteridentifier,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[passTypeIds]' => $this->fieldspassTypeIds,
            'fields[certificates]' => $this->fieldscertificates,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[certificates]' => $this->limitcertificates,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
