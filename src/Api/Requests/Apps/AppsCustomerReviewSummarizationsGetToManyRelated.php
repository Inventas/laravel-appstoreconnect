<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_customerReviewSummarizations_getToManyRelated
 */
class AppsCustomerReviewSummarizationsGetToManyRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/customerReviewSummarizations";
    }

    /**
     * @param  array<int, string>  $filterplatform
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldscustomerReviewSummarizations
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string> */
        protected array $filterplatform,
        /** @var array<int, string>|null */
        protected ?array $filterterritory = null,
        /** @var array<int, string>|null */
        protected ?array $fieldscustomerReviewSummarizations = null,
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
            'filter[platform]' => $this->filterplatform,
            'filter[territory]' => $this->filterterritory,
            'fields[customerReviewSummarizations]' => $this->fieldscustomerReviewSummarizations,
            'fields[territories]' => $this->fieldsterritories,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
