<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreVersionPhasedRelease_getToOneRelationship
 */
class AppStoreVersionsAppStoreVersionPhasedReleaseGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/relationships/appStoreVersionPhasedRelease";
    }

    public function __construct(
        protected string $id,
    ) {}
}
