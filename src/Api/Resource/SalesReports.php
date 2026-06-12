<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\SalesReports\SalesReportsGetCollection;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SalesReports extends BaseResource
{
    /**
     * @param  array<int, string>  $filtervendorNumber
     * @param  array<int, string>  $filterreportType
     * @param  array<int, string>  $filterreportSubType
     * @param  array<int, string>  $filterfrequency
     * @param  array<int, string>|null  $filterreportDate
     * @param  array<int, string>|null  $filterversion
     */
    public function salesReportsGetCollection(
        array $filtervendorNumber,
        array $filterreportType,
        array $filterreportSubType,
        array $filterfrequency,
        ?array $filterreportDate = null,
        ?array $filterversion = null,
    ): Response {
        return $this->connector->send(new SalesReportsGetCollection($filtervendorNumber, $filterreportType, $filterreportSubType, $filterfrequency, $filterreportDate, $filterversion));
    }
}
