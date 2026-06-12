<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\FinanceReports;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * financeReports_getCollection
 */
class FinanceReportsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/financeReports';
    }

    /**
     * @param  array<int, string>  $filtervendorNumber
     * @param  array<int, string>  $filterreportType
     * @param  array<int, string>  $filterregionCode
     * @param  array<int, string>  $filterreportDate
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filtervendorNumber,
        /** @var array<int, string> */
        protected array $filterreportType,
        /** @var array<int, string> */
        protected array $filterregionCode,
        /** @var array<int, string> */
        protected array $filterreportDate,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return [
            'filter[vendorNumber]' => $this->filtervendorNumber,
            'filter[reportType]' => $this->filterreportType,
            'filter[regionCode]' => $this->filterregionCode,
            'filter[reportDate]' => $this->filterreportDate,
        ];
    }
}
