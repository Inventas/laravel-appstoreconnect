<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersionSubmissions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersionSubmissions_deleteInstance
 */
class AppStoreVersionSubmissionsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersionSubmissions/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
