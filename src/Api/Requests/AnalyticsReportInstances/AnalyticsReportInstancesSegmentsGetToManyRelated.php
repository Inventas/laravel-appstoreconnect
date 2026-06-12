<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportInstances;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportInstances_segments_getToManyRelated
 */
class AnalyticsReportInstancesSegmentsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportInstances/{$this->id}/segments";
    }

    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportSegments
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReportSegments = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[analyticsReportSegments]' => $this->fieldsanalyticsReportSegments, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
