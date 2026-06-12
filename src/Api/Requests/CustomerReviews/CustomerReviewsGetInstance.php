<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CustomerReviews;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * customerReviews_getInstance
 */
class CustomerReviewsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/customerReviews/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviews = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviewResponses = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsterritories = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[customerReviews]' => $this->fieldscustomerReviews,
            'fields[customerReviewResponses]' => $this->fieldscustomerReviewResponses,
            'fields[territories]' => $this->fieldsterritories,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
