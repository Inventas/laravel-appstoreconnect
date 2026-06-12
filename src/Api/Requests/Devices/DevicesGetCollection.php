<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Devices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * devices_getCollection
 */
class DevicesGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/devices';
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterudid
     * @param  array<int, string>|null  $filterstatus
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsdevices
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filterudid = null,
        /** @var array<int, string>|null */
        protected ?array $filterstatus = null,
        /** @var array<int, string>|null */
        protected ?array $filterid = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsdevices = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[platform]' => $this->filterplatform,
            'filter[udid]' => $this->filterudid,
            'filter[status]' => $this->filterstatus,
            'filter[id]' => $this->filterid,
            'sort' => $this->sort,
            'fields[devices]' => $this->fieldsdevices,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
