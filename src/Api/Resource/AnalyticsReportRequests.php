<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AnalyticsReportRequestCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests\AnalyticsReportRequestsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests\AnalyticsReportRequestsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests\AnalyticsReportRequestsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests\AnalyticsReportRequestsReportsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests\AnalyticsReportRequestsReportsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AnalyticsReportRequests extends BaseResource
{
    public function analyticsReportRequestsCreateInstance(
        AnalyticsReportRequestCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AnalyticsReportRequestsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportRequests
     * @param  array<int, string>|null  $fieldsanalyticsReports
     * @param  array<int, string>|null  $include
     */
    public function analyticsReportRequestsGetInstance(
        string $id,
        ?array $fieldsanalyticsReportRequests = null,
        ?array $fieldsanalyticsReports = null,
        ?array $include = null,
        ?int $limitreports = null,
    ): Response {
        return $this->connector->send(new AnalyticsReportRequestsGetInstance($id, $fieldsanalyticsReportRequests, $fieldsanalyticsReports, $include, $limitreports));
    }

    public function analyticsReportRequestsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new AnalyticsReportRequestsDeleteInstance($id));
    }

    public function analyticsReportRequestsReportsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AnalyticsReportRequestsReportsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filtercategory
     * @param  array<int, string>|null  $fieldsanalyticsReports
     */
    public function analyticsReportRequestsReportsGetToManyRelated(
        string $id,
        ?array $filtername = null,
        ?array $filtercategory = null,
        ?array $fieldsanalyticsReports = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AnalyticsReportRequestsReportsGetToManyRelated($id, $filtername, $filtercategory, $fieldsanalyticsReports, $limit));
    }
}
