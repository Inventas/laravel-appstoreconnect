<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_marketplaceSearchDetail_getToOneRelated
 */
class AppsMarketplaceSearchDetailGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/marketplaceSearchDetail";
    }

    /**
     * @param  array<int, string>|null  $fieldsmarketplaceSearchDetails
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsmarketplaceSearchDetails = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[marketplaceSearchDetails]' => $this->fieldsmarketplaceSearchDetails], static fn (mixed $value): bool => $value !== null);
    }
}
