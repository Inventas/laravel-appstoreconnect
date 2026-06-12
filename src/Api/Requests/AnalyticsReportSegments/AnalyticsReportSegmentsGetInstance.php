<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReportSegments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReportSegments_getInstance
 */
class AnalyticsReportSegmentsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReportSegments/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsanalyticsReportSegments
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReportSegments = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[analyticsReportSegments]' => $this->fieldsanalyticsReportSegments], static fn (mixed $value): bool => $value !== null);
    }
}
