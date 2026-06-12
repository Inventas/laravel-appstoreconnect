<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewSubmissions_getCollection
 */
class BetaAppReviewSubmissionsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaAppReviewSubmissions';
    }

    /**
     * @param  array<int, string>  $filterbuild
     * @param  array<int, string>|null  $filterbetaReviewState
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filterbuild,
        /** @var array<int, string>|null */
        protected ?array $filterbetaReviewState = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
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
            'filter[build]' => $this->filterbuild,
            'filter[betaReviewState]' => $this->filterbetaReviewState,
            'fields[betaAppReviewSubmissions]' => $this->fieldsbetaAppReviewSubmissions,
            'fields[builds]' => $this->fieldsbuilds,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
