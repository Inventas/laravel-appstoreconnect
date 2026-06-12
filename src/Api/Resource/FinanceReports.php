<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\FinanceReports\FinanceReportsGetCollection;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class FinanceReports extends BaseResource
{
    /**
     * @param  array<int, string>  $filtervendorNumber
     * @param  array<int, string>  $filterreportType
     * @param  array<int, string>  $filterregionCode
     * @param  array<int, string>  $filterreportDate
     */
    public function financeReportsGetCollection(
        array $filtervendorNumber,
        array $filterreportType,
        array $filterregionCode,
        array $filterreportDate,
    ): Response {
        return $this->connector->send(new FinanceReportsGetCollection($filtervendorNumber, $filterreportType, $filterregionCode, $filterreportDate));
    }
}
