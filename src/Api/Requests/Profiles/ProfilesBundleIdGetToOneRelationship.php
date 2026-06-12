<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Profiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * profiles_bundleId_getToOneRelationship
 */
class ProfilesBundleIdGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/profiles/{$this->id}/relationships/bundleId";
    }

    public function __construct(
        protected string $id,
    ) {}
}
