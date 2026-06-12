<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseLocalizations_getInstance
 */
class InAppPurchaseLocalizationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseLocalizations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseLocalizations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[inAppPurchaseLocalizations]' => $this->fieldsinAppPurchaseLocalizations,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
