<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\WinBackOffers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * winBackOffers_getInstance
 */
class WinBackOffersGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/winBackOffers/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldswinBackOffers
     * @param  array<int, string>|null  $fieldswinBackOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldswinBackOffers = null,
        /** @var array<int, string>|null */
        protected ?array $fieldswinBackOfferPrices = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitprices = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[winBackOffers]' => $this->fieldswinBackOffers,
            'fields[winBackOfferPrices]' => $this->fieldswinBackOfferPrices,
            'include' => $this->include,
            'limit[prices]' => $this->limitprices,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
