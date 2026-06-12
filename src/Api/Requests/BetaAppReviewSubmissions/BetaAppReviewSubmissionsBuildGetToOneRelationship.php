<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BetaAppReviewSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * betaAppReviewSubmissions_build_getToOneRelationship
 */
class BetaAppReviewSubmissionsBuildGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/betaAppReviewSubmissions/{$this->id}/relationships/build";
    }

    public function __construct(
        protected string $id,
    ) {}
}
