<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SalesReports;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * salesReports_getCollection
 */
class SalesReportsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/salesReports';
    }

    /**
     * @param  array<int, string>  $filtervendorNumber
     * @param  array<int, string>  $filterreportType
     * @param  array<int, string>  $filterreportSubType
     * @param  array<int, string>  $filterfrequency
     * @param  array<int, string>|null  $filterreportDate
     * @param  array<int, string>|null  $filterversion
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filtervendorNumber,
        /** @var array<int, string> */
        protected array $filterreportType,
        /** @var array<int, string> */
        protected array $filterreportSubType,
        /** @var array<int, string> */
        protected array $filterfrequency,
        /** @var array<int, string>|null */
        protected ?array $filterreportDate = null,
        /** @var array<int, string>|null */
        protected ?array $filterversion = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[vendorNumber]' => $this->filtervendorNumber,
            'filter[reportType]' => $this->filterreportType,
            'filter[reportSubType]' => $this->filterreportSubType,
            'filter[frequency]' => $this->filterfrequency,
            'filter[reportDate]' => $this->filterreportDate,
            'filter[version]' => $this->filterversion,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
