<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewAttachmentUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreReviewAttachments_updateInstance
 */
class AppStoreReviewAttachmentsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreReviewAttachments/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppStoreReviewAttachmentUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
