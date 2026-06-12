<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\ReviewSubmissionItems;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * reviewSubmissionItems_deleteInstance
 */
class ReviewSubmissionItemsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/reviewSubmissionItems/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
