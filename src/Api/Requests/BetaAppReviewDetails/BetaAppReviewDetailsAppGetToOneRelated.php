<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewDetails_app_getToOneRelated
 */
class BetaAppReviewDetailsAppGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppReviewDetails/{$this->id}/app";
    }

    /**
     * @param  array<int, string>|null  $fieldsapps
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[apps]' => $this->fieldsapps], static fn (mixed $value): bool => $value !== null);
    }
}
