<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * marketplaceWebhooks_getCollection
 */
class MarketplaceWebhooksGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/marketplaceWebhooks';
    }

    /**
     * @param  array<int, string>|null  $fieldsmarketplaceWebhooks
     */
    public function __construct(
        /** @var array<int, string>|null */
        protected ?array $fieldsmarketplaceWebhooks = null,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[marketplaceWebhooks]' => $this->fieldsmarketplaceWebhooks, 'limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
