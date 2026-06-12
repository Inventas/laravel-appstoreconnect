<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_appStoreReviewScreenshot_getToOneRelated
 */
class SubscriptionsAppStoreReviewScreenshotGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/appStoreReviewScreenshot";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionAppStoreReviewScreenshots = null,
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
            'fields[subscriptionAppStoreReviewScreenshots]' => $this->fieldssubscriptionAppStoreReviewScreenshots,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
