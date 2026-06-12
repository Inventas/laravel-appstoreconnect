<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_analyticsReportRequests_getToManyRelated
 */
class AppsAnalyticsReportRequestsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/analyticsReportRequests";
    }

    /**
     * @param  array<int, string>|null  $filteraccessType
     * @param  array<int, string>|null  $fieldsanalyticsReportRequests
     * @param  array<int, string>|null  $fieldsanalyticsReports
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filteraccessType = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReportRequests = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReports = null,
        protected ?int $limit = null,
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
            'filter[accessType]' => $this->filteraccessType,
            'fields[analyticsReportRequests]' => $this->fieldsanalyticsReportRequests,
            'fields[analyticsReports]' => $this->fieldsanalyticsReports,
            'limit' => $this->limit,
            'include' => $this->include,
            'limit[reports]' => $this->limitreports,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
