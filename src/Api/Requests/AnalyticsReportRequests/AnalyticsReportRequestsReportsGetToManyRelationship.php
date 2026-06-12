<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportRequests_reports_getToManyRelationship
 */
class AnalyticsReportRequestsReportsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportRequests/{$this->id}/relationships/reports";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
