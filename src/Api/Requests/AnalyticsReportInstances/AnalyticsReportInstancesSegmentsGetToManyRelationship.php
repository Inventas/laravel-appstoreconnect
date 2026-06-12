<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportInstances;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportInstances_segments_getToManyRelationship
 */
class AnalyticsReportInstancesSegmentsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportInstances/{$this->id}/relationships/segments";
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
