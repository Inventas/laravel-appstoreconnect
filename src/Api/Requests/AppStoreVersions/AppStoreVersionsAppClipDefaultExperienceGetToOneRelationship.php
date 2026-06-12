<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appClipDefaultExperience_getToOneRelationship
 */
class AppStoreVersionsAppClipDefaultExperienceGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/relationships/appClipDefaultExperience";
    }

    public function __construct(
        protected string $id,
    ) {}
}
