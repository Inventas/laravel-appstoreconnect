<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_promotedPurchase_getToOneRelated
 */
class InAppPurchasesV2PromotedPurchaseGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/promotedPurchase";
    }

    /**
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldspromotedPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchases = null,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptions = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[promotedPurchases]' => $this->fieldspromotedPurchases,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
