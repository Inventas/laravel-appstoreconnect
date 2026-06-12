<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissionItems;

use Inventas\AppStoreConnectKit\Api\Dto\ReviewSubmissionItemUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * reviewSubmissionItems_updateInstance
 */
class ReviewSubmissionItemsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/reviewSubmissionItems/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected ReviewSubmissionItemUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
