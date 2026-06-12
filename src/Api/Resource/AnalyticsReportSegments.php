<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportSegments\AnalyticsReportSegmentsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AnalyticsReportSegments extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportSegments
     */
    public function analyticsReportSegmentsGetInstance(
        string $id,
        ?array $fieldsanalyticsReportSegments = null,
    ): Response {
        return $this->connector->send(new AnalyticsReportSegmentsGetInstance($id, $fieldsanalyticsReportSegments));
    }
}
