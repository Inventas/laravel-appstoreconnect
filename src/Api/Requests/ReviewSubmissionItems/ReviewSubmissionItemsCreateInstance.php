<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissionItems;

use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionItemCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * reviewSubmissionItems_createInstance
 */
class ReviewSubmissionItemsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/reviewSubmissionItems';
    }

    public function __construct(
        protected ReviewSubmissionItemCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
