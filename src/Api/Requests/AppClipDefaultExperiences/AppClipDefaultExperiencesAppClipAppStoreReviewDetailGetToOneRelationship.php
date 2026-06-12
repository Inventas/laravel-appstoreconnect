<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperiences_appClipAppStoreReviewDetail_getToOneRelationship
 */
class AppClipDefaultExperiencesAppClipAppStoreReviewDetailGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperiences/{$this->id}/relationships/appClipAppStoreReviewDetail";
    }

    public function __construct(
        protected string $id,
    ) {}
}
