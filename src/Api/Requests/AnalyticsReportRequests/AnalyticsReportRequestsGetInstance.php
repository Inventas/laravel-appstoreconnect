<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportRequests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportRequests_getInstance
 */
class AnalyticsReportRequestsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportRequests/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportRequests
     * @param  array<int, string>|null  $fieldsanalyticsReports
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReportRequests = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReports = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitreports = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[analyticsReportRequests]' => $this->fieldsanalyticsReportRequests,
            'fields[analyticsReports]' => $this->fieldsanalyticsReports,
            'include' => $this->include,
            'limit[reports]' => $this->limitreports,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
