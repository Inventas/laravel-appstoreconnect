<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionPhasedReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionPhasedReleases_deleteInstance
 */
class AppStoreVersionPhasedReleasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionPhasedReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
