<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MerchantIds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * merchantIds_getCollection
 */
class MerchantIdsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/merchantIds';
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filteridentifier
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsmerchantIds
     * @param  array<int, string>|null  $fieldscertificates
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filteridentifier = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsmerchantIds = null,
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
            'sort' => $this->sort,
            'fields[merchantIds]' => $this->fieldsmerchantIds,
            'fields[certificates]' => $this->fieldscertificates,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[certificates]' => $this->limitcertificates,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
