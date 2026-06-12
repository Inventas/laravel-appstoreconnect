<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchaseImages_getInstance
 */
class InAppPurchaseImagesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/inAppPurchaseImages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseImages
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseImages = null,
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
            'fields[inAppPurchaseImages]' => $this->fieldsinAppPurchaseImages,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
