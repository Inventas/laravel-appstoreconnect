<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CustomerReviewResponses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * customerReviewResponses_getInstance
 */
class CustomerReviewResponsesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/customerReviewResponses/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldscustomerReviewResponses
     * @param  array<int, string>|null  $fieldscustomerReviews
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviewResponses = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviews = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[customerReviewResponses]' => $this->fieldscustomerReviewResponses,
            'fields[customerReviews]' => $this->fieldscustomerReviews,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
