<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SubscriptionImages;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptionImages_getInstance
 */
class SubscriptionImagesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptionImages/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionImages
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldssubscriptionImages = null,
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
            'fields[subscriptionImages]' => $this->fieldssubscriptionImages,
            'fields[subscriptions]' => $this->fieldssubscriptions,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
