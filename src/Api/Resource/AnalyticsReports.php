<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReports\AnalyticsReportsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReports\AnalyticsReportsInstancesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReports\AnalyticsReportsInstancesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AnalyticsReports extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsanalyticsReports
     */
    public function analyticsReportsGetInstance(string $id, ?array $fieldsanalyticsReports = null): Response
    {
        return $this->connector->send(new AnalyticsReportsGetInstance($id, $fieldsanalyticsReports));
    }

    public function analyticsReportsInstancesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AnalyticsReportsInstancesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filtergranularity
     * @param  array<int, string>|null  $filterprocessingDate
     * @param  array<int, string>|null  $fieldsanalyticsReportInstances
     */
    public function analyticsReportsInstancesGetToManyRelated(
        string $id,
        ?array $filtergranularity = null,
        ?array $filterprocessingDate = null,
        ?array $fieldsanalyticsReportInstances = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AnalyticsReportsInstancesGetToManyRelated($id, $filtergranularity, $filterprocessingDate, $fieldsanalyticsReportInstances, $limit));
    }
}
