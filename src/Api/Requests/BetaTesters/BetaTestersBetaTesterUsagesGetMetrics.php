<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaTesters;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaTesters_betaTesterUsages_getMetrics
 */
class BetaTestersBetaTesterUsagesGetMetrics extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaTesters/{$this->id}/metrics/betaTesterUsages";
    }

    public function __construct(
        protected string $id,
        protected string $filterapps,
        protected ?string $period = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['filter[apps]' => $this->filterapps, 'period' => $this->period, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
