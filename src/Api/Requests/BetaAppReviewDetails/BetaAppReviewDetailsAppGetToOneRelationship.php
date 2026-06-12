<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewDetails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewDetails_app_getToOneRelationship
 */
class BetaAppReviewDetailsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppReviewDetails/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}
