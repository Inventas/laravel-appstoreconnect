<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppPreviews;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appPreviews_deleteInstance
 */
class AppPreviewsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/appPreviews/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
