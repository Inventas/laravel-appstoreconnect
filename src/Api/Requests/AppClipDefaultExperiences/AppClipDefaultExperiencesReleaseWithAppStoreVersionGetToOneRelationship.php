<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppClipDefaultExperiences;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appClipDefaultExperiences_releaseWithAppStoreVersion_getToOneRelationship
 */
class AppClipDefaultExperiencesReleaseWithAppStoreVersionGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appClipDefaultExperiences/{$this->id}/relationships/releaseWithAppStoreVersion";
    }

    public function __construct(
        protected string $id,
    ) {}
}
