<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPriceSchedules_manualPrices_getToManyRelationship
 */
class AppPriceSchedulesManualPricesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appPriceSchedules/{$this->id}/relationships/manualPrices";
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
