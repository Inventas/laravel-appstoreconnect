<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewDetails_getCollection
 */
class BetaAppReviewDetailsGetCollection extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/v1/betaAppReviewDetails';
    }

    /**
     * @param  array<int, string>  $filterapp
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        /** @var array<int, string> */
        protected array $filterapp,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
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
            'filter[app]' => $this->filterapp,
            'fields[betaAppReviewDetails]' => $this->fieldsbetaAppReviewDetails,
            'fields[apps]' => $this->fieldsapps,
            'limit' => $this->limit,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
