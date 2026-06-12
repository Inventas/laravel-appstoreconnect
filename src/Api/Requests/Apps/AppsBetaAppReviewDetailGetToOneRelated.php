<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Apps;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * apps_betaAppReviewDetail_getToOneRelated
 */
class AppsBetaAppReviewDetailGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/apps/{$this->id}/betaAppReviewDetail";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewDetails = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[betaAppReviewDetails]' => $this->fieldsbetaAppReviewDetails], static fn (mixed $value): bool => $value !== null);
    }
}
