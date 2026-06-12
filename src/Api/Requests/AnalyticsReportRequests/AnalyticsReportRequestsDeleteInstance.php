<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportRequests_deleteInstance
 */
class AnalyticsReportRequestsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportRequests/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
