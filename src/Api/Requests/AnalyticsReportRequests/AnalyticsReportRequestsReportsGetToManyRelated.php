<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportRequests_reports_getToManyRelated
 */
class AnalyticsReportRequestsReportsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportRequests/{$this->id}/reports";
    }

    /**
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filtercategory
     * @param  array<int, string>|null  $fieldsanalyticsReports
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filtername = null,
        /** @var array<int, string>|null */
        protected ?array $filtercategory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReports = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[name]' => $this->filtername,
            'filter[category]' => $this->filtercategory,
            'fields[analyticsReports]' => $this->fieldsanalyticsReports,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
