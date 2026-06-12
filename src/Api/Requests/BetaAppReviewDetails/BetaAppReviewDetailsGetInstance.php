<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewDetails_getInstance
 */
class BetaAppReviewDetailsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppReviewDetails/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbetaAppReviewDetails
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbetaAppReviewDetails = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[betaAppReviewDetails]' => $this->fieldsbetaAppReviewDetails,
            'fields[apps]' => $this->fieldsapps,
            'include' => $this->include,
        ], static fn (mixed $value): bool => $value !== null);
    }
}
