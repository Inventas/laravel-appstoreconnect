<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseContents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseContents_getInstance
 */
class InAppPurchaseContentsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseContents/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseContents
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseContents = null,
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
            'fields[inAppPurchaseContents]' => $this->fieldsinAppPurchaseContents,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
