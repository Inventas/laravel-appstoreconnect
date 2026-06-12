<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * inAppPurchasesV2_appStoreReviewScreenshot_getToOneRelated
 */
class InAppPurchasesV2AppStoreReviewScreenshotGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v2/inAppPurchases/{$this->id}/appStoreReviewScreenshot";
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsinAppPurchaseAppStoreReviewScreenshots = null,
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
            'fields[inAppPurchaseAppStoreReviewScreenshots]' => $this->fieldsinAppPurchaseAppStoreReviewScreenshots,
            'fields[inAppPurchases]' => $this->fieldsinAppPurchases,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
