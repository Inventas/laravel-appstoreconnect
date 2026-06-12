<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreReviewAttachments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreReviewAttachments_deleteInstance
 */
class AppStoreReviewAttachmentsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreReviewAttachments/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
