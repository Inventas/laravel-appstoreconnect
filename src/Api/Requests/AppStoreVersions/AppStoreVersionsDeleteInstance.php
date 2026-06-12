<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_deleteInstance
 */
class AppStoreVersionsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
