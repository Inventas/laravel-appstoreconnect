<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAvailabilities;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseAvailabilities_getInstance
 */
class InAppPurchaseAvailabilitiesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseAvailabilities/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseAvailabilities = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitavailableTerritories = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[inAppPurchaseAvailabilities]' => $this->fieldsinAppPurchaseAvailabilities,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
            'limit[availableTerritories]' => $this->limitavailableTerritories,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
