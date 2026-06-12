<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReports;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReports_instances_getToManyRelated
 */
class AnalyticsReportsInstancesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReports/{$this->id}/instances";
    }

    /**
     * @param  array<int, string>|null  $filtergranularity
     * @param  array<int, string>|null  $filterprocessingDate
     * @param  array<int, string>|null  $fieldsanalyticsReportInstances
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filtergranularity = null,
        /** @var array<int, string>|null */
        protected ?array $filterprocessingDate = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReportInstances = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[granularity]' => $this->filtergranularity,
            'filter[processingDate]' => $this->filterprocessingDate,
            'fields[analyticsReportInstances]' => $this->fieldsanalyticsReportInstances,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
