<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_betaTesterUsages_getMetrics
 */
class AppsBetaTesterUsagesGetMetrics extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/metrics/betaTesterUsages";
    }

    /**
     * @param  array<int, string>|null  $groupBy
     */
    public function __construct(
        protected string $id,
        protected ?string $period = null,
        /** @var array<int, string>|null */
        protected ?array $groupBy = null,
        protected ?string $filterbetaTesters = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'period' => $this->period,
            'groupBy' => $this->groupBy,
            'filter[betaTesters]' => $this->filterbetaTesters,
            'limit' => $this->limit,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
