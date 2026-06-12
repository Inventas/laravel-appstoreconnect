<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * subscriptions_images_getToManyRelated
 */
class SubscriptionsImagesGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/subscriptions/{$this->id}/images";
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
        protected ?int $limit = null,
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
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
