<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportInstances\AnalyticsReportInstancesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportInstances\AnalyticsReportInstancesSegmentsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportInstances\AnalyticsReportInstancesSegmentsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AnalyticsReportInstances extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportInstances
     */
    public function analyticsReportInstancesGetInstance(
        string $id,
        ?array $fieldsanalyticsReportInstances = null,
    ): Response {
        return $this->connector->send(new AnalyticsReportInstancesGetInstance($id, $fieldsanalyticsReportInstances));
    }

    public function analyticsReportInstancesSegmentsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AnalyticsReportInstancesSegmentsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportSegments
     */
    public function analyticsReportInstancesSegmentsGetToManyRelated(
        string $id,
        ?array $fieldsanalyticsReportSegments = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AnalyticsReportInstancesSegmentsGetToManyRelated($id, $fieldsanalyticsReportSegments, $limit));
    }
}
