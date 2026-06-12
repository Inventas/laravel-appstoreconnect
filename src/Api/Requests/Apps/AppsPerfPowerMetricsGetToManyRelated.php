<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_perfPowerMetrics_getToManyRelated
 */
class AppsPerfPowerMetricsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/perfPowerMetrics";
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filtermetricType
     * @param  array<int, string>|null  $filterdeviceType
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterplatform = null,
        /** @var array<int, string>|null */
        protected ?array $filtermetricType = null,
        /** @var array<int, string>|null */
        protected ?array $filterdeviceType = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'filter[platform]' => $this->filterplatform,
            'filter[metricType]' => $this->filtermetricType,
            'filter[deviceType]' => $this->filterdeviceType,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
