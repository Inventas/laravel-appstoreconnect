<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests;

use Inventas\AppStoreConnectKit\Api\Dto\AnalyticsReportRequestCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * analyticsReportRequests_createInstance
 */
class AnalyticsReportRequestsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/analyticsReportRequests';
    }

    public function __construct(
        protected AnalyticsReportRequestCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
