<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * winBackOffers_prices_getToManyRelationship
 */
class WinBackOffersPricesGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/winBackOffers/{$this->id}/relationships/prices";
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
