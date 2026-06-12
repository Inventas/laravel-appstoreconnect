<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissions;

use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * reviewSubmissions_updateInstance
 */
class ReviewSubmissionsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/reviewSubmissions/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected ReviewSubmissionUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
