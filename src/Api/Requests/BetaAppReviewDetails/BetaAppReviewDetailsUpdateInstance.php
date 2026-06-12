<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppReviewDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaAppReviewDetails_updateInstance
 */
class BetaAppReviewDetailsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppReviewDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BetaAppReviewDetailUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
