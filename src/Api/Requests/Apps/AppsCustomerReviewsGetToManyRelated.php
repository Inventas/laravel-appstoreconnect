<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_customerReviews_getToManyRelated
 */
class AppsCustomerReviewsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/customerReviews";
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filterrating
     * @param  array<int, string>|null  $filterreviewTerritory
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $filterrating = null,
        /** @var array<int, string>|null */
        protected ?array $filterreviewTerritory = null,
        protected ?bool $existspublishedResponse = null,
        /** @var array<int, string>|null */
        protected ?array $sort = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviews = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviewResponses = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
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
            'filter[territory]' => $this->filterterritory,
            'filter[rating]' => $this->filterrating,
            'filter[reviewTerritory]' => $this->filterreviewTerritory,
            'exists[publishedResponse]' => $this->existspublishedResponse,
            'sort' => $this->sort,
            'fields[customerReviews]' => $this->fieldscustomerReviews,
            'fields[customerReviewResponses]' => $this->fieldscustomerReviewResponses,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
