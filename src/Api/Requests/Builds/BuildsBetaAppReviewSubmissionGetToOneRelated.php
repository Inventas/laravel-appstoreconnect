<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_betaAppReviewSubmission_getToOneRelated
 */
class BuildsBetaAppReviewSubmissionGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/betaAppReviewSubmission";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewSubmissions
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewSubmissions = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaAppReviewSubmissions]' => $this->fieldsbetaAppReviewSubmissions], static fn (mixed $value): bool => $value !== null);
    }
}
