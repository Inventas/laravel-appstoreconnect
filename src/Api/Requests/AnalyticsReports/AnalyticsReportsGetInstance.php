<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AnalyticsReports;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * analyticsReports_getInstance
 */
class AnalyticsReportsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/analyticsReports/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsanalyticsReports
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsanalyticsReports = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[analyticsReports]' => $this->fieldsanalyticsReports], static fn (mixed $value): bool => $value !== null);
    }
}
