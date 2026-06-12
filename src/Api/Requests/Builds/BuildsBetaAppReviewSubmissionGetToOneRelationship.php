<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_betaAppReviewSubmission_getToOneRelationship
 */
class BuildsBetaAppReviewSubmissionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/relationships/betaAppReviewSubmission";
    }

    public function __construct(
        protected string $id,
    ) {}
}
