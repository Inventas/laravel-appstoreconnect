<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\BetaAppReviewSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * betaAppReviewSubmissions_createInstance
 */
class BetaAppReviewSubmissionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/betaAppReviewSubmissions';
    }

    public function __construct(
        protected BetaAppReviewSubmissionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
