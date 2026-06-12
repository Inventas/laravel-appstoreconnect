<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments;

use Inventas\AppStoreConnectKit\Api\Dto\AppStoreReviewAttachmentCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appStoreReviewAttachments_createInstance
 */
class AppStoreReviewAttachmentsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/appStoreReviewAttachments';
    }

    public function __construct(
        protected AppStoreReviewAttachmentCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
