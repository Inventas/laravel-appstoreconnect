<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewSubmissions_getInstance
 */
class BetaAppReviewSubmissionsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppReviewSubmissions/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewSubmissions = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaAppReviewSubmissions]' => $this->fieldsbetaAppReviewSubmissions,
            'fields[builds]' => $this->fieldsbuilds,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
