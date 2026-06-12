<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * reviewSubmissions_items_getToManyRelationship
 */
class ReviewSubmissionsItemsGetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/reviewSubmissions/{$this->id}/relationships/items";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}
