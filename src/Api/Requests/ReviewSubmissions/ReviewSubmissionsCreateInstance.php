<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * reviewSubmissions_createInstance
 */
class ReviewSubmissionsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/reviewSubmissions';
    }

    public function __construct(
        protected ReviewSubmissionCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
