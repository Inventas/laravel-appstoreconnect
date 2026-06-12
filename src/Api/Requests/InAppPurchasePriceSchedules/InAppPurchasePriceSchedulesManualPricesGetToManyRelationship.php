<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasePriceSchedules_manualPrices_getToManyRelationship
 */
class InAppPurchasePriceSchedulesManualPricesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchasePriceSchedules/{$this->id}/relationships/manualPrices";
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
